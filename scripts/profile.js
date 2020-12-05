//Makes questionnaire data visible or social media data visible when the correct button is clicked.
$(".socialMediaContainer").hide();

$("#qProfile").click(function(){
    $(".socialMediaContainer").hide();
    $(".questionaireContainer").show();
    
});
$("#sProfile").click(function(){
    $(".socialMediaContainer").show();
    $(".questionaireContainer").hide();
    
});