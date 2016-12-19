<?php
  


$botToken = "158238992:AAEshjElWJ7mRmBtpkpznN9MLJn1FYJxCuE";
$website = "https://api.telegram.org/bot".$botToken;


$update = file_get_contents($website."/getupdates");

$update = json_decode($update, TRUE);
$previous=prev($update["result"]);
$current_arraynum =end($update["result"]);

$chatId = $current_arraynum ["message"]["chat"]["id"]; 
$newmessage=$current_arraynum ["message"]["text"];
$name = $current_arraynum ["message"]["from"]["first_name"];
$update = $current_arraynum ["update_id"];
print_r($previous);
     
    
 
?>