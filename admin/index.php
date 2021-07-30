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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>150</h3>

                <p>Visitors</p>
              </div>
              <div class="icon">
                <i class="fa fa-eye"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Members</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Instructors</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-tie"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Posts</p>
              </div>
              <div class="icon">
                <i class="fa fa-newspaper"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <hr/>



    <!-- another content -->
    <!-- few blogs on click of any should go to the blogs page  -->
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
                  <td><a class="btn btn-primary" href="./singleBlog.php">view</a>  <a class="btn btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td>The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-primary" href="./singleBlog.php">view</a>  <a class="btn btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td>The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-primary" href="./singleBlog.php">view</a>  <a class="btn btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td>The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-primary" href="./singleBlog.php">view</a>  <a class="btn btn-danger">delete</a></td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <a href="./blogs.php" class=" btn btn-lg btn-primary ">View all</a>
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
