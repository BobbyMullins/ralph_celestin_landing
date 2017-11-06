var $url = myScript.template_url+'/images/'; 
$(window).on( "load", function() { 
    // var $img1 = new Image(); 
    // $img1.src='/images/ralph_celestin_hover_imageWEBASSET2A.png';
    // var $img2 = new Image(); 
    // $img2.src='/images/rise_celestial_hover_imageWEBASSET2.png'; 
    // // var url = myScript.template_url+'/images/'; 
    // $("#btn1").mouseenter(function() {
    //     var $url = myScript.template_url+'/images/'; 
    //     $('.main_landing').css("background-image", "url(" + $url + "/ralph_celestin_hover_imageWEBASSET2A.png" + ")");
    //     $('.main_landing').css('transition', '.1s'); 
    // });
    // $("#btn1").mouseleave(function() {
    //     var $url = myScript.template_url+'/images/'; 
    //     $('.main_landing').css("background-image", "url(" + $url + "/ralph_celestin_landing_image.png" + ")");
    //     $('.main_landing').css('transition', '.1s'); 
    // });
    // $("#btn2").mouseenter(function() {
    //     var $url = myScript.template_url+'/images/'; 
    //     $('.main_landing').css("background-image", "url(" + $url + "/rise_celestial_hover_imageWEBASSET2.png" + ")");
    //     $('.main_landing').css('transition', '.1s'); 
    // });
    // $("#btn2").mouseleave(function() {
    //     var $url = myScript.template_url+'/images/'; 
    //     $('.main_landing').css("background-image", "url(" + $url + "/ralph_celestin_landing_image.png" + ")");
    //     $('.main_landing').css('transition', '.1s'); 
    // });
    
    $("#btn1").mouseenter(function() {
        // var $url = myScript.template_url+'/images/'; 
        $('.landing_img').attr("src", $url + "/ralph_celestin_landing_for_hoverFINAL.jpg");
        $('.landing_img').css('transition', '.3s'); 
    });

    $("#btn1").mouseleave(function() {
        // var $url = myScript.template_url+'/images/'; 
        $('.landing_img').attr("src", $url + "/ralph_celestin_landing_for_backgroundFINAL.jpg");
        $('.landing_img').css('transition', '.3s'); 
    });


    $("#btn2").mouseenter(function() {
        // var $url = myScript.template_url+'/images/'; 
        $('.landing_img').attr("src", $url + "/rise_celestial_landing_for_hoverFINAL.jpg");
        $('.landing_img').css('transition', '.3s'); 
    });

    $("#btn2").mouseleave(function() {
        // var $url = myScript.template_url+'/images/'; 
        $('.landing_img').attr("src", $url +"/ralph_celestin_landing_for_backgroundFINAL.jpg");
        $('.landing_img').css('transition', '.3s'); 
    });
});

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}