<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="#000">
      <link rel="shortcut icon" href="images/trans.png">
      <link rel="stylesheet" href="plugins/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
      <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.css">
      <link rel="stylesheet" href="init/css/login.css">
      <link rel="stylesheet" href="comm/comm.css">
      <script src="comm/loader.js" type="text/javascript"></script>
      <?php
if (isset($_POST['name'])) {
    $filename = 'users/' . $_POST['name'] . '.json';
    if (file_exists($filename) === true) {
        $title = 'Helllo ' . $_POST['name'] . " ! - verBox";
        $login_user_name_verification = "true";
        echo "<script>setInterval(function () {document.cookie = \"user_tried=" . $_POST['name'] . "\"}, 1);</script>";
    } else {
        $title = 'Unable to find the user - verBox';
        $login_user_name_verification = "null";
    }
} else {
    $title = 'Login to continue - verBox';
    $login_user_name_verification = "false";
}
?>
      <title><?php echo $title; ?></title>
  </head>
    <?php
        $loginer = "login";
        if (isset($_COOKIE[$loginer])) {
            $login_status = $_COOKIE[$loginer];
        }
    ?>
  <body>
      <?php
      if (isset($_POST['password']) && isset($_COOKIE['user_tried'])) {
          $password = $_POST['password'];
          $o = file_get_contents("users/" . $_COOKIE["user_tried"] . ".json");
          echo "<script>var xyzNm = " . $o . "; var xmqz = '$password'; if(xyzNm.userData[1].password[0] === xmqz) { window.location.replace('http://localhost/verbox/users/" . $_COOKIE['user_tried'] . "/index.php');cookieSetup() } else { alert(\"wrong password\");} function cookieSetup() { document.cookie = 'login=true'; }
          </script>";
      }
      ?>
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

              <div class="lo-g-err-han-for-con container">
                <div class="log-g-erroer-form">
                  <form class="lo-g-err-inner-frm" action="" method="post">
                    <h3 style="color: #000 !important; font-weight: bold !important; margin-left: 50px; padding-top: 50px;">Report error</h3><hr />
                    <p style="color: rgb(28, 41, 56); margin-left: 50px; font-weight: 800;">What was the error ?  <input id="q" type="text" name="errorname" placeholder="error" required></input></p>
                    <p style="color: rgb(28, 41, 56); margin-left: 50px; font-weight: 800; margin-top: 50px;">What is your name ?  <input id="w" type="text" name="username" placeholder="username" required></input></p>
                    <p style="color: rgb(28, 41, 56); margin-left: 50px; font-weight: 800;margin-top: 50px;">Description:  <textarea id="e" name="des" rows="4" cols="40" required></textarea></p>
                    <p style="color: rgb(28, 41, 56); margin-left: 50px; font-weight: 800;">Email address ?  <input id="r" type="address" name="email" placeholder="Email" required></input></p>
                    <div class="submit-buuton-err">
                      <h4 style="text-align: center; padding-top: 20px;">Submit</h4>
                      <input type="hidden" name="err" value="err" />
                    </div>
                  </form>
                </div>
              </div>

              <div class="main-back">
                  <?php
                  if ($login_user_name_verification === "false") {
                  ?>
                  <div class="form-screen-b">
                      <img src="images/trans.png" alt="@verBox" class="logo-dk" />
                      <h3>Sign in</h3>
                      <p>to verBox</p>
                      <p id="user-name">.</p>
                      <form action="" method="post">
                          <input type="text" class="input" placeholder="user name" name="name" required/>
                          <label style="z-index: -1 !important; width: 1000px !important; height: auto !important;" for="submit"><div class="submiter"><p>Next</p></div></label>
                          <input type="submit" id="submit" style="display: none;" />
                          <h4 class="not-log-moreop"><a href="#">More options<i class="fa fa-chevron-circle-down drop"></i></a></h4>
                          <div class="more-op-not-log">
                            <div class="inline-not-log-divline" id="inline-not-log-divline-a"><p class="gmq"><i class="fa fa-user-plus im"></i>Sign up</p></div>
                            <div class="inline-not-log-divline" id="inline-not-log-divline-b"><p class="gmq"><i class="fa fa-question-circle im"></i>Faced any problem </p></div>
                          </div>
                      </form>
                  </div>
              <?php
                  } else if ($login_user_name_verification === "true") {
                      ?>

              <div class="form-screen-b">
                      <img src="images/trans.png" alt="@verBox" class="logo-dk" />
                      <h3>Hello <?php echo $_POST['name'] ?><span><i class="fa fa-chevron-circle-down drer"></i></span></h3>
                      <div class="fixed-not-my-a" clk="1"><p><i class="fa fa-address-book im"></i>Not your account</p></div>
                      <p>Welcome to verBox</p>
                      <p id="user-password">please enter your password</p>
                      <form action="" method="post">
                          <input type="password" class="input pa" placeholder="password" name="password" id="passer" required/><div><i class="fa fa-eye-slash fa-2x" id="changer" def="txt" style="color: #000 !important; margin-top: -25px; margin-left: 320px; cursor: pointer; color: #337ab7; !important"></i></div>
                          <label style="z-index: -1 !important; width: 1000px !important; height: auto !important;" for="submit"><div class="submiter"><p>Next</p></div></label>
                          <input type="submit" id="submit" style="display: none;" />
                          <h4 class="not-log-moreop"><a href="#">More options<i class="fa fa-chevron-circle-down drop"></i></a></h4>
                          <div class="more-op-not-log">
                            <div class="inline-not-log-divline" id="inline-not-log-divline-a"><p class="gmq"><i class="fa fa-user-plus im"></i>Sign up</p></div>
                            <div class="inline-not-log-divline" id="inline-not-log-divline-b"><p class="gmq"><i class="fa fa-question-circle im"></i>Faced any problem </p></div>
                          </div>
                      </form>
                  </div>

              <?php
                  } else if ($login_user_name_verification === "null") {
                      ?>
          <div class="form-screen-b">
                      <img src="images/trans.png" alt="@verBox" class="logo-dk" />
                      <h3>Sign in</h3>
                      <p>to verBox</p>
              <?php
                      $user_geter = $_POST['name'];
                      if (strlen($user_geter) > 15) {
                          $user_get = "";
                      } else {
                          $user_get = $user_geter;
                      }
                      ?>
                      <p id="user-name" style="word-wrap: break-word;"><?php echo "<b style=\"color: red !important\">unable to find user</b> " . $user_get ?></p>
                      <form action="" method="post">
                          <input type="text" class="input" placeholder="user name" name="name" required/>
                          <label style="z-index: -1 !important; width: 1000px !important; height: auto !important;" for="submit"><div class="submiter"><p>Next</p></div></label>
                          <input type="submit" id="submit" style="display: none;" />
                          <h4 class="not-log-moreop"><a href="#">More options<i class="fa fa-chevron-circle-down drop"></i></a></h4>
                          <div class="more-op-not-log">
                            <div class="inline-not-log-divline" id="inline-not-log-divline-a"><p class="gmq"><i class="fa fa-user-plus im"></i>Sign up</p></div>
                            <div class="inline-not-log-divline" id="inline-not-log-divline-b"><p class="gmq"><i class="fa fa-question-circle im"></i>Faced any problem </p></div>
                          </div>
                      </form>
                  </div>
          <?php
                  }
                      ?>
                      <?php
                      if (isset($_POST['errorname']) && isset($_POST['username']) && isset($_POST['des']) && isset($_POST['email'])) {
                        $err_err = $_POST['errorname'];
                        $err_user = $_POST['username'];
                        $err_des = $_POST['des'];
                        $err_em = $_POST['email'];
                        $errhandler = fopen("loginerruser.log", "a+");
                        $err = "Error [" . $err_err . "]" . "\n" . "recorded by : " . $err_user . "\n" . "error description : " . "\n" . $err_des . "\n" . "user email : \n" . $err_em  . "\n";
                        $err_divider = "``````````\t\t\t\t\t\t\t\t\t\t``````````\t\t\t\t\t\t\t\t\t\t``````````\t\t\t\t\t\t\t\t\t\t``````````\t\t\t\t\t\t\t\t\t\t``````````\t\t\t\t\t\t\t\t\t\t``````````\n";
                        $ttl_err = $err_divider . $err . $err_divider;
                        fwrite($errhandler, $ttl_err);
                        fclose($errhandler);
                      }
                       ?>

              <!--contents-end-->
          </div>
      </div>
      <div id="dev">
      </div>
      <script type="text/javascript">
      var devOps = {
        "switcherCr": function () {
          "use strict";
          var qw = document.createElement("button");
          var gEt = document.getElementById('dev');
          qw.setAttribute("style", "display:none");
          qw.setAttribute("accesskey", "d");
          qw.setAttribute("onclick", "devOps.verifySwitcher()");
          gEt.appendChild(qw);
        },
        "verifySwitcher": function () {
          "use strict";
          var qwe = document.createElement("div");
          var txter = document.createElement("h5");
          var txt = document.createTextNode("Enter password for developers side");
          txter.appendChild(txt);
          qwe.appendChild(txter);
          qwe.setAttribute("style", "height: 200px; width: 300px; background-color: rgba(154, 109, 237, 0.76); margin: auto; margin-top: 150px;  box-shadow: 50px 50px 5px #8888 !important; -webkit-box-shadow: 50px 50px 5px #888888 !important;");
          var xmq = document.getElementById('dev');
          var qweinput = document.createElement("input");
          qweinput.setAttribute("type", "password");
          qweinput.setAttribute("placeholder", "password");
          qweinput.setAttribute("id", "pasent");
          qweinput.setAttribute("style", "color: #000; border: none; outline: none; background: none; border-bottom: 1px solid white !important; left: 100px;");
          qwe.appendChild(qweinput);
          qwe.setAttribute("id", "gsq");
          xmq.appendChild(qwe);
          xmq.style.display = "block";
          devOps.createButt();
        },
        "createButt": function () {
          "use strict";
          var bkr = document.createElement("br");
          var zxg = document.createElement("button");
          var clser = document.createElement("button");
          var toappzxg = document.getElementById("gsq");
          var zxgtxt = document.createTextNode("submit");
          var clsertxt = document.createTextNode("close");
          zxg.appendChild(zxgtxt);
          zxg.setAttribute("style", "color: black !important; background: #9b91a7");
          zxg.setAttribute("onclick", "devOps.verifyAction(\"submit\")");
          clser.appendChild(clsertxt);
          clser.setAttribute("style", "color: black !important; background: #9b91a7;");
          clser.setAttribute("onclick", "devOps.verifyAction(\"close\")");
          toappzxg.appendChild(bkr);
          toappzxg.appendChild(zxg);
          toappzxg.appendChild(clser);
        },
        "verifyAction": function (qrs) {
          "use strict";
          if (qrs === "submit") {
            var thr = document.getElementById('pasent').value;
            var ges = {
              "paser": [
                "admin",
                "sahil",
                "sahil-design",
                "test",
                "design"
              ]
            };
            if (qrs === "submit") {
              if (thr === ges.paser[2]) {
                devOps.devStepUp();
              } else {
              }
            }
          } else if (qrs === "close") {
            document.getElementById('dev').style.display = "none";
          }
        }
      };
      function devOptToget() {
        "use strict";
        devOps.switcherCr();
      }
      devOptToget();
      </script>
      <script src="plugins/jquery-3.2.1/jquery-3.2.1.js" type="text/javascript"></script>
      <script src="comm/comm.js" type="text/javascript"></script>
      <script src="init/js/loginbase.js" type="text/javascript"></script>
      <script src="comm/noti.js" type="text/javascript"></script>
  </body>
</html>
<!--

var devOps = {
  "switcherCr": function () {
    "use strict";
    var qw = document.createElement("button");
    var gEt = document.getElementById('dev');
    qw.setAttribute("style", "display:none");
    qw.setAttribute("accesskey", "d");
    qw.setAttribute("onclick", "devOps.verifySwitcher()");
    gEt.appendChild(qw);
  },
  "verifySwitcher": function () {
    "use strict";
    var qwe = document.createElement("div");
    var txter = document.createElement("h5");
    var txt = document.createTextNode("Enter password for developers side");
    txter.appendChild(txt);
    qwe.appendChild(txter);
    qwe.setAttribute("style", "height: 200px; width: 300px; background-color: rgba(154, 109, 237, 0.76); margin: auto; margin-top: 150px;  box-shadow: 50px 50px 5px #8888 !important; -webkit-box-shadow: 50px 50px 5px #888888 !important;");
    var xmq = document.getElementById('dev');
    var qweinput = document.createElement("input");
    qweinput.setAttribute("type", "password");
    qweinput.setAttribute("placeholder", "password");
    qweinput.setAttribute("id", "pasent");
    qweinput.setAttribute("style", "color: #000; border: none; outline: none; background: none; border-bottom: 1px solid white !important; left: 100px;");
    qwe.appendChild(qweinput);
    qwe.setAttribute("id", "gsq");
    xmq.appendChild(qwe);
    xmq.style.display = "block";
    devOps.createButt();
  },
  "createButt": function () {
    "use strict";
    var bkr = document.createElement("br");
    var zxg = document.createElement("button");
    var clser = document.createElement("button");
    var toappzxg = document.getElementById("gsq");
    var zxgtxt = document.createTextNode("submit");
    var clsertxt = document.createTextNode("close");
    zxg.appendChild(zxgtxt);
    zxg.setAttribute("style", "color: black !important; background: #9b91a7");
    zxg.setAttribute("onclick", "devOps.verifyAction(\"submit\")");
    clser.appendChild(clsertxt);
    clser.setAttribute("style", "color: black !important; background: #9b91a7;");
    clser.setAttribute("onclick", "devOps.verifyAction(\"close\")");
    toappzxg.appendChild(bkr);
    toappzxg.appendChild(zxg);
    toappzxg.appendChild(clser);
  },
  "verifyAction": function (qrs) {
    "use strict";
    if (qrs === "submit") {
      var thr = document.getElementById('pasent').value;
      var ges = {
        "paser": [
          "admin",
          "sahil",
          "sahil-design",
          "test",
          "design"
        ]
      };
      if (qrs === "submit") {
        if (thr === ges.paser[2]) {
          devOps.devStepUp();
        } else {
          alert("wrong password");
        }
      }
    } else if (qrs === "close") {
      document.getElementById('dev').style.display = "none";
    }
  }
};
function devOptToget() {
  "use strict";
  devOps.switcherCr();
}
devOptToget();

-->
