<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
require_once("bd.php");
?>
<?php
if (!isset($_SESSION['login'])) {
  echo ('"Извините, у вас нет прав. <a href="index.php">Главная</a>"');
?>
  <?php
} else {
  if ($_SESSION['login'] == 'admin') {
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
        <div class="logo"><a href="index.php"><img src="image/logo.png" width="200" height="60"></a></div>
        <div class="src">
          <form action="" method="post" class="src">
            <input type="text" placeholder="Поиск по сайту">
          </form>
        </div>
        <div class="cart">
          <div style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;">
            <?php
            echo 'Здравствуйте, ', $_SESSION['login'];
            ?>
          </div>
          <a href="users.php" style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;">Админ панель</a>
          <form action="exit.php" method="post">
            <input style="font-family: Century Gothic;background-color: #ffffff;padding: 0px;font-size: 20px;border: none;color: grey;font-weight:bold;" type="submit" name="exit" value="Выйти">
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
          <div class="logo_mob"><a href="index.php"><img src="image/logo.png" width="250" height="45"></a></div>
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

      <div class="use">
        <h2>Список пользователей</h2>
        <div class="users">
          <?php
          if ($link->connect_error) {
            die("Ошибка: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM users";
          if ($result = $link->query($sql)) {
            echo "<table border=3px solid black><tr><th>Id</th><th>Name</th><th></th></tr>";
            foreach ($result as $row) {
              echo "<tr>";
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["login"] . "</td>";
              echo "<td><form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Удалить'>
                </form></td>";
              echo "</tr>";
            }
            echo "</table>";
          } else {
            echo "Ошибка: " . $link->error;
          }
          $link->close();
          ?>
        </div>
        <div class="addproduct">
          <form action="addtobd.php" method="post" enctype="multipart/form-data">
            <table>
              <tr>
                <td>Наименование:</td>
                <td><input type="text" name="title" value="<?= isset($_GET['red']) ? $product['title'] : ''; ?>"></td>
              </tr>
              <tr>
                <td>Цена:</td>
                <td><input type="text" name="price" size="3" value="<?= isset($_GET['red']) ? $product['price'] : ''; ?>"> руб.</td>
              </tr>
              <tr>
                <td>Изображение:</td>
                <td><input type="text" name="img" value="<?= isset($_GET['red']) ? $product['img'] : ''; ?>"></td>
              </tr>
              <tr>
                <td>Категория:</td>
                <td><input type="text" name="category" value="<?= isset($_GET['red']) ? $product['category'] : ''; ?>"></td>
              </tr>
              <tr>
                <td>Подкатегория:</td>
                <td><input type="text" name="sub_category" value="<?= isset($_GET['red']) ? $product['sub_category'] : ''; ?>"></td>
              </tr>
              <tr>
                <td><input type="submit" name="upload" value="Добавить товар"></td>
              </tr>
            </table>
          </form>
          <p><a href="?add=new">Добавить новый товар</a></p>
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
  } else {
    echo ('Извините, у вас нет прав. <a href="index.php">Главная</a>');
  }
}
?>