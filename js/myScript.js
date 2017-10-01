function scrollItDown() {
    var a = $(window).scrollTop(), o = a / 1.7;
    xPos = a / 5.7 - 50, $(".hero-image").css("background-position", "0%" + o + "px"), 
    $(".hero-box").css({
        transform: "translate(-50%, " + xPos + "%)"
    });
}

function myMap() {
    var a = new google.maps.LatLng(41.878114, -87.629798), o = {
        center: a,
        zoom: 12,
        scrollwheel: !1,
        draggable: !1,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }, t = new google.maps.Map(document.getElementById("googleMap"), o);
    new google.maps.Marker({
        position: a
    }).setMap(t);
}

$(window).scroll(function() {
    scrollItDown();
}), $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip(), $("#myForm").submit(function(a) {
        a.preventDefault();
        var o = {
            name: $("#name").val(),
            email: $("#email").val(),
            comments: $("#comments").val()
        };
        console.log(o), $.ajax({
            type: "POST",
            url: "components/php/contactMeSend.php",
            data: o,
            dataType: "JSON",
            success: function(a) {
                var o = "Succeed";
                "Message was sended" != a.messages ? (o = "Error", $("#myModal").addClass("modal-danger")) : $("#myModal").addClass("modal-success"), 
                $("#modalText").html(a.messages), $(".modal-title").html(o), $("#myModal").modal("show");
            },
            error: function() {
                $("#myModal").addClass("modal-danger"), $("#modalText").html("Message was not sended"), 
                $(".modal-title").html("Error"), $("#myModal").modal("show");
            }
        });
    }), $(".navbar a, footer a[href='#myPage']").on("click", function(a) {
        if ("" !== this.hash) {
            a.preventDefault();
            var o = this.hash;
            $("html, body").animate({
                scrollTop: $(o).offset().top
            }, 900, function() {
                window.location.hash = o;
            });
        }
    });
    var a = document.getElementById("email");
    a.addEventListener("input", function(o) {
        a.validity.typeMismatch || a.validity.patternMismatch ? a.setCustomValidity("Email format Invalid!!!") : a.setCustomValidity("");
    });
    var o = document.getElementById("name");
    o.addEventListener("input", function(a) {
        o.validity.patternMismatch ? o.setCustomValidity("Name format 3-40 characters!!!") : o.setCustomValidity("");
    });
}), $(window).scroll(function() {
    $(".slideanim").each(function() {
        $(this).offset().top < $(window).scrollTop() + 900 && $(this).addClass("slide");
    });
});