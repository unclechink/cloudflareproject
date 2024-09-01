<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .section {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Curriculum Vitae</h1>
        
        <?php
            // Contoh data CV yang dapat diganti dengan data dinamis dari database atau input pengguna
            $nama = "Farhan";
            $alamat = "Jakarta, Indonesia";
            $email = "farhan@example.com";
            $telepon = "+62 812 3456 7890";
            $deskripsi = "Seorang profesional berpengalaman di bidang pengembangan perangkat lunak dengan kemampuan dalam berbagai bahasa pemrograman dan framework.";
            $pendidikan = [
                [
                    "tahun" => "2015 - 2019",
                    "institusi" => "Universitas Teknologi XYZ",
                    "gelar" => "Sarjana Teknik Informatika"
                ],
                [
                    "tahun" => "2012 - 2015",
                    "institusi" => "SMA Negeri 1 Jakarta",
                    "gelar" => "SMA IPA"
                ]
            ];
            $pengalamanKerja = [
                [
                    "tahun" => "2020 - Sekarang",
                    "posisi" => "Software Developer",
                    "perusahaan" => "Perusahaan Teknologi ABC"
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
