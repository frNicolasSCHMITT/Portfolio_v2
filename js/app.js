let glow = 0;
setInterval(function () {
  if (glow == 0) {
    document.querySelector(".glow").style.boxShadow =
      "0 0 80px 50px #fff, 0 0 100px 60px #FCB99E, 0 0 140px 90px #FCB99E";
    glow++;
  } else {
    document.querySelector(".glow").style.boxShadow = "0 0 60px 30px #fff";
    glow = 0;
  }
}, 5000);

// NAV content on click

let button = document.querySelectorAll(".navButton");
let target = "";

for (let i = 0; i < button.length; i++) {
  button[i].addEventListener("click", function () {
    console.log("button" + button);
    target = button[i].getAttribute("data-target");
    console.log("target" + target);
    xhr_object = new XMLHttpRequest();
    xhr_object.open("GET", target, true);
    xhr_object.onreadystatechange = function () {
      if (xhr_object.readyState == 4)
        // alert(xhr_object.responseText)
        var content = xhr_object.responseText;
      var container = document.getElementById("cardContainer");
      container.innerHTML = content;
    };
    xhr_object.send(null);
  });
}
