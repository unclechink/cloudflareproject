<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2, h3 {
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section:last-child {
            margin-bottom: 0;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CV</h1>
        
        <?php
            $nama = "Farhan";
            $alamat = "Bandung,Indonesia";
            $email = "farhan@gmail.com";
            $telepon = "+62 812 7979 7890";
            $deskripsi = "Seorang profesional dengan pengalaman luas di bidang ...";
            $pendidikan = [
                [
                    "tahun" => "2015 - 2019",
                    "institusi" => "Universitas Komputer Indonesia",
                    "gelar" => "Sarjana Komputer"
                ],
                [
                    "tahun" => "2012 - 2015",
                    "institusi" => "SMA 1",
                    "gelar" => "SMA"
                ]
            ];
            $pengalamanKerja = [
                [
                    "tahun" => "2020 - Sekarang",
                    "posisi" => "Software Developer",
                    "perusahaan" => "Perusahaan Teknologi"
                ],
                [
                    "tahun" => "2019 - 2020",
                    "posisi" => "Junior Developer",
                    "perusahaan" => "Startup XYZ"
                ]
            ];
            $keahlian = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
        ?>

        <div class="section">
            <h2>Data Pribadi</h2>
            <p><span class="label">Nama:</span> <?php echo $nama; ?></p>
            <p><span class="label">Alamat:</span> <?php echo $alamat; ?></p>
            <p><span class="label">Email:</span> <?php echo $email; ?></p>
            <p><span class="label">Telepon:</span> <?php echo $telepon; ?></p>
        </div>

        <div class="section">
            <h2>Deskripsi</h2>
            <p><?php echo $deskripsi; ?></p>
        </div>

        <div class="section">
            <h2>Pendidikan</h2>
            <?php foreach ($pendidikan as $edu) { ?>
                <p><span class="label"><?php echo $edu['tahun']; ?>:</span> <?php echo $edu['institusi']; ?> - <?php echo $edu['gelar']; ?></p>
            <?php } ?>
        </div>

        <div class="section">
            <h2>Pengalaman Kerja</h2>
            <?php foreach ($pengalamanKerja as $kerja) { ?>
                <p><span class="label"><?php echo $kerja['tahun']; ?>:</span> <?php echo $kerja['posisi']; ?> di <?php echo $kerja['perusahaan']; ?></p>
            <?php } ?>
        </div>

        <div class="section">
            <h2>Keahlian</h2>
            <ul>
                <?php foreach ($keahlian as $skill) { ?>
                    <li><?php echo $skill; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>
</html>
