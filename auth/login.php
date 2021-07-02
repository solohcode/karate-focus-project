<?php

  include('../components/navBar/authBar.php');

?>



<div>
  <div class="container">

  <!-- desktop view  -->
      <form method="POST" action="../app/helpers/process.php" class="shadow rounded w-50 mx-auto d-none d-md-block my-5 row needs-validation" novalidate style="min-height: 50vh;">
      <br/>
        <div class="mb-5 mt-3 text-center">
          <p class="fs-2 ">Login</p>
          <p class="p-2">login to the portal below, don't have an account? <a href="register.php">Register</a></p>
        </div>

        <div class="col-md-12 my-4">
          <div class="">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
              <input type="email" name="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="addon-wrapping">
            </div>
          </div>
        </div>

        <div class="col-md-12 my-4">
          <div class="">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
              <input type="password" name="password" value="" class="form-control" placeholder="password" aria-label="password" aria-describedby="addon-wrapping">
            </div>
          </div>
        </div>

        <div>
          <label for="remember-me">remember me</label>
          <input type="checkbox" name="remember-me" id="remember-me"/>
        </div>
       
        <div class="col-12 my-4 text-center">
          <div class="w-75 mx-auto">
            <button class="w-100 btn btn-primary" type="submit">Login</button>
          </div>
          <p class="my-4">forgotten your password? <a href="#">recover now</a></p>
        </div>
        <br/>
      </form>


  <!-- mobile view  -->
    <form method="POST" action="../app/helpers/process.php" class="shadow rounded w-100 mx-auto d-block d-md-none my-5 row needs-validation" novalidate style="min-height: 50vh;">
        <br/>
          <div class="my-5 text-center">
            <p class="fs-2 ">Login</p>
            <p class="p-2">login to the portal below, don't have an account? <a href="register.php">Register</a></p>
          </div>

          <div class="col-md-12 my-4">
            <div class="">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="addon-wrapping">
              </div>
            </div>
          </div>

          <div class="col-md-12 my-4">
            <div class="">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="addon-wrapping">
              </div>
            </div>
          </div>

          <div>
          <label for="remember-me">remember me</label>
          <input type="checkbox" name="remember-me" id="remember-me"/>
        </div>
        
          <div class="col-12 my-4 text-center">
          <div class="w-75 mx-auto">
            <button class="w-100 btn btn-primary" type="submit">Login</button>
          </div>
          <p class="my-4">forgotten password? <a href="#">recover now</a></p>
        </div>
          <br/>
        </form>

  </div>
</div>




<?php
 include('../components/footer/compFooter.php')
?>



