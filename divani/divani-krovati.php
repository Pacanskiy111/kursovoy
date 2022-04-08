<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
require_once("../bd.php");
?>
<?php
if (!isset($_SESSION['login'])) {
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\style.css">
    <link rel="shortcut icon" href="../image/icon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
    <script src="cart.js"></script>
  </head>

  <body>
    <div class="header">
      <div class="logo"><a href="../index.php"><img src="../image/logo.png" width="180" height="60"></a></div>
      <div class="src">
        <form action="" method="post" class="src">
          <input type="text" placeholder="Поиск по сайту" size=100%>
        </form>
      </div>
    </div>
    <hr>
    <div class="nav">
      <div class="dropdown">
        <button class="dropbtn"><b>Диваны</b></button>
        <div class="dropdown-content">
          <a href="divani-krovati.php">Диваны-кровати</a>
          <a href="pryamie.php">Прямые</a>
          <a href="uglovie.php">Угловые</a>
        </div>
      </div>
      <div class="btn">
        <div class="dropdown">
          <button class="dropbtn"><b>Кровати</b></button>
          <div class="dropdown-content">
            <a href="../krovati/krovati-dvuspalnie.php">Двуспальные</a>
            <a href="../krovati/krovati-odnospalnie.php">Односпальные</a>
          </div>
        </div>
      </div>
      <div class="btn">
        <div class="dropdown">
          <button class="dropbtn"><b>Шкафы</b></button>
          <div class="dropdown-content">
            <a href="../shkafi/shkafi-kupe.php">Шкафы-купе</a>
            <a href="../shkafi/shkafi-raspashnie.php">Распашные</a>
            <a href="../shkafi/shkafi-uglovie.php">С зеркалом</a>
          </div>
        </div>
      </div>
      <div class="btn">
        <div class="dropdown">
          <button class="dropbtn"><b>Стенки</b></button>
          <div class="dropdown-content">
            <a href="../stenki/stenki.php">Стенки</a>
          </div>
        </div>
      </div>
      <div class="btn">
        <div class="dropdown">
          <button class="dropbtn"><b>Каталог</b></button>
          <div class="dropdown-content">
            <a href="../catalog/catalog.php">Каталог</a>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="best_text">Диваны-кровати</div>
    <div class="best">
      <?php $sql = "SELECT * FROM products WHERE sub_category='divan-krovat' ORDER BY rand()"; ?>
      <?php if ($result = $link->query($sql)) : ?>
        <?php foreach ($result as $row) : ?>
          <div class='image'>
            <img style="object-fit: cover; height: 100px; width: auto;" src="../image/products/divani/<?= $row['img'] ?>"></br>
            <a><?= $row['title'] ?></a>
            <a><?= $row['price'] ?> Руб.</a></br>
            <a class="add-to-cart" href="?cart=add&id=<?= $row['id'] ?>" data-id="<?= $row['id'] ?>">Купить</a>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
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
        <a href="#">Диваны</a><br /><br />
        <a href="#">Кровати</a><br /><br />
        <a href="#">Стенки</a><br /><br />
        <a href="#">Шкафы</a><br /><br />
      </div>
      <div class="mobila">
        8 (3333) 22-33-44
      </div>
      <div class="socialki">
        <a href="#"><img width="40" height="40" src="../image/inst.png"></a>
        <a href="#"><img width="35" height="35" src="../image/vk.png"></a>
        <a href="#"><img width="40" height="40" src="../image/twit.png"></a>
        <a href="#"><img width="40" height="40" src="../image/yout.png"></a>
      </div>
    </div>
  </body>

  </html>
<?php
}
?>