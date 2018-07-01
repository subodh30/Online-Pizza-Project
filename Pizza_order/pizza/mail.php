<!DOCTYPE html>
<html>
<body>


<?php
session_start();
$name=$_SESSION['username'];
session_destroy();
session_start();
$_SESSION['username']= $name;
$_SESSION['tcost']=0;
$_SESSION['titem']=0;
header('Location: http://localhost/login/index.php');
?>



</body>
</html>
