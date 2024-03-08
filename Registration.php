<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"></script>
  
  <Script src="./assets/js/search.js"></Script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"> </script>

  <style>
    body{

      background-color: #dfe6e9;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid"> 
    <a class="navbar-brand" href="javascript:void(0)" style="color: red; font-size: 15px;">
        <image src="./assets/img/logo.png" height="55"> 
    </a>
  
    
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active ">
          <a class="nav-link" href="/web-page/index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/web-page/Registration.php" >Registration</a>
        </li>
      
      </ul>
      <form class="d-flex">
        <input onkeyup="Search(this.value)" class="form-control me-2" type="text" placeholder="Search Pet Name Here...">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid">
<p class="h1 mt-3">Registration</p>
<p class="h6">You can add record for students here.</p>
<div class="card mt-2">
  
  <div class="card-header" style="text-align: Center;">List of Pet & Owner</div>
  <div class="card-body">
 </div>
  <div class="card-footer">-</div>
</div>
 

</div>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 
</html>