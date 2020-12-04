//Button
let left = document.getElementById("lClick");
let right = document.getElementById("rClick");

//Bubbles
let b1 = document.querySelector(".p1");
let b2 = document.getElementById("p2");
let b3 = document.getElementById("p3");
let b4 = document.getElementById("p4");
let b5 = document.getElementById("p5");
let b6 = document.getElementById("p6");
let b7 = document.getElementById("p7");

//Information to change
let text = document.getElementById("infoText");
let title = document.getElementById("infoTitle");
let image = document.getElementById("infoImage");

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
    "If you come across someone that isn't a good match for you, you have the option to remove them in settings.",
  ];
  let src_images = [
    "/Link-Up/images/aboutp1.jpeg",
    "/Link-Up/images/aboutp4.jpg",
    "/Link-Up/images/aboutp2.jpg",
    "/Link-Up/images/aboutp3.jpeg",
    "/Link-Up/images/aboutp5.jpg",
  ];
  let alt_images =[
    "Girl searching for people using magnifying glass",
    "People chatting in a coffee shop setting as well as texting",
    "Two people sitting back to back on their phones",
    "Earth with links to location, social media, and money",
    "Four people at a party"

  ]

function slideLeft() {
  console.log("left");
  position -= 1;
  if (position == -1) {
    position = 4;
  }
  changeColor(position);
  text.innerHTML = info_text[position];
  title.innerHTML = info_title[position];
  image.setAttribute("src", src_images[position]);
  image.setAttribute("alt",alt_images[position]);
}

function slideRight() {

  position += 1;
  if (position == 5) {
    position = 0;
  }
  changeColor(position);
  text.innerHTML = info_text[position];
  title.innerHTML = info_title[position];
  image.setAttribute("src", src_images[position]);
  image.setAttribute("alt",alt_images[position]);

}

function test() {
  document.getElementById("p6").style =
    "animation:bounce_1; animation duration: 5s;";
}

function clearAnimation() {
  b1.classList.remove("animate");
  b2.classList.remove("animate");
  b3.classList.remove("animate");
  b4.classList.remove("animate");
  b5.classList.remove("animate");
  b6.classList.remove("animate");
  b7.classList.remove("animate");
}

function changeColor(position) {
  switch (position) {
    case 0:
      $("#infoTitle").css("background-color", "#B4A0E5");
      $("#p1").animate({ opacity: "0.5" }, 1000);
      $("#p5").animate({ opacity: "0.5" }, 1000);
      $("#p2").animate({ opacity: "0.5" }, 1000);
      $("#p4").animate({ opacity: "0.5" }, 1000);
      $("#p6").animate({ opacity: "1" }, 1000);
      break;
    case 1:
      $("#infoTitle").css("background-color", "#8AE9C1");
      $("#p6").animate({ opacity: "0.5" }, 1000);
      $("#p5").animate({ opacity: "0.5" }, 1000);
      $("#p2").animate({ opacity: "0.5" }, 1000);
      $("#p4").animate({ opacity: "0.5" }, 1000);
      $("#p1").animate({ opacity: "1" }, 1000);

      break;
    case 2:
      $("#infoTitle").css("background-color", "#FC6471");
      $("#p6").animate({ opacity: "0.5" }, 1000);
      $("#p1").animate({ opacity: "0.5" }, 1000);
      $("#p2").animate({ opacity: "0.5" }, 1000);
      $("#p4").animate({ opacity: "0.5" }, 1000);
      $("#p5").animate({ opacity: "1" }, 1000);

      break;
    case 3:
      $("#infoTitle").css("background-color", "#8AE9C1");
      $("#p1").animate({ opacity: "0.5" }, 1000);
      $("#p5").animate({ opacity: "0.5" }, 1000);
      $("#p6").animate({ opacity: "0.5" }, 1000);
      $("#p4").animate({ opacity: "0.5" }, 1000);
      $("#p2").animate({ opacity: "1" }, 1000);
      break;
    case 4:
      $("#infoTitle").css("background-color", "#B4A0E5");
      $("#p1").animate({ opacity: "0.5" }, 1000);
      $("#p5").animate({ opacity: "0.5" }, 1000);
      $("#p6").animate({ opacity: "0.5" }, 1000);
      $("#p2").animate({ opacity: "0.5" }, 1000);
      $("#p4").animate({ opacity: "1" }, 1000);

      break;
  }
}

left.addEventListener("click", slideLeft);
right.addEventListener("click", slideRight);

