<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="#000">
      <link rel="shortcut icon" href="images/trans.png">
      <link rel="stylesheet" href="plugins/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
      <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.css">
      <link rel="stylesheet" href="init/css/index.css">
      <link rel="stylesheet" href="comm/comm.css">
    <title>verBox</title>
      <script src="comm/loader.js" type="text/javascript"></script>
  </head>
    <?php
        $loginer = "login";
        if (isset($_COOKIE[$loginer])) {
            $login_status = $_COOKIE[$loginer];
        }
    ?>
  <body>
      <div class="container-fluid">
          <div class="loader">
              <div class="loadinganimation">
              </div>
          </div>
          <div class="main">
              <div class="header-all">
              <div class="logo-div">
                    <h2 title="verBox" class="flow-box-i">verBox<img alt="verBox" src="images/trans.png" class="logo" /></h2>
              </div>
              <div class="menu-div">
                  <div class="round-div" close="false">
                      <i class="fa fa-bars ignor"></i>
                  </div>
              </div>
          </div>
          <div class="menu-all">
              <?php
                if (isset($login_status) && $login_status === "false") {
                    ?>
              <div class="login-signup-options">
                  <a href="javascript:verBox.signUpLoginLocator(true, 'login')">
                        <div title="login" class="login">
                            <h2 class="user">Login <i class="fa fa-user user"></i></h2>
                        </div>
                  </a>
                  <a href="javascript:verBox.signUpLoginLocator(true, 'signup')">
                        <div title="sign up" class="signup">
                            <h2 class="user">Sign Up <i class="fa fa-user user"></i></h2>
                        </div>
                  </a>
              </div>
              <?php
                } else {
                    ?>
              <script>
                  document.cookie = "login=false";
                  setTimeout(function () {
                      window.location.reload();
                  }, 3000);
              </script>
              <?php
                }
              ?>
              <div class="menu-all-over">
                  <h1 class="buttons-in-menu-all" lin="">Home</h1>
                  <h1 class="buttons-in-menu-all" lin="">About</h1>
                  <h1 class="buttons-in-menu-all" lin="">Get In Touch</h1>
                  <h1 class="buttons-in-menu-all" lin="">Open Projects</h1>
                  <h1 class="buttons-in-menu-all" lin="">Report</h1>
                  <div class="mobile-buttons-link">
                      <ul style="list-style-type: none;">
                          <li class="mobile-list" lin=""><h1>Home</h1></li>
                          <li class="mobile-list" lin=""><h1>About</h1></li>
                          <li class="mobile-list" lin=""><h1>Get In Touch</h1></li>
                          <li class="mobile-list" lin=""><h1>Open Project</h1></li>
                          <li class="mobile-list" lin=""><h1>Report</h1></li>
                      </ul>
                  </div>
              </div>
          </div>
              <div class="scroll-to-top">
                  <i class="fa fa-chevron-up ho"></i>
              </div>
              <!--contents-->

              <div style="height:100vh;width:100vw;background-image: url(comm/get%20on%20work%20from.png);"></div>
              <div style="height:100vh;width:100vw;background-image: url(comm/get%20on%20work%20from.png);">
              </div>
              <div style="height:100vh;width:100vw;background-image: url(comm/get%20on%20work%20from.png);">
                  <textarea id="test" style="z-index: 9999999999;color: black;"></textarea>
              </div>
              <div style="height:100vh;width:100vw;background-image: url(comm/get%20on%20work%20from.png);"></div>

              <!--contents-end-->
          </div>
      </div>
      <script src="plugins/jquery-3.2.1/jquery-3.2.1.js" type="text/javascript"></script>
      <script src="comm/comm.js" type="text/javascript"></script>
      <script src="comm/noti.js" type="text/javascript"></script>
      <script src="init/js/base.js" type="text/javascript"></script>
  </body>
</html>
