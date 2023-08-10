<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['username']);
session_destroy();
header('Location: login.php?success=User logged out successfully!');
exit();
?>