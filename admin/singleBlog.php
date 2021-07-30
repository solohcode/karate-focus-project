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
            <h1 class="m-0">Index Blog</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
            <div class="container py-5">
              <div class="row">
                <div class="col-md-9">
                  <div class="">
                    <img src="../images/sb.jpg" alt="nas" width="100%" height="500px" />
                  </div>
                </div>
                <div class="col-md-3 border border-round">
                  <div class="my-3">
                    <p class="fw-bold fs-4 my-3">Category</p>
                    <p class="fs-5">:-   Human Study</p>
                  </div>
                  <hr/>
                  <div class="my-3">
                    <p class="fw-bold fs-4 my-3">Tags</p>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <br/>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <br/>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <br/>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                    <b class="btn btn-secondary btn-sm m-2">human</b>
                  </div>
                </div>
                <div class="col-md-12 my-3 px-5">
                  <div>
                      <div class="my-2">
                          <img src="../images/user.jpg" class="mx-5 rounded-circle" alt="author" width="40px" height="40px" />
                          <span class="fw-bold mx-5"> -- 15 june 2020</span>
                          <p class="fs-1">Single Blog Title</p>
                        </div>
                  </div>
                  <div class="fs-6">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                      Sint maiores distinctio quibusdam, 
                      totam tempore laboriosam perferendis eveniet debitis expedita doloribus quidem deserunt quia vitae. 
                      Eaque doloribus doloremque ad magni ipsum, eveniet porro temporibus totam qui praesentium vel, 
                      deserunt molestias voluptatum natus? Deserunt quidem pariatur porro laudantium officia illum tempora saepe!
                    </p>
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                      Sint maiores distinctio quibusdam, 
                      totam tempore laboriosam perferendis eveniet debitis expedita doloribus quidem deserunt quia vitae. 
                      Eaque doloribus doloremque ad magni ipsum, eveniet porro temporibus totam qui praesentium vel, 
                      deserunt molestias voluptatum natus? Deserunt quidem pariatur porro laudantium officia illum tempora saepe!
                    </p>
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                      Sint maiores distinctio quibusdam, 
                      totam tempore laboriosam perferendis eveniet debitis expedita doloribus quidem deserunt quia vitae. 
                      Eaque doloribus doloremque ad magni ipsum, eveniet porro temporibus totam qui praesentium vel, 
                      deserunt molestias voluptatum natus? Deserunt quidem pariatur porro laudantium officia illum tempora saepe!
                    </p>
                  </div>

                  <div class="my-5">
                    <a class="float-start fw-bold btn btn-primary" href="./editBlog.php">Edit Blog</a>
                    <a class="float-end fw-bold btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Blog</a>
                  </div>
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










<!-- modals >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  -->
<div>

<!--delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this Blog?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-danger">Delete Blog</button>
    </div>
    </div>
</div>
</div>




</div>

