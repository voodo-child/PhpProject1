<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $storeName = filter_input(INPUT_POST, "storeName", FILTER_SANITIZE_SPECIAL_CHARS);
        $address = filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
        $postalCode = filter_input(INPUT_POST, "postalCode", FILTER_SANITIZE_SPECIAL_CHARS);
        
        
        if(preg_match('/^([0-9A-Z]\w*\s?)+$/', $storeName)){
            echo "<p>Store Name acceptable</p>";
        }
        
        if(preg_match('/\d+\s[A-Z][a-z]+\s(st|rd|ave|blv|St|Rd|Ave|Blv)\s?(E|W|S|N)?/', $address)){
            echo"<p>Address acceptable</p><br>";
        }
        
        if(preg_match('/^[A-Z][a-z]+$/',$city)){
            echo "<p> City is Acceptable </p>";
        }
        
        if(preg_match('/^[a-zA-Z][0-9][a-zA-Z]\s?[0-9][a-zA-Z][0-9]$/', $postalCode)){
            echo "<p> Postal Code is acceptable </p>";
        }
        
        
        
        ?>
    </body>
</html>
