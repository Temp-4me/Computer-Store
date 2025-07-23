<?php
include 'includes/header.php';
session_start();
session_destroy();?>

<?php
header("Location: login.php");
exit;

include 'includes/footer.php';
?>