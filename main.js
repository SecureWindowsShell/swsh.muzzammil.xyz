/*
 *   MIT License
 *
 *   Copyright (c) 2018 Secure Windows Shell (SWSH)
 *
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *   of this software and associated documentation files (the "Software"), to deal
 *   in the Software without restriction, including without limitation the rights
 *   to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *   copies of the Software, and to permit persons to whom the Software is
 *   furnished to do so, subject to the following conditions:
 *
 *   The above copyright notice and this permission notice shall be included in all
 *   copies or substantial portions of the Software.
 *
 *   THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *   IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *   AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *   LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *   OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *   SOFTWARE.
 */
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
        window.open("//github.com/SecureWindowsShell/SWSH/releases/download/Titan-1.0/SWSH.Installer.msi", '_blank')
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
        $(".addr").attr("value", "BTC: 1G7XxjTNQJaLL56E87JQJn9w9A4iqHLfsB")
    })
    $(".litecoin").click(function () {
        $(".addr").attr("value", "LTC: MRN76bBPQ4gBbLGyjQYUfMzfSvT5aeg3T7")
    })
    $(".ethereum").click(function () {
        $(".addr").attr("value", "ETH: 0x7a43f722cd577db06914b796bf43d2996df3b4c5")
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
