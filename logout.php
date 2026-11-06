<?php
session_start();
echo "YOU LOGOUT ....".$_SESSION['user'];
session_destroy();

?>