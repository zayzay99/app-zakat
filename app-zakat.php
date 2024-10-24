<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <center>
        <form action="Result"method="post">
        <input type="number" name="txNilai">
        <br>
        <br>
        <input type="submit" name="btHitung" value="Hitung Zakat!">
        </form>
    </center>

    <?php
        if(isset($_POST["btHitung"] )) {
            if($_POST["txNilai"]>83000000){
            $hasilZakat = $_POST["txNilai"]*(2.5/100);
            echo "Hasil Zakat Emas = $hasilzakat";
            } else {
                echo "Belum Memenuhi Syarat Zakat";
            }
        }
?>
</body>
</html>