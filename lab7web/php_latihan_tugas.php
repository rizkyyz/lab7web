<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
 	 <title>PHP Dasar</title>
</head>
<style>
    table {
        text-align : center;
    }
    body {
    font-family:  'Lucida Sans Regular',  sans-serif;
    background-image :url("bg2.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

h1 {
  text-align: center;
}

form {
    text-align: center;
  padding: 25px;
}

.login {
    padding: 1em;
    margin: auto;
    width: 25em;
    background: linear-gradient(to right,#21222c, #758d9e);
    border-radius: 20px;
}
   
label {
    font-size: 10pt;
    color:whitesmoke;
}
   
input[type="text"],
input[type="date"] 
{
    padding: 15px;
    width: 93%;
    color: black;
    border: 10px;
    font-size: 1em;
    font-family: 'Arial';
    margin: 6px 0px;
    border-radius: 5px
}
   
input[type="submit"] {
    
    color: black;
    border: 0;
    margin: 5px 0px;
    padding: 15px;
    border-radius: 5px;
    width: 100%;
    font-family: 'Georgia';
}

input[type="submit"]:hover {
    background: #042631;
    cursor: pointer;
}

input[type="radio"] {
    margin: 5px;
    align-items: center;
    cursor: pointer;
}

p {
  margin: 10px;
}
</style>
<body>
	<div class="login">
    <form method="post">
    <h1>DATA PEKERJAAN</h1>
        <label> <h3>Nama : </h3></label>
        <input type="text" name="nama" placeholder="Masukkan nama Anda">
        <br>
        <label> <h3>Tanggal Lahir : </h3></label>
        <input type="date" name="tanggal">
        <br>
        <label><h3>Pekerjaan : </h3></label>
        <input type="radio" name="pekerjaan" value="frontend">Frontend Development</input><br>
        <input type="radio" name="pekerjaan" value="software">Software Engginer</input><br>
        <input type="radio" name="pekerjaan" value="backend">Backend Development</input><br>
        <input type="radio" name="pekerjaan" value="support">IT Support</input><br>
        <input type="radio" name="pekerjaan" value="mobile">Mobile Development</input><br>
        <input type="radio" name="pekerjaan" value="programmer">Programmer</input><br>
        <input type="radio" name="pekerjaan" value="lainnya">Lainnya</input><br>
        <br>
        <input type="submit" name="button" value="LIHAT">
        <br>
        <br>
        <h3>Cetak : </h3>
<table border=1 text-align="center">
    <tr>
        <td>
        <?php
    $lahir = @$_GET['tanggal'];
    $button = @$_POST['button'];

    if ($button) {
        $nama=$_POST['nama'];
        $job=@$_POST['pekerjaan'];
        echo "<p>Nama : $nama</p>";
        $tanggal_lahir = new DateTime($_POST['tanggal']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
            $thn = "0";
            $bln = "0";
            $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        echo "<p>Umur : ";
        echo $thn." Tahun ".$bln." Bulan ".$tgl." Hari";
         
        if ($job=="frontend") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 5.100.000/bulan</p>";
        }
        elseif ($job=="software") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 5.500.000/bulan</p>";
        }
        elseif ($job=="backend") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 4.415.000/bulan</p>";
        }
        elseif ($job=="support") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 6.000.000/bulan</p>";
        }
        elseif ($job=="mobile") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 10.500.000/bulan</p>";
        }
        elseif ($job=="programmer") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp. 10.000.000/bulan</p>";
        }
        elseif ($job=="lainnya") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gaji : Rp.(Sesuai pekerjaan)/bulan</p>";
        }
        else {
            echo "<p>Pilih Pekerjaan</p>";
        }
        echo "<br><br><p>&copy;" . date("Y") . " Rizky Abdillah</p>";
    }
    ?>
        </td>
    </tr>
</table>
</form>
</body>
</html> 