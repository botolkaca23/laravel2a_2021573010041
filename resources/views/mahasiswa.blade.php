<!--Membuat View-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li>Fahrul Sadikin</li>
        <li>Khairul Khazil</li>
        <li>Anisa Salwa</li>
        <li>Sepkha Wulan Dari</li>
    </ol>
</body>
</html>

<!-- 4. Kode PHP didalam View-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li>Fahrul Sadikin</li>
        <li>Khairul Khazil</li>
        <li>Anisa Salwa</li>
        <li>Sepkha Wulan Dari</li>
    </ol>
    <div>
        Copyright &copy; <?php echo date('Y'); ?>Program Studi Informatika-PNL
    </div>
</body>
</html>

<!--Mengirimkan data ke view sebagai argumen-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa01;?></li>
        <li>Khairul Khazil</li>
        <li>Anisa Salwa</li>
        <li>Sepkha Wulan Dari</li>
    </ol>
    <div>
        Copyright &copy; <?php echo date('Y'); ?>Program Studi Informatika-PNL
    </div>
</body>
</html>

<!--Mengirimkan data ke view sebagai argumen-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa01;?></li>
        <li><?php echo $mahasiswa02;?></li>
        <li><?php echo $mahasiswa03;?></li>
        <li><?php echo $mahasiswa04;?></li>
    </ol>
    <div>
        Copyright &copy; <?php echo date('Y'); ?>Program Studi Informatika-PNL
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>

    </ol>

    <!--Kode PHP di dalam View-->
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

<!--tanpa kode blade-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nama?>
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nilai ?>
        </h1>
    </div>
</body>
</html>

<!--menggunakan kode blade-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
    </div>
</body>
</html>

<!--function htmlspecialchars()-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
    </div>

    <!--mahasiswa.blade.php-->
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {!!$nama!!}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {!!$nilai!!}
        </h1>
    </div>

    <!--kondisi if else-->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nilai}}</h1>
        <br>
        @if (($nilai>=0) and ($nilai<50))
        <div class="alert alert-danger d-inline-block">
            Selamat,anda Lulus
        </div>
        @endif
    </div>
</body>
</html>

<!--//-->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nilai}}</h1>
    <br>
    @if (($nilai>=0) and ($nilai<50))
    <div class="alert alert-danger d-inline-block">Maaf,anda tidak lulus</div>
    @elseif (($nilai>=50) and ($nilai<100))
    <div class="alert alert-success d-inline-block">Selamat,anda lulus</div>
    @else
    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endif
</div>

<!--kondisi Switch-->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nilai}}</h1>
    <br>
    @Switch($nilai)
    @case(0)
    <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
    @break
    @case(75)
    <div class="alert alert-success d-inline-block">Lumayan</div>
    @break
    @case(100)
    <div class="alert alert-success d-inline-block">Sempurna</div>
    @break
    @default

    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endswitch
</div>

<!--Perulangan For 1-->
<div class="container text-center mt-3 pt-3 bg-white">
    @for ($i= 0; $i<5;$i++)
    <div class="alert alert-info d-inline-block">laravel
    </div>
    @endfor
</div>

<!--Perulangan For2-->
<div class="container text-center mt-3 pt-3 bg-white">
    @for ($i= 0; $i<5;$i++)
    <div class="alert alert-info d-inline-block">
        {{$i}}
    </div>
    @endfor
</div>

<!--Perulangan While-->
<div class="container text-center mt-3 pt-3 bg-white">
    <?php $i = 0;?>
    @while($i<5)
    <div class="alert alert-info d-inline-block">
        {{$i}}
    </div>
    <?php $i++?>
    @endwhile
</div>

<!--Perulangan foreach1-->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @foreach($nilai as $val)
    <div class="alert alert-into d-inline-block">
        {{$val}}
    </div>
    @endforeach
</div>

<!--Perulangan foreach2-->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @foreach($nilai as $val)
    @if (($val>=0) and ($val <50))
    <div class="alert alert-into d-inline-block">
        {{$val}}
    </div>
    @elseif(($val>=50) and($val<=100))
    <div class="alert alert-success d-inline-block">
        {{$val}}
    </div>
    @endif
    @endforeach
</div>

<!--Perulangan forelse-->
<div class="container text-center mt-3 pt-3 bg-white"> 
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @forelse ($nilai as $val)  
    @if (($val>= 0) and ($val <50)) 
    <div class="alert alert-danger d-inline-block">
    {{$val}} 
    </div>
    @elseif (($val >= 50) and ($val <= 100)) 
    <div class="alert alert-success d-inline-block">
    {{$val}}
    </div>
    @endif
    @empty
    <div class="alert alert-dark d-inline-block">Tidak ada data</div>
    @endforelse
</div>

<!--perintah continue dan break1-->
<div class="container text-center mt-3 pt-3 bg-white"> 
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @foreach ($nilai as $val)  
    @if ($val<50)
    @continue
    @endif
    <div class="alert alert-success d-inline-block">
    {{$val}}
    </div>
    @endforeach
</div>
<!--perintah continue dan break2-->
<div class="container text-center mt-3 pt-3 bg-white"> 
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @foreach ($nilai as $val)  
    @if ($val<50)
    @continue
    @endif
    <div class="alert alert-success d-inline-block">
    {{$val}}
    </div>
    @endforeach
</div>

<!--Baris Komentar dan PHP mode-->
<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    {{-- 
        @foreach($nilai as $val)
        @if($val<50)
        @break
        @endif
        <div class="alert alert-success d-inline-block">
            {{@val}}
        </div>
        @endforeach
    --}}
</div>