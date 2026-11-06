<?php
session_start();
echo "WELCOME TAHER'S WORLDS : ".$_SESSION['user']."<br>";
echo "<a href='logout.php'>Logout</a>";
?>