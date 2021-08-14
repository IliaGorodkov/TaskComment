<?
require("confdb/db.php");
require("ScriptPHP/CommentUser.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>Task</title>

</head>
<body >
    <header>
    <div >
        
        <div class="styleText">
            <div><b>Телефон:(490)340-94-71</b></div><br>
            <div><b>Email:<ins>info@future-group.ru</ins></b></div>
        </div>

        <div class="FlexHeader">
            <div id="SizeText">
                Комментарии
            </div>
            <div  >
                <img class="styleImageHeader" src="img/logo.jpg">
            </div>
        </div>
          
    </div>


</header>




<div class="zig-zag">
    <div  id="BlockComment">
            <?    
               echo getComments();
            ?>
            
            <hr style = "width:72%;">

            <div style="margin-left:14%; font-size:26px;">
                    Оставить Комментарий
            </div><br>
            <div style="margin-left:14%;" >
                Ваше имя
            </div>
            <form action="ScriptPHP/addComment.php" method="POST" style="margin-left:14%;" required>
                <input type="text" id="Name" name="Name" style="width: 25%; height: 30px;" required><br>
            <div>Ваш Комментарий</div>

                <textarea  id="Comment" name="Comment" rows="6" cols="40" name="text" required></textarea><br>
                <button class="indent" type="submit">Отправить</button>

            </form><br>
        
        <form action="CommentUser.php" method="POST" >
            
        </form>
    </div>
</div>



<footer>
    <div class="FlexFooter ">
        <img class="styleImageFooter" src="img/logo.jpg">
        
        <div > 
            <div><b>Телефон:(490)340-94-71</b></div><br>
            <div><b>Email:<ins>info@future-group.ru</ins></b></div><br>
            <div><b>Адрес:<ins>115088 Москва, ул 2-я Машиностроения, д.7 стр. 1</ins></b></div><br>
            <div>  &#169; 2010 - 2014 Future. Все права защищены </div>
        </div>

    </div>
</footer>




</body>
</html>



    