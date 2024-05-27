<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Array</title>
</head>
<body>
    <?php
//array asli
$namapenjahat = array("aling","apau","leeyau","yenste");

//menampilkan array asli
echo "ini adalah nama penjahat kelas teri <br/>";

foreach ($namapenjahat as $key => $value) {
    echo "$key: $value <br/>";
}

//menambah array
array_push($namapenjahat,"jerry","toms","kamu");

//menampilkan array hasil penambahan
echo "ini adalah nama penjahat tambahannya <br/>";
foreach ($namapenjahat as $key => $value) {
    echo "$key : $value <br/>";
}

//array binatang
$binatangku = array("kambing","sapi","rusa","ayam");

//menggabungkan array
$fusion = array_merge ($namapenjahat , $binatangku);
echo "dan ini adalah fusion array namapenjahat & namabinatang <br/>";
foreach ($fusion as $key => $value) {
    echo "$key : $value <br/>";
}
?>
</body>
</html>