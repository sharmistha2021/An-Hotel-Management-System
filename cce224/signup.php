<?php
include_once ('configuration.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> signup page </title>
  <link rel="stylesheet" type="text/css"href="index.css"/>
<head>
<body>

  <div>
    <?php
      if (isset($_POST['create'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = " INSERT INTO users (firstname, lastname, email, mobile, username, password) values('$firstname', '$lastname', '$email', '$mobile', '$username', '$password')";

        $result = mysqli_query($con, $sql);
        if($result){
          echo "successfully saved";
        }
        else {
          echo "there is error saving the data";
        }}

     ?>
    <form action="signup.php" method="post" accept-charset="utf-8">
    <section id="signup">
      <div class="s_container">
      <div class="form">
        <h1> Registration Form </h1>
        <p> Please Fill up the Form: </p>
      </div>

        <label class="info" for="firstname"> <b> First Name: </b><br></label>
        <input type="text" name="firstname" required placeholder="firstname"><br><br>

        <label class="info" for="lastname"> <b> Last Name: </b><br></label>
        <input type="text" name="lastname" required placeholder="lastname"><br><br>

        <label class="info" for="email"> <b> Email: </b><br></label>
        <input type="email" name="email" required placeholder="..@email.com"><br><br>

        <label class="info" for="mobile"> <b> Mobile: </b><br></label>
        <input type="int" name="mobile" required placeholder="mobile"><br><br>

        <label class="info" for="username"> <b> User Name: </b><br></label>
        <input type="text" name="username" required placeholder="username"><br><br>

        <label class="info" for="password"> <b> Password: </b><br></label>
        <input type="password" name ="password" required placeholder="password"><br><br>
        <input class="btn-primary" type="submit" name="create" value="sign up">
      </div>
    </section>

    </form>
  </div>
</body>
</html>
