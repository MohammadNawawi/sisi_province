
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css2/bootstrap.css' ?>"> -->

    
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">System Ambyar</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?= base_url(); ?>">Create</a>
        
    </nav>
    
</div>

<div class="container">
<form action="<?php echo base_url(). 'pages/tambah_province'; ?>" method="POST">
<div class="form-group">
<input type="text" name="province" class="form-control" placeholder="Province" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
<br>
<br>
<div class="container">
<form action="<?php echo base_url(). 'pages/tambah_city'; ?>" method="POST">
<div class="form-group">
<input type="text" name="city" class="form-control" placeholder="City" >
</div>
<div class="form-group">
<input type="text" name="id" class="form-control" placeholder="ID" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



</body>

</html>