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
            <h1 class="m-0">Add New Event</h1>
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
                Add Event
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form class="container">
                <div class="row">
                  <div class="col-md-6">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Event Image</label>
                        <input class="form-control my-2" type="file" id="formFile1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Event Title">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">About Event</label>
                        <textarea class="form-control" placeholder="About Event" id="exampleFormControlTextarea2" rows="3"></textarea>
                      </div>
                      <!-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Level</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin Level">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Club</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Admin Club">
                      </div> -->
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">About Event</label>
                        <textarea id="editor" name="editor" placeholder="Blog Content Goes here">
                          Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                      </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <a class="btn btn-outline-primary float-right">Add Event</a>
            </div>
          </div>
    </section>
    <!-- /.content -->



    <!-- another content -->
    <section class="content">
      <div class="container-fluid">
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

  <script>
    CKEDITOR.replace('editor')
  </script>
    
    
</div>
