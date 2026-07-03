<?php

session_start();

session_destroy();

header("Location: setB2.php");
exit();

?>