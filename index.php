<?php 
session_start();
?>


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
    <a class="nav-link" href="signup.php">Signup</a>
  </li>

 

</ul>
</div>
</div>
</nav>

<section class="bg-primary text-light p-5 text-center text-sm-start">
  <div class="container">
    <div class="d-sm-flex align-items-center">
    <div>
      <h1>Welcome to <span class="text-warning"> DVC </span> </h1>
      <p class="lead my-4">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 


</p>
<button class="btn-warning btn-lg"><a  class="nav-link  btn-sm"  href="login.php">Enroll Now</a></button>
    </div>
    <img src="dvc.png" class="img-fluid w-30 d-none  d-sm-block" width="350" alt=""/>
</div>
</div>
</section>

<!-- Boxes -->
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

<!-- learn section -->

<section class="p-5" id="learn"> 
  <div class="container">
   <div class="row align-items-center justify-content-between">
    <div class="col-md">
      <img src="dvc.png" class="img-fluid" alt="">
    </div>
    <div class="col-md p5">
      <h2>Learn Fundamentals</h2>
      <p class="lead">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium iure, quasi eveniet voluptas facere nihil architecto adipisci deserunt quo labore dolorum modi ratione suscipit excepturi veritatis! Laudantium iusto consequuntur delectus.
      </p>
      <p> 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto incidunt iusto autem odit ducimus molestias repellat placeat, totam repellendus earum suscipit iure eum ullam similique in labore ab minus itaque!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique facilis reprehenderit eum pariatur ipsam incidunt, unde at dolorem natus repellendus numquam omnis ipsum hic dignissimos dolores? Omnis at vitae minus.
      </p>
    </div>
   </div>

</div>

</section>
    

<section class="p-5 bg-dark text-light" id="learn" > 
  <div class="container">
   <div class="row align-items-center justify-content-between">
    
    <div class="col-md p5">
      <h2>Learn Fundamentals</h2>
      <p class="lead">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium iure, quasi eveniet voluptas facere nihil architecto adipisci deserunt quo labore dolorum modi ratione suscipit excepturi veritatis! Laudantium iusto consequuntur delectus.
      </p>
      <p> 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto incidunt iusto autem odit ducimus molestias repellat placeat, totam repellendus earum suscipit iure eum ullam similique in labore ab minus itaque!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique facilis reprehenderit eum pariatur ipsam incidunt, unde at dolorem natus repellendus numquam omnis ipsum hic dignissimos dolores? Omnis at vitae minus.
      </p>
    </div>
    <div class="col-md">
      <img src="dvc.png" class="img-fluid" alt="">
    </div>
   </div>

</div>

</section>

<!-- Frequently ask questions -->

<section id="questions" class="p-5">

<div class="container">
  <h2 class="text-center mb-4">
    Frequently Ask Questions
  </h2>
  <div class="accordion accordion-flush" id="questions">
    <!-- item 1 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" >
        Where you at
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse"  data-bs-parent="#questions">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <!-- item 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" >
        fuck life
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>

  <!-- item 3 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" >
        die
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse"  data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>

   <!-- item 4 -->
   <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" >
        iloveyou
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>

</div>
</div>

</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>