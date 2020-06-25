<?php 
    $mysqli = mysqli_connect('std-mysql', 'std_942', 'Ns120765003', 'std_942') or die(mysqli_error($mysqli));
    
    print_r($_POST);
    $mysqli->query("INSERT INTO question1 (`question1_id`, `question`, `answer`) VALUES (NULL, '$_POST[question1]', '$_POST[answer1]')");
    $mysqli->query("INSERT INTO question2 (`question2_id`, `question`, `answer`) VALUES (NULL, '$_POST[question2]', '$_POST[answer2]')");
    $mysqli->query("INSERT INTO question3 (`question3_id`, `question`, `answer`) VALUES (NULL, '$_POST[question3]', '$_POST[answer3]')");
    $mysqli->query("INSERT INTO question4 (`question4_id`, `question`, `answer`) VALUES (NULL, '$_POST[question4]', '$_POST[answer4]')");

    if($_POST['answer5'] == 1) {
        $mysqli->query( "INSERT INTO question5 (`question5_id`, `question`, `answer`, `error1`) VALUES (NULL, '$_POST[question5]', '$_POST[var1]', '$_POST[var2]')");
    }else{
        $mysqli->query("INSERT INTO question5 (`question5_id`, `question`, `answer`, `error1`) VALUES (NULL, '$_POST[question5]', '$_POST[var2]', '$_POST[var1]')");

    }


?>