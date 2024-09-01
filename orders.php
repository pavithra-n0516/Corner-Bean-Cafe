<?php
  $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $items = $_POST['items'];

 $conn = new mysqli('localhost','root','','exam');
  if ($conn->connect_error){
        die('Connection failed : ' .$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into orders(name, email, password, items)
                   values(?,?,?,?)");
$stmt->bind_param("ssss",$name, $email, $password, $items);
$stmt->execute();
echo "successfully added to cart...";
$stmt->close();
$conn->close();
}
?>