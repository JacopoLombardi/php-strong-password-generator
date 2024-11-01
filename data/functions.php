

<?php

   function pwd_generator($length_pwd, $characters){
      $pwd = '';
      for($i = 0; $i < $length_pwd; $i ++){
         $pwd .= $characters[rand(0, count($characters) - 1)];
      }
      // uso htmlspecialchars per evitare interpretazioni sbagliate con HTML.
      return htmlspecialchars($pwd, ENT_QUOTES, 'UTF-8');
   };

?>