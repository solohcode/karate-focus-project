<?php
// head include
  // require('../components/head/compHead.php');

  
  include('../components/navBar/authBar.php');
  

?>




<div>
  <div class="container">

  <!-- desktop view  -->
      <form class="shadow rounded w-50 mx-auto d-none d-md-block my-5 row needs-validation" novalidate style="min-height: 50vh;">
      <br/>
        <div class="my-2 text-center">
          <p class="fs-2 ">Register</p>
          <p class="p-2">input the required data below to join the portal, have an account? <a href="login.php">Login</a></p>
        </div>

        <div class="col-md-12 my-4">
          <div class="">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" placeholder="first name" aria-label="first-name" aria-describedby="addon-wrapping">
            </div>
          </div>
        </div>

        <div class="col-md-12 my-4">
          <div class="">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" placeholder="second name" aria-label="second-name" aria-describedby="addon-wrapping">
            </div>
          </div>
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
              <span class="input-group-text" id="addon-wrapping"><i class="fa fa-phone"></i></span>
              <input type="number" class="form-control" placeholder="mobile number" aria-label="mobile-number" aria-describedby="addon-wrapping">
            </div>
          </div>
        </div>

        <div class="col-md-12 my-4">
          <div class="">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
              <input type="password" class="form-control" placeholder="choose a password" aria-label="password" aria-describedby="addon-wrapping">
            </div>
          </div>
        </div>

        <div class="col-md-12 my-4">
          <div class="">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
              <input type="password" class="form-control" placeholder="retype password" aria-label="retype-password" aria-describedby="addon-wrapping">
            </div>
          </div>
        </div>
       
        <div class="col-12 my-4">
          <div class="w-75 mx-auto">
            <button class="w-100 btn btn-primary" type="submit">Register</button>
          </div>
        </div>
        <br/>
      </form>


  <!-- mobile view  -->
    <form class="shadow rounded w-100 mx-auto d-block d-md-none my-5 row needs-validation" novalidate style="min-height: 50vh;">
      <br/>
          <div class=" mb-5 text-center">
            <p class="fs-2 ">Register</p>
            <p class="p-2">input the required data below to join the portal, have an account? <a href="login.php">Login</a></p>
          </div>

          <div class="col-md-12 my-4">
            <div class="">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="first name" aria-label="first-name" aria-describedby="addon-wrapping">
              </div>
            </div>
          </div>

          <div class="col-md-12 my-4">
            <div class="">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="second name" aria-label="second-name" aria-describedby="addon-wrapping">
              </div>
            </div>
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
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-phone"></i></span>
                <input type="number" class="form-control" placeholder="mobile number" aria-label="mobile-number" aria-describedby="addon-wrapping">
              </div>
            </div>
          </div>

          <div class="col-md-12 my-4">
            <div class="">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" placeholder="choose a password" aria-label="password" aria-describedby="addon-wrapping">
              </div>
            </div>
          </div>

          <div class="col-md-12 my-4">
            <div class="">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" placeholder="retype password" aria-label="retype-password" aria-describedby="addon-wrapping">
              </div>
            </div>
          </div>
        
          <div class="col-12 my-4">
          <div class="w-75 mx-auto">
            <button class="w-100 btn btn-primary" type="submit">Register</button>
          </div>
        </div>
          <br/>
        </form>

  </div>
</div>







<?php
 include('../components/footer/footer.php')
?>