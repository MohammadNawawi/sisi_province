<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.css">
    
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">System Ambyar</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="?action=create">Create Buku</a>
        <a class="p-2 text-dark" href="index.php">Buku</a>
        <a class="p-2 text-dark" href="?action=anggota">Anggota</a>
        <a class="p-2 text-dark" href="#">Menu 4</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

</body>
</html>