/*
<div class="notification-notification"><img src="images/trans.png" alt="******" class="logo-icon-notification"><h3 style="color: #000 !important;text-align:center;padding-top: -30px;">Can we send you notifications !</h3></div>
console.log("%cWarning message", "font: 2em sans-serif; color: yellow; background-color: red;");
*/
var noti = {
  createNotification: function(sqr) {
    "use strict";
    $(".send-notification-main-asker").append(sqr);
  },
  checkNotiEnable: function(dump) {
    "use strict";
    if (!window.Notification) {
      console.error("Notification API not avalible");
    } else if (window.Notification.permission === "granted") {
      noti.createNotificationPush("Sahil from verBox", "Nice to see you again");
    } else if (window.Notification.permission === "default") {
      setTimeout(function() {
        "use strict";
        noti.createNotification(dump);
        $(".request-permission-notification").fadeIn(300);
      }, 10000);
    } else {
      console.error("Notifications disabled");
    }
  },
  requestApier: function() {
    "use strict";
    Notification.requestPermission(function(p) {
      if (p === "default") {
        $(".request-permission-notification").fadeIn(300);
      } else if (p === "granted") {
        noti.createNotificationPush("Sahil from verBox", "thanks for subscribing");
        $(".request-permission-notification").fadeOut(300);
        noti.remove("notification-notification");
      } else {
        $(".request-permission-notification").fadeOut(300);
        noti.remove("notification-notification");
      }
    });
  },
  createNotificationPush: function(hed, bod) {
    var notif = new Notification(hed, {
      icon: "images/trans.png",
      body: bod
    });
  },
  remove: function(id) {
    var elem = document.getElementById(id);
    return elem.parentNode.removeChild(elem);
}
};
var noties = [];
function start() {
  "use strict";
  var qms = '<div id="notification-notification" class="notification-notification"><img src="images/trans.png" alt="******" class="logo-icon-notification"><h3 style="color: #000 !important;text-align:center;margin-top: -20px; !important"><i style="color: darkblue !important;" class="fa fa-envelope-o fa-2x"></i>   Can we send you notifications !</h3><button onclick="noti.requestApier();" class="button-noti-asker"><p>Sure</p></button><button id="noti-not-now" class="button-noti-asker"><p>Not now</p></button><button id="noti-never" class="button-noti-asker"><p>don\'t ask again</p></button></div>';
  if ($(".send-notification-main-asker").children().length === 1) {
    noti.checkNotiEnable(qms);
    return false;
  } else if ($(".send-notification-main-asker").children().length > 1) {
    noties.push(qms);
  }
}
$(document).ready(function () {
  start();
});
