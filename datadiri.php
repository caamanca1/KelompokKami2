<!-- Nama Anggota : Andika Surya Elang Pratama
                    M Sulistio Fauzi
                    Muhammad Reyhan Aulia treeana
                    Muhammad Riesky Fabiansyah
                    Louis Marchall Joehart Cardoso-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <title>Nilai Mata Pelajaran</title>
</head>
<body>


<div class="form-container">
  <form action="#" method="post">
  <h2>RIEFABS</h2><br>
    <h3><center>Input Data Diri</center></h3>
    <center><form name="submit-form" action= "#" method = "post" name = "input1">
    <input type="text" name="nama" required placeholder="Nama">
    <input type="date" name="date" required placeholder="Tanggal Lahir">
    <input type="text" name="nis"  required placeholder="Nis">
    <input type="text" name="ray"  required placeholder="Rayon">
    <select name ="jur" id="jur">
      <option hidden disabled selected value>Pilih Jurusan</option><br>
      <option name="jur" value="PPLG">PPLG</option>
      <option name="jur" value="DKV">DKV</option>
      <option name="jur" value="TJKT">TJKT</option>
      <option name="jur" value="HTL">HTL</option>
      <option name="jur" value="MPLB">MPLB</option>
    </select><br>
    <input type="Submit" name="submit" value="Submit" class="form-btn"> <br><br>


  <?php
  $server  = mysqli_connect("localhost", "root", "", "tabel_nilai");
  if($server) {
    echo "<center><b>Selamat Datang!</b></center>";
  }
  else{
    echo "gagal :(";
  }
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $nam     = $_POST["nama"];
  $ttl     = $_POST["date"];
  $nis     = $_POST["nis"];
  $jur     = $_POST["jur"];
  $ray     = $_POST["ray"];

$sql = "INSERT INTO data_nilai(Nama, TTL, NIS, Rayon, Jurusan) Values
('$nam','$ttl','$nis','$jur','$ray')";
if (mysqli_query($server, $sql)) {
  echo "";
}
}
?> <br>

<center><p>There's Something to ask? <a href="https://www.instagram.com/muhammadriesky5_/">DM me!!</a></p></center><br>
<h2>RIEFABS</h2>


</form>
</div>



<style>
table {
  table-layout: fixed; 
  width: 100%;
  text-align: center;
  position: relative;
  left: 0px;
  top: 5px;
  border-collapse: collapse;
  background-color: #f6f6f6
}/* Spacing */
td, th {
  border: 5px solid #fff;
  padding: 5px;
  padding-bottom: 10px;
}
th {
  background: brown;
  color: white;
  border-radius: 5;
  position: flex;
  padding-left: 50px;
  top: 0;
  padding: 5px;
}
h2{
  background: purple;
  border-radius: 5px;
  color: white;
  position: flex;
  padding-left: 50px;
  top: 0;
  padding: 10px;
}
</style>


</body>
</html>