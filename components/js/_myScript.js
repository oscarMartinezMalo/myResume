
// Parallax smooth scroll down the hero Image and scrollUp the box-text
$(window).scroll(function () {
    scrollItDown();
})

//HeroImage scrollUp effect
function scrollItDown() {
    var scroll = $(window).scrollTop();
    var result = scroll / 1.7;
 	xPos = (scroll / 5.7) - 50;

    $('.hero-image').css('background-position', '0%' + result + 'px');
    $('.hero-box').css({ 
        'transform': 'translate(-50%, ' + xPos + '%)'        
    });
}

function myMap() {
	var myCenter = new google.maps.LatLng(41.878114, -87.629798);
	var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);
}


$(document).ready(function(){
  // Tool tip I like pages section
    $('[data-toggle="tooltip"]').tooltip(); 

  //Avoid submit button refresh the page and send the data to php
  $("#myForm").submit(function(e){
    e.preventDefault();
    var varData ={
       name: $('#name').val(),
       email: $('#email').val(),
       comments: $('#comments').val()
    };

    //var varData = 'name='+ name +'&email='+ email + '&comments=' + comments;
    console.log(varData);
    // send a request to the contactMeSend.php to send the email
    $.ajax({
      type: 'POST',
      url: 'components/php/contactMeSend.php',
      data: varData,
      dataType: 'JSON',
      success: function(data){
          var title = "Succeed";
          if (data.messages != "Message was sended") {
              title = "Error";
              $('#myModal').addClass('modal-danger');
          }
          else {
              $('#myModal').addClass('modal-success');
          }

          $( "#modalText" ).html(data.messages);
          $( ".modal-title" ).html( title );              
          $('#myModal').modal('show');
      },
      error: function(){
              $('#myModal').addClass('modal-danger');
              $( "#modalText" ).html( "Message was not sended" );
              $( ".modal-title" ).html( "Error" );
              $('#myModal').modal('show');
      }
    });

  });

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
        // Store hash
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({scrollTop: $(hash).offset().top}, 900, function(){
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
  });

  // Custome the error message in the inputs
  var email = document.getElementById("email");
  email.addEventListener("input", function (event) {
      if (email.validity.typeMismatch || email.validity.patternMismatch) {
        email.setCustomValidity("Email format Invalid!!!");
      } else {
        email.setCustomValidity("");
      }
  });

  var name = document.getElementById("name");
  name.addEventListener("input", function (event) {
      if (name.validity.patternMismatch) {
        name.setCustomValidity("Name format 3-40 characters!!!");
      } else {
        name.setCustomValidity("");
      }
  });

})

// Slide Smooth in Elements

$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 900) {
      $(this).addClass("slide");
    }
  });
});