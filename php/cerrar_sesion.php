<?php
session_start();
session_destroy();
header("location: ../Html/index.php");
?>