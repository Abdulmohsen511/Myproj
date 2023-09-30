alert("Hello! I am an alert box!!");

var countDownDate = new Date("Apr 28, 2024 16:47:25").getTime();
document.getElementById("#countd").innerHTML = "DDDD";

var x = setInterval(function() {

  var counter = document.getElementById("#countd").innerHTML = "DDDD";
  counter.innerHTML = "asd";
  var now = new Date().getTime();

  var distance = countDownDate - now;
  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  
  counter.innerHTML = days + "يوم " + hours + "ساعة "
  + minutes + "دقيقة " + seconds + "ثانية ";

  
  if (distance > 0) {
    clearInterval(x);
    counter.innerHTML = "انتهى تاريخ التسجيل";
  }
}, 1000);






