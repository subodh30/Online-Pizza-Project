<!DOCTYPE html>
<html>
<body>

<?php 
echo "hiii";
session_start();
echo json_encode($_SESSION);
foreach($_SESSION as $key=>$val){
echo $key." ".$val."<br />";
}

session_destroy();	
?>

</body>
</html>
