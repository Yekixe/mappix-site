<?php
$page = strtoupper($page);

include_DIR_ . '/includes/header.php';

$allowed = ['home', 'contact'];

if (!in_array($page, $allowed)) {
    echo "<h2>404 - Page introuvable</2>";
} else {
    include_DIR_ . "/pages/$page.php";
}

include_DIR_ . '/includes/footer.php';