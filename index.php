<?php
include_once "algoritma.php";
include_once "convert.php";
// hasilkan kata dasar
 
$path_kamus = "data/kamuss.txt";
$path_stopword = "data/stopword.txt";

$kamus_kata = txtToArray();
$stopword = txtToArray2();
// $kamus_kata= ["pukul "];
// var_dump($kamus_kata);
// $kata = "memukul";

// if (in_array($kata, $kamus_kata)) {
//     echo "Kata dasar";
// } else {
//     echo "Bukan kata dasar";
// }

// $kata_dasar =stemmingArifin($kata,$kamus_kata);

// echo $kata_dasar;

$kata_dasar = [];

if (isset($_POST['submit'])) {
  $kata = $_POST['kata'];
  $kata_dasar = stemmingArifin($kata,$kamus_kata, $stopword);
}

// var_dump($kata);
// echo $kata[14536];
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Algoritma Stemming | Arifin dan Setiono</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="m-auto">
            <h1>Algoritma Stemming | Arifin dan Setiono</h1>

            <form action="" method="post">
              <div class="mb-3">
                <label for="kata" class="form-label">Masukan kata</label>
                <input type="text" class="form-control" id="kata" name="kata">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <p>Hasil stemming kata 
              <strong>
                  <?= $kata_dasar; ?>
              </strong>
            </p>
          </div>
        </div>
      </div>
    <!-- <h1 class="text-center">Hello, world!</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>