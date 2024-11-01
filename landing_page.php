
<!-- PHP -->
<?php

   // import file php
   require __DIR__ . '/data/array.php';
   require __DIR__ . '/data/functions.php';
 
   session_start();

   if(isset($_SESSION['length'])){
      $length_pwd = $_SESSION['length'];

      // function
      $pwd = pwd_generator($length_pwd, $characters);
   };

?>



<!-- HTML -->
<?php require __DIR__ . '/partials/head.php' ?>

<body class="bg-light">

   <div class="container mt-5">

      <!-- pwd -->
      <h3>La tua Password é: <strong> <?php echo $pwd ?> </strong></h3>

   </div>

</body>
</html>