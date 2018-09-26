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
        $flagName= false;  // True flag shows link to next page
        $flagAddress= false;
        $flagCity= false;
        $flagPostalCode= false;
        if(preg_match('/^([0-9A-Z]\w*\s?)+$/', $storeName)){
            $flagName=true;
            echo "<p>Store Name acceptable</p>";
        } else{
            $flagName=false;
            echo"<p>Store Name is Invalid</p>";
        }
        
        if(preg_match('/\d+\s[A-Z][a-z]+\s(st|rd|ave|blv|St|Rd|Ave|Blv)\s?(E|W|S|N)?/', $address)){
            $flagAddress=true;
            echo"<p>Address acceptable</p><br>";
        } else{
            $flagAddress=false;
            echo "<p>Address is Invalid</p>";
        }
        
        if(preg_match('/^[A-Z][a-z]+$/',$city)){
            $flagCity=true;
            echo "<p> City is Acceptable </p>";
        } else {
            $flagCity=false;
            echo "<p> City is Invalid</p>";
        }
        
        if(preg_match('/^[a-zA-Z][0-9][a-zA-Z]\s?[0-9][a-zA-Z][0-9]$/', $postalCode)){
            $flagPostalCode=true;
            echo "<p> Postal Code is acceptable </p>";
        } else{
            $flagPostalCode=false;
            echo "<p>Postal Code is Invalid</p>";
        }
        
        if($flagName && $flagAddress&&$flagCity&&$flagPostalCode){
            echo"<p>link to go on</p>";
        } else{
            echo"<p>Sorry Please Fix your inputs</p>";
        }
            
        
        ?>
    </body>
</html>
