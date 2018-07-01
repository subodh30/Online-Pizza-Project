<!DOCTYPE html>
<html>
<body>



<?php
$db = new PDO('mysql:host=localhost;dbname=userdb;charset=utf8','root','root123');
$request = array();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
echo "hihi0";
		if(isset($_POST['pass']) and isset($_POST['phone']) and isset($_POST['email']) and isset($_POST['addr']) and isset($_POST['name'])){
          
              $stmt = $db->prepare("INSERT INTO `user_details` (`name`, `contactno`,`address`,`email`,`password`) VALUES (:name, :phone, :addr,:email,:pass)");
			$stmt->bindParam(':phone',$_POST['phone']);
                $stmt->bindParam(':name',$_POST['name']);
              $stmt->bindParam(':pass',$_POST['pass']);
                            $stmt->bindParam(':email',$_POST['email']);
                            $stmt->bindParam(':addr',$_POST['addr']);
				$stmt->execute();
					
             $request['ins']="yes";
echo "<script type='text/javascript'>aleat('Inserted Successfully.');</script>";
              header('Location: http://localhost/pizza/index.html');
            }else{
echo "<script type='text/javascript'>aleat('Error while inserting.');</script>";
             header('Location: http://localhost/pizza/login.html');
               $request['ins']="not";
            }
          }
              
echo json_encode($request);
?>
</body>
</html>
  