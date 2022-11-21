<?php 
function txtToArray() {
    $file = fopen("data/kamuss.txt", "r");
    $i = 0;
    while(!feof($file)) {
        $line = fgets($file);
        $kata[$i] = $line;
        $i++;
    }
    fclose($file);

    $kata = array_map('trim', $kata);

    return $kata;

    // $kata = json_encode($kata);
    // return $kata;
}

function txtToArray2() {
    $file = fopen("data/stopword.txt", "r");
    $i = 0;
    while(!feof($file)) {
        $line = fgets($file);
        $kata[$i] = $line;
        $i++;
    }
    fclose($file);

    $kata = array_map('trim', $kata);

    return $kata;

    // $kata = json_encode($kata);
    // return $kata;
}

// $kamus = txtToArray();

// var_dump($kamus);

?>