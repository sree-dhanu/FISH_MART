<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fish Mart</title>
  <link rel="stylesheet" href="/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
  <link rel="stylesheet" href="/css/tooplate-wave-cafe.css">
  <!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style>
    label {
     /* background-color: aqua; */
      color: lightseagreen;
    }

  </style>

</head>

<body>
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-fish fa-3x tm-site-logo"></i>
            <h1 class="tm-site-name">Fish Mart</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="/" class="tm-page-link active">
                  <i class="fas fa-home tm-page-link-icon"></i>
                  <span class="tm-site-name">Home</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="/userviewproducts" class="tm-page-link">
                  <i class="fas fa-archive tm-page-link-icon"></i>
                  <span class="tm-site-name">View products</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="/uservieworders" class="tm-page-link">
                  <i class="fas fa-copy tm-page-link-icon"></i>
                  <span class="tm-site-name">View Orders</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="/viewcart" class="tm-page-link">
                  <i class="fas fa-shopping-cart tm-page-link-icon"></i>
                  <span class="tm-site-name">View Cart</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="/userviewreceipies" class="tm-page-link">
                  <i class="fas fa-pepper-hot tm-page-link-icon"></i>
                  <span class="tm-site-name">View Receipies</span>
                </a>
              </li>

              <li class="tm-page-nav-item">
                <a href="/myprofile" class="tm-page-link">
                  <i class="fas fa-user tm-page-link-icon"></i>
                  <span class="tm-site-name">My Profile</span>
                </a>
              </li>

              <li class="tm-page-nav-item">
                <a href="/userabout" class="tm-page-link">
                  <i class="fas fa-cube tm-page-link-icon"></i>
                  <span class="tm-site-name">User About</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="/userindex" class="tm-page-link">
                  <i class="fas fa-circle tm-page-link-icon"></i>
                  <span class="tm-site-name">Logout</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      @yield('fishbody')
    </div>

  </div>
  
  <!-- Background video -->
  <div class="tm-video-wrapper">
    <i id="tm-video-control-button" class="fas fa-pause"></i>
    <video autoplay muted loop id="tm-video">
      <source src="/video/wave-cafe-video-bg.mp4" type="video/mp4">
    </video>
  </div>

  <script src="/js/jquery-3.4.1.min.js"></script>
  <script>
    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }

    function initPage() {
      let pageId = location.hash;

      if (pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`));
        showPage($(pageId));
      } else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }

    $(document).ready(function() {

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {

        if (window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });


      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault();
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function() {
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
  </script>
</body>

</html>