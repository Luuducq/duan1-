<?php

session_start();
unset($_SESSION['username']);
echo '<script>location.href="/duan1/nam/index.php"</script>';
?>