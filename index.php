

<?php

// header navbar include 
// include('components/head/head.php');
include('components/navBar/navBar.php');
?> 


<div class="w-100 m-0 p-0"> 


      <!-- top landing home screen  -->
      <div class="home-screen">
        <video src="resources/videos/bg2.mp4" class="d-none d-sm-block" autoplay width="100%" muted loop></video>
        <video src="resources/videos/bg3.mp4" class="d-block d-sm-none" autoplay width="100%" muted loop></video>

        <div class="overlay-style">
        </div>
        <br/>
        <div class="home-text">
          <div class="text-start float-left">
              <div class="animate-opacity text-start mt-5 text-light p-md-5 p-2">
                <h1 class=" w-md-50">The world of martial art skill acquisition<br/> and enhancement learning.</h1>
                <p class=" fs-3 fst-italic">Learn and refine your skill on karate <br/>and other martial art skills.</p>
                <p class=" fs-5 fst-italic">fun, fitness for a purpose. children, adult and family classes available.</p>

                <div class="mt-5 w-100 animate-bottom d-none d-md-block">
                  <a href="auth/login.php" class="mx-1 mx-md-3 btn btn-lg btn-outline-light ">Join the train</a>
                  <a href="#contact" class="mx-1 mx-md-3 btn btn-lg btn-outline-danger">Contact</a>
                </div>
              </div>
          </div>

          <div class="animate-right d-none d-md-block top-0 mt-5 ml-5 float-right" style="margin-top: -50px;">
            <div class="mx-3">
              <div class="text-white show">
                <i class="show-icon flaticon flaticon-martial-arts"></i>
                <span class="show-text">Boxing sport art</span>
              </div>
              <div class="text-white show">
                <i class="show-icon flaticon flaticon-two-judo-fighters"></i>
                <span class="show-text">Judo sport art</span>
              </div>
              <div class="text-white show">
                <i class="show-icon flaticon flaticon-karate-2"></i>
                <span class="show-text">Karate art</span>
              </div>
              <div class="text-white show">
                <i class="show-icon flaticon flaticon-breaking"></i>
                <span class="show-text">Hand workout </span>
              </div>
              <div class="text-white show">
                <i class="show-icon flaticon flaticon-fist"></i>
                <span class="show-text">Fist positioning</span>
              </div>
              <div class="text-white show">
                <i class="show-icon flaticon flaticon-kick-2"></i>
                <span class="show-text">Kick workout</span>
              </div>
              <div class="text-white show">
                <i class="show-icon flaticon flaticon-nunchaku"></i>
                <span class="show-text">Nunchaku</span>
              </div>
              <div class="text-white show">
                <i class="show-icon flaticon flaticon-kimono-8"></i>
                <span class="show-text">Kimono</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- banner  -->
      <div class="w-100 bg-white shadow position-relative" style="min-height:100px">
        <div class="float-left text-dark fs-5 fw-bold mx-2 mx-md-3 ml-md-5 mt-0 mt-md-4">
          <p>Lagos state based best karate organisation.<br/> Established in the year 2017.</p>
        </div>
        <div class="float-right mr-md-5 d-none d-md-block">
          <img src="images/banner.png" alt="banner" style="width:700px; max-height:90px"/>
        </div>
      </div>


      <!-- flex banner in form of link display  -->
      <div class="mt-5 w-100">
        <div class=" container-fluid">
          <div class="row">
            <div class="col-md-4 my-2">
              <div class="flex flex-join">
                <a href="auth/register.php" class=" flex-btn text-center">
                  <button>
                    Join karate focus
                  </button>
                </a>
              </div>
            </div>
            <div class="col-md-4 my-2">
              <div class="flex flex-event">
                <a href="pages/events.php" class=" flex-btn text-center">
                  <button>
                    Events
                  </button>
                </a>
              </div>
            </div>
            <div class="col-md-4 my-2">
              <div class="flex flex-news">
                <a href="blog/index.php" class=" flex-btn text-center">
                  <button>
                    News & Blogs
                  </button>
                </a>
              </div>
            </div>
            <div class="col-md-4 my-2">
              <div class="flex flex-tour">
                <a href="pages/documents.php" class=" flex-btn text-center">
                  <button>
                    Tournaments
                  </button>
                </a>
              </div>
            </div>
            <div class="col-md-4 my-2">
              <div class="flex flex-clubs">
                <a href="#clubs" class=" flex-btn text-center">
                  <button>
                    Clubs
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- about the page section  -->
      <div class="home-about w-100 bg-light mt-5" id="about">
        <div class="">
          <br/>
          <div class="container my-md-5">
            <div class="row">
              <div class="col-md-6 d-none d-md-block">
                <img src="images/flex/about.jpg" alt="about" style="width:100%;" />
              </div>
              <div class="col-md-6">
                <p class="fs-2 fst-italic">Karate Focus</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea distinctio impedit dolor pariatur, quaerat illo laudantium nobis tempora sit reiciendis deleniti laboriosam aliquid ab atque iusto harum cumque esse?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea distinctio impedit dolor pariatur, quaerat illo laudantium nobis tempora sit reiciendis deleniti laboriosam aliquid ab atque iusto harum cumque esse?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ea distinctio impedit dolor pariatur, quaerat illo laudantium nobis tempora sit reiciendis deleniti laboriosam aliquid ab atque iusto harum cumque esse?</p>
                
                <p class="float-start fw-bold">updated april 29 2017</p>
                <a class="float-end" href="pages/about.php">Read More..</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- clubs section  -->
      <div id="clubs"></div>
      <div class="">
      <div>
        <div class="container">
          <div class="fs-2">
            <p>Karate Focus Clubs</p>
            <hr/>
          </div>
          <div class="row">
            <div class="col-md-3 my-3">
                <img src="images/flex/about.jpg" alt="about" style="width:100%;" />
            </div>
            <div class="col-md-3 my-3">
                <img src="images/flex/join.jpg" alt="about" style="width:100%;" />
            </div>
            <div class="col-md-3 my-3">
                <img src="images/flex/event.jpg" alt="about" style="width:100%;" />
            </div>
            <div class="col-md-3 my-3">
                <img src="images/flex/new.jpg" alt="about" style="width:100%;" />
            </div>
            <div class="col-md-3 my-3">
                <img src="images/flex/reg.jpg" alt="about" style="width:100%;" />
            </div>
            <div class="col-md-3 my-3">
                <img src="images/flex/news2.jpg" alt="about" style="width:100%;" />
            </div>
            <div class="col-md-3 my-3">
                <img src="images/flex/news3.jpg" alt="about" style="width:100%;" />
            </div>
            <div class="col-md-3 my-3">
                <img src="images/flex/news4.jpg" alt="about" style="width:100%;" />
            </div>
          </div>
        </div>
      </div>
      </div>

      <div>
        <div>

        </div>
      </div>





      <br/>


      <!-- footer include  -->
      <?php
      include('components/footer/footer.php')
      ?>

      <script>

      </script>
</div>