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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>to do</title>
  </head>
  <body>
  <form action="to do.php" method="post">
 <input type="input" name ="name"> <br>
 <input type="submit" value="Submit">
</form>
  <?php
  
  $name = $_POST['name']; 
    $arrayLength = count( $name);

  $i = 0;
  while ($i < $arrayLength)
  {
      echo  $name[$i] ."<br />";
      $i++;
      for ($x = 0; $x <= 10; $x++) {
        $new_array[] = array([$name]);   
    }
  }


?>
     

  </body>
</html>
