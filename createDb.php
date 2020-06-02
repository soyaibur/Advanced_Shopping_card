<?php


class createDb{
    //class property or variable diclearation.
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    // class constructor 'it runs as page load'

    public function __const($dbname="Newdb",$tablename="productDb",$servername="localhost",$username="root",$password=""){
        
    //Note for bellow: Inserting constructor paramiter value to class property above
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        //inserting query value to $con property.
        $this->con = mysqli_connect($servername,$username,$password);

        //Checking if connection is ok.
        if (!$this->con) {
            die("connection failed:".mysqli_connect_error());
        }
        
        //query for creating Database and table.
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        if (mysqli_query($this->con,$sql)) {
            $this->con = mysqli_connect($servername,$username,$password,$dbname);
            $sql = "CREATE TABLE IF NOT EXISTS $tablename(
                id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(25) NOT NULL,
                product_price FLOAT,
                product_image VARCHAR(100)

            );";
            if (!mysqli_query($this->con,$sql)) {
                echo"Error creating table:".mysqli_error($this->con);
            }
        }else{
            return false;
        }

    }//End braket for constructor.
    
    
    //Method for Database connection.
    public function dblink(){
        $db = mysqli_connect("localhost","root","","productdb");
        if ($db) {
            return  $db; 
        } else {
            $error = "Your program can't connecting to your Database!";
            return $error;
        }
    }
    //Method for getting product details for database.

}