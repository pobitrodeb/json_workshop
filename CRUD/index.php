<?php 
   // $name = array("Johne", "Kelvien", "Rajon"); 
   // //echo json_encode($name, JSON_FORCE_OBJECT); //JSON_FORCE_OBJECT is a represent JSON array index

   // //JSON string convert to PHP 
   // $jsonString = '{"name": "Pobitro", "roll":"30214"}';
   // $phpArr = json_decode($jsonString);
   // echo $phpArr->name;

   $data = file_get_contents("books.json");
   
   $phpData = json_decode($data, true);

   foreach($phpData as $objects){
     
      foreach($objects as $key => $value ){
         echo $key . " : " .$value . "<br/>";
      }

   }

?>