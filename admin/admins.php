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
            <h1 class="m-0">Admins and Instructors Page</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content my-5 border">
      <div class="container-fluid table-responsive">
        <div class="my-3 col-6 float-right d-flex">
          <input class="form-control w-50" placeholder="search an admin" />
          <button class="btn btn-primary mx-2">Search</button>
        </div>
      <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Img</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Club</th>
            <th scope="col">Appointed At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><img src="" alt="..." /></td>
            <td>Dev</td>
            <td>Olawale</td>
            <td>Tiger</td>
            <td>24-08-2020</td>
            <td><a class="btn btn-primary">view</a><a class="btn btn-danger">disable</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td><img src="" alt="..." /></td>
            <td>Dev</td>
            <td>Olawale</td>
            <td>Tiger</td>
            <td>24-08-2020</td>
            <td><a class="btn btn-primary">view</a><a class="btn btn-danger">disable</a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td><img src="" alt="..." /></td>
            <td>Dev</td>
            <td>Olawale</td>
            <td>Tiger</td>
            <td>24-08-2020</td>
            <td><a class="btn btn-primary">view</a><a class="btn btn-danger">disable</a></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td><img src="" alt="..." /></td>
            <td>Dev</td>
            <td>Olawale</td>
            <td>Tiger</td>
            <td>24-08-2020</td>
            <td><a class="btn btn-primary">view</a><a class="btn btn-danger">disable</a></td>
          </tr>
        </tbody>
        </table>
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
