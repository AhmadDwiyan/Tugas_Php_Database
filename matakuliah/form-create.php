<?php

  include '../connect.php';

  $query = "SELECT id_dosen, nama_dosen FROM dosen";
  $result = mysqli_query($connect, $query);

?>

<h1>Tambah Data Matakuliah</h1>
<form action="create.php"  method="POST">
  <p>Kode : <input type="text" name="kode" size="20"> <br></p>
  <p>Matakuliah : <input type="text" name="nama_matkul" size="20"> <br></p>
  <p>SKS : <input type="text" name="sks" size="20"> <br></p>
  <p>Semester : <input type="text" name="semester" size="20"> <br></p>
  <p>Dosen Pengajar :
  <select name="id_dosen" id="nama_dosen">
    <option value="-">--Pilih salah satu--</option>
    <?php
      while ($data = mysqli_fetch_assoc($result)) {
    ?>
    <option value="<?php echo $data['id_dosen']; ?>">
      <?php echo $data['nama_dosen']; ?>
    </option>
    <?php
      }
    ?>
  </select></p>
  <button type = "submit" name="btnSimpan">Simpan</button>
