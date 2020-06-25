<?php 
     session_start();
?>

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
    <h1>Сессии</h1>
    <?php 
        require 'link.php';
    ?>
    <?php
        $mysqli = mysqli_connect('std-mysql', 'std_942', 'Ns120765003', 'std_942') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM session") or die($mysqli->error);
    ?>
    <div class="reviews__table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Ссылки</th>
                        <th colspan="2">Действия</th>
                    </tr>
                    <?php
                        while ($row = $result->fetch_assoc()):

                    ?>
                    <tr>
                        <th><?php echo $row['id']; ?></th>
                        <th><?php echo $row['link']; ?></th>
                        <th><a href="session.php?session=<?php echo $row['id']; ?>">Ссылочка</a></th>
                        <th><a href="session.php?edit=<?php echo $row['id']; ?>">Редактировать</a></th>
                        <th><a href="session.php?delete=<?php echo $row['id']; ?>">Удалить</a></th>
                    </tr>
                        <?php endwhile; ?>
                </table>
            </div>
            <?php 
                function pre_r( $array ) {
                    echo '<pre>';
                    print_r( $array );
                    echo '</pre>';
                }
            ?>
        <h4 class="reviews__title">Создать сессию</h4>


    



    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 
    
      
    </body>
</html>