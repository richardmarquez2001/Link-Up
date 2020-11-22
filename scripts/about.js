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

console.log(text.innerHTML);
console.log(title.innerHTML);
console.log(image);

let position = 0;
let info_title = [
  "It's Free!",
  "It's Fast!",
  "It's Modern!",
  "There are no Strings-Attached!",
  "It's Easy!",
  "It's Simple!",
  "It's Safe!",
];
let info_text = [
  "It's Free!: RESPONSE",
  "It's Fast!: RESPONSE",
  "It's Modern!: RESPONSE",
  "There are no Strings-Attached!: RESPONSE",
  "It's Easy!: RESPONSE",
  "It's Simple!: RESPONSE",
  "It's Safe!: RESPONSE",
];
// let src_images = []
function slideLeft() {
    test
  console.log("left");
  position -= 1;
  if (position == -1) {
    position = 6;
  }
//   bounce(position);
  text.innerHTML = info_text[position];
  title.innerHTML = info_title[position];
}

function slideRight() {
  console.log("right");

  position += 1;
  if (position == 7) {
    position = 0;
  }
//   bounce(position);
  text.innerHTML = info_text[position];
  title.innerHTML = info_title[position];
}

function test(){
    document.getElementById("p6").style="animation:bounce_1; animation duration: 5s;"
}

function clearAnimation(){
    b1.classList.remove("animate");
    b2.classList.remove("animate");
    b3.classList.remove("animate");
    b4.classList.remove("animate");
    b5.classList.remove("animate");
    b6.classList.remove("animate");
    b7.classList.remove("animate");
}

function bounce(position) {
  switch (position) {
    case 0:
      b1.classList.add("animate");
      break;
    case 1:
      b2.classList.add("animate");
      break;
    case 2:
      b3.classList.add("animate");
      break;
    case 3:
      b4.classList.add("animate");
      break;
    case 4:
      b5.classList.add("animate");
      break;
    case 5:
      b6.classList.add("animate");
      break;
    case 6:
      b7.classList.add("animate");
      break;
  }
}

left.addEventListener("click", slideLeft);
right.addEventListener("click", slideRight);
