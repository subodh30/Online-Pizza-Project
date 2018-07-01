<!DOCTYPE html>
<html>
<body>
<?php 
session_start();
session_destroy();

header('Location: http://localhost/pizza/index.html');

?>
</body>
</html>

