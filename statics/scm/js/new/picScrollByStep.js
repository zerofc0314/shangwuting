(function ($) {
    $.fn.bx_picScrollByStep = function (options) {
        var defaults = {
            oneStepWidth: 154,
            oneStepTime: 500,
            oneStepStopTime: 300,
            flag: true
        };
        options = $.extend(defaults, options);
        return this.each(function () {
            var $this = $(this);
            var li = $this.find("li");
            var first = 0;
            var last = li.length - 1;

            var w = li.slice(0, li.length - 1).clone();
            var last_append = li.length - 1;

            $this.wrap("<div><div>").width(9999);

            $this.prepend($this.find("li:last"));
            get_a();
            $this.css({ "position": "relative","z-index":"0", "left": -options.oneStepWidth });
            start_slide();
            if (options.flag)
                $this.mouseover(function () { clearInterval(j); });
            else
                $this.mouseover(function () { clearInterval(k); });
            $this.mouseout(function () { start_slide() });

            function get_a() {
                var str = new Array();
                var lix = li.clone();
                le = last;
                if (lix[le] != undefined) {
                    str[0] = $(lix[le]);
                }
                else {
                    le = 0;
                    str[0] = $(lix[le]);
                }
                $.each(str, function (index) { $this.append(str[index][0]); });
            }

            function slide_next() {
                first += 1;
                if (first >= li.length) {
                    first = first % li.length;
                }
                last += 1;
                if (last >= li.length) {
                    last = last % li.length;
                }
                $this.animate({ left: "-=" + options.oneStepWidth }, options.oneStepTime, function () {
                    $this.find("li:first").remove();
                    $this.css("left", -options.oneStepWidth);
                    get_a();
                });
            }

            function start_slide() {
                if (options.flag)
                    j = setInterval(function () { slide_next(); }, options.oneStepStopTime);
                else
                    k = setInterval(function () { slide_next(); }, options.oneStepStopTime);
            }
        });
    }
})(jQuery);



$(document).ready(function () {
    $(".picScroll1").parent().parent().css("position", "relative");
});