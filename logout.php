<?php

session_start();
session_destroy();

echo ("<script LANGUAGE='JavaScript'>
window.alert('Logout berhasil');
window.location.href='login.php';
</script>");

?>