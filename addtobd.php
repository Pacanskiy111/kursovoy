<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
require_once("bd.php");

// Ругаемся, если соединение установить не удалось
if (!$link) {
  echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
  exit;
}

//Если переменная title передана
if (isset($_POST["title"])) {
  //Если это запрос на обновление, то обновляем
  if (isset($_GET['red'])) {
    $sql = mysqli_query($link, "UPDATE `products` SET `title` = '{$_POST['title']}', `price` = '{$_POST['price']}', `img` = '{$_POST['img']}', `category` = '{$_POST['category']}', `sub_category` = '{$_POST['sub_category']}' WHERE `ID`={$_GET['red']}");
  } else {
    //Иначе вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO `products` (`title`, `price`, `img`, `category`, `sub_category`) VALUES ('{$_POST['title']}', '{$_POST['price']}', '{$_POST['img']}', '{$_POST['category']}', '{$_POST['sub_category']}')");
  }

  //Если вставка прошла успешно
  if ($sql) {
    echo '<p>Успешно!</p>';
  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
  }
}

//Удаляем, если что
if (isset($_GET['del'])) {
  $sql = mysqli_query($link, "DELETE FROM `products` WHERE `ID` = {$_GET['del']}");
  if ($sql) {
    echo "<p>Товар удален.</p>";
  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
  }
}

//Если передана переменная red, то надо обновлять данные. Для начала достанем их из БД
if (isset($_GET['red'])) {
  $sql = mysqli_query($link, "SELECT `ID`, `title`, `price`, `img`, `category`, `sub_category` FROM `products` WHERE `ID`={$_GET['red']}");
  $product = mysqli_fetch_array($sql);
}
?>
<?php
//Получаем данные
$sql = mysqli_query($link, 'SELECT `ID`, `title`, `price`, `img`, `category`, `sub_category` FROM `products`');
while ($result = mysqli_fetch_array($sql)) {
  echo "<p>{$result['ID']}) {$result['title']} - {$result['price']} ₽ - {$result['img']} - <a href='?del={$result['ID']}'>Удалить</a> - <a href='?red={$result['ID']}'>Редактировать</a></p>";
}
?>
<a href='users.php'>Вернуться</a>