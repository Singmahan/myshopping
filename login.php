<?php
  session_start();
  require_once "connectdb.php";

  if (isset($_POST['submit'])) {
      $username = $_POST ['username'];
      $password = $_POST ['password'];
      $firstname = $_POST ['firstname']; 
      $lastname = $_POST ['lastname'];

      $user_check="SELECT * FROM user WHERE username = '$username' LIMIT 1";
      $result = mysqli_query($conn, $user_check);
      $user = mysqli_fetch_assoc($result);

      if ($user['username'] === $username) {
          echo "<script>alert('มีชื้อผู้ใช้งานอยู่ในฐานข้อมูลแล้ว');</script>";
      } else {
           $passwordenc = md5($password);

         $query = "INSERT INTO user( username, password, firstname, lastname, userlevel)
         VALUE ('$username','$passwordenc','$firstname','$lastname', 'm')";
         $result = mysqli_query($conn, $query);

         if ($result){
            $_SESSION['success'] = "คุณได้เป็นสมาชิกแล้ว";
            header('Location: index.php');
         } else {
             $_SESSION['$error'] ="ลองใหม่อีกครัง";
             header('Location: index.php');
         }
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <label for="username">Username</label>
           <input type="text" name="username" placeholder="Username" requierd>
   <br>
          <label for="password">Password</label>
           <input type="password" name="password" placeholder="Password" requierd>
   <br>
          <label for="firstname">Firstname</label>
           <input type="text" name="firstname" placeholder="firstname" requierd>
   <br>
          <label for="lastname">Lastname</label>
           <input type="text" name="lastname" placeholder="lastname" requierd>
   <br>
          <input type="submit" name="submit" value="submit">
  
  </form>
    <a href="index.php">Go to index</a>
</body>
</html>


















