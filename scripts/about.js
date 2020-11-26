let position = 0;
let info_title = [
  "It's Free!",
  "It's Fast!",
  "It's Easy!",
  "It's Simple!",
  "It's Safe!",
];
let info_text = [
  "You don't have to worry about paying any membership fee when using Link Up. Sign up for free and start making friends easily!",
  "Don't worry about long sign up processes or a limited about of searches per day. Get access with in minutes and match with people who have the same interest as you.",
  "Make friends at the same rate you could offline. Answer a few carefully selected questions and be matched with people instantly.",
  "Get comfortable learning how to use Link Up within a matter of seconds. Our interface is straightforward and leaves no room for you to get confused!",
  "It's Safe!: RESPONSE",
];
let src_images = [
  "/Link-Up/images/aboutp1.jpeg",
  "/Link-Up/images/aboutp4.jpg",
  "/Link-Up/images/aboutp2.jpg",
  "/Link-Up/images/aboutp3.jpeg",
  "/Link-Up/images/aboutp5.jpg",
];

function changeColor(position) {
  switch (position) {
    case 0:
      $("#infoTitle").css("background-color", "#B4A0E5");
      $("#p1").animate({ opacity:'0.5' },1000);
      $("#p5").animate({ opacity:'0.5' },1000);
      $("#p2").animate({ opacity:'0.5' },1000);
      $("#p4").animate({ opacity:'0.5' },1000);
      $("#p6").animate({ opacity:'1' },1000);
      break;
    case 1:
      $("#infoTitle").css("background-color", "#8AE9C1");
      $("#p6").animate({ opacity:'0.5' },1000);
      $("#p5").animate({ opacity:'0.5' },1000);
      $("#p2").animate({ opacity:'0.5' },1000);
      $("#p4").animate({ opacity:'0.5' },1000);
      $("#p1").animate({ opacity:'1' },1000);

      break;
    case 2:
      $("#infoTitle").css("background-color", "#FC6471");
      $("#p6").animate({ opacity:'0.5' },1000);
      $("#p1").animate({ opacity:'0.5' },1000);
      $("#p2").animate({ opacity:'0.5' },1000);
      $("#p4").animate({ opacity:'0.5' },1000);
      $("#p5").animate({ opacity:'1' },1000);

      break;
    case 3:
      $("#infoTitle").css("background-color", "#8AE9C1");
      $("#p1").animate({ opacity:'0.5' },1000);
      $("#p5").animate({ opacity:'0.5' },1000);
      $("#p6").animate({ opacity:'0.5' },1000);
      $("#p4").animate({ opacity:'0.5' },1000);
      $("#p2").animate({ opacity:'1' },1000);
      break;
    case 4:
      $("#infoTitle").css("background-color", "#B4A0E5");
      $("#p1").animate({ opacity:'0.5' },1000);
      $("#p5").animate({ opacity:'0.5' },1000);
      $("#p6").animate({ opacity:'0.5' },1000);
      $("#p2").animate({ opacity:'0.5' },1000);
      $("#p4").animate({ opacity:'1' },1000);

      break;
  }
}

$("#lClick").click(function () {
  //fadeOut
  $("#infoTitle").delay(200).fadeOut(1000).delay(200).hide();
  $("#infoText").delay(200).fadeOut(1000).delay(200).hide();
  $("#infoImage").delay(200).fadeOut(1000).delay(200).hide();

  //Get position
  position -= 1;
  if (position == -1) {
    position = 4;
  }
  changeColor(position);
  //Change HTML
  $("#infoTitle").html(info_title[position]);
  $("#infoText").html(info_text[position]);
  $("#infoImage").attr("src", src_images[position]);
  //Fade In
  $("#infoTitle").delay(200).fadeIn(1000);
  $("#infoText").delay(200).fadeIn(1000);
  $("#infoImage").delay(200).fadeIn(1000);
});

$("#rClick").click(function () {
   //fadeOut
  $("#infoTitle").fadeOut(1000).delay(200).hide();
  $("#infoText").fadeOut(1000).delay(200).hide();
  $("#infoImage").fadeOut(1000).delay(200).hide();
    //Get position
  position += 1;
  if (position == 5) {
    position = 0;
  }
  changeColor(position);
  $("#infoTitle").html(info_title[position]);
  $("#infoText").html(info_text[position]);
  $("#infoImage").attr("src", src_images[position]);
  //Change HTML
  $("#infoTitle").html(info_title[position]);
  $("#infoText").html(info_text[position]);
  $("#infoImage").attr("src", src_images[position]);
  //Fade In
  $("#infoTitle").delay(200).fadeIn(1000);
  $("#infoText").delay(200).fadeIn(1000);
  $("#infoImage").delay(200).fadeIn(1000);
});
