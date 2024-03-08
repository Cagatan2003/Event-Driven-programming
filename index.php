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
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
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
<p class="h1 mt-3">Dashboard</p>
<p class="h6">You can view all the recorded data on this dashboard.</p>
<div class="card mt-2">
  
  <div class="card-header" style="text-align: Center;">List of Pet & Owner</div>
  <div class="card-body">
  <table class="table">
    <thead>
      <tr>
        <th width="300">Pet ID</th>
        <th width="300">Pet Name</th>
        <th width="300">Breed</th>
        <th width="300">Owner</th>
        
        <th width="100" style="text-align: Center;">Action</th>
      </tr>
    </thead>
<tbody id="results">
</div>
</tbody>
</body>
</table></div>
  <div class="card-footer">-</div>
</div>
 

</div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Pet Information</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 
</html>