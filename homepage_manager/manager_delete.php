<?php
$project_no = $_POST['check'];

try {
    $pdo = new PDO("mysql:" . "host=localhost;" . "dbname=sothecodehome", 'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db = $pdo->prepare("DELETE FROM project_info WHERE PROJECT_NO = '$project_no'");
    $success = $db->execute();

    if($success)
    {
        echo "<meta http-equiv='refresh' content='0; url=project_manager.php'>";
    }

    else{
        echo "delete fail";
    }

    $pdo = null;
    }
    catch(Exception $e) {
        echo $e->getMessage(); //에러 출력
    }
?>