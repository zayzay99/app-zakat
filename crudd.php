<?php
include "config.php";

//SIMPAN alias CREATE DATA alias INSERT
$nis = @$_POST['tNIS']; //SET Teks Nis menjadi $nis
$nama = @$_POST['tNama']; //SET Teks Nama menjadi $nama
$jk = @$_POST['tJK']; // SET Teks JK menjadi $jk
$rombel = @$_POST['tRombel']; //SET Teks rombel menjadi $rombel
$rayon = @$_POST['tRayon']; //SET Teks rayon menjadi $rayon
$simpan = @$_POST['tombolsimpan']; //SET tombol simpan menjadi $simpan

if(isset($simpan)){
    if(isset($jk)){
        if($jk=="L"){ //CEK JENIS KELAMIN
            $jk="Laki-laki"; 
        }else{
            $jk="Perempuan";
        }
    }
    $masuk=mysqli_query($konek,"INSERT INTO siswa(NIS,Nama,JK,Rombel,Rayon) VALUES('$nis','$nama','$jk','$rombel','$rayon')");
    
//CEK MASUK
    if($masuk){
        echo "<script>alert('berhasil masuk'); document.location.href='index.php';</script>";
    }else{
        echo "<script>alert('gagal masuk');</script>";
        

    }
}
//hapus
$hapus = @$_GET['delete'];
if(!empty($hapus)){
    $sql=mysqli_query($konek,"DELETE From siswa WHERE NIS =$hapus ");
    if($hapus){
        echo "<script>alert('berhasil masuk'); document.location.href='index.php';</script>";
    }else{
        echo "<script>alert('gagal masuk');</script>";
}
}

?>
<form action="" method="post">
    <table>
        <tr>
            <td> NIS </td>
            <td><input type="text" name="tNIS" value=""/></td>
        </tr>
        <tr>
            <td> Nama </td>
            <td><input type="text" name="tNama" value=""/></td>
        </tr>
        <tr>
            <td> JK </td>
            <td><input type="radio" name="tJK" value="L"/>Laki-laki
            <input type="radio" name="tJK" value="P"/>Perempuan</td>
        </tr>
        <tr>
            <td> Rombel </td>
            <td><input type="text" name="tRombel" value=""/></td>
        </tr>
        <tr>
            <td> Rayon </td>
            <td><input type="text" name="tRayon" value=""/></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="tombolsimpan" value="simpan"></td>
            
        </tr>
    </table>