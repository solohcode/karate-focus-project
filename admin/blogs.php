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
            <h1 class="m-0">Blog Posts</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid table-responsive">
      <div class="my-4 fs-5 fw-bold">
        <p>Blog Activities</p>
      </div>
      <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Img</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><img src="" alt="..." /></td>
            <td>Narcissism</td>
            <td>The content of this topic is very wide but we shorten it already so read more...</td>
            <td>Human Activity</td>
            <td>'mental','meditate','mind'</td>
            <td><a class="btn btn-primary">view</a><a class="btn btn-danger">delete</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td><img src="" alt="..." /></td>
            <td>Narcissism</td>
            <td>The content of this topic is very wide but we shorten it already so read more...</td>
            <td>Human Activity</td>
            <td>'mental','meditate','mind'</td>
            <td><a class="btn btn-primary">view</a><a class="btn btn-danger">delete</a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td><img src="" alt="..." /></td>
            <td>Narcissism</td>
            <td>The content of this topic is very wide but we shorten it already so read more...</td>
            <td>Human Activity</td>
            <td>'mental','meditate','mind'</td>
            <td><a class="btn btn-primary">view</a><a class="btn btn-danger">delete</a></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td><img src="" alt="..." /></td>
            <td>Narcissism</td>
            <td>The content of this topic is very wide but we shorten it already so read more...</td>
            <td>Human Activity</td>
            <td>'mental','meditate','mind'</td>
            <td><a class="btn btn-primary">view</a><a class="btn btn-danger">delete</a></td>
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
