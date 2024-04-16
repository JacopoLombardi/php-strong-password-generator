
<!-- PHP -->
<?php

   if(isset($_GET['length'])){

      if($_GET['length'] < 6){
         $error_msg = '';
         $error_msg = 'Inserire una Password più lunga!!';

      }else{
         session_start();
         $_SESSION['length'] = $_GET['length'];
         header('Location: ./landing_page.php');
      };
   };

?>



<!-- HTML -->
<?php require __DIR__ . '/partials/head.php' ?>

<body class="bg-light">

   <div class="container mt-5">
      <h1 class="mb-4">Strong Password Generator</h1>

      <!-- form -->
      <div>
         <form action="index.php" method="GET">
            <label for="">Inserire la lunghezza della Password</label>
            <input class="form-control  w-25  my-2" type="text" name="length">

            <button class="btn  btn-primary" type="submit">Invio</button>
         </form>
      </div>

      <!-- error -->
      <h3><?php echo $pwd ?></h3>
      <h3 class="text-danger"> <?php echo $error_msg ?></h3>

   </div>

</body>
</html>