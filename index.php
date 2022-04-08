<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
require_once("bd.php");
require_once("pageno.php");
?>
<?php
if (!isset($_SESSION['login'])) {
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
    </form>
    <div class="header">
      <div class="logo"><a href="index.php"><img src="image/logo.png" width="180" height="50"></a></div>
      <div class="src">
        <form action="" method="post" class="src">
          <input type="text" placeholder="Поиск по сайту">
        </form>
      </div>
      <div class="cart">
        <!-- Ссылки на вызов модальных окон-->
        <a href="#win1" class="button button-green" style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;">Вход</a>
        <!-- Модальное окно №1 -->
        <a href="#x" class="overlay" id="win1"></a>
        <div class="popup">
          <h2>Вход</h2>
          <form action="testreg.php" method="post">

            <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
            <p>
              <input name="login" type="text" placeholder="Логин">
            </p>


            <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->

            <p>

              <input name="password" type="password" placeholder="Пароль">
            </p>

            <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->

            <p>
              <input type="submit" name="submit" value="Войти">

              <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->
              <br>
              <br>
              <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** -->
              <a href="reg.php">Нет аккаунта?</a>
            </p>
          </form>
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
              <a href="krovati/krovati-dvuspalnie.php">Двуспальные</a>
              <a href="krovati/krovati-odnospalnie.php">Односпальные</a>
            </div>
          </div>
        </div>
        <div class="btn">
          <div class="dropdown">
            <button class="dropbtn"><b>Шкафы</b></button>
            <div class="dropdown-content">
              <a href="shkafi/shkafi-kupe.php">Шкафы-купе</a>
              <a href="shkafi/shkafi-raspashnie.php">Распашные</a>
              <a href="shkafi/shkafi-uglovie.php">Угловые</a>
            </div>
          </div>
        </div>
        <div class="btn">
          <div class="dropdown">
            <button class="dropbtn"><b>Стенки</b></button>
            <div class="dropdown-content">
              <a href="stenki/stenki.php">Стенки</a>
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
      <hr>
    </div>

    <div class="block1">
      <nav class="mobile-menu">
        <div class="logo_mob"><a href="index.php"><img src="image/logo.png" width="180" height="50"></a></div>
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn">
          <div class="mobile-menu__icon"></div>
        </label>
        <div class="mobile-menu__container">
          <ul class="mobile-menu__list">

            <div class="cart">
              <!-- Ссылки на вызов модальных окон-->
              <li class="mobile-menu__item"><a href="#win1" class="mobile-menu__link">Вход</a></li>
              <!-- Модальное окно №1 -->
              <a href="#x" class="overlay" id="win1"></a>
              <div class="popup">
                <h2>Вход</h2>
                <form action="testreg.php" method="post">

                  <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
                  <p>
                    <input name="login" type="text" placeholder="Логин">
                  </p>


                  <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->

                  <p>

                    <input name="password" type="password" placeholder="Пароль">
                  </p>

                  <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->

                  <p>
                    <input type="submit" name="submit" value="Войти">

                    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->
                    <br>
                    <br>
                    <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** -->
                    <a href="reg.php">Нет аккаунта?</a>
                  </p>
                </form>
              </div>
            </div>
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
                    <a href="krovati/krovati-dvuspalnie.php">Двуспальные</a>
                    <a href="krovati/krovati-odnospalnie.php">Односпальные</a>
                  </div>
                </div>
              </div>
              <div class="btn">
                <div class="dropdown">
                  <button class="dropbtn">
                    <li class="mobile-menu__item"><a class="mobile-menu__link">Шкафы</a></li>
                  </button>
                  <div class="dropdown-content">
                    <a href="shkafi/shkafi-kupe.php">Шкафы-купе</a>
                    <a href="shkafi/shkafi-raspashnie.php">Распашные</a>
                    <a href="shkafi/shkafi-uglovie.php">Угловые</a>
                  </div>
                </div>
              </div>
              <div class="btn">
                <div class="dropdown">
                  <button class="dropbtn">
                    <li class="mobile-menu__item"><a class="mobile-menu__link">Стенки</a></li>
                  </button>
                  <div class="dropdown-content">
                    <a href="stenki/stenki.php">Стенки</a>
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
          <a href="hiti/hit1.php"><img src="image/slide1.jpg" style="width:100%"></a>
          <div class="text">Хит продаж всего за 10.000 ₽</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <a href="hiti/hit3.php"><img src="image/slide2.jpg" style="width:100%"></a>
          <div class="text">Хит продаж всего за 10.000 ₽</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <a href="hiti/hit2.php"><img src="image/slide3.jpg" style="width:100%"></a>
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
    <div class="best_text">Каталог</div>
    <div class="best">


      <?php
      // $conn = new mysqli("localhost", "root", "", "shug");
      // if($conn->connect_error){
      //     die("Ошибка: " . $conn->connect_error);
      // }
      // $sql = "SELECT * FROM products";
      // if($result = $conn->query($sql)){
      //     foreach($result as $row){
      //       echo "<div>";
      //         echo "<tr>";
      //             echo "<div class='image'>" . '<img src="data://image/jpeg;base64,'.base64_encode($row['img']).'">' . "</div>" . "</br>";
      //             echo "<td>" . $row["title"] . "</td>" . "</br>";
      //             echo "<td>" . $row["price"] . "Руб." . "</td>";
      //             echo "<td><form action='tocart.php' method='post'><input type='submit' value='Добавить в корзину'></form></td>";
      //         echo "</tr>";
      //       echo "</div>";
      //     }
      //     echo "</table>";
      //    } else{
      //     echo "Ошибка: " . $conn->error;
      // }
      // $conn->close();
      ?>


      <?php $sql = "SELECT * FROM products"; ?>
      <?php if ($result = $link->query($sql)) : ?>
        <?php foreach ($result as $row) : ?>
          <div class='image'><img style="object-fit: cover; height: 100px; width: auto;" src="image/products/<?= $row['category'] ?>i/<?= $row['img'] ?>"></br>
            <a><?= $row['title'] ?></a>
            <a><?= $row['price'] ?> Руб.</a></br>
            <a style="word-break:break-all; font-size: 14px;">Авторизуйтесь, чтобы добавить товар в корзину</a>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>



      <!-- 
  <figure class="image"><a href="#"><img width="340" height="200" src="image/best2.png" /><figcaption>Диван серый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure>
  <figure class="image"><a href="#"><img width="340" height="200" src="image/best1.png" /><figcaption>Диван серый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure>
  <figure class="image"><a href="#"><img width="340" height="200" src="image/best3.png" /><figcaption>Диван желтый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure>
  -->
    </div>
    <hr>
    <div class="cate">
      <div class="cate_text">Категории</div>
      <div class="cate_img">
        <figure class="image"><a href="divani/divani.php"><img width="400" height="250" src="image/cate1.png" />
            <figcaption class="figc">Диваны<br /></figcaption>
          </a></figure>
        <figure class="image"><a href="stenki/stenki.php"><img width="400" height="250" src="image/cate2.png" />
            <figcaption class="figc">Стенки<br /></figcaption>
          </a></figure>
        <figure class="image"><a href="shkafi/shkafi.php"><img width="400" height="250" src="image/cate3.png" />
            <figcaption class="figc">Шкафы<br /></figcaption>
          </a></figure>
        <figure class="image"><a href="krovati/krovati.php"><img width="400" height="250" src="image/cate4.png" />
            <figcaption class="figc">Кровати<br /></figcaption>
          </a></figure>
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
        <a href="krovati/krovati.php">Кровати</a><br /><br />
        <a href="stenki/stenki.php">Стенки</a><br /><br />
        <a href="shkafi/shkafi.php">Шкафы</a><br /><br />
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
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
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
        if (slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
      }
    </script>
  </body>

  </html>


<?php
} else {
?>


  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/icon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
    <script src="cart.js"></script>
    <title>Табуретка купить</title>
  </head>

  <body>
    </form>
    <div class="header">
      <div class="logo"><a href="index.php"><img src="image/logo.png" width="180" height="50"></a></div>
      <div class="src">
        <form action="" method="post" class="src">
          <input type="text" placeholder="Поиск по сайту">
        </form>
      </div>
      <div class="cart">
        <?php
        if ($_SESSION['login'] == 'admin') {
        ?>
          <a href="users.php" style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;">Админ панель</a>
        <?php
        }
        ?>
        <form action="exit.php" method="post">
          <input style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;" type="submit" name="exit" value="Выйти">
        </form>
        <a href="#win2" class="button button-green" style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;">Корзина</a>
        <!-- Модальное окно №1 -->
        <a href="#x" class="overlay" id="win2"></a>
        <div class="popup">
          <div class="show-cart"></div>
          <div class="show-full-cart"></div>
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
              <a href="krovati/krovati-dvuspalnie.php">Двуспальные</a>
              <a href="krovati/krovati-odnospalnie.php">Односпальные</a>
            </div>
          </div>
        </div>
        <div class="btn">
          <div class="dropdown">
            <button class="dropbtn"><b>Шкафы</b></button>
            <div class="dropdown-content">
              <a href="shkafi/shkafi-kupe.php">Шкафы-купе</a>
              <a href="shkafi/shkafi-raspashnie.php">Распашные</a>
              <a href="shkafi/shkafi-uglovie.php">Угловые</a>
            </div>
          </div>
        </div>
        <div class="btn">
          <div class="dropdown">
            <button class="dropbtn"><b>Стенки</b></button>
            <div class="dropdown-content">
              <a href="stenki/stenki.php">Стенки</a>
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
      <hr>
    </div>

    <div class="block1">
      <nav class="mobile-menu">
        <div class="logo_mob"><a href="index.php"><img src="image/logo.png" width="180" height="50"></a></div>
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn">
          <div class="mobile-menu__icon"></div>
        </label>
        <div class="mobile-menu__container">
          <ul class="mobile-menu__list">

            <div class="cart">
              <!-- Ссылки на вызов модальных окон-->
              <li class="mobile-menu__item"><a href="#win1" class="mobile-menu__link">Вход</a></li>
              <!-- Модальное окно №1 -->
              <a href="#x" class="overlay" id="win1"></a>
              <div class="popup">
                <h2>Вход</h2>
                <form action="testreg.php" method="post">

                  <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
                  <p>
                    <input name="login" type="text" placeholder="Логин">
                  </p>


                  <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->

                  <p>

                    <input name="password" type="password" placeholder="Пароль">
                  </p>

                  <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->

                  <p>
                    <input type="submit" name="submit" value="Войти">

                    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->
                    <br>
                    <br>
                    <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** -->
                    <a href="reg.php">Нет аккаунта?</a>
                  </p>
                </form>
              </div>
            </div>
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
                    <a href="krovati/krovati-dvuspalnie.php">Двуспальные</a>
                    <a href="krovati/krovati-odnospalnie.php">Односпальные</a>
                  </div>
                </div>
              </div>
              <div class="btn">
                <div class="dropdown">
                  <button class="dropbtn">
                    <li class="mobile-menu__item"><a class="mobile-menu__link">Шкафы</a></li>
                  </button>
                  <div class="dropdown-content">
                    <a href="shkafi/shkafi-kupe.php">Шкафы-купе</a>
                    <a href="shkafi/shkafi-raspashnie.php">Распашные</a>
                    <a href="shkafi/shkafi-uglovie.php">Угловые</a>
                  </div>
                </div>
              </div>
              <div class="btn">
                <div class="dropdown">
                  <button class="dropbtn">
                    <li class="mobile-menu__item"><a class="mobile-menu__link">Стенки</a></li>
                  </button>
                  <div class="dropdown-content">
                    <a href="stenki/stenki.php">Стенки</a>
                  </div>
                </div>
              </div>
              <div class="btn">
                <div class="dropdown">
                  <button class="dropbtn">
                    <li class="mobile-menu__item"><a class="mobile-menu__link">Каталог</a></li>
                  </button>
                  <div class="dropdown-content">
                    <a href="catalog/catalog.php">Стенки</a>
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
          <a href="hiti/hit1.php"><img src="image/slide1.jpg" style="width:100%"></a>
          <div class="text">Хит продаж всего за 10.000 ₽</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <a href="hiti/hit3.php"><img src="image/slide2.jpg" style="width:100%"></a>
          <div class="text">Хит продаж всего за 10.000 ₽</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <a href="hiti/hit2.php"><img src="image/slide3.jpg" style="width:100%"></a>
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
    <div class="best_text">Каталог</div>
    <div class="best">
      <?php
      // $conn = new mysqli("localhost", "root", "", "shug");
      // if($conn->connect_error){
      //     die("Ошибка: " . $conn->connect_error);
      // }
      // $sql = "SELECT * FROM products";
      // if($result = $conn->query($sql)){
      //     foreach($result as $row){
      //       echo "<div>";
      //         echo "<tr>";
      //             echo "<div class='image'>" . '<img src="data://image/jpeg;base64,'.base64_encode($row['img']).'">' . "</div>" . "</br>";
      //             echo "<td>" . $row["title"] . "</td>" . "</br>";
      //             echo "<td>" . $row["price"] . "Руб." . "</td>";
      //             echo "<td><form action='tocart.php' method='post'><input type='submit' value='Добавить в корзину'></form></td>";
      //         echo "</tr>";
      //       echo "</div>";
      //     }
      //     echo "</table>";
      //    } else{
      //     echo "Ошибка: " . $conn->error;
      // }
      // $conn->close();
      ?>


      <?php $sql = "SELECT * FROM products"; ?>
      <?php if ($result = $link->query($sql)) : ?>
        <?php foreach ($result as $row) : ?>
          <div class='image'>
            <img style="object-fit: cover; height: 100px; width: auto;" src="image/products/divani/<?= $row['img'] ?>"></br>
            <a><?= $row['title'] ?></a>
            <a><?= $row['price'] ?> Руб.</a></br>
            <a class="add-to-cart" href="?cart=add&id=<?= $row['id'] ?>" data-id="<?= $row['id'] ?>">Купить</a>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>


      <!-- <figure class="image"><a href="#"><img width="340" height="200" src="image/best2.png" /><figcaption>Диван серый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure>
  <figure class="image"><a href="#"><img width="340" height="200" src="image/best1.png" /><figcaption>Диван серый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure>
  <figure class="image"><a href="#"><img width="340" height="200" src="image/best3.png" /><figcaption>Диван желтый<br/><div class="fig"><s>20.000 ₽</s> 10.000 ₽</div></figcaption></a></figure> -->
    </div>
    <hr>
    <div class="cate">
      <div class="cate_text">Категории</div>
      <div class="cate_img">
        <figure class="image"><a href="divani/divani.php"><img width="400" height="250" src="image/cate1.png" />
            <figcaption class="figc">Диваны<br /></figcaption>
          </a></figure>
        <figure class="image"><a href="stenki/stenki.php"><img width="400" height="250" src="image/cate2.png" />
            <figcaption class="figc">Стенки<br /></figcaption>
          </a></figure>
        <figure class="image"><a href="shkafi/shkafi.php"><img width="400" height="250" src="image/cate3.png" />
            <figcaption class="figc">Шкафы<br /></figcaption>
          </a></figure>
        <figure class="image"><a href="krovati/krovati.php"><img width="400" height="250" src="image/cate4.png" />
            <figcaption class="figc">Кровати<br /></figcaption>
          </a></figure>
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
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
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
        if (slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
      }
    </script>
  </body>

  </html>


<?php
}
?>