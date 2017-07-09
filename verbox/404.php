<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="#000">
      <link rel="shortcut icon" href="images/trans.png">
      <link rel="stylesheet" href="plugins/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
      <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.css">
      <link rel="stylesheet" href="comm/comm.css">
    <title>page not found -verBox</title>
    <style media="screen">
      .main-top-blue{height:50vh;width:100vw;position:static;margin-top:0;background-color:#007de3;z-index:1!important}@media screen and (max-width:500px){.main-top-blue{display:none!important}.over-block{display:none}}.over-block{position:static;height:90vh;width:50vw;background-color:#dae9eb;border-top:7px solid darkblue!important;z-index:91!important;margin-top:-40vh!important;margin:auto}body{background:linear-gradient(141deg,#0fb8ad 0,#1fc8db 51%,#2cb5e8 75%);background-image:linear-gradient(141deg,#0fb8ad 0,#1fc8db 51%,#2cb5e8 75%);background-position-x:initial;background-position-y:initial;background-size:initial;background-repeat-x:initial;background-repeat-y:initial;background-attachment:initial;background-origin:initial;background-clip:initial;background-color:initial}.facts{height:auto;width:70%;margin:auto;border:1px solid darkblue!important;margin-top:10px}.clip{height:35px;width:35px;border-radius:50%!important;border:2px solid darkblue!important;margin-top:-45px!important;float:right;margin-right:10px;cursor:pointer;transition:all .3s ease}.clip:hover{background:darkblue;border:2px solid blue!important}.extra-fac{margin-top:-90vh!important;display:none;height:90vh;width:50vw;margin:auto;background-color:#dae9eb;border-top:7px solid darkblue!important;overflow-x:hidden;overflow-y:auto}.lier:nth-child(1){display:none}.lier>p{color:darkblue!important}.lier{margin-top:50px}.extra-fac-clsr{height:25px;width:25px;background-color:darkblue;border-radius:50%;margin-top:-85vh;float:right;margin-right:23vw;cursor:pointer;display:none}.mobile{height:100vh;width:100vw;background-color:#000;position:fixed;top:0;left:0}.mobile-inner-fix{position:static!important}
    </style>
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
              <div class="request-permission-notification">
                <div class="send-notification-main-asker">
                  <div title="close notification" class="notification-closer">
                    <i class="fa fa-times fa-2x noticlsr"></i>
                  </div>
                </div>
              </div>
              <!--contents-->

              <div class="main-top-blue"></div>
              <div class="mobile">
                <h2 class="mobile-inner-fix" style="padding-top: 100px; text-align: center;">Page not Found !</h2>
                <i style="margin-left: 45vw; margin-top: 30px;" class="mobile-inner-fix fa fa-exclamation-triangle fa-5x"></i>
                <h3 class="mobile-inner-fix" style="padding-top: 30px; text-align: center;">Oops the page you are looking for is not avialable</h3>
                <h4 class="mobile-inner-fix" style="padding-top: 30px; text-align: center;">Intresting fact about internet</h4>
                <hr class="mobile-inner-fix" style="width: 75%; margin: auto;" />
                <div class="mobile-inner-fix" style="border: 1px solid #fff !important; margin-top: 30px;">
                  <p class="mobile-inner-fix fact-inner" style="word-wrap: break-word;"></p>
                </div>
                <hr class="mobile-inner-fix" style="width: 75%; margin: auto; margin-top: 30px;" />
              </div>
              <div class="over-block">
                <h1 style="color: rgb(0, 125, 227)!important; text-align: center; margin-top: 50px;">Page not found!</h1>
                <i style="color: rgb(0, 125, 227)!important; margin-left: 22vw; margin-top: 50px;" class="fa fa-exclamation-triangle fa-5x"></i>
                <h3 style="color: rgb(0, 125, 227)!important; text-align: center; margin-top: 50px;">Oops the page you are looking for is not available</h3>
                <h4 style="color: rgb(0, 125, 227)!important; text-align: center; margin-top: 70px;">Intresting facts about internet</h4>
                <div class="facts">
                  <p style="color: darkblue!important;word-wrap: break-word;" class="fact-inner"></p>
                </div>
                <div title="more facts" class="clip">
                  <i style="color: rgb(0, 125, 227)!important; margin-left: 2px;" class="fa fa-paw fa-2x"></i>
                </div>
                <i title="home" onclick="home()" style="cursor: pointer;color: rgb(0, 125, 227)!important; margin-left: 24vw; margin-top: 50px;" class="fa fa-home fa-2x"></i>
              </div>
              <div title="close facts" class="extra-fac-clsr">
                <p style="color: rgb(0, 125, 227)!important;font-size: 15px;text-align: center; padding-top: 3px; !important">&#10006;</p>
              </div>
              <div class="extra-fac">
                <h3 style="color: rgb(0, 125, 227)!important; text-align: center; margin-top: 50px;">Facts about Internet</h3>
                <ul id="fac-append">
                </ul>
              </div>

              <!--contents-end-->
          </div>
      </div>
      <script src="plugins/jquery-3.2.1/jquery-3.2.1.js" type="text/javascript"></script>
      <script src="comm/comm.js" type="text/javascript"></script>
      <script src="comm/noti.js" type="text/javascript"></script>
      <script type="text/javascript">
      function home(){window.location.replace("http://localhost/verbox/index.php")}var facts=[" ","Approximately 3.2 billion people use the internet. Out of this, 1.7 billion of internet users are Asians.","30,000 websites are hacked every day. Highly effective computer software programs are used by cybercriminals to automatically detect vulnerable websites which can be hacked easily."," Internet sends approximately 204 million emails per minute and 70% of all the emails sent are spam. 2 billion electrons are required to produce a single email."," The internet requires 50 Million horsepower to keep running in the current state.","Approximately £1.7 trillion worth of funds is spent online. If you ever counted the hours you were online, you would definitely freak out.","It is expected that around 40 billion gadgets are going to be connected to the internet by 2020. That definitely does not sound good from a security point of view.","2010 was the year which saw a tremendous event taking place in the age of the Internet. In this year, Finland became the first country to make the internet access a legal right.","The internet speed on the International Space Station is faster than the average internet speed in Australia.","When Montenegro became independent from Yugoslavia, its Internet domain name went from being .yu to .me"];$(document).ready(function(){$(".clip").fadeOut(1);$(".facts, .clip").mouseenter(function(){$(".clip").fadeIn(300)});$(".facts, .clip").mouseleave(function(){$(".clip").fadeOut(300)});$(".clip").click(function(){mrFact(".clip")});var a=facts[Math.floor((Math.random()*9)+1)];getFact(a)});function findFac(){for(i=0;i<facts.length;i++){var d=facts[i];var b=document.createElement("p");var a=document.createElement("li");var c=document.createTextNode(d);b.appendChild(c);a.appendChild(b);a.setAttribute("class","lier");document.getElementById("fac-append").appendChild(a)}}function mrFact(a){if(a===".clip"){findFac();$(".over-block").animate({height:"0"},200);$(".over-block").fadeOut(300);$(".main-top-blue").animate({height:"100vh"},400);$(".extra-fac").fadeIn(500);$(".extra-fac-clsr").fadeIn(500);$(".extra-fac-clsr").fadeIn(500)}else{if(a===".cls-clip"){$(".over-block").animate({height:"90vh"},200);$(".over-block").fadeIn(300);$(".main-top-blue").animate({height:"50vh"},400);$(".extra-fac").fadeOut(500);$(".extra-fac-clsr").fadeOut(500);$(".extra-fac-clsr").fadeOut(500)}else{throwErr("mrFact")}}}function throwErr(a){if(a==="mrFact"){console.error("unknown caller of function mrFact")}}function getFact(a){$(".fact-inner").html(a)}function mobLineInter(){if(window.innerWidth<=500){$(".mobile").fadeIn(1)}else{$(".mobile").fadeOut(1)}}$(".extra-fac-clsr").click(function(){mrFact(".cls-clip")});setInterval(function(){mobLineInter()},1);
      </script>
  </body>
</html>
