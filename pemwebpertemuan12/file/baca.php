<main>
    <div class="container" mt-3>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar file</h5>
                        <hr>
                        <p class="card-text"></p>
                        <ul>
                            <?php
                            $folder = "file/";
                            $file = array_diff(scandir($folder), array('.', '..'));
                            foreach ($file as $namafile) {
                                echo "<li> <a href='baca.php?file=$namafile'>$namafile</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Isi file</h5>
                        <hr>
                        <p class="card-text"><?= !isset($_GET['file']) ?: file_get_contents("file/{$_GET['file']}") ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>