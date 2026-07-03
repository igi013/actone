<?php

session_start();

session_destroy();

header("Location: setA3.php");
exit();

?>