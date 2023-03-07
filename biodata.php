<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Biodata Saya</title>
</head>

<body>
    <div class="column">
        <div class="leftbar">
            <img src="saya.jpg" class="gambar" width="150">
            <div class="link"><a href="">Home</a></div>
            <div class="link"><a href="">Tentang Saya</a></div>
            <div class="link"><a href="">Pendidikan</a></div>
            <div class="link"><a href="">Riwayat Pendidikan</a></div>
            <div class="link"><a href="">Pengalaman</a></div>
        </div>
        <div class="rightbar">
            <div class="section">
                <h2 class="text-uppercase">Tentang saya</h2>
                <div class="cols">
                    <div class="col-left">Nama</div>
                    <div class="col-right">
                        <?php $nama = "Nadia Dita Salsabila";
                        echo $nama;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">Tempat Tanggal Lahir</div>
                    <div class="col-right">
                        <?php $ttl = "Surabaya, 12 Juni 2003";
                            echo $ttl;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">Umur</div>
                    <div class="col-right">
                        <?php $tl = ("2003-06-12");
                            $today = date("y-m-d");
                            $umur = date_diff(date_create($tl), date_create($today))->y;
                            echo "$umur tahun";
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">Jenis Kelamin</div>
                    <div class="col-right">
                        <?php $gender = "Perempuan";
                        echo $gender;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">Agama</div>
                    <div class="col-right">
                        <?php $agama = "Islam";
                        echo $agama;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">Alamat</div>
                    <div class="col-right">
                        <?php $alamat = "Jl. Kendung Rejo 1 no 36 Surabaya";
                        echo $alamat;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">Email</div>
                    <div class="col-right">
                        <?php $email = "21081010181@student.upnjatim.ac.id";
                        echo $email;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">No Telepon</div>
                    <div class="col-right">
                        <?php $telp = "081357487087";
                        echo $telp;
                        ?>
                    </div>
                </div>
                <hr>
            </div>

            <div class="section">
                <h2 class="text-uppercase">pendidikan</h2>
                <div class="cols">
                    <div class="col-left">Universitas</div>
                    <div class="col-right">
                        <?php $univ = "UPN Veteran Jawa Timur";
                        echo $univ;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">Fakultas</div>
                    <div class="col-right">
                        <?php $fakultas = "Ilmu Komputer";
                        echo $fakultas;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">Program Studi</div>
                    <div class="col-right">
                        <?php $prodi = "Informatika";
                        echo $prodi;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">NPM</div>
                    <div class="col-right">
                        <?php $npm = "21081010181";
                        echo $npm;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">IPK</div>
                    <div class="col-right">
                        <?php $ipk = "2.94";
                        echo $ipk;
                        ?>
                    </div>
                </div>
                <hr>
            </div>

            <div class="section">
                <h2 class="text-uppercase">riwayat pendidikan</h2>
                <div class="cols">
                    <div class="col-left">2007 - 2009</div>
                    <div class="col-right">
                        <?php $tk = "TK Islamic Kids Surabaya";
                        echo $tk;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">2009 - 2015</div>
                    <div class="col-right">
                        <?php $sd = "SD Khadijah 3 Surabaya";
                        echo $sd;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">2015 - 2018</div>
                    <div class="col-right">
                        <?php $smp = "SMP Negeri 53 Surabaya";
                        echo $smp;
                        ?>
                    </div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">2018 - 2021</div>
                    <div class="col-right">
                        <?php $sma = "SMA Negeri 12 Surabaya";
                        echo $sma;
                        ?>
                    </div>
                </div>
                <hr>
            </div>

            <div class="section">
                <h2 class="text-uppercase">pengalaman kepanitiaan</h2>
                <div class="cols">
                    <div class="col-left">2023</div>
                    <div class="col-right">IT CAMP</div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">2022</div>
                    <div class="col-right">OPEN TALK</div>
                </div>
                <div class="cols">
                    <div class="col-left"> </div>
                    <div class="col-right">LKMM-TD</div>
                </div>
                <div class="cols">
                    <div class="col-left"> </div>
                    <div class="col-right">KULIAH TAMU</div>
                </div>
                <div class="cols">
                    <div class="col-left"> </div>
                    <div class="col-right">LOKA KARYA</div>
                </div>
                <hr>
                <div class="cols">
                    <div class="col-left">2021</div>
                    <div class="col-right">SOUND OF INFORMATICS</div>
                </div>
                <div class="cols">
                    <div class="col-left"> </div>
                    <div class="col-right">DIESNATALIS KSR PMI</div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</body>

</html>