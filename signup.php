<?php
  $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $conn = new mysqli('localhost','root','','exam');
  if ($conn->connect_error){
        die('Connection failed : ' .$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into signup(name, email, password)
                   values(?,?,?)");
$stmt->bind_param("sss",$name, $email, $password);
$stmt->execute();
echo "successfully signed in...";
$stmt->close();
$conn->close();
}
?>