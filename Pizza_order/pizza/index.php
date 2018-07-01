<!DOCTYPE html>
<html>
<body>


<?php
  //echo "hi";
              session_start();
$db = new PDO('mysql:host=localhost;dbname=userdb;charset=utf8','root','root123');
$request = array();
if($_SERVER['REQUEST_METHOD'] === 'POST'){

if(isset($_POST['usern']) && isset($_POST['pass'])){
	echo $_POST['usern']."  ".$_POST['pass']."\n";
	$request['msg']="ok";
	$stmt = $db->prepare("select `password` from `user_details` where `email` = :usern");
	$stmt->bindParam(':usern',$_POST['usern']);
	#$stmt->bindParam(':pass',$_POST['pass']);
	$stmt->execute();
 
 ////////////////////////////////////////////////////
   if($stmt->rowCount() > 0){
     $cnt = $stmt->rowCount();
     		
          $request['exists']="no";
     		$row = $stmt->fetch();
     		//echo "\n".$row
			if($row['password'] == $_POST['pass'])
            { $request['exists']="Valid";

            $_SESSION['username']=$_POST['usern'];
            $_SESSION['titem']=0;
            $_SESSION['tcost']=0;
            $_SESSION['password']=$_POST['pass'];
header('Location: http://localhost/login/index.php');
            }else{
             $request['exists']="no";
header('Location: http://localhost/tey/main.php');
            }
    }
     
  ////////////////////////////////////////
}
}
else
{
	$request['msg']="cancel";
}
echo json_encode($request);
?>


</body>
</html>
