<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <!-- 4. Kode PHP didalam View-->
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>

    </ol>

    //Kode PHP di dalam View
    <div>
        Copyright &copy; <?php echo date('Y'); ?>Program Studi Informatika-PNL
    </div>

    <!--Looping Foreach-->
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php
        foreach ($mahasiswa as $nama) {
            echo "<li>$nama</li>";
        }
        ?>
    </ol>
    <div>
        Copyright &copy; <?php echo date('Y'); ?>Program Studi Informatika-PNL
    </div>


    <!--Method with butuh 2buah argument,argument pertama berupa nama variable yang akan dikirim, serta
        argument kedua untuk menampung nilai yang dikirim -->
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa01; ?></li>;
    </ol>
    <div>
        Copyright &copy; <?php echo date('Y'); ?>Program Studi Informatika-PNL
    </div>

    <!--dengan banyak data dan menampilkan dengan looping-->
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php
        foreach ($mahasiswa as $nama) {
            echo "<li>$nama</li>";
        }
        ?>
    </ol>
    <div>
        Copyright &copy; <?php echo date('Y'); ?>Program Studi Informatika-PNL
    </div>

</body>

</html>
