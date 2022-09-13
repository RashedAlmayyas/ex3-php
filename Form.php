<!--
 ***   ***        ****             *   *          ***   ***
***** *****       *   *            *   *         ***** *****
***********       *   *            ** **         ***********
 *********        ****     *****   * * *          *********                                            
  *******         * *              *   *           *******
   *****          *  *             *   *            *****
    ***           *   *            *   *             ***
     *                                                *
-->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
  </head>
  <body>
    <div >
      <div >
        <h1>Login</h1>
        <form  method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
          <div >
            <label for="email"> Email<span class="text-danger">*</span></label>
            <input id="email" type="email" name="email" class="form-control" placeholder="Enter Email" required />
          </div>
          <div >
            <label for="password">password<span class="text-danger">*</span></label>
            <input id="pass" type="password" name="password" class="form-control" placeholder="Enter Password" required />
          </div>
                  <button type="submit" name="register" value="Register">Register</button>
   
          <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( true ) {
        $_SESSION["users"][] = ["email" => $_POST['email'], "password" => $_POST['password']];
        echo $_POST['email'];
        echo $_POST['password'];    }
}



?>
        </form>
      </div>
     

  </body>
</html>
