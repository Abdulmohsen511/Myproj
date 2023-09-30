<!DOCTYPE html>
<html lang="en"  dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <title>Document</title>
</head>

<body>
<script>



var countDownDate = new Date("Jan 28, 2024 16:47:25").getTime();

var x = setInterval(function() {

  var counter = document.getElementById("#countd");
  counter.innerHTML = "asdd";
  var now = new Date().getTime();

  var distance = countDownDate - now;
  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  counter.innerHTML = days + "يوم " + hours + "ساعة "
  + minutes + "دقيقة " + seconds + "ثانية ";

  
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "انتهى تاريخ التسجيل";
  }

}, 1000);




</script>