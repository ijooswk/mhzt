<?
  include "config/db.php";
  include "config/extract.php";

  $query = "select * from mboard order by num desc";
  $result = mysql_query($query, $conn);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <!-- 확대 축소를 가능케하는 소스  -->
  <meta name="viewport" content="width=device-with, initial-scale=1.0,
  maximum-scale=1.0, minimum-scale=1.0, user-scalable=no;"/>
  <!-- 즐겨찾기의 이름이 되는 부분, 타이틀이 없는 웹도 많다. -->
  <title>Mobile Web</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <article>
  <div>
    <h2>
      Korea-China News
    </h2>
    <ul>
<?
  while($row = mysql_fetch_array($result)){
?>
      <li class="li_common"><a href="read.php?num=<?=$row['num']?>"><?=$row['title']?></a></li>
      <li class="li_common" bgcolor="#f2ffff"><?=$row['date']?></li>
<?
  }
  mysql_close($conn);
?>
    </ul>
  </div>
</article>
</body>

</html>
