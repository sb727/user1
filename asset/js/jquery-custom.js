$(document).ready(function() {
    $("#checkin, #checkout").datepicker({
        showAnim: "clip",
        dateFormat: "yy년 mm월 dd일"
    });
        $("#search").click(function (e) {
            if ($("button").hasClass("active") ){
                $("button").addClass("disabled");
                $("button").removeClass("active");
                setTimeout(search, 500);

            }
        });
    function search(){
        $.ajax({
            url: "Home/searchHotel/",
            type: "POST",
            data: {where: $("#where").val()},
            success: function(res) {
                $(".picture_result").html(res);

                $("button").removeClass("disabled");
                $("button").addClass("active");
            },
            failure: function(res) {
                alert("Ajax call failure!");
            }
        });
    }

    $(".country").on("click", function(e) {
       console.log($(this).text());
    });
    $(".upbtn").click(function(e) {
        $("body").animate({scrollTop:0}, 1000);
    })
    $(".navbar-toggle").click(function(e) {
        $(".menubar").slideToggle("slow", function(){});
    });
})