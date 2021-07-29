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
      <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">
              Blog Activities
            </h3>
        </div>
        <div class="card-body">
          <div class="container-fluid table-responsive">
            <table class="table table-hover">
              <thead class="bg-primary">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col" style="width: 10%;">Img</th>
                  <th scope="col">Title</th>
                  <th scope="col" style="width: 40%;">Content</th>
                  <th scope="col">Category</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td>The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-primary">view</a>  <a class="btn btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td>The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-primary">view</a>  <a class="btn btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td>The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-primary">view</a>  <a class="btn btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td>The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-primary">view</a>  <a class="btn btn-danger">delete</a></td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <p class="">Karate Focus Blog Posts</p>
          </div>
      </div>
    </section>

    <!-- /.content -->



    <!-- another content -->
    <!-- Main content -->
    <section class="content">
      <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">
              Blog Activities
            </h3>
        </div>
        <div class="card-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                  <div class="">
                    <div class="card card-hover">
                      <div class="w-25 float-left">
                        <img src="../images/sb.jpg" alt="..." width="100%" height="150px"/>
                      </div>
                      <div class="w-50 float-right">
                        <!-- <span><img src="../images/nas.jpg" alt="blog" class="rounded-circle" /></span> -->
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-6">

              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <p class="">Karate Focus Blog Posts</p>
        </div>
      </div>
    </section>



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
