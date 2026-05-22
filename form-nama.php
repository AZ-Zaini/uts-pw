<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Input Nama</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
    }
    form {
      background: blue;
      color: white;
      padding: 20px;
      width: 300px;
      margin: 50px auto;
      border-radius: 8px;
    }
    label {
      display: block;
      margin-bottom: 8px;
    }
    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      border: none;
      border-radius: 4px;
    }
    input[type="submit"] {
      background: white;
      color: blue;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
    input[type="submit"]:hover {
      background: #ddd;
    }
  </style>
</head>
<body>
  <form action="proses.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan nama">
    <input type="submit" value="Kirim">
  </form>
</body>
</html>
<?php
?>
