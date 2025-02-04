! function(t) {
    t.fn.stars = function(e) {
        for (var s = t.extend({
                stars: 5,
                emptyIcon: "fa-star",
                filledIcon: " fas fa-star",
                color: "#E4AD22",
                starClass: "",
                value: 0,
                text: null,
                click: function() {}
            }, e), a = this, l = 0; l < s.stars; l++) {
            var n = t("<i>").addClass("far").addClass(s.emptyIcon).addClass(s.starClass);
            s.text && n.attr("data-rating-text", s.text[l]), "none" !== s.color && n.css("color", s.color), this.append(n)
        }
        if (s.text) {
            var i = t("<div>").addClass("rating-text");
            this.append(i)
        }
        var r = this.find("i");
        if (r.on("mouseover", function() {
                var e = t(this).index() + 1,
                    l = r.slice(0, e);
                events.removeFilledStars(r, s), events.fillStars(l, s), s.text && a.find(".rating-text").html(t(this).data("rating-text"))
            }).on("mouseout", function() {
                events.removeFilledStars(r, s), events.fillStars(r.filter(".selected"), s), s.text && a.find(".rating-text").html("")
            }).on("click", function() {
                var e = t(this).index();
                s.value = e + 1, r.removeClass("selected").slice(0, s.value).addClass("selected"), s.click.call(r.get(e), s.value)
            }), events = {
                removeFilledStars: function(t, e) {
                    return t.removeClass(e.filledIcon).addClass(e.emptyIcon), t
                },
                fillStars: function(t, e) {
                    return t.removeClass(e.emptyIcon).addClass(e.filledIcon), t
                }
            }, s.value > 0) {
            var o = r.slice(0, s.value);
            events.fillStars(o, s).addClass("selected")
        }
        return this
    }
}(jQuery);