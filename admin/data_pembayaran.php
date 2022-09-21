<?php
    include "../conection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <style>
        .form{
            background-color: #6290c8;
            padding: 20px;
        }
        body{
            padding: 0;
            margin: 0;
        }
        input,textarea,select{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button{
            width: 100%;
            padding: 14px 20px;
            margin: 8px 0;
            background-color: #1d3461;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            color: white;
            font-weight: 800;
        }

        .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: #1f487e;
            margin: 0 ;
            padding: 0;       
        }
        .menu-list{
            float: left;
        }
        .menu-list a {
            display: block;
            color: white;
            padding: 14px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
        }
        .menu-list a:hover {
            background-color: #1d3461;
        }
        .judul{
            padding: 1px 20px;
            background-color: #6290c8;
        }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"><a href="welcome.php">Home</a></li>
        <li class="menu-list"><a href="data_lapangan.php">Isi Data Lapangan</a></li>
        <li class="menu-list"> <a href="../logout.php"Logout></a></li>
    </ul>
    <div class="judul">
    <h1>Silahkan isi formulir di bawah ini</h1>
    </div>
    <form class="form" action="../input/input_data_pembayaran.php" method="post">
    <label for="">Id Pembayaran</label><br>
    <input type="text" name ="id_pembayaran" id="" value="<?= rand(0000, 9999)?>" readonly>
    <br><br>
    <label for="">Id Pendaftar</label><br>
    <input type="text" name ="id_pendaftar" id="">
    <br><br>
    <label for="">Jenis Lapangan</label><br>
    <select name="jenis_lapangan" id="">
        <option value="a">Lapangan A (Matras)</option>
        <option value="b">Lapangan B (Sistetis)</option>
        <option value="c">Lapangan C (Vinyl)</option>
    </select>
    <br><br>
    <label for="">Jenis Pembayaran</label>
    <select name="jenis_pembayaran" id="">
        <option value="cash">Cash</option>
        <option value="transfer">Transfer</option>
    </select>
    <br><br>
    <label for="">Nominal Pembayaran</label><br>
    <input type="text" name="nominal_pembayaran" id="">
    <br><br>
    <label for="">Status Pembayaran</label><br>
    <select name="status_pembayaran" id="">
        <option value="...">...</option>
        <option value="lunas">Lunas</option>
    </select>
    <br><br>
        <button type="submit">KIRIM</button>
    </form>
    
</body>
</html>