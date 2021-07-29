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
            <h1 class="m-0">Blog Created Categories</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content my-5 border">
      
      <div class="card card-outline card-primary">
        <div class="card-header">
          <div class="w-50 float-left">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add Category
            </button>
    
          </div>
          <div class="w-50 float-right d-flex">
            <input class="form-control w-50" placeholder="search a member" />
            <button class="btn btn-primary mx-2">Search Categories</button>
          </div>

        </div>
        <div class="card-body">
          <div class="container-fluid table-responsive">
          <table class="table table-hover">
            <thead class="bg-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Create Date</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Home and properties</td>
                <td>24-08-2020</td>
                <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">delete</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Karate</td>
                <td>24-08-2020</td>
                <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">delete</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Martial Art</td>
                <td>24-08-2020</td>
                <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">delete</a></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Boxing</td>
                <td>24-08-2020</td>
                <td><a class="btn btn-primary">Edit</a> <a class="btn btn-danger">delete</a></td>
              </tr>
            </tbody>
            </table>
          </div>
          
        </div>
        <div class="card-footer">
          <p>Karate Focus Blog Post Categories</p>
        </div>
      </div>

    </section>
    <!-- /.content -->





    <!-- Modal to add categories -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a new category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" placeholder="Input new category">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Add</button> -->
            </div>
            </div>
        </div>
        </div>

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
