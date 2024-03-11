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
     
    </div>
  </div>
</nav>

<div class="container-fluid">
<p class="h1 mt-3 " >Whisker Wonder Registration Form.</p>
<p class="h6">You can add record here.</p>
<div class="card mt-3">
  
<form action='/web-page/model/save.php' method="POST">
  <div class="card-header" style="text-align: Center; background-color: #e17055;"> <p class="h5" >Owner's Information</p></div>
  <div class="card-body">
  <?php 
if(isset($_GET['success'])) {
    echo '<div class="alert alert-success"><b>Information Added...</b> Thank you!</div>';
} elseif(isset($_GET['invalid'])) {
    echo '<div class="alert alert-danger"><b>Existed Information </b> Please try another. Thank you!</div>';
}
?>

        <div class="row">

        <div class="col-md-3">
            <label class="md-3">First Name: <b class="text-danger">*</b></label>
            <input name="inp_fname" required type="text" placeholder="Enter first Name here..." class="form-control mt-2">
        </div>
        <div class="col-md-3">
            <label>Middle Name: <b class="text-danger">*</b></label>
            <input name="inp_mname" required  type="text" placeholder="Enter middle name here..." class="form-control mt-2">
        </div>
        <div class="col-md-3">
            <label>Last Name: <b class="text-danger">*</b></label>
            <input name="inp_lname"  required type="text" placeholder="Enter last name here..." class="form-control mt-2">
        </div>
        <div class="col-md-3">
            <label>Ext Name: <small>(OPtional)</small></label>
            <input name="inp_extname"  type="text" placeholder="Enter Ext name here..." class="form-control mt-2">
        </div>
        <div class="col-md-9 mt-3">
            <label>Address:  <b class="text-danger">*</b></label>
            <input name="inp_add" required  type="text" placeholder="Enter address here..." class="form-control mt-2"> 
        </div>
        <div class="col-md-3 mt-3">
            <label>Contact No.: <b class="text-danger">*</b></label>
            <input name="inp_num" required  type="text" placeholder="09 XXXX XXXX" class="form-control mt-2">
        </div>
        </div>
        <div class="card mt-3">

        <div class="card-header" style="text-align: Center; background-color: #e17055;" > <p class="h5">Pet's Information</p></div>

  
        <div class="col-md-3">
            <label>Pet ID:  <b class="text-danger">*</b></label>
            <input name="inp_pID" required  type="text" placeholder="Enter pet id here..." class="form-control mt-2"> 
        </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-3">
            <label class="md-3">Pet Name: <b class="text-danger">*</b></label>
            <input name="inp_pname" required type="text" placeholder="Enter pet here..." class="form-control mt-2">
        </div>
        <div class="col-md-3">
            <label>Species: <b class="text-danger">*</b></label>
            <input name="inp_pspecies" required type="text" placeholder="Enter species here..." class="form-control mt-2">
        </div>
        <div class="col-md-3">
            <label>Breed: <b class="text-danger">*</b></label>
            <input name="inp_pbreed" required type="text" placeholder="Enter breed here..." class="form-control mt-2">
        </div>
        <div class="col-md-3">
            <label>Date of Birth or Age: <b class="text-danger">*</b></label>
            <input name="inp_page" required type="text" placeholder="Enter age or birth here..." class="form-control mt-2">
        </div>
        
        <div class="col-md-6 mt-3">
            <label>Gender:  <b class="text-danger">*</b></label>
            <select name="inp_pgender" required  class="form-control  mt-2">

          
        <div class="col-md-3 mt-3">
                <option value="" disabled select> ---Select Gender---</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="col-md-6 mt-3">
            <label>Color/Markings:  <b class="text-danger">*</b></label>
            <input name="inp_pcolor" type="text" required  placeholder="Enter Color/Markings: here..." class="form-control mt-2"> 
        </div>
       
        </div>

    
 </div>
  <div class="card-footer">
    <span style="float: right">
     <button class="btn btn-success"> 
        Save Info.

    </button></span>
   
   
  </div>
   </form>
</div>
 

</div>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 
</html>