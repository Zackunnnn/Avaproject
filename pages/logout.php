<?php
session_start();

// Hapus semua session
$_SESSION = [];
session_destroy();

// Redirect
header("Location: index.php");
exit;
