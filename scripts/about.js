//Button
let left = document.getElementById("lClick");
let right = document.getElementById("rClick");

//Bubbles
let b1 = document.getElementById("p1");
let b2 = document.getElementById("p2");
let b4 = document.getElementById("p4");
let b5 = document.getElementById("p5");
let b6 = document.getElementById("p6");

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
  "It's Safe!: RESPONSE",
];
let src_images = [
  "/Link-Up/images/aboutp1.jpeg",
  "/Link-Up/images/aboutp4.jpg",
  "/Link-Up/images/aboutp2.jpg",
  "/Link-Up/images/aboutp3.jpeg",
  "/Link-Up/images/aboutp5.jpg"
];

function slideLeft() {
  console.log("left");
  position -= 1;
  if (position == -1) {
    position = 4;
  }
  changeColor(position);
  text.innerHTML = info_text[position];
  title.innerHTML = info_title[position];
  image.setAttribute("src",src_images[position])
}

function slideRight() {
  console.log("right");

  position += 1;
  if (position == 5) {
    position = 0;
  }
  changeColor(position);
  text.innerHTML = info_text[position];
  title.innerHTML = info_title[position];
  image.setAttribute("src",src_images[position])

}

function changeColor(position) {
  switch (position) {
    case 0:
      title.setAttribute("style","background-color:#B4A0E5;");
      break;
    case 1:
      title.setAttribute("style","background-color:#8AE9C1;");
      break;
    case 2:
      title.setAttribute("style","background-color:#FC6471;");
      break;
    case 3:
      title.setAttribute("style","background-color:#8AE9C1;");
      break;
    case 4:
      title.setAttribute("style","background-color:#B4A0E5;");
      break;
  }
}

left.addEventListener("click", slideLeft);
right.addEventListener("click", slideRight);
