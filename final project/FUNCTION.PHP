<?php
    
    define('DBINFO','mysql:host=localhost;dbname=pl_project');
    define('DBUSER','root');
    define('DBPASS','');
    function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
	set_time_limit(300000);
    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
?>