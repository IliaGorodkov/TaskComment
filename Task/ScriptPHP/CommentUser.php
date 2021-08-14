<?php

function getComments()
{    require("confdb/db.php");

    
   
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);//создание объекта
   
    $data = $pdo->query('SELECT * FROM users ORDER BY id DESC');
  
    $html = '';
    foreach ($data as $row)
    {   
        @$html .= "<div class='styleText'><br><b style='font-size:20px;'>{$row['UserName']}</b><br>"//вывод данных из бд
        ."&ensp;<br>{$row['Comment']}<br><br></div>";
    }
    
    return $html;//возвращение шаблона
}
?>








