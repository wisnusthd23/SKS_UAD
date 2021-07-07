<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $judul ?></title>
</head>

<body style="background-color: #224a4a;">
    <nav class="navbar navbar-expand-lg navbar-dark text-center">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#semester1">Semester 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#semester2">Semester 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#semester3">Semester 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#semester4">Semester 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#semester5">Semester 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#semester6">Semester 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#semester7">Semester 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#semester8">Semester 8</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="card border-primary">
            <div class="card-body">
                <h3 id="semester1" class="card-title">Semester 1</h3>
                <table class="table table-bordered border-primary">
                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Wajib</th>
                        <th></th>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($sks as $s) { ?>
                        <tr>
                            <td><?= $s['jumlah_sks']  ?></td>
                            <td><?= $s['nama_matkul']  ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <h3 id="semester2" class="card-title visually-hidden">Semester 2</h3>
                <h3 style="margin-top: 127px;" class="card-title">Semester 2</h3>
                <table class="table table-bordered border-primary">
                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Wajib</th>
                        <th></th>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($sks2 as $s) { ?>
                        <tr>
                            <td><?= $s['jumlah_sks']  ?></td>
                            <td><?= $s['nama_matkul']  ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <h3 id="semester3" class="card-title visually-hidden"></h3>
                <h3 style="margin-top: 85px" class="card-title">Semester 3</h3>
                <table class="table table-bordered border-primary">
                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Wajib</th>
                        <th></th>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($sks3 as $s) { ?>
                        <tr>
                            <td><?= $s['jumlah_sks']  ?></td>
                            <td><?= $s['nama_matkul']  ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <h3 id="semester4" class="card-title visually-hidden"></h3>
                <h3 style="margin-top: 85px" class="card-title">Semester 4</h3>
                <table class="table table-bordered border-primary">
                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Wajib</th>
                        <th></th>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($sks4 as $s) { ?>
                        <tr>
                            <td><?= $s['jumlah_sks']  ?></td>
                            <td><?= $s['nama_matkul']  ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <h3 id="semester5" class="card-title visually-hidden"></h3>
                <h3 style="margin-top: 85px;" class="card-title">Semester 5</h3>
                <table class="table table-bordered border-primary">
                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Wajib</th>
                        <th></th>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($sks5 as $s) { ?>
                        <tr>
                            <td><?= $s['jumlah_sks']  ?></td>
                            <td><?= $s['nama_matkul']  ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <h3 id="semester6" class="card-title visually-hidden"></h3>
                <h3 style="margin-top: 85px;" class="card-title">Semester 6</h3>
                <table class="table table-bordered border-primary">
                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Wajib</th>
                        <th></th>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($sks6 as $s) { ?>
                        <tr>
                            <td><?= $s['jumlah_sks']  ?></td>
                            <td><?= $s['nama_matkul']  ?></td>
                        </tr>
                    <?php } ?>

                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Pilihan</th>
                        <td></td>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($pilihan6 as $p) { ?>
                        <tr>
                        </tr>
                        <td><?= $p['jumlah_sks']  ?></td>
                        <td><?= $p['nama_pilihan']  ?></td>
                    <?php } ?>
                </table>
                <h3 id="semester7" class="card-title visually-hidden"></h3>
                <h3 style="margin-top: 85px;" class="card-title">Semester 7</h3>
                <table class="table table-bordered border-primary">
                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Wajib</th>
                        <th></th>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($sks7 as $s) { ?>
                        <tr>
                            <td><?= $s['jumlah_sks']  ?></td>
                            <td><?= $s['nama_matkul']  ?></td>
                        </tr>
                    <?php } ?>

                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Pilihan</th>
                        <td></td>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($pilihan7 as $p) { ?>
                        <tr>
                        </tr>
                        <td><?= $p['jumlah_sks']  ?></td>
                        <td><?= $p['nama_pilihan']  ?></td>
                    <?php } ?>
                </table>
                <h3 id="semester8" class="card-title visually-hidden"></h3>
                <h3 class="card-title">Semester 8</h3>
                <table class="table table-bordered border-primary">
                    <tr class="table-dark">
                        <th scope="col">Mata Kuliah Wajib</th>
                        <th></th>
                    </tr>
                    <td class="table-active">Jumlah SKS</td>
                    <td class="table-active">Matkul</td>
                    <?php foreach ($sks8 as $s) { ?>
                        <tr>
                            <td><?= $s['jumlah_sks']  ?></td>
                            <td><?= $s['nama_matkul']  ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <footer class="mt-3" style="background-color: turquoise;">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col text-center">
                    <h5>Social Media</h5>
                    <a href="https://www.facebook.com/pages/Universitas%20Ahmad%20Dahlan/108010789227187/"><i style="font-size: 30px;" class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/klik_uad/"><i style="font-size: 30px;" class='bx bxl-instagram-alt'></i></a>
                    <a href="https://www.twitter.com/klik_uad/"><i style="font-size: 30px;" class='bx bxl-twitter'></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mb-2">
                    <?= "&copy;" . (int)date('Y') . " Created By <i class='bx bxs-heart' style='color:#ff0000'></i> SKS UAD"  ?>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        var nav = document.querySelector("nav");

        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 250) {
                nav.classList.add("bg-dark", "shadow", "fixed-top");
            } else {
                nav.classList.remove("bg-dark", "shadow", "fixed-top");
            }
        });
    </script>
</body>

</html>