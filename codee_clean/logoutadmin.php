<?php
session_start();
session_destroy();
header("location:../codee_clean/index.php");
exit;
?>