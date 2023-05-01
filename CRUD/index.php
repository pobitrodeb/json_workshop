<?php 
   // $name = array("Johne", "Kelvien", "Rajon"); 
   // //echo json_encode($name, JSON_FORCE_OBJECT); //JSON_FORCE_OBJECT is a represent JSON array index

   // //JSON string convert to PHP 
   // $jsonString = '{"name": "Pobitro", "roll":"30214"}';
   // $phpArr = json_decode($jsonString);
   // echo $phpArr->name;

   $data = file_get_contents("books.json");
   
   $phpData = json_decode($data, true);

   // Create JSON Data  
   $newData = array(
      "id" => 17,
      "title" => "Power of postive thiniking", 
      "author" => "Jone Doe"
   );

   array_push($phpData, $newData);
   file_put_contents("books.json", json_encode($phpData));
   foreach($phpData as $objects){
     
      foreach($objects as $key => $value ){
         echo $key . " : " .$value . "<br/>";
      }

   }

        // Update JSON Data  
        foreach($phpData as $key => $value){
         if($value ["id"] === 17 ){
            $phpData [$key]["author"] = ["Pobitro Deb"];
         }
      }
      file_put_contents("books.json", json_encode($phpData));

      
?>