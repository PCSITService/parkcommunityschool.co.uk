<?php
mail(
    'j.dixon@pcs.hants.sch.uk',
    'Statutory Page Visited',
    'Someone has clicked the Statutory link on the Park Community School website.',
    'From: website@pcs.hants.sch.uk'
);

header('Location: /pages/statutory.php', true, 302);
exit;