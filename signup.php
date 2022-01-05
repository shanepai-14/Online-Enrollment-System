<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3 fixed-top">
    <div class="container">
    <a class="nav-link active navbar-brand" href="#">DAVAO VISION COLLEGE</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
     </button>

         <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
  <li class="nav-item">
  <a class="nav-link" href="login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Signup</a>
  </li>

</ul>
</div>
</div>
</nav>
<section class="p-5" id="learn"> 
  <div class="container">
   <div class="row align-items-center justify-content-between ">
    <div class="col-md">
      <img src="dvc.png" class="img-fluid w-30 d-none  d-sm-block"  alt="">
    </div>
  
    <div class="col-md  " >
      <h2>DAVAO VISION COLLEGE</h2>

<form action="includes/signup.inc.php" method="post">

      <div class="form-floating mb-3 col-6">
  <input type="text" class="form-control col" name="name"  placeholder="Full Name">
  <label >Full name</label>
</div>

<div class="form-floating mb-4 col-6">
  <input type="text" class="form-control col" name="uid"  placeholder="Username">
  <label for="floatingInput">Username</label>
</div>

      <div class="form-floating mb-4 col-6">
  <input type="email" class="form-control col" name="email"  placeholder="Email">
  <label >Email</label>
</div>
<div class="form-floating mb-4 col-6">
  <input type="password" class="form-control"  id="myInput" name="pwd" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
<div class="form-floating col-6 mb-2">
  <input type="password" class="form-control col"  name="pwdrepeat"  placeholder="Confirm"  id="myInput">
  <label >Confirm</label>
</div>

<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" onclick="showPass()">
    <label class="form-check-label" for="exampleCheck1">Show password</label>
  </div>




      <button type="submit" name="submit" class="btn-primary btn-sm mb-5">Sign Up</button>
</form>
<div class="mb-2">
<?php 

if(isset($_GET["error"])){

   if($_GET["error"] == "emptyinputs"){
     echo "<p>Fill in all fields </p>";

   }else if($_GET["error"] == "invaliduid"){
    echo "<p>Choose a proper username! </p>";
   }else if($_GET["error"] == "invalidemail"){
    echo "<p>Choose a proper email! </p>";
   }else if($_GET["error"] == "passwordontmatch"){
    echo "<p>Password doesn't match! </p>";
   }else if($_GET["error"] == "stmtfailed"){
    echo "<p>Something went wrong! Try again </p>";
   }
   else if($_GET["error"] == "usernametaken"){
    echo "<p>Username already taken!</p>";
   }  
   else if($_GET["error"] == "SUCCESIGNUP"){
    echo "<p>You have sign up!</p>";
   }  

}

?>
</div>
    </div>
   </div>
</div>



</section>



<script>
  
function showPass() {
    var x = document.getElementById("myInput");
    if (x.type == "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  </script>


<!-- Boxes 
<section class="p-5"> 
  <div class="container">
  <div class="row text-center g-4">
    <div class="col-md">
      <div class="card bg-dark text-light">
      <div class="card-body text-center"> 
        <div class="h1 mb-3">
        <i class="bi bi-laptop"></i>
    </div>
    <h3 class="card-title mb-3">
      Virtual
</h3>
<p class="card-text">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, rem.
</p>
<a href="#" class="btn btn-primary"> Read More </a>
    </div>
    </div>
    </div>
    <div class="col">

    <div class="card bg-secondary text-light">
      <div class="card-body text-center"> 
        <div class="h1 mb-3">
        <i class="bi bi-person-square"></i>
    </div>
    <h3 class="card-title mb-3">
      Learn
</h3>
<p class="card-text">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, rem.
</p>
<a href="#" class="btn btn-dark"> Read More </a>
    </div>
    </div>
    
    </div>
    <div class="col">

    <div class="card bg-dark text-light">
      <div class="card-body text-center"> 
        <div class="h1 mb-3">
        <i class="bi bi-people"></i>
    </div>
    <h3 class="card-title mb-3">
      In person
</h3>
<p class="card-text">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, rem.
</p>
<a href="#" class="btn btn-primary"> Read More </a>
    </div>
    </div>

    </div>
  </div>
</div>
</section>


-->





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">



</script>
</body>
</html>