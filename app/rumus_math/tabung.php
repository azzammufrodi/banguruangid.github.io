<?php
error_reporting(0); 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styleO.css">
    <title>TABUNG</title>

    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }
    </style>

</head>

<body class="bg-slate-200">
    <!-- NAVBAR SECTION -->
    <header class="px-5 lg:px-12 py-2 lg:py-4 flex flex-wrap items-center bg-sky-900 justify-between ">
        <div class=" flex justify-between items-center ">
            <a href="../index.php" class="text-slate-200 hover:text-slate-100 text-xl font-bold ">
                <p class="static">RUMUS</p>
                <span class="inline-block relative -top-2 shadow-sm">BANGUN.ID</span>
            </a>
        </div>

        <label for="menu-toggle" class="cursor-pointer lg:hidden block text-slate-100 hover:text-slate-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

        </label>
        <input type="checkbox" class="hidden" id="menu-toggle">

        <div class="hidden lg:flex lg:items-center lg:w-auto w-full mx-auto " id="menu">
            <nav>
                <ul class="lg:flex justify-between  lg:px-10 text-slate-100 ">
                    <li>
                        <a href="../index.php" class="text-sm px-5 py-3 lg:p-3 text-slate-200 hover:text-white">
                            BERANDA
                        </a>
                    </li>
                    <li>
                        <a href="kubus.php" class="text-sm px-5 py-3 lg:p-3 text-slate-200 hover:text-white ">
                            KUBUS
                        </a>
                    </li>
                    <li>
                        <a href="balok.php" class="text-sm px-5 py-3 lg:p-3 text-slate-200 hover:text-white ">
                            BALOK
                        </a>
                    </li>
                    <li>
                        <a href="tabung.php" class="text-sm px-5 py-3 lg:p-3 text-slate-200 hover:text-white ">
                            TABUNG
                        </a>
                    </li>
                    <li>
                        <a href="limas.php" class="text-sm px-5 py-3 lg:p-3 text-slate-200 hover:text-white ">
                            LIMAS
                        </a>
                    </li>
                    <li>
                        <a href="kerucut.php" class="text-sm px-5 py-3 lg:p-3 text-slate-200 hover:text-slate-50 ">
                            KERUCUT
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        </div>
    </header>
    <!-- END NAVBAR SECTION -->

    <!-- Main Content -->

        <div class="items-center p-5">
            <div class="card-body">
                <h4 class="font-bold text-4xl text-center text-gray-800 drop-shadow-sm">RUMUS TABUNG</h4>
            </div>
          <!-- INPUT-->
            <form action="" method="POST" class="flex flex-col items-center lg:flex lg:flex-col  md:flex md:flex-col md:items-center lg:items-center py-2">
              <p class="py-2 text-base text-gray-600 drop-shadow-sm">Masukan Nilai</p>
            <input class="shadow-sm m-2 p-2 border-2 border-stone-500 focus: outline-none focus:border-sky-500 focus:ring-sky-200 focus:ring-1 rounded-md text-center placeholder:text-gray-300" 
            type="text" name="nilai_a" placeholder="Nilai Rusuk" required>
            
            <input class="shadow-sm m-2 p-2 border-2 border-stone-500 focus: outline-none focus:border-sky-500 focus:ring-sky-200 focus:ring-1 rounded-md text-center placeholder:text-gray-300" 
            type="text" name="nilai_b" placeholder="Nilai Tinggi" required>
            
            <input class="m-3 cursor-pointer drop-shadow-md w-52 h-auto p-2 rounded-md text-slate-100 bg-orange-400 hover:bg-orange-500 hover:border-orange-400 hover:ring-orange-300 hover:ring-1 hover:outline-none" 
            type="submit" name="submit" value="Proses">
          </form>
        </div>
 
    <!-- INPUT END -->

    <!-- ganerate values -->
    <?php 
    $nilai_rusuk =$_POST['nilai_a']; 
    $nilai_tinggi =$_POST['nilai_b']; 

    $jumlahluas =  3.14 * ($nilai_rusuk*$nilai_rusuk);
    $jumlahkeliling = 3.14 * ($nilai_rusuk*2);
    $jumlahvolume = ((3.14 * ($nilai_rusuk*$nilai_rusuk)) * $nilai_tinggi);
// PRINT
    // echo "LUAS TABUNG ADALAH :<b> $jumlahluas CM² </b>";
    // echo "<br><br>KELILING TABUNG ADALAH :<b> $jumlahkeliling CM² </b>";
    // echo "<br><br>VOLUME TABUNG ADALAH : <b> $jumlahvolume CM³ </b>";
// PRINT END
?>

<!-- PRINT FE -->
<div
        class=" justify-center items-center md:flex  md:justify-center lg:flex lg:justify-center lg:items-center lg:p-10 text-slate-800 p-6">
        <div class=" w-auto lg:w-auto p-4 border-2 border-stone-500 rounded-lg  text-center shadow-md m-3">
<!-- Detail Button -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 cursor-pointer ">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
            </svg> -->
<!-- END Detail Button -->
            <h2 class="font-bold lg:text-3xl">LUAS TABUNG</h2>
            <H1 class=" text-xl lg:text-5xl md:text-2xl"><?=number_format($jumlahluas)?>cm²</H1>
        </div>
        <div class=" w-auto lg:w-auto p-4 border-2 border-stone-500 rounded-lg text-center shadow-md m-3 ">
            <h2 class="font-bold lg:text-3xl">KELILING TABUNG</h2>
            <H1 class=" text-xl lg:text-5xl md:text-2xl"><?=number_format($jumlahkeliling)?>cm²</H1>
        </div>
        <div class=" w-auto lg:w-auto p-4 border-2 border-stone-500 rounded-lg text-center shadow-md m-3">
            <h2 class="font-bold lg:text-3xl">VOLUME TABUNG</h2>
            <H1 class=" text-xl lg:text-5xl md:text-2xl"><?=number_format($jumlahvolume)?>cm³</H1>
        </div>
    </div>
<!-- PRINT FE END -->

    <!-- ganerate values end -->
    <!-- END Main Content -->

    <!-- close section -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.js">
    </script>
</body>

</html>