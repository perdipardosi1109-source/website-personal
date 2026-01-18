<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Input Data Mahasiswa</title>

<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  min-height: 100vh;
  background: url("web.jpg") no-repeat center center fixed;
  background-size: cover;
}

form {
  width: 500px;
  margin: 60px auto;
  background: rgba(255, 255, 255, 0.9);
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

input, textarea, select {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
}

button {
  margin-top: 15px;
  padding: 10px;
  width: 100%;
  background: #2c7be5;
  color: white;
  border: none;
  border-radius: 6px;
}
</style>
</head>

<body>

<h2 align="center" style="color:white; margin-top:20px;">
  Input Data Mahasiswa
</h2>

<form action="simpan.php" method="post" enctype="multipart/form-data">

  <label>Nama Lengkap</label>
  <input type="text" name="nama" required>

  <label>Alamat Sekarang</label>
  <textarea name="alamat" required></textarea>

  <label>Tanggal Lahir</label>
  <input type="date" name="tgl_lahir" required>

  <label>Jenis Kelamin</label>
  <input type="radio" name="jk" value="Pria" required> Pria
  <input type="radio" name="jk" value="Wanita"> Wanita

  <label>Agama</label>
  <select name="agama">
    <option>Islam</option>
    <option>Kristen</option>
    <option>Katolik</option>
    <option>Hindu</option>
    <option>Buddha</option>
  </select>

  <label>Asal Sekolah</label>
  <input type="text" name="asal">

  <label>Email</label>
  <input type="email" name="email">

  <label>Foto Diri</label>
  <input type="file" name="foto">

  <button type="submit">Kirim</button>
</form>

</body>
</html>
