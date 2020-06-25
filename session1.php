<!DOCTYPE html>
<html>

    <head>
        <title>Экзамен по пхп</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>
    <h1>Создать тест!</h1>
    <?php
        $mysqli = mysqli_connect('std-mysql', 'std_942', 'Ns120765003', 'std_942') or die(mysqli_error($mysqli));
    ?>
    <form method="POST" action="addtest.php">
        <h2>Первый тип вопроса</h2>
        <input type="text" placeholder="Вопрос" name="question1">
        <input type="number" placeholder="Ответ" name="answer1">  
        <h2>Второй тип вопроса</h2>
        <input type="text" placeholder="Вопрос" name="question2">
        <input type="number" min="0" placeholder="Ответ" name="answer2">  
        <h2>Третий тип вопроса</h2>
        <input type="text" placeholder="Вопрос" name="question3">
        <input type="text" maxlength="30" placeholder="Ответ" name="answer3">  
        <h2>Четвертый тип вопроса</h2>
        <input type="text" placeholder="Вопрос" name="question44">
        <input type="text" placeholder="Ответ" name="answer44">  
        <h2>Пятый тип вопроса</h2>
        <input type="text" placeholder="Вопрос" name="question5">
        <p><input name="answer5" type="radio" value="1">1</p> 
        <input type="text" placeholder="собачка" name="var1">
        <p><input name="answer5" type="radio" value="2">2</p>
        <input type="text" placeholder="попугай" name="var2">
        <h2>Шестой тип вопроса</h2>
        <input type="text" placeholder="Вопрос" name="question4">
        <p><input type="checkbox" name="answer6" value="100"> 100</p>
        <p><input type="checkbox" name="answer6" value="200"> 200</p>
        <p><input type="checkbox" name="answer6" value="300"> 300</p>
        <p><input type="checkbox" name="answer6" value="400"> 400</p> 
        <input type="submit" value="отправить">
</form>

    



    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 
    
      
    </body>
</html>