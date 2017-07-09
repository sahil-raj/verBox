var $ = $;
var errorCaller = {
  "assignLoginError": function () {
    "use strict";
    $(".lo-g-err-han-for-con").fadeIn("slow");
  }
};
$(".input").focusin(function () {
    "use strict";
    $(".input").attr("placeholder", "");
    $("#user-name").html("user name");

});
$(".input").focusout(function () {
    "use strict";
    $(".input").attr("placeholder", "user name");
    $("#user-name").html(".");
});
$(".pa").focusin(function () {
    "use strict";
    $(".pa").attr("placeholder", "");
    $("#user-password").html("password");

});
$(".pa").focusout(function () {
    "use strict";
    $(".pa").attr("placeholder", "password");
    document.getElementById("user-password").innerHTML = "please enter your password";
});
$(".not-log-moreop").click(function () {
    "use strict";
    $(".more-op-not-log").fadeIn("slow");
    $(".drop").removeClass("fa-chevron-circle-down");
    $(".drop").addClass("fa-chevron-circle-up");
});
$(document).mouseup(function (e) {
    "use strict";
    var container = $(".more-op-not-log");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.fadeOut("slow");
        $(".drop").addClass("fa-chevron-circle-down");
    }
});
$("#inline-not-log-divline-b").click(function () {
    "use strict";
    errorCaller.assignLoginError();
});
$(".drer").click(function () {
    "use strict";
    if ($(".fixed-not-my-a").attr("clk") === "1") {
      $(".fixed-not-my-a").fadeIn("slow");
      $(".fixed-not-my-a").attr("clk","-1");
    } else {
      $(".fixed-not-my-a").fadeOut("slow");
      $(".fixed-not-my-a").attr("clk","1");
    }
});
$(".lo-g-err-han-for-con").click(function () {
    "use strict";
    $(".lo-g-err-han-for-con").fadeOut("slow");
});
$(".lo-g-err-han-for-con").children().click(function (e) {
    return false;
});
$(".submit-buuton-err").click(function () {
    "use strict";
    $(".lo-g-err-inner-frm").submit();
});
$("#changer").click(function () {
  if ($("#changer").attr("def") === "pas") {
      $("#changer").removeClass("fa-eye");
      $("#changer").addClass("fa-eye-slash");
      $("#changer").attr("def", "txt");
      $("#passer").attr("type", "password");
  } else {
      $("#changer").removeClass("fa-eye-slash");
      $("#changer").addClass("fa-eye");
      $("#changer").attr("def", "pas");
      $("#passer").attr("type", "text");
  }
});
