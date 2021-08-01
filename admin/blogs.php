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
                  <th scope="col" class="d-none" style="width: 40%;">Content</th>
                  <th scope="col">Category</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td class="d-none">The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-sm btn-primary" href="./singleBlog.php">view</a>  <a class="btn btn-sm btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td class="d-none">The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-sm btn-primary" href="./singleBlog.php">view</a>  <a class="btn btn-sm btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td class="d-none">The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-sm btn-primary" href="./singleBlog.php">view</a>  <a class="btn btn-sm btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Narcissism</td>
                  <td class="d-none">The content of this topic is very wide but we shorten it already so read more...</td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-sm btn-primary" href="./singleBlog.php">view</a>  <a class="btn btn-sm btn-danger">delete</a></td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <p class="float-start d-none d-md-block">Karate Focus Blog Posts</p>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
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
              Blog Activities Card Form
            </h3>
          </div>
        <div class="card-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <a href="./singleBlog.php" class="text-secondary text-decoration-none shadow-sm card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-5">
                    <img src="../images/sb.jpg" alt="..." width="100%" height="100%"/>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <div class="my-2">
                          <img src="../images/user.jpg" class="rounded-circle" alt="author" width="30px" height="30px" />
                          <span class="fw-bold"> -- 15 june</span>
                        </div>
                        <h5 class="card-title fw-bold">Blog Title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Category: Blog Category</small></p>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="./singleBlog.php" class="text-secondary text-decoration-none shadow-sm card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-5">
                    <img src="../images/sb.jpg" alt="..." width="100%" height="100%"/>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <div class="my-2">
                          <img src="../images/user.jpg" class="rounded-circle" alt="author" width="30px" height="30px" />
                          <span class="fw-bold"> -- 15 june</span>
                        </div>
                        <h5 class="card-title fw-bold">Blog Title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Category: Blog Category</small></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
              <a href="./singleBlog.php" class="text-secondary text-decoration-none shadow-sm card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-5">
                    <img src="../images/sb.jpg" alt="..." width="100%" height="100%"/>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <div class="my-2">
                          <img src="../images/user.jpg" class="rounded-circle" alt="author" width="30px" height="30px" />
                          <span class="fw-bold"> -- 15 june</span>
                        </div>
                        <h5 class="card-title fw-bold">Blog Title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Category: Blog Category</small></p>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="./singleBlog.php" class="text-secondary text-decoration-none shadow-sm card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-5">
                      <img src="../images/sb.jpg" alt="..." width="100%" height="100%"/>
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <div class="my-2">
                            <img src="../images/user.jpg" class="rounded-circle" alt="author" width="30px" height="30px" />
                            <span class="fw-bold"> -- 15 june</span>
                          </div>
                          <h5 class="card-title fw-bold">Blog Title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Category: Blog Category</small></p>
                        </div>
                      </div>
                    </div>
                  </a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <p class="float-start d-none d-md-block">Karate Focus Blog Posts</p>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">
              Blog Comments
            </h3>
        </div>
        <div class="card-body">
          <div class="container-fluid table-responsive">
            <table class="table table-hover">
              <thead class="bg-primary">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col" style="width: 10%;">Blog Img</th>
                  <th scope="col">Blog Title</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Anonymous</td>
                  <td>anonymous@gmail.com</td>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-sm btn-success" href="./singleBlog.php">Approve</a>  <a class="btn btn-sm btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Anonymous</td>
                  <td>anonymous@gmail.com</td>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-sm btn-success" href="./singleBlog.php">Approve</a>  <a class="btn btn-sm btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Anonymous</td>
                  <td>anonymous@gmail.com</td>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-sm btn-success" href="./singleBlog.php">Approve</a>  <a class="btn btn-sm btn-danger">delete</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Anonymous</td>
                  <td>anonymous@gmail.com</td>
                  <td><img src="../images/nas.jpg" alt="..." width="80px" height="60px" /></td>
                  <td>Human Activity</td>
                  <td><a class="btn btn-sm btn-success" href="./singleBlog.php">Approve</a>  <a class="btn btn-sm btn-danger">delete</a></td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <p class="float-start d-none d-md-block">Karate Focus Blog Comments</p>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
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
