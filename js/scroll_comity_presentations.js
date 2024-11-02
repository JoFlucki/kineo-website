$(document).ready(function() {
    $index = 0;
    $maxIndex = 1;
    $(".left-arrow").click(function() {
        if ($index > 0) {
            if ($index == $maxIndex)
                $(".right-arrow").css("visibility", "visible");
            $(".comity-presentation#" + $index).addClass("right")
            $index--;
            $(".comity-presentation#" + $index).removeClass("left")
            if ($index == 0)
                $(".left-arrow").css("visibility", "hidden");
        }
    });
    $(".right-arrow").click(function() {
        if ($index < $maxIndex) {
            if ($index == 0)
                $(".left-arrow").css("visibility", "visible");
            $(".comity-presentation#" + $index).addClass("left")
            $index++;
            $(".comity-presentation#" + $index).removeClass("right")
            if ($index == $maxIndex)
                $(".right-arrow").css("visibility", "hidden");

        }
    });
});