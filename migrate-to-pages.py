#!/usr/bin/env python3
"""
Park Community School - Page Migration Script
Moves subpages to /pages/ folder and updates all paths

USAGE:
  1. Place this script in your site root
  2. Run: python3 migrate-to-pages.py --dry-run    (preview changes)
  3. Run: python3 migrate-to-pages.py              (execute migration)

BACKUP: Always backup your site before running!
"""

import os
import re
import sys
import glob
from pathlib import Path

# Configuration
site_root = Path(__file__).parent
pages_dir = site_root / 'pages'
dry_run = '--dry-run' in sys.argv

# Files to EXCLUDE from moving (keep in root)
exclude_from_move = [
    'index.php',
    'health.php',        # Often a health check endpoint
    '404.php',           # Needs to stay in root for server config
]

# Track changes for report
changes = {
    'moved': [],
    'updated_includes': [],
    'updated_nav': [],
    'errors': [],
}

print()
print("╔════════════════════════════════════════════════════════════╗")
print("║   Park Community School - Page Migration Script            ║")
print("╠════════════════════════════════════════════════════════════╣")
if dry_run:
    print("║   MODE: DRY RUN (no changes will be made)                  ║")
else:
    print("║   MODE: LIVE (changes will be applied)                     ║")
print("╚════════════════════════════════════════════════════════════╝")
print()

# Step 1: Create /pages directory if it doesn't exist
print("Step 1: Checking /pages directory...")
if not pages_dir.exists():
    if not dry_run:
        pages_dir.mkdir(parents=True, exist_ok=True)
        print("  ✓ Created /pages directory")
    else:
        print("  → Would create /pages directory")
else:
    print("  ✓ /pages directory already exists")

# Step 2: Find all PHP files in root to move
print("\nStep 2: Identifying files to move...")
files_to_move = []
for php_file in site_root.glob('*.php'):
    filename = php_file.name
    if filename not in exclude_from_move:
        files_to_move.append(filename)
        print(f"  → {filename}")

print(f"  Found {len(files_to_move)} files to move")

# Step 3: Move files and update their include paths
print("\nStep 3: Moving files and updating include paths...")
for filename in files_to_move:
    source_path = site_root / filename
    dest_path = pages_dir / filename
    
    # Read file content
    content = source_path.read_text(encoding='utf-8', errors='ignore')
    original_content = content
    
    # Update include/require paths for partials
    content = re.sub(r"include\s*\(\s*['\"]partials/", "include('../partials/", content)
    content = re.sub(r"include\s*['\"]partials/", "include '../partials/", content)
    content = re.sub(r"require\s*\(\s*['\"]partials/", "require('../partials/", content)
    content = re.sub(r"require_once\s*\(\s*['\"]partials/", "require_once('../partials/", content)
    
    # Update include/require paths for includes folder
    content = re.sub(r"include\s*\(\s*['\"]includes/", "include('../includes/", content)
    content = re.sub(r"require\s*\(\s*['\"]includes/", "require('../includes/", content)
    content = re.sub(r"require_once\s*\(\s*['\"]includes/", "require_once('../includes/", content)
    
    # Update relative asset paths (not starting with / or http)
    # assets/... → ../assets/...
    content = re.sub(r'(href|src)=["\']assets/', r'\1="../assets/', content)
    
    # images/... → /images/... (make absolute, but only if not already absolute)
    content = re.sub(r'(href|src)=["\']images/', r'\1="/images/', content)
    
    # css/... → /css/... (make absolute)
    content = re.sub(r'(href|src)=["\']css/', r'\1="/css/', content)
    
    # js/... → /js/... (make absolute)
    content = re.sub(r'(href|src)=["\']js/', r'\1="/js/', content)
    
    if content != original_content:
        changes['updated_includes'].append(filename)
    
    if not dry_run:
        # Write to new location
        dest_path.write_text(content, encoding='utf-8')
        # Remove from old location
        source_path.unlink()
        changes['moved'].append(filename)
        print(f"  ✓ Moved: {filename}")
    else:
        print(f"  → Would move: {filename}")
        if content != original_content:
            print("    (with path updates)")

# Step 4: Update nav.php with new paths
print("\nStep 4: Updating navigation links in partials/nav.php...")
nav_path = site_root / 'partials' / 'nav.php'
if nav_path.exists():
    nav_content = nav_path.read_text(encoding='utf-8', errors='ignore')
    original_nav = nav_content
    
    # Update links to moved pages
    for filename in files_to_move:
        # Match href="/filename.php" and update to href="/pages/filename.php"
        pattern = rf'href=["\']/{re.escape(filename)}["\']'
        replacement = f'href="/pages/{filename}"'
        nav_content = re.sub(pattern, replacement, nav_content)
    
    if nav_content != original_nav:
        if not dry_run:
            nav_path.write_text(nav_content, encoding='utf-8')
            print("  ✓ Updated nav.php")
        else:
            print("  → Would update nav.php")
        changes['updated_nav'].append('nav.php')
    else:
        print("  ✓ No nav changes needed")
else:
    print("  ⚠ nav.php not found at expected location")
    changes['errors'].append('nav.php not found')

# Step 5: Update index.php links
print("\nStep 5: Updating links in index.php...")
index_path = site_root / 'index.php'
if index_path.exists():
    index_content = index_path.read_text(encoding='utf-8', errors='ignore')
    original_index = index_content
    
    # Update links to moved pages
    for filename in files_to_move:
        # href="/filename.php" → href="/pages/filename.php"
        pattern = rf'href=["\']/{re.escape(filename)}["\']'
        replacement = f'href="/pages/{filename}"'
        index_content = re.sub(pattern, replacement, index_content)
        
        # href="filename.php" → href="pages/filename.php"
        pattern = rf'href=["\']({re.escape(filename)})["\']'
        replacement = f'href="pages/{filename}"'
        index_content = re.sub(pattern, replacement, index_content)
    
    if index_content != original_index:
        if not dry_run:
            index_path.write_text(index_content, encoding='utf-8')
            print("  ✓ Updated index.php")
        else:
            print("  → Would update index.php")
    else:
        print("  ✓ No index.php changes needed")

# Step 6: Update cross-page links within /pages/
print("\nStep 6: Updating cross-page links in moved files...")
if not dry_run:
    for filename in files_to_move:
        file_path = pages_dir / filename
        if file_path.exists():
            content = file_path.read_text(encoding='utf-8', errors='ignore')
            original_content = content
            
            # Update links to other moved pages
            for linked_file in files_to_move:
                # href="/linkedfile.php" → href="/pages/linkedfile.php"
                pattern = rf'href=["\']/{re.escape(linked_file)}["\']'
                replacement = f'href="/pages/{linked_file}"'
                content = re.sub(pattern, replacement, content)
            
            if content != original_content:
                file_path.write_text(content, encoding='utf-8')
                print(f"  ✓ Updated cross-links in: {filename}")
else:
    print("  → Would update cross-page links")

# Step 7: Update footer.php if it exists
print("\nStep 7: Checking footer.php for links...")
footer_path = site_root / 'partials' / 'footer.php'
if footer_path.exists():
    footer_content = footer_path.read_text(encoding='utf-8', errors='ignore')
    original_footer = footer_content
    
    for filename in files_to_move:
        pattern = rf'href=["\']/{re.escape(filename)}["\']'
        replacement = f'href="/pages/{filename}"'
        footer_content = re.sub(pattern, replacement, footer_content)
    
    if footer_content != original_footer:
        if not dry_run:
            footer_path.write_text(footer_content, encoding='utf-8')
            print("  ✓ Updated footer.php")
        else:
            print("  → Would update footer.php")
    else:
        print("  ✓ No footer changes needed")

# Generate report
print()
print("╔════════════════════════════════════════════════════════════╗")
print("║                    MIGRATION REPORT                        ║")
print("╚════════════════════════════════════════════════════════════╝")
print()

if dry_run:
    print("This was a DRY RUN - no changes were made.")
    print("Run without --dry-run to apply changes.")
    print()

print(f"Files to move: {len(files_to_move)}")
print(f"Include paths to update: {len(changes['updated_includes'])}")
print(f"Nav updates: {len(changes['updated_nav'])}")

if changes['errors']:
    print("\n⚠ Errors:")
    for error in changes['errors']:
        print(f"  - {error}")

print()
print("╔════════════════════════════════════════════════════════════╗")
print("║                    NEXT STEPS                              ║")
print("╚════════════════════════════════════════════════════════════╝")
print()
print("1. Update your .htaccess to redirect old URLs:")
print()
print("   # Redirect old page URLs to /pages/")
print("   RewriteEngine On")
print("   RewriteCond %{REQUEST_URI} ^/([a-zA-Z0-9_-]+)\\.php$ [NC]")
print("   RewriteCond %{REQUEST_URI} !^/index\\.php$ [NC]")
print("   RewriteCond %{REQUEST_URI} !^/404\\.php$ [NC]")
print("   RewriteCond %{REQUEST_URI} !^/pages/ [NC]")
print("   RewriteCond %{DOCUMENT_ROOT}/pages/%1.php -f")
print("   RewriteRule ^(.+)\\.php$ /pages/$1.php [R=301,L]")
print()
print("2. Test thoroughly on staging before going live")
print()
print("3. Check for any hardcoded links in:")
print("   - CSS files")
print("   - JavaScript files") 
print("   - External systems linking to your site")
print()
print("Done!")
print()
