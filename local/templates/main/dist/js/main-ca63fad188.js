"use strict";!function(t){t(function(){t(".slider").slick(),t("#to-top").click(function(c){c.preventDefault(),t("html, body").animate({scrollTop:0},"fast")}),t(".js-search").on("change",function(){var c=t(this);c.prop("checked")&&c.parent().find(".js-search-input").focus()})})}(jQuery);