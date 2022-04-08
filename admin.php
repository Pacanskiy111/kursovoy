<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewpoint" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="image/icon.ico" type="image/x-icon">
  <title>Табуретка купить</title>
</head>
<body>
<div class="header">
<div class="logo"><a href="admin.php"><img src="image/logo.png" width="250" height="45"></a></div>
<div class="src">
<form action="" method="post" class="src">
  <input type="text" placeholder="Поиск по сайту">
</form>
</div>
<div class="block2">
<div class="cart">
<?php
$conn = new mysqli("localhost", "root", "", "shug");
echo 'Здрасте, ',$_SESSION['login'];
?>
<br>
 <a href="users.php" style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;">Админ панель</a>
 <form action="exit.php" method="post">
 <a href="index.php" style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;">Выйти</a>
 </form>
    </div>
</div>
</div>
</div>
<hr>
<div class="block2">
<div class="nav">
  <div class="dropdown">
  <button class="dropbtn"><b>Диваны</b></button>
  <div class="dropdown-content">
    <a href="divani/divani-krovati.php">Диваны-кровати</a>
    <a href="divani/pryamie.php">Прямые</a>
    <a href="divani/uglovie.php">Угловые</a>
  </div>
</div>
<div class="btn">
  <div class="dropdown">
  <button class="dropbtn"><b>Кровати</b></button>
  <div class="dropdown-content">
    <a href="#">Двуспальные</a>
    <a href="#">Односпальные</a>
  </div>
</div>
</div>
<div class="btn">
  <div class="dropdown">
  <button class="dropbtn"><b>Шкафы</b></button>
  <div class="dropdown-content">
    <a href="#">Шкафы-купе</a>
    <a href="#">Распашные</a>
    <a href="#">С зеркалом</a>
  </div>
</div>
</div>
<div class="btn">
  <div class="dropdown">
  <button class="dropbtn"><b>Стенки</b></button>
  <div class="dropdown-content">
    <a href="#">Стенки</a>
  </div>
</div>
</div>
</div>
<hr>
</div>

<div class="block1">
<nav class="mobile-menu">
<div class="logo_mob"><a href="index.php"><img src="image/logo.png" width="250" height="45"></a></div>
    <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
    <label for="checkbox" class="mobile-menu__btn"><div class="mobile-menu__icon"></div></label>
    <div class="mobile-menu__container">
    <ul class="mobile-menu__list">
<li>
<div class="nav2">
<?php
$conn = new mysqli("localhost", "root", "root", "shug");
echo 'Здрасте, ',$_SESSION['login'];
?>
<br>
 <a href="users.php" class="mobile-menu__item">Пользователи</a>
 <form action="exit.php" method="post">
 <a href="index.php" class="mobile-menu__item">Выйти</a>
 </form>
    </div>
</li>
<div class="nav2">
<div class="btn">
  <div class="dropdown">
  <button class="dropbtn"><li class="mobile-menu__item"><a class="mobile-menu__link">Диваны</a></li></button>
  <div class="dropdown-content">
    <a href="divani/divani-krovati.php">Диваны-кровати</a>
    <a href="divani/pryamie.php">Прямые</a>
    <a href="divani/uglovie.php">Угловые</a>
  </div>
</div>
</div>
<div class="btn">
  <div class="dropdown">
  <button class="dropbtn"><li class="mobile-menu__item"><a class="mobile-menu__link">Кровати</a></li></button>
  <div class="dropdown-content">
    <a href="#">Двуспальные</a>
    <a href="#">Односпальные</a>
  </div>
</div>
</div>
<div class="btn">
  <div class="dropdown">
  <button class="dropbtn"><li class="mobile-menu__item"><a class="mobile-menu__link">Шкафы</a></li></button>
  <div class="dropdown-content">
    <a href="#">Шкафы-купе</a>
    <a href="#">Распашные</a>
    <a href="#">С зеркалом</a>
  </div>
</div>
</div>
<div class="btn">
  <div class="dropdown">
  <button class="dropbtn"><li class="mobile-menu__item"><a class="mobile-menu__link">Стенки</a></li></button>
  <div class="dropdown-content">
    <a href="#">Стенки</a>
  </div>
</div>
</div>
</div>
    </ul>
    </div>
</nav>
</div>

<div class="slider">
  <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <a href="hiti/hit1.php"><img src="image/1.jpg" style="width:100%"></a>
    <div class="text">Хит продаж всего за 10.000 ₽</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <a href="hiti/hit3.php"><img src="image/2.jpg" style="width:100%"></a>
    <div class="text">Хит продаж всего за 10.000 ₽</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <a href="hiti/hit2.php"><img src="image/3.jpg" style="width:100%"></a>
    <div class="text">Хит продаж всего за 10.000 ₽</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</div>
<hr>
<div class="best">
<div class="best_text">Лучшие предложения</div>
  <figure class="image"><a href="#"><img width="340" height="200" src="image/best2.png" /><figcaption>Диван серый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure>
  <figure class="image"><a href="#"><img width="340" height="200" src="image/best1.png" /><figcaption>Диван серый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure>
  <figure class="image"><a href="#"><img width="340" height="200" src="image/best3.png" /><figcaption>Диван желтый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure>
</div>
<hr>
<div class="cate">
<div class="cate_text">Популярные категории</div>
<div class="cate_img">
<figure class="image"><a href="#"><img width="400" height="250" src="image/cate1.png" /><figcaption class="figc">Диваны<br/></figcaption></a></figure>
<figure class="image"><a href="#"><img width="400" height="250" src="image/cate2.png" /><figcaption class="figc">Стенки<br/></figcaption></a></figure>
<figure class="image"><a href="#"><img width="400" height="250" src="image/cate3.png" /><figcaption class="figc">Шкафы<br/></figcaption></a></figure>
<figure class="image"><a href="#"><img width="400" height="250" src="image/cate4.png" /><figcaption class="figc">Кровати<br/></figcaption></a></figure>
</div>
</div>
<hr>
<div class="footer">
<div class="pokupatelyam">
  <b>Покупателям<br/><br/></b>
<br/>
  <a href="#">Доставка</a><br/><br/>
  <a href="#">Гарантия</a><br/><br/>
  <a href="#">Часто задаваемые<br/>
  вопросы</a><br/><br/>
</div>
<div class="companiya">
  <b>Компания<br/><br/></b>
  <br/>
  <a href="#">О компании</a><br/><br/>
  <a href="#">Контакты</a><br/><br/>
</div>
<div class="catalog">
  <b>Каталог<br/><br/></b>
  <br/>
  <a href="divani/divani-krovati.php">Диваны</a><br/><br/>
  <a href="#">Кровати</a><br/><br/>
  <a href="#">Стенки</a><br/><br/>
  <a href="#">Шкафы</a><br/><br/>
</div>
<div class="mobila">
8 (3333) 22-33-44
</div>
<div class="socialki">
<a href="#"><img width="40" height="40" src="image/inst.png"></a>
<a href="#"><img width="35" height="35" src="image/vk.png"></a>
<a href="#"><img width="40" height="40" src="image/twit.png"></a>
<a href="#"><img width="40" height="40" src="image/yout.png"></a>
</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
</body>
</html>
