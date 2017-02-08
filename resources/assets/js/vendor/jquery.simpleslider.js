/**
 * simple-jQuery-slider - v2.6.4 - 2015-07-15
 * http://simpleslider.bitlabsbeta.nl
 *
 * Copyright (c) 2015 Dirk Groenen
 * Licensed GNU v3 <https://github.com/dirkgroenen/simple-jQuery-slider/blob/master/LICENSE.md>
 */

! function(a) {
    var b = function(b, c) {
        function d() {
            clearInterval(f), f = setInterval(function() {
                e.nextSlide()
            }, i.interval)
        }
        var e = this,
            f = null,
            g = null,
            h = Math.floor(100 * Math.random()) + Date.now();
        this.currentSlide = 0, this.totalSlides = 0, c = void 0 === c ? {} : c;
        var i = a.extend({
            slidesContainer: b,
            slides: ".slide",
            slideTracker: !0,
            slideTrackerID: "slideposition",
            slideOnInterval: !0,
            interval: 5e3,
            swipe: !0,
            magneticSwipe: !0,
            transition: "slide",
            animateDuration: 1e3,
            animationEasing: "ease",
            pauseOnHover: !1,
            updateTransit: !0,
            useDefaultCSS: !0,
            neverEnding: !0
        }, c);
        this.init = function() {
            "fade" == i.transition && (i.neverEnding = !1, i.magneticSwipe = !1), i.updateTransit && a.support.transition && jQuery().transition && !a.transit.useTransitionEnd && (a.transit.useTransitionEnd = !0);
            var c = "jss-slideswrap-" + h;
            if (a(i.slidesContainer).wrapInner("<div class='" + c + "' style='position:absolute;width:100%;height:100%;'></div>"), g = "." + c, i.neverEnding && a(g).stop().css(a.support.transition && jQuery().transition ? {
                    x: "-100%"
                } : {
                    left: "-100%"
                }), e.totalSlides = a(i.slidesContainer).find(i.slides).length, i.neverEnding) {
                var f = a(i.slidesContainer).find(i.slides).first().clone(!0, !0),
                    j = a(i.slidesContainer).find(i.slides).last().clone(!0, !0);
                a(g).prepend(j), a(g).append(f)
            }
            var k = 0;
            if (i.useDefaultCSS && a(i.slidesContainer).css({
                    position: "relative",
                    overflow: "hidden"
                }), a(i.slidesContainer).find(i.slides).each(function(b) {
                    if (i.neverEnding ? 0 === b ? a(this).attr("data-index", e.totalSlides - 1) : b == e.totalSlides + 1 ? a(this).attr("data-index", 0) : a(this).attr("data-index", b - 1) : a(this).attr("data-index", b), k = a(this).outerWidth() > k ? a(this).outerWidth() : k, "slide" == i.transition && a(this).css(void 0 !== a.support.transition ? {
                            x: 100 * b + "%",
                            "z-index": 2 * e.totalSlides - b,
                            width: k
                        } : {
                            left: 100 * b + "%",
                            "z-index": 2 * e.totalSlides - b,
                            width: k
                        }), "fade" == i.transition) {
                        var c = 0 === b ? 1 : 0;
                        a(this).css({
                            left: 0,
                            top: 0,
                            "z-index": e.totalSlides - b,
                            width: k,
                            opacity: c
                        })
                    }
                    i.useDefaultCSS && a(this).css({
                        position: "absolute",
                        "float": "left",
                        height: "100%",
                        top: 0
                    })
                }), i.slideTracker) {
                a(i.slidesContainer).after("<div id='" + i.slideTrackerID + "' data-slider='" + h + "'><ul></ul></div>");
                for (var l = 0; l < e.totalSlides; l++) {
                    var m = e.neverEnding && l == e.totalSlides - 1 ? 0 : l;
                    a('div[data-slider="' + h + '"] ul').append('<li class="indicator" data-index="' + m + '"></li>')
                }
                a('div[data-slider="' + h + '"] ul li[data-index="' + e.currentSlide + '"]').addClass("active"), a("div[data-slider='" + h + "'] ul li").click(function() {
                    a(this).hasClass("active") || e.nextSlide(a(this).data("index"))
                })
            }
            if (i.slideOnInterval && d(), i.swipe || i.magneticSwipe) {
                a(i.slidesContainer).css("cursor", "-webkit-grab"), a(i.slidesContainer).css("cursor", "-moz-grab"), a(i.slidesContainer).css("cursor", "grab");
                var n = !1,
                    o = {
                        x: 0,
                        y: 0
                    },
                    p = 0,
                    q = a(i.slidesContainer).width(),
                    r = window.navigator.msPointerEnabled ? "MSPointerDown" : "touchstart",
                    s = window.navigator.msPointerEnabled ? "MSPointerMove" : "touchmove",
                    t = window.navigator.msPointerEnabled ? "MSPointerUp" : "touchend";
                a(i.slidesContainer).on(r + " mousedown", function(b) {
                    n = !0, o = {
                        x: void 0 !== b.pageX ? b.pageX : b.originalEvent.touches[0].pageX,
                        y: void 0 !== b.pageY ? b.pageY : b.originalEvent.touches[0].pageY
                    }, i.magneticSwipe && a(i.slidesContainer).find(i.slides).css("transition", "none"), p = 0, a(i.slidesContainer).css("cursor", "-webkit-grabbing"), a(i.slidesContainer).css("cursor", "-moz-grabbing"), a(i.slidesContainer).css("cursor", "grabbing")
                }), a(i.slidesContainer).on(s + " mousemove", function(a) {
                    if (a.type == s && a.preventDefault(), n) {
                        var b = void 0 !== a.pageX ? a.pageX : a.originalEvent.touches[0].pageX;
                        p = (o.x - b) / q * 100, i.magneticSwipe && e.manualSlide(p)
                    }
                }), a(i.slidesContainer).on(t + " mouseup", function() {
                    n = !1, p > 25 && (e.currentSlide < e.totalSlides - 1 || i.neverEnding) ? e.nextSlide() : -25 > p && (e.currentSlide > 0 || i.neverEnding) ? e.prevSlide() : e.resetSlides(), a(i.slidesContainer).css("cursor", "-webkit-grab"), a(i.slidesContainer).css("cursor", "-moz-grab"), a(i.slidesContainer).css("cursor", "grab")
                })
            }
            a(b).trigger({
                type: "init",
                totalSlides: e.totalSlides
            })
        }(), a(window).resize(function() {
            var b = 0;
            a(i.slidesContainer).find(i.slides).each(function() {
                a(this).css("width", ""), b = a(this).outerWidth() > b ? a(this).outerWidth() : b, a(this).css("fade" == i.transition ? {
                    width: b
                } : {
                    x: 100 * (a(this).data("index") - e.currentSlideindex) + "%",
                    width: b
                })
            })
        }), e.manualSlide = function(b) {
            if ("slide" == i.transition) {
                a(g).css("-webkit-transition", "none"), a(g).css("-moz-transition", "none"), a(g).css("-ms-transition", "none"), a(g).css("transition", "none");
                var c = -(100 * e.currentSlide + b);
                i.neverEnding && (c = -(100 * (e.currentSlide + 1) + b)), a(g).css(a.support.transition && jQuery().transition ? {
                    x: c + "%"
                } : {
                    left: c + "%"
                })
            }
        }, e.resetSlides = function() {
            if ("slide" == i.transition) {
                var b = i.neverEnding ? -(100 * (e.currentSlide + 1)) : -(100 * e.currentSlide);
                a.support.transition && jQuery().transition ? a(g).stop().transition({
                    x: b + "%"
                }, i.animateDuration, i.animationEasing) : a(g).stop().animate({
                    left: b + "%"
                }, i.animateDuration)
            }
        }, e.prevSlide = function() {
            var a = e.currentSlide > 0 ? e.currentSlide -= 1 : e.totalSlides - 1;
            e.nextSlide(a)
        }, e.nextSlide = function(c) {
            function f() {
                if (!k) {
                    "fade" == i.transition && a(i.slidesContainer).find(i.slides).each(function() {
                        a(this).data("index") == e.currentSlide ? a(this).show() : a(this).hide()
                    }), "slide" == i.transition && i.neverEnding && (e.currentSlide == e.totalSlides - 1 && 0 === j && (a.support.transition && jQuery().transition ? a(g).stop().transition({
                        x: 100 * -e.totalSlides + "%"
                    }, 1, "linear") : a(g).css({
                        left: 100 * -e.totalSlides + "%"
                    })), 0 === e.currentSlide && j == e.totalSlides - 1 && (a.support.transition && jQuery().transition ? a(g).stop().transition({
                        x: "-100%"
                    }, 1, "linear") : a(g).css({
                        left: "-100%"
                    })));
                    var c = jQuery.Event("afterSliding", {
                        prevSlide: j,
                        newSlide: e.currentSlide
                    });
                    a(b).trigger(c), k = !0
                }
            }
            var j = e.currentSlide,
                k = !1;
            e.currentSlide = void 0 === c ? e.currentSlide < e.totalSlides - 1 ? e.currentSlide += 1 : 0 : c;
            var l = jQuery.Event("beforeSliding", {
                prevSlide: j,
                newSlide: e.currentSlide
            });
            if (a(b).trigger(l), l.isDefaultPrevented()) return e.currentSlide = j, !1;
            var m = -(100 * e.currentSlide);
            i.neverEnding && (m = e.currentSlide == e.totalSlides - 1 && 0 === j ? 0 : 0 === e.currentSlide && e.totalSlides - 1 == j ? 100 * -(e.totalSlides + 1) : -(100 * (e.currentSlide + 1))), "slide" == i.transition && (a.support.transition && jQuery().transition ? a(g).stop().transition({
                x: m + "%"
            }, i.animateDuration, i.animationEasing) : a(g).stop().animate({
                left: m + "%"
            }, i.animateDuration, f)), "fade" == i.transition && a(i.slidesContainer).find(i.slides).each(function(b) {
                var c = b == e.currentSlide ? 1 : 0;
                b == e.currentSlide && a(this).show(), a.support.transition && jQuery().transition ? a(this).stop().transition({
                    opacity: c
                }, i.animateDuration, f) : a(this).stop().animate({
                    opacity: c
                }, i.animateDuration, f)
            }), a(i.slidesContainer).on("oTransitionEnd webkitTransitionEnd oTransitionEnd otransitionend transitionend", f), a('div[data-slider="' + h + '"] ul li').removeClass("active"), a('div[data-slider="' + h + '"] ul li[data-index="' + e.currentSlide + '"]').addClass("active"), i.slideOnInterval && d()
        }, i.pauseOnHover && a(i.slidesContainer).hover(function() {
            clearInterval(f)
        }, function() {
            d()
        })
    };
    a.fn.simpleSlider = function(c) {
        return this.each(function() {
            var d = a(this);
            if (!d.data("simpleslider")) {
                var e = new b(this, c);
                d.data("simpleslider", e)
            }
        })
    }
}(jQuery);
//# sourceMappingURL=jquery.simpleslider.js.map