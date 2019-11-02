<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
</head>
<body>
<div class="container">
<form action="" method="post">
<?=  validation_errors()?>
<!-- <?=  form_open()?>  -->
    <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" name="name" class="form-control" placeholder="Judul Buku" >
    </div>
    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" >
    </div>
    <div class="form-group">
        <label>Pengarang</label>
        <input type="text" name="pengarang" class="form-control" placeholder="Pengarang">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    
    
</body>
</html>