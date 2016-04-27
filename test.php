<?php
    function GetTeams(){       
	include 'database.php';
           $pdo = Database::connect();
           $sql = 'SELECT * FROM tbl_club';
           $data = $pdo->query($sql);
           //convert result resource to array
           $result = $data->fetchAll(PDO::FETCH_ASSOC);
           
           Database::disconnect();
           return $result;
    }
?>