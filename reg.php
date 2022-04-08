<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
require_once("bd.php");
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
    <div class="logo"><a href="index.php"><img src="image/logo.png" width="180" height="60"></a></div>
    <div class="src">
      <form action="" method="post" class="src">
        <input type="text" placeholder="Поиск по сайту" size="133">
      </form>
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
      <div class="logo_mob"><a href="index.php"><img src="image/logo.png" width="180" height="60"></a></div>
      <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
      <label for="checkbox" class="mobile-menu__btn">
        <div class="mobile-menu__icon"></div>
      </label>
      <div class="mobile-menu__container">
        <ul class="mobile-menu__list">
          <div class="nav2">
            <div class="btn">
              <div class="dropdown">
                <button class="dropbtn">
                  <li class="mobile-menu__item"><a class="mobile-menu__link">Диваны</a></li>
                </button>
                <div class="dropdown-content">
                  <a href="divani/divani-krovati.php">Диваны-кровати</a>
                  <a href="divani/pryamie.php">Прямые</a>
                  <a href="divani/uglovie.php">Угловые</a>
                </div>
              </div>
            </div>
            <div class="btn">
              <div class="dropdown">
                <button class="dropbtn">
                  <li class="mobile-menu__item"><a class="mobile-menu__link">Кровати</a></li>
                </button>
                <div class="dropdown-content">
                  <a href="#">Двуспальные</a>
                  <a href="#">Односпальные</a>
                </div>
              </div>
            </div>
            <div class="btn">
              <div class="dropdown">
                <button class="dropbtn">
                  <li class="mobile-menu__item"><a class="mobile-menu__link">Шкафы</a></li>
                </button>
                <div class="dropdown-content">
                  <a href="#">Шкафы-купе</a>
                  <a href="#">Распашные</a>
                  <a href="#">С зеркалом</a>
                </div>
              </div>
            </div>
            <div class="btn">
              <div class="dropdown">
                <button class="dropbtn">
                  <li class="mobile-menu__item"><a class="mobile-menu__link">Стенки</a></li>
                </button>
                <div class="dropdown-content">
                  <a href="#">Стенки</a>
                </div>
              </div>
            </div>
            <div class="btn">
              <div class="dropdown">
                <button class="dropbtn"><b>Каталог</b></button>
                <div class="dropdown-content">
                  <a href="catalog/catalog.php">Каталог</a>
                </div>
              </div>
            </div>
          </div>
        </ul>
      </div>
    </nav>
  </div>

  <div class="regg">
    <h2 class="h2">Регистрация</h2>
    <div class="reg">
      <form action="save_user.php" method="post">
        <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
        <p>
          <input name="login" type="text" placeholder="Логин">
        </p>
        <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
        <p>
          <input name="password" type="password" placeholder="Пароль">
        </p>
        <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
        <p>
          <input type="submit" name="submit" value="Зарегистрироваться">
          <!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->
        </p>
      </form>
    </div>
  </div>
  <hr>
  <div class="footer">
    <div class="pokupatelyam">
      <b>Покупателям<br /><br /></b>
      <br />
      <a href="#">Доставка</a><br /><br />
      <a href="#">Гарантия</a><br /><br />
      <a href="#">Часто задаваемые<br />
        вопросы</a><br /><br />
    </div>
    <div class="companiya">
      <b>Компания<br /><br /></b>
      <br />
      <a href="#">О компании</a><br /><br />
      <a href="#">Контакты</a><br /><br />
    </div>
    <div class="catalog">
      <b>Каталог<br /><br /></b>
      <br />
      <a href="divani/divani-krovati.php">Диваны</a><br /><br />
      <a href="#">Кровати</a><br /><br />
      <a href="#">Стенки</a><br /><br />
      <a href="#">Шкафы</a><br /><br />
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
</body>

</html>