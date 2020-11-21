var i = 0;
function move() {
  var activate = true;
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("progress-bar");
    var width = 1;
    var id = setInterval(frame, 40);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
        activate = false;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width + "%";
      }
    }
  }

  if (!activate){
    document.getElementsById("result-btn").disabled = true;
    document.getElementById("generate-text").innerHTML = "Your results are ready!";
  }
  else {
    document.getElementById("generate-text").innerHTML = "One moment while we find you some matches...";
    document.getElementById("result-btn2").innerHTML = "Click to View Results.";
    
    // document.getElementById("result-btn").
  }
  
}