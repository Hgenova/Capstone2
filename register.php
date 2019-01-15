<?php require_once "partials/header.php";?>

<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
      <div class="col-lg-7">

      <form class="form-horizontal">
          <legend>Register</legend>

          <div class="form-group">
              <label class="col-lg-4" for="fullname">Full Name</label>
              <input id="fullname" name="fullname" placeholder="Full Name" class="form-control" type="text">
          </div>    

          <div class="form-group">
              <label class="col-lg-4" for="fullname">Company</label>
              <input id="company" name="fullname" placeholder="Company" class="form-control" type="text">
          </div>    

          <div class="form-group">    
              <label class="col-lg-4" for="email">Email</label>
              <input id="email" name="email" placeholder="Email" class="form-control" type="text">
          </div>

                    <div class="form-group">
              <label class="col-lg-4" for="fullname">Password</label>
              <input id="password" name="fullname" placeholder="Password" class="form-control" type="text">
          </div>    

          <div class="form-group">
              <label class="col-lg-4" for="fullname">Confirm Password</label>
              <input id="cpass" name="fullname" placeholder="Password" class="form-control" type="text">
          </div>    

          <div class="form-group">
            <div class="col-lg-4">
              <button id="submit" name="submit" class="btn btn-outline-primary">Submit</button>
            </div>
          </div>

			</div>


  <?php include "partials/footer.php" ;?>

