<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        
            <a class="navbar-brand" href="<?= BASE_URL; ?>">Renata Dari Jurusan RPL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only"></span></a>
                    
                    <a class="nav-link" href="<?= BASE_URL; ?>/komli" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kopetensi Keahlian
                    </a>

                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
                </div>
            </nav>
        </div>
    </nav>