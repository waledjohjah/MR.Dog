<?php
    include 'db.php';
    include 'config.php';
?>

<?php
    session_start();
    if (!isset($_SESSION["user_id"]))
        header('Location:  login.php');  
?>
<?php 

    //get data from querystring and escape variables for security

    $dogname = mysqli_real_escape_string($connection, $_GET['dog_name']);

    $dogImg = mysqli_real_escape_string($connection, $_GET['dog_picture']);

    $dogbreed = mysqli_real_escape_string($connection, $_GET['breed']);
    $dogbirthday = mysqli_real_escape_string($connection, $_GET['birthday']);
    $dog_gender = mysqli_real_escape_string($connection, $_GET['pet-gender']);
    $dogspayed = mysqli_real_escape_string($connection, $_GET['spayed-neutered']);
    $weight  = mysqli_real_escape_string($connection, $_GET['pet-weight']);

    $state    	= $_GET['state'];

    $dogid    	= $_GET['dogid'];



    //SET: insert/update data in DB

    if ($state == "insert") {
      $sql = "INSERT INTO tbl_dog_207(dog_name, dog_birthday,dog_picture, dog_gender, dog_wieght, owner_id, dog_lost, dog_spayed)
      VALUES ('$name', '$birthday','$dog_picture', '$gender', '$pweight $str', '$ownerID', 0, '$spayed');";
      /*$query = "insert into tbl_prods(name,img_url,cat_id) values ('$prodName','$prodImg','$catId')";*/

      // echo $query;

    }

    else {

      /*$query = "update dbShnkr22studWeb1.tbl_dog_207 set dog_name='$dogname', img_url='$prodImg', cat_id='$catId' where id='$prodId'";*/

      // echo $query;

    }

    $result = mysqli_query($connection, $query);



      if(!$result) {

          die("DB query failed.");

      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>

<div class="container">

      <h1>Save dog Details</h1>

      <h2>dog was saved</h2>

      <a href="index.php">click to see all dogs</a>

      <?php 

        //release returned data

        mysqli_free_result($result);

      ?>

</div>
</section>
    
</body>
</html>
<?php
    mysqli_close($connection);
?>