//Script for page

$(document).ready(
    function(){
    //text effect
    var effectdiv

    var effectdiv = new Typed('#textfx .shower', {
        strings: ['Technology for <strong class="xfx">Business</strong>', 'Tools for <strong class="xfx">Development</strong>', 'Creativity in <strong class="xfx">Design</strong>'],
        typeSpeed: 0,
        backSpeed: 0,
        smartBackspace: true, // this is a default
        loop: true
      });
      
    //link active
    $('.menu .nav-item').click(function(e){
        $('.menu .nav-item').css("color", "black");
        $(this).css("color", "#650101");
    });

    }
);