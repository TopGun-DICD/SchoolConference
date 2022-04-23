<?php

//define("DEBUG", true);

session_start();
require_once 'dbconfig.php';

if (defined("DEBUG")) {     //!!! DEBUG : BEGIN
    $fp = fopen('log_loginUser.log', 'a');
    fwrite($fp, "=============" . date('l jS \of F Y h:i:s A') . "=============\n");
    fwrite($fp, print_r($_POST, TRUE));
    fwrite($fp, "\n\n");
    fclose($fp);
}                           //!!! DEBUG : END

if(!isset($_POST)) {
    echo "Переменная \$_POST не задана.";
    exit();
}

if(!isset($_POST['login'])) {
    echo "Логин не задан.";
    exit();
}

$login      = trim($_POST['login']);
$password   = trim($_POST['password']);

try {
    $stmt = $db_con->prepare("SELECT * FROM USERS WHERE EMAIL=:email");
    $stmt->execute(array(":email"=>$login));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();

    if($count != 0) {
        if ($row['md5password'] == $password) {
            $_SESSION['uid']    	= $row['id'];
            $_SESSION['login']    	= $row['email'];
            $_SESSION['username']	= $row['name'] . " " . $row['surname'];
            $_SESSION['status'] 	= $row['status'];
            /*switch ($row['status']) {
                case 0: $_SESSION['status'] = 'pupil';
                        break;
                case 1: $_SESSION['status'] = 'student';
                        break;
                case 2: $_SESSION['status'] = 'jury';
                        break;
                case 3: $_SESSION['status'] = 'admin';
                        break;
            }*/
            $_SESSION['city']   	= $row['city'];
            $_SESSION['school'] 	= $row['edu'];
            $_SESSION['grade']  	= $row['grade'];
            if($row['sex'] == 2)
                $_SESSION['avatar'] = "img/user_male.png";
            else
                $_SESSION['avatar'] = "img/user_female.png";
            echo "ok";
        }
        else {
            if(defined("DEBUG")) {      //!!! DEBUG : BEGIN
                $fp = fopen('log_loginUser.log', 'a');
                fwrite($fp, "Password NOT matches. Expected '" . $row['md5password'] . "', but '" . $password . "' was given\n");
                fwrite($fp, "\n\n");
                fclose($fp);
            }                           //!!! DEBUG : END
            echo "wrongpassword";
        }
    } else {
        if(defined("DEBUG")) {      //!!! DEBUG : BEGIN
            $fp = fopen('log_loginUser.log', 'a');
            fwrite($fp, "No such user: " . $login . "\n");
            fwrite($fp, "\n\n");
            fclose($fp);
        }                           //!!! DEBUG : END
        echo "nosuchuser";
    }

} catch(PDOException $e) {
    if(defined("DEBUG")) {      //!!! DEBUG : BEGIN

        $fp = fopen('log_loginUser.log', 'a');
        fwrite($fp, "DB exception : '" . $e->getMessage() . "'.\n");
        fwrite($fp, "\n\n");
        fclose($fp);

    }                           //!!! DEBUG : END
    echo $e->getMessage();
}

?>

