<?php

session_start();

session_unset();
session_destroy();

echo "<script>
    window.location = '../supplier_login.php';
</script>";

exit;
?>
