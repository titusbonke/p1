<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<body>
    <?php
    include "conn.php";
        function random_strings($length_of_string) 
        { 
            $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; 
            return substr(str_shuffle($str_result), 0, $length_of_string); 
        } 
        
        // This function will generate 
        // Random string of length 10 
        $refferlcode= random_strings(12); 
        echo $refferlcode;
   
        
        // print_r($_SESSION['login']);
        // echo $_SESSION['login']['id'];
        ?> 
        
    
</body>
</html>