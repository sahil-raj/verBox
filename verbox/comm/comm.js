var $ = $
  , alert = alert;
$.getJSON("http://localhost/verbox/init/js/json/color.json", function(b) {
    setInterval(function() {
        var a = Math.floor((Math.random() * 10) + 1);
        $(".loadinganimation").css("background", b.colors[a])
    }, 200)
});
var verBox = {
    ver: function() {
        return "1.0.0"
    },
    jqueryCheck: function(b) {
        if (typeof $ === undefined) {
            throw new Error("jquery not loaded on " + b)
        }
    },
    menuIn: function() {
        $(".menu-all").css("right", window.innerWidth - window.innerWidth * 2)
    },
    headerColorAppend: function(e) {
        var f = document.body.scrollTop
          , g = window.innerHeight
          , h = [f, g];
        if (h[0] > 70) {
            $(".header-all").css("background-color", "rgba(0,0,0,0.09)")
        } else {
            $(".header-all").css("background-color", "rgba(0,0,0,0)")
        }
    },
    menuOpenCallerMobile: function(c) {
        var d = c;
        setTimeout(function() {
            verBox.menuOpenMobile(d)
        }, 200)
    },
    menuOpenMobile: function(b) {
        $(b).animate({
            marginRight: "60px"
        }, 100);
        $(b).animate({
            marginRight: "-50px"
        }, 50);
        $(".menu-all").animate({
            right: "25px"
        }, 300);
        $(".menu-all").animate({
            right: "0"
        }, 350);
        $(b).animate({
            marginRight: "60px"
        }, 350);
        $(b).animate({
            marginRight: "50px"
        }, 400);
        setTimeout(function() {
            $(".ignor").removeClass("fa-bars").addClass("fa-times")
        }, 400);
        $(".round-div").attr("close", "true")
    },
    menuCloseCallerMobile: function(c) {
        var d = c;
        setTimeout(function() {
            verBox.menuCloseMobile(d)
        }, 200)
    },
    menuCloseMobile: function(b) {
        $(b).animate({
            marginRight: "60px"
        }, 100);
        $(b).animate({
            marginRight: "-50px"
        }, 50);
        $(".menu-all").animate({
            right: "25px"
        }, 150);
        $(".menu-all").animate({
            right: window.innerWidth - window.innerWidth * 2
        }, 350);
        $(b).animate({
            marginRight: "60px"
        }, 350);
        $(b).animate({
            marginRight: "50px"
        }, 400);
        setTimeout(function() {
            $(".ignor").removeClass("fa-times").addClass("fa-bars")
        }, 400);
        $(".round-div").attr("close", "false")
    },
    menuLinksEffect: function(b) {
        $(b).animate({
            opacity: 0,
            paddingTop: "50px"
        }, 200);
        setTimeout(function() {
            window.location.href = $(b).attr("lin")
        }, 400)
    },
    menuLinksEffectsMobile: function(b) {
        $(b).animate({
            opacity: 0,
            paddingTop: "20px"
        }, 200);
        setTimeout(function() {
            window.location.href = $(b).attr("lin")
        }, 400)
    },
    goToTop: function() {
        if (document.body.scrollTop > 200) {
            $(".scroll-to-top").fadeIn(200)
        } else {
            $(".scroll-to-top").fadeOut(200)
        }
    },
    setLogInCookie: function() {
        setInterval(function() {
            document.cookie = "login=false"
        }, 1)
    },
    signUpLoginLocator: function(c, d) {
        if (c === true) {
            if (d === "login") {
                window.location.replace("http://localhost/verbox/login.php")
            } else {
                if (d === "signup") {
                    window.location.replace("http://localhost/")
                } else {
                    alert("we are currently not able to handle your request")
                }
            }
        } else {
            alert("we are currently not able to process your request")
        }
    },
    verbox: function() {
        var a;
        a = "verbox version:\t" + verBox.ver() + "\n function list:\n use 'verBox' object for the following:\n" + verBox.fuc();
        return a
    },
    fuc: function() {
        var a = [verBox.goToTop.name, verBox.headerColorAppend.name, verBox.jqueryCheck.name, verBox.menuCloseCallerMobile.name, verBox.menuCloseMobile.name, verBox.menuIn.name, verBox.menuLinksEffect.name, verBox.menuLinksEffectsMobile.name, verBox.menuOpenCallerMobile.name, verBox.menuOpenMobile.name, verBox.setLogInCookie.name, verBox.signUpLoginLocator.name];
        return a
    },
    lastCheck: function() {
        try {
            verbox;
            $;
            jQuery;
            devOps
        } catch (a) {
            console.error(a.message)
        }
    }
};
$(document).ready(function() {
    verBox.setLogInCookie();
    setInterval(function() {
        if (typeof verBox === undefined || typeof $ === undefined) {
            throw new Error("verBox is not defiend")
        }
    }, 1)
});
verBox.jqueryCheck(this);
verBox.menuIn();
$(".logo-div").click(function() {
    window.location.replace("http://localhost/verbox")
});
$(window).scroll(function() {
    verBox.headerColorAppend();
    verBox.goToTop()
});
$(".round-div").click(function() {
    if ($(".round-div").attr("close") === "false") {
        if (window.innerWidth > 599) {
            verBox.menuOpenCallerMobile(this);
            $()
        } else {
            verBox.menuOpenCallerMobile(this)
        }
    } else {
        if ($(".round-div").attr("close") === "true") {
            if (window.innerWidth > 599) {
                verBox.menuCloseCallerMobile(this);
                $()
            } else {
                verBox.menuCloseCallerMobile(this)
            }
        }
    }
});
$(".buttons-in-menu-all").click(function() {
    verBox.menuLinksEffect(this)
});
$(".mobile-list").click(function() {
    verBox.menuLinksEffectsMobile(this)
});
$(".scroll-to-top").click(function() {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
    return false
});
function verbox() {
    return verBox.verbox()
}
var verbox = verbox();
verBox.lastCheck();
setTimeout(function() {
  console.info("\n%cverBox\n", "font: 5em sans-serif; color: cornflowerblue; background-color: black; text-shadow: 2px 2px #cabff9;");
}, 1000);
