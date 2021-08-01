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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Index Admin</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Events</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        



            
        <div class="w-100 bg-light ">
        <div class=" my-5">
            <br/>
            <div class="container my-md-5">
            <div class="row">
                <div class="col-md-6">
                <img src="../images/flex/about.jpg" alt="about" style="width:100%;" />
                <div class="row my-3">
                    <div class="col-md-6">
                    <img src="../images/masters/master.jpg" alt="about" style="width:100%;" height="200px" />
                    </div>
                    <div class="col-md-6">
                    <img src="../images/masters/master2.jpg" alt="about" style="width:100%;" height="200px" />
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <p class="fs-3 fst-italic my-5 text-center">Anonymous Master: Anonymous Level</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea distinctio impedit dolor pariatur, quaerat illo laudantium nobis tempora sit reiciendis deleniti laboriosam aliquid ab atque iusto harum cumque esse?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea distinctio impedit dolor pariatur, quaerat illo laudantium nobis tempora sit reiciendis deleniti laboriosam aliquid ab atque iusto harum cumque esse?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea distinctio impedit dolor pariatur, quaerat illo laudantium nobis tempora sit reiciendis deleniti laboriosam aliquid ab atque iusto harum cumque esse?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea distinctio impedit dolor pariatur, quaerat illo laudantium nobis tempora sit reiciendis deleniti laboriosam aliquid ab atque iusto harum cumque esse?</p>
                
                
                <p class="float-start fw-bold ">Anonymous Club</p>
                <p class="float-end fw-bold ">--Appointed 29 2017</p>
                </div>
                <div class="col-md-12 my-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis adipisci possimus omnis provident. Laudantium, fugiat illo minus, incidunt, cum veniam beatae quo ex autem iure est quidem aliquid! Error minima reprehenderit quae eos, nihil fugiat aperiam repellat molestiae et officiis! Dolores placeat, eligendi minus iusto voluptas magni, itaque fugit hic voluptatibus tempore, ab rem voluptatem reprehenderit necessitatibus neque excepturi aut adipisci! Fugiat in dolor saepe ipsa iure eius sit, sed numquam quos error at quaerat omnis rem ad expedita iusto non dolorum illum quo nesciunt suscipit. Est, tempora perferendis expedita blanditiis et fuga repellat culpa autem qui nemo earum officiis.</p>
                
                  </div>
                </div>
              </div>
              <div class="my-5">
                 <a class="float-start fw-bold btn btn-primary" href="./editAdmin.php">Edit Admin Data</a>
                 <a class="float-end fw-bold btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Admin</a>
               </div>
            </div>


        <!-- modals >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  -->
        <div>

        <!--delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this admin?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
            </div>
        </div>
        </div>




        </div>




      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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

