<?php

class DB{

    private static $instance = null;
    private $connection;
    

    private function __construct(){

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'fakultet';
        $dsn = "mysql:dbname=$db;host=$host";

        try {
            $this->connection = new PDO($dsn,$user,$pass);
            echo "Connected successfully";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        
    }

    public static function getInstance(){
        
        if(!self::$instance){
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function action($query){
        
        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}

// $db = new DB(); => OVO NE
$db = DB::getInstance();
$result = $db->action("select imeStud,prezStud from stud where imeStud = 'Zdenko'");

//var_dump($result);

foreach ($result as $key => $student) {
   // echo "<p>$student[imeStud]</p>";
    echo "<p>$student->imeStud</p>";
}
