<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        $base_url = 'dashboardadmin.php?p=';
    } else if ($_SESSION['role'] == 'client') {
        $base_url = 'dashboardclient.php?p=';
    } else {
        $base_url = 'index.php?p=';
    }
} else {
    $base_url = 'index.php?p=';
}
?>

