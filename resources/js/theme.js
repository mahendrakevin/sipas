"use strict";
!function () {
    if ($("#nav-toggle").length && $("#nav-toggle").on("click", (function (t) {
        t.preventDefault(), $("#db-wrapper").toggleClass("toggled")
    })), $(".nav-scroller").length && $(".nav-scroller").slimScroll({height: "90%"}), $(".notification-list-scroll").length && $(".notification-list-scroll").slimScroll({height: 300}), $(".dropdown-menu a.dropdown-toggle").length && $(".dropdown-menu a.dropdown-toggle").on("click", (function (t) {
        return $(this).next().hasClass("show") || $(this).parents(".dropdown-menu").first().find(".show").removeClass("show"), $(this).next(".dropdown-menu").toggleClass("show"), $(this).parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown", (function (t) {
            $(".dropdown-submenu .show").removeClass("show")
        })), !1
    })), $('[data-bs-toggle="tooltip"]').length) [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function (t) {
        return new bootstrap.Tooltip(t)
    }));
    if ($('[data-bs-toggle="popover"]').length) [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map((function (t) {
        return new bootstrap.Popover(t)
    }));
    $('[data-bs-spy="scroll"]').length && [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]')).forEach((function (t) {
        bootstrap.ScrollSpy.getInstance(t).refresh()
    }));
    if ($(".toast").length) [].slice.call(document.querySelectorAll(".toast")).map((function (t) {
        return new bootstrap.Toast(t)
    }));
    if ($("#perfomanceChart").length) {
        new ApexCharts(document.querySelector("#perfomanceChart"), {
            series: [100, 78, 89],
            chart: {height: 320, type: "radialBar"},
            colors: ["#28a745", "#ffc107", "#dc3545"],
            stroke: {lineCap: "round"},
            plotOptions: {
                radialBar: {
                    startAngle: -168,
                    endAngle: -450,
                    hollow: {size: "55%"},
                    track: {background: "transaprent"},
                    dataLabels: {show: !1}
                }
            }
        }).render()
    }
    if ($(".offcanvas").length) [].slice.call(document.querySelectorAll(".offcanvas")).map((function (t) {
        return new bootstrap.Offcanvas(t)
    }));
    $(".sidebar-nav-fixed a").length && $(".sidebar-nav-fixed a").on("click", (function (t) {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var e = $(this.hash);
            (e = e.length ? e : $("[name=" + this.hash.slice(1) + "]")).length && (t.preventDefault(), $("html, body").animate({scrollTop: e.offset().top - 90}, 1e3, (function () {
                var t = $(e);
                if (t.focus(), t.is(":focus")) return !1;
                t.attr("tabindex", "-1"), t.focus()
            })))
        }
        $(".sidebar-nav-fixed a").each((function () {
            $(this).removeClass("active")
        })), $(this).addClass("active")
    }))
}(), feather.replace(), function () {
    for (var t = document.getElementsByTagName("pre"), e = 0; e < t.length; e++) {
        console.log(t[e].children[0]);
        if (0 === t[e].children[0].className.indexOf("language-")) {
            var n = document.createElement("button");
            n.className = "copy-button", n.textContent = "Copy", t[e].appendChild(n)
        }
    }
    var o = new Clipboard(".copy-button", {
        target: function (t) {
            return t.previousElementSibling
        }
    });
    o.on("success", (function (t) {
        t.clearSelection(), t.trigger.textContent = "Copied", window.setTimeout((function () {
            t.trigger.textContent = "Copy"
        }), 2e3)
    })), o.on("error", (function (t) {
        t.trigger.textContent = 'Press "Ctrl + C" to copy', window.setTimeout((function () {
            t.trigger.textContent = "Copy"
        }), 5e3)
    }))
}(), function () {
    var t = window.location + "", e = t.replace(window.location.protocol + "//" + window.location.host + "/", "");
    $("ul#sidebarnav a").filter((function () {
        return this.href === t || this.href === e
    })).parentsUntil(".sidebar-nav").each((function (t) {
        $(this).is("li") && 0 !== $(this).children("a").length ? ($(this).children("a").addClass("active"), $(this).parent("ul#sidebarnav").length, $(this).addClass("active")) : $(this).is("ul") || 0 !== $(this).children("a").length ? $(this).is("ul") && $(this).addClass("in") : $(this).addClass("active")
    }))
}();
