<?php
 include('../components/admin/head/mainhead.php')
?>




<div class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- Navbar -->
  <!-- Main Sidebar Container -->
 <?php
 include('../components/admin/loader/loader.php');


 include('../components/admin/navbar/navbar.php');

 include('../components/admin/navbar/sidebar.php');
 ?>

  

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registered Members</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content my-5 border">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <!-- <h3 class="card-title">Karate Focus Members</h3> -->
          <div class="card-title w-50 float-right d-flex">
            <input class="form-control w-50" placeholder="search a member" />
            <button class="btn btn-primary mx-2">Search</button>
          </div>
        </div>
        <div class="card-body">
          <div class="container-fluid table-responsive">
          <table class="table table-hover">
            <thead class="bg-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col" style="width: 10%">Img</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Club</th>
                <th scope="col">Join Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><img src="../images/user.jpg" alt="..." height="60px" /></td>
                <td>Dev</td>
                <td>Olawale</td>
                <td>Tiger</td>
                <td>24-08-2020</td>
                <td><a class="btn btn-primary">view</a>  <a class="btn btn-danger">delete</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><img src="../images/user.jpg" alt="..." height="60px" /></td>
                <td>Dev</td>
                <td>Olawale</td>
                <td>Tiger</td>
                <td>24-08-2020</td>
                <td><a class="btn btn-primary">view</a>  <a class="btn btn-danger">delete</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><img src="../images/user.jpg" alt="..." height="60px" /></td>
                <td>Dev</td>
                <td>Olawale</td>
                <td>Tiger</td>
                <td>24-08-2020</td>
                <td><a class="btn btn-primary">view</a>  <a class="btn btn-danger">delete</a></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><img src="../images/user.jpg" alt="..." height="60px" /></td>
                <td>Dev</td>
                <td>Olawale</td>
                <td>Tiger</td>
                <td>24-08-2020</td>
                <td><a class="btn btn-primary">view</a>  <a class="btn btn-danger">delete</a></td>
              </tr>
            </tbody>
            </table>
          </div>

        </div>
      </div>
    </section>
    <!-- /.content -->



    <!-- another content -->
  </div>
  
  <!-- footer  -->
  <?php
  include('../components/admin/footer/mainfooter.php')
  ?>

</div>
<!-- ./wrapper -->


  <!-- footer  -->
  <?php
  include('../components/admin/footer/script.php')
  ?>

    
    
</div>
