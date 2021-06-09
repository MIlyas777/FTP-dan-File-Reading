<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width, initial-scale-1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>hello,world</title>
</head>

<body>
    <h1>Hello,world</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Simpan file</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="baca.php">Baca file</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="container mt-3">
                <?php if (isset($_GET['notif'])) { ?>
                    <div class="alert alert-succes alert succes alert-dismissible fade show" role="alert">
                        File dengan nama <strong><?= $_GET['file'] ?></strong> berhasil ditambahkan
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                <?php } ?>

                <div class="card-body">
                    <div class="card-body">
                        <h2 class="" card-title>Simpan data pada file TXT</h2>
                        <hr>
                        <form action="simpan.php" method="post">

                            <div class="mb-3">
                                <label for="namafile" class="form-label">Nama File</label>
                                <input type="text" name="nama" class="form-control" id="namafile">
                            </div>
                            <div class="mb-3">
                                <label for="isifile" class="form-label">Isi File</label>
                                <textarea class="form-control" name="isi" id="isifile" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Buat file</button>
                        </form>
                    </div>
                </div>
            </div>

        </main>
    </header>
</body>

</html>