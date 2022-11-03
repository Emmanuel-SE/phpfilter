<?php 


// comnnect to database
class Database{

    public $connection;


    public function __construct(){

        $dsn="mysql:host=localhost;port=3306;dbname=Demo;user=root; password=password";

        $this->connection=new PDO($dsn);

    }

    public function query($query){

        $statement=$this->connection->prepare($query);
        $statement->execute();

        return $statement;


    }


}

$db=new Database();


$posts=$db->query("SELECT * from Blogs")->fetchAll(PDO::FETCH_ASSOC);
