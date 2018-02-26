function doParallax() {
    return !$('#head-mob').is(':visible')
}
$(document).ready(function () {
    $('html, body').animate({
        scrollTop: parseInt($("#head-wrapper").offset().top)
    }, 2000)
    $("img").css({
        top: 0
    })
    var rt = false
    $("#spacer1").slideUp(1000)
    $("#hero").fadeIn(1000)
    $(".hero-small").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
        $('img').animate({
            top: '100px'
        }, 10)
    })
    $(".dl-swsh").click(function () {
        $(".window-wrapper").fadeIn(1000);
        $(".download-window, .close").delay(1000).slideDown(1000, "linear")
    })
    $(".about").click(function () {
        $(".window-wrapper").fadeIn(1000);
        $(".about-window, .close").delay(1000).slideDown(1000, "linear")
    })
    $("#btn-dl").click(function () {
        window.open("//github.com/SecureWindowsShell/SWSH/releases/download/beta-3.0/SWSH.Installer.msi", '_blank')
        $("#thanks").slideDown(1000)
    })
    $(".close").click(function () {
        $(".download-window, .close").slideUp(1000, "linear")
        $(".about-window, .close").slideUp(1000, "linear")
        $(".window-wrapper").delay(1000).fadeOut(1000)
        $(".addr").attr("value", "")
    })
    $(".download").click(function () {
        $('html, body').animate({
            scrollTop: parseInt($("#download-page-wrapper").offset().top)
        }, 2000)
        $('img').animate({
            top: '100px'
        }, 10)

        rt = false
    })
    $(".about").click(function () {
        $('img').animate({
            top: '0'
        }, 10)

        rt = false
    })
    $(".features").click(function () {
        $('html, body').animate({
            scrollTop: parseInt($("#features-page-wrapper").offset().top)
        }, 2000)
        $('img').animate({
            top: '0'
        }, 10)

        rt = false
    })
    $(".github").click(function () {
        window.open("//www.github.com/SecureWindowsShell/SWSH", '_blank')
        $('img').animate({
            top: '0'
        }, 10)

        rt = false
    })
    $(".contact").click(function () {
        $('html, body').animate({
            scrollTop: parseInt($("#footer-wrapper").offset().top)
        }, 2000)
        $('img').animate({
            top: '0'
        }, 10)

        rt = false
    })
    lastst = 0
    if ($(this).scrollTop() >= 300)
        $("#head-wrapper").fadeIn(1000)
    else $("#head-wrapper").fadeOut(1000)
    $(".paypal").click(function () {
        window.open("//www.paypal.me/happyNinja1998", '_blank')
    })
    $(".bitcoin").click(function () {
        $(".addr").attr("value", "BTC: 14bqRd5WqdppJe2jwe85Z9s5yBwHoupcze")
    })
    $(".litecoin").click(function () {
        $(".addr").attr("value", "LTC: LfFSUb5pWCfkkCMN8PNH1xqj7x8QM9eP1a")
    })
    $(".ethereum").click(function () {
        $(".addr").attr("value", "ETH: 0xDf268D39A2969c6690dA5E90af1179940a7c3E51")
    })
    $(window).scroll(function () {
        if (($(this).scrollTop() > parseInt($("#dl-content").offset().top)) && !rt) {
            $('img').animate({
                top: '0'
            }, 10)
            rt = true
        }
        if ($(this).scrollTop() >= 300)
            $("#head-wrapper").fadeIn(1000)
        else {
            $("#head-wrapper").fadeOut(1000)
            rt = false
        }
        if (doParallax()) {
            var st = $(this).scrollTop()
            if (st > lastst) {
                $('img').animate({
                    top: '+=1'
                }, 10)
            } else {
                $('img').animate({
                    top: '-=1'
                }, 10)
            }
            lastst = st
        }
    })
})
$(window).on("load", function () {
    $("#lContainer").fadeOut("slow")
    $("body").css({
        overflowY: "scroll"
    })
})