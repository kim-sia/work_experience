<?php

class Manager extends CI_Model
{
    public function upload()
    {
        try{
            $pdo = new PDO("mysql:" . "host=localhost;" . "dbname=sothecodehome", 'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $db = $pdo->prepare("INSERT INTO project_info (PROJECT_KIND, PROJECT_TITLE, PROJECT_CONTENTS, PROJECT_YEAR, PROJECT_IMG, PROJECT_IMG1) VALUES (:Kind, :Title, :Contents, :p_Year, :up_filename, :up_filename1)");

            $db->bindParam(':Kind', $p_Kind);
            $db->bindParam(':Title', $p_Title);
            $db->bindParam(':Contents', $p_Contents);
            $db->bindParam(':p_Year' , $p_Year);
            $db->bindParam(':up_filename', $up_filename);
            $db->bindParam(':up_filename1', $up_filename1);

            $db->execute();
            $pdo = null;
        }
        catch(Exception $e){
            echo $e->getMessage(); //에러 출력
        }
    }
}
?>