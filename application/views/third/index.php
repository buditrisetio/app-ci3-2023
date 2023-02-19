<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            height: 2000px;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: darkgray;
            margin: 0;
            padding: 0;
            height: 100vh;

        }

        .chart {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            width: 800px;
            height: 700px;
        }
    </style>
</head>

<body>
    <!-- header -->

    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">
            <a class="navbar-brand ml-5" href="<?= base_url('home'); ?>">Lorem Ipsum</a>
            <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home'); ?>">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('master'); ?>">Master</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav -->

    <div class="container">
        <canvas id="myChart"></canvas>
        <?php
        //Inisialisasi nilai variabel awal
        $bulan = "";
        $nilai = null;
        foreach ($tabel as $item) {
            $bul = $item->bulan;
            $bulan .= "'$bul'" . ", ";
            $nil = $item->nilai_pengukuran;
            $nilai .= "$nil" . ", ";
        }
        ?>
        <h1 class="mt-5"><?= $heading ?></h1>
        <a class="btn btn-primary" href="<?= base_url('third/tambah_nilai') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg> Tambah Data Nilai</a>
        <a class="btn btn-secondary" href="<?= base_url('master') ?>">kembali</a>

        <table class="table table-striped mt-3 align-middle">
            <thead>
                <tr class="table-primary">
                    <th scope="col" class="text-center">No</th>
                    <!-- <th scope="col" class="text-center">Nama Alat</th>
                    <th scope="col" class="text-center">ID Alat</th> -->
                    <th scope="col" class="text-center">Bulan</th>
                    <th scope="col" class="text-center">Nilai Pengukuran</th>
                    <!-- <th scope="col" class="text-center">ID Nilai</th> -->
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($tabel as $row) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $no++ ?></th>
                        <!-- <td scope="row" class="text-center"><?= $row->nama_alat ?></td>
                        <td scope="row" class="text-center"><?= $row->id_alat ?></td> -->
                        <td scope="row" class="text-center"><?= $row->bulan ?></td>
                        <td scope="row" class="text-center"><?= $row->nilai_pengukuran ?></td>
                        <!-- <td scope="row" class="text-center"><?= $row->id_nilai ?></td> -->
                        <td scope="row" class="text-center">
                            <a class="btn btn-primary" href="<?= base_url('third/edit_nilai/') . $row->id_nilai ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                </svg> Edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('third/hapus_nilai/') . $row->id_nilai ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg> Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',
            // The data for our dataset
            data: {
                labels: [<?php echo $bulan; ?>],
                datasets: [{
                    label: 'Data Bulan Alat ',
                    backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)'],
                    borderColor: ['rgb(255, 99, 132)'],
                    data: [<?php echo $nilai; ?>]
                }]
            },
            // Configuration options go here

        });
    </script>

</body>

</html>