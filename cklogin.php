
<?php
  session_start();
  include('connectdb.php');

$username=$_GET['username'];
$password=$_GET['password'];

$sql = "SELECT * FROM personal_tbl WHERE usernames ='".$username."' AND passwords ='".$password."'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
// echo $count;
// exit();
// $row = mysqli_fetch_assoc($result);
// echo $row['usernames'];
// echo $row['passwords'];
// echo $row['status'];
// exit();
if ($count > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['user']=$row['usernames'];
    $_SESSION['pass']=$row['passwords'];
    $_SESSION['type']=$row['status'];
        if($row['status']==1){
            header('location:admin/');
        }elseif($row['status']==2){
            header('location:user/');
        }
    }
} else{
  header('location:index.php?na=l');

}

?> 