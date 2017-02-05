
<!DOCTYPE>

<html>
    <head>
        <title>Моя страница</title>
        <meta charset="UTF-8">  
<?php
$name = "Андрей";
$age=33;
$post="aaaaalex2000@gmail";
$city="Екатеринбург";
$about="Мне нравится программировать";
?>      
    </head>
    <body>
  <h1>Персональные данные</h1>
        <table border="2" >
  <tr>
    <td>Имя</td>
    <td align="right"><?php echo $name;?></td>
  </tr>
  <tr>
    <td>Возраст</td>
    <td align="right"><?php echo $age;?></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td align="right"><?php echo "<a href='mailto:aaaaalex2000@gmail.com'>aaaaalex2000@gmail.com </a>";?>
    </td>
  </tr>
  <tr>
    <td>Город</td>
    <td align="right"><?php echo $city;?></td>
  </tr>
  <tr>
    <td>О себе</td>
    <td align="right"><?php echo $about;?></td>
  </tr>

</table>

    </body>
</html>
