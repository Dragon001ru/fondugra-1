"use strict";!function(c){c(function(){var n=c("body"),e=c(".js-popup").find("input[type=checkbox]");e.on("change",function(o){o.preventDefault(),e.each(function(){var e=c(this);n.on("click",function(){e.prop("checked",!1)}),e.prop("checked",!1)}),c(this).prop("checked",!0)})})}(jQuery);