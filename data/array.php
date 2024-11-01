

<?php


   $characters = [];


   $characters_specials = [
      '!',
      '?',
      '<',
      '>',
      '&',
      '|',
      '+',
      '-',
      '#',
      '-',
      '_',
      '^',
      '*'
   ];
   




   // Lettere minuscole
   for ($i = 'a', $length = 0; $length <= 25; $i++) {
      $length++;
      array_push($characters, $i);
   }

   // Lettere maiuscole
   for ($i = 'A', $length = 0; $length <= 25; $i++) {
      $length++;
      array_push($characters, $i);
   }

   // Numeri
   for ($num = 0; $num <= 9; $num++) {
      array_push($characters, strval($num));
   }

   // Caratteri speciali
   for ($j = 0; $j <= count($characters_specials) - 1; $j++) {
      array_push($characters, $characters_specials[$j]);
   }





   // // lettere minuscole
   // for($i='a'; $length<=25; $i++){
   //    $length++;
   //    array_push($characters, $i);
      
   //    // lettere maiuscole
   //    if($i == 'z'){
   //       $length = 0;
   //       for($i='A'; $length<=25; $i++){
   //          $length++;
   //          array_push($characters, $i);

   //          // numeri
   //          if($i == 'Z'){
   //             for($i=0; $i<=9; $i++){
   //                array_push($characters, strval($i));

   //                // caratteri speciali
   //                if($i == 9){
   //                   for($i=0; $i<= count($characters_specials) - 1; $i++){
   //                      var_dump($characters_specials[$i]);
   //                      array_push($characters, $characters_specials[$i]);
   //                   }
   //                }
   //             }
   //          }
   //       }
   //    }
   // }


   // var_dump($characters);


?>