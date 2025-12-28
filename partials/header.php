<?php include __DIR__ . '/security.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | Park Community School' : 'Park Community School'; ?></title>
    
    <!-- Foundation 6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css" crossorigin="anonymous">
    
    <!-- Your custom styles (load after Foundation to override) -->
    <link rel="stylesheet" href="/css/style.css">
    
    <!-- Optional: Foundation Icons -->
</head>
<body>
<?php include __DIR__ . '/nav.php'; ?>