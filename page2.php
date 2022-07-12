<?php
  include 'db.php';
  include 'config.php';

  header("Cache-Control: no-cache, no-store", true);
  session_start();

  if (!isset($_SESSION['owner_id'])){
    header("Location: login.php");
  } 
  $image_url=$_SESSION["owner_url"];
  if(!$image_url) $image_url = "images/upload/defultimage.jpg";
?>

<?php 
  
  $query="SELECT *
  FROM tbl_ownerdog_207 o
  RIGHT JOIN tbl_dog_207 d ON d.owner_id = o.owner_id
  WHERE d.dog_id=2";

  $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result); 
    $dog_pic=$row['dog_picture'];
    $dog_name=$row['dog_name'];
    $dog_birthday=$row['dog_birthday'];
    $dog_gender=$row['dog_gender'];
    $dog_weight=$row['dog_wieght'];
    $dog_id=$row['dog_id'];
    $dog_spayed=$row['dog_spayed'];
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Mulish"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr. Dog - Page2</title>
    <link rel="stylesheet" href="includes/css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/e2ac9cc532.js" crossorigin="anonymous"></script><link rel="stylesheet" href="./style.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src= "https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="includes/js/scripts.js"></script>
</head>
<body>
 
        <nav class="navbar navbar-expand-md navbar-dark nav-dark  mb-4">
          <div class="container-fluid">
            <section><a href="index.php" id="logo"></a></section>
            <section><img src="<?php  echo $image_url ?>" onClick="parent.location='profile.php'" class="persona" alt="icon-image"></section>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">My Dogs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="lostDog.php">Lost Dogs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Report Found dog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nearby PetShop</a>
                </li>
              </ul>
              <div class="d-flex">
              
                <section><img src="<?php  echo $image_url ?>" onClick="parent.location='profile.php'" alt="icon-img"></section>
      
              </div>
            </div>
          </div>
        </nav>
      <div id="wrapper"> 
        <main>
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Charlie <i class="fa fa-caret-down"></i></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="#"><i class="fa-solid fa-pen">&nbsp;&nbsp;</i> Edit Profile</a>
              <a href="#"><i class="fa-solid fa-trash-can">&nbsp;&nbsp;</i>Delete Profile</a>
              <a href="page3.php"><i class="fa-solid fa-paw"></i>&nbsp;&nbsp;Find My Dog</a>
              <a href="lostDog.php"><section><i class="fa-solid fa-shield-dog"></i>&nbsp;&nbsp;Report Dog Lost</section></a>
            </div>
          </div>
          <div  class="flex-contner-pg2">
              <div>
                <img src="images/jack-3.jpg" class="images-dog1" alt="icon-img">
              
            </div>
            <div>
              <img src="<?php echo $dog_pic ?>" class="images-dog2" alt="icon-img">
            </div>
            <div>
              <img src="images/Jack.jpg" class="images-dog3" alt="icon-img">
            </div>
          </div>
        </main>
                        
        
        <div class="label-yourdog">
          <section class="Your-dog"><h2>Schedule</h2></section>
        </div>
        <div class='container'>
              <div class="flex-box-Schedule">
                <div>
                  <img src="images/Medication.png" class='iconDetails2' alt="icon-img">
                </div>	
                <section >
                  <section>10:00 AM</section>
                  <section>Medication</section>
                </section>
              </div>
              <div class="flex-box-Schedule">
                <div>
                  <img src="images/Eating-time.png" class='iconDetails2' alt="icon-img">
                </div>	
                <section >
                  <section>11:00 AM</section>
                  <section>Eating Time</section>
                </section>
            </div>
              <div class="flex-box-Schedule">
                <div>
                  <img src="images/WalkingTime.png" class='iconDetails2' alt="icon-img">
                </div>	
                <section >
                  <section>13:00 AM</section>
                  <section>Walk Time</section>
                </section>
            </div>
        </div>
        <div class="label-yourdog">
          <section class="Your-dog"><h2>Details</h2></section>
        </div>
        <div class="label-details">
            <div class="label-details-box">
                <p>Name : <span class="label">&nbsp;<?php echo $dog_name?></span></p>
                <p>Age : <span class="label">&nbsp;2</span></p>
                <p>Birthday : <span class="label">&nbsp;22/01/2020</span></p>
                <p>Breed : <span class="label">&nbsp;Yes</span></p>
            </div>
            <div class="label-details-box">
                <p>ID : <span class="label">&nbsp;458986.pc</span></p>
                <p>Weight :<span class="label">25-50 lbs </span>
                <p>Gender : <span class="label">&nbsp;Male</span></p>
                <p>Spayed or Neutered : <span class="label">&nbsp;Spayed</span></p>
            </div>
        </div>
  </div>
  
  <footer class="text-center text-white" style="background-color: #f1f1f1;">
    
    <div class="container pt-4">
        <section class="mb-4">
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
        </section>
    </div>
    <div class="text-center text-dark p-3" >
        © 2022 Copyright :
        <a class="text-dark" href="#"> MR.DOG</a>
    </div>

  </footer>
  
  <?php
        mysqli_free_result($result);
    ?>

</body>
</html>
<?php

//close DB connection

mysqli_close($connection);

?>