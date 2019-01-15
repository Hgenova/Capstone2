<?php require_once "partials/header.php";?>


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- css must be at the bottom (latest to work) -->
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/demo.css">


<div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-5">

      <form class="form-horizontal" action="../controllers/process_register.php" method="POST">
          <legend>Register</legend>

          
          <div class="form-group">    
              <label class="col-lg-4" for="email">Email</label>
              <input id="email" name="email" placeholder="Email" class="form-control" type="text">
          </div>

              <div class="form-group">
                <label class="col-lg-4" for="password">Password</label>
                <input id="password" name="password" placeholder="password" class="form-control" type="password">
              </div>                

          <div class="form-group">
              <label class="col-lg-4" for="cpass">Confirm Password</label>
              <input id="cpass" name="cpass" placeholder="cpassword" class="form-control" type="password">
          </div>    

          <div class="form-group">
            <div class="col-lg-4">
              <button id="submit" name="submit" class="btn btn-outline-primary">Submit</button>
            </div>
          </div>

      </div>
    </div>
  </div>
      </form>
      
 <!--  <form method="POST" action="process_register.php">
    <input type="text" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password"><br>
    <button type="submit" id="btn_submit">Submit</button>
  </form> -->

     
  <?php include "partials/footer.php" ;?>