
<!-- PHP -->
<?php

   $characters = [
      'a',
      'b',
      'c',
      'd',
      'e',
      'f',
      'g',
      'h',
      'i',
      'l',
      'm',
      'n',
      'o',
      'p',
      'q',
      'r',
      's',
      't',
      'u',
      'v',
      'z',
      'A',
      'B',
      'C',
      'D',
      'E',
      'F',
      'G',
      'H',
      'I',
      'L',
      'M',
      'N',
      'O',
      'P',
      'Q',
      'R',
      'S',
      'T',
      'U',
      'V',
      'Z',
      '1',
      '2',
      '3',
      '4',
      '5',
      '6',
      '7',
      '8',
      '9',
      '0',
      '!',
      '?',
      '<',
      '>',
      '&',
      '|',
      '+',
      '-',
      '#',
      '§',
      '-',
      '_',
      '^',
      '*'
   ];



   $length_pwd = $_GET['length'];

   

   
   function pwd_generator($length_pwd, $characters, $pwd){
      for($i = 0; $i < $length_pwd; $i ++){
         $pwd .= $characters[rand(0, count($characters))];
      }
      return $pwd;
   };


   // function
   $pwd = pwd_generator($length_pwd, $characters, $pwd);

 
?>



<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <title>Password Generator</title>
</head>
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