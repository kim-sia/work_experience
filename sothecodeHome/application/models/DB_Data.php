<?php

class DB_Data extends CI_Model
{
    public function youtube()
    {
        try{
            $pdo = new PDO("mysql:"."host=localhost;"."dbname=sothecodehome",'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare("SELECT * FROM youtube_info");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $output = json_encode($data, JSON_UNESCAPED_UNICODE);
            echo urldecode($output)."\n";
        }
        catch (Exception $e) {
            echo $e->getMessage(); //에러 출력
        }
    }

    public function project()
    {
        try {
            $pdo = new PDO("mysql:"."host=localhost;"."dbname=sothecodehome",'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare("SELECT * FROM project_info");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $output = json_encode($data, JSON_UNESCAPED_UNICODE);
            echo urldecode($output)."\n";
        }
        catch (Exception $e) {
            echo $e->getMessage(); //에러 출력
        }
    }

    public function contact()
    {
        try{
            $pdo = new PDO("mysql:"."host=localhost;"."dbname=sothecodehome",'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare("SELECT * FROM contact_info");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $output = json_encode($data, JSON_UNESCAPED_UNICODE);
            echo urldecode($output)."\n";
        }
        catch (Exception $e) {
            echo $e->getMessage(); //에러 출력
        }
    }
}

?>