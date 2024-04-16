
<!-- PHP -->
<?php

   // import file php
   require __DIR__ . '/data/array.php';
   require __DIR__ . '/data/functions.php';

   $length_pwd = $_GET['length'];

   // function
   $pwd = pwd_generator($length_pwd, $characters, $pwd);

?>



<!-- HTML -->
<?php require __DIR__ . '/partials/head.php' ?>

<body>

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

      <!-- pwd -->
      <h3> <?php echo $pwd ?></h3>

   </div>

</body>
</html>