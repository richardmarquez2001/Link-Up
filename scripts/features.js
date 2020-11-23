//buttons
const ONE = document.getElementById("f1");
const TWO = document.getElementById("f2");
const THREE = document.getElementById("f3");
const FOUR = document.getElementById("f4");
const FIVE = document.getElementById("f5");
const SIX = document.getElementById("f6");

//text
let title = document.getElementById("featureTitle");
let text = document.getElementById("featureText");
let image = document.getElementById("featureImage");

//info

info_title = [
  "Feature 1",
  "Feature 2",
  "Feature 3",
  "Feature 4",
  "Feature 5",
  "Feature 6",
];

info_text = [
  "Feature 1: text",
  "Feature 2: text",
  "Feature 3: text",
  "Feature 4: text",
  "Feature 5: text",
  "Feature 6: text",
];

src_images=[
"../images/featuresp1.jpg",
"../images/featuresp2.jpg",
"../images/featuresp3.jpg",
"../images/featuresp4.jpg",
"../images/featuresp5.jpg",
"../images/featuresp6.jpg",
]

ONE.addEventListener('click',function(){
    title.innerHTML=info_title[0];
    text.innerHTML=info_text[0];
    image.setAttribute("src",src_images[0]);
});
TWO.addEventListener('click',function(){
    title.innerHTML=info_title[1];
    text.innerHTML=info_text[1];
    image.setAttribute("src",src_images[1]);
});
THREE.addEventListener('click',function(){
    title.innerHTML=info_title[2];
    text.innerHTML=info_text[2];
    image.setAttribute("src",src_images[2]);
});
FOUR.addEventListener('click',function(){
    title.innerHTML=info_title[3];
    text.innerHTML=info_text[3];
    image.setAttribute("src",src_images[3]);
});
FIVE.addEventListener('click',function(){
    title.innerHTML=info_title[4];
    text.innerHTML=info_text[4];
    image.setAttribute("src",src_images[4]);
});
SIX.addEventListener('click',function(){
    title.innerHTML=info_title[5];
    text.innerHTML=info_text[5];
    image.setAttribute("src",src_images[5]);
});