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
            <h1 class="m-0">Create Blog Posts</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Make a blog
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Upload Blog Image</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Blog Title</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Blog Title here">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput2" class="form-label">Blog Content</label>
                  <textarea id="editor" name="editor" placeholder="Blog Content Goes here">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                  </textarea>
                  <p>OR</p>
                  <textarea class="form-control" placeholder="contents" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Category</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>select category</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3">
                  
                </div>
              </form>
            </div>
            <div class="card-footer">
              <a class="btn btn-outline-primary float-right">Submit Blog</a>
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
