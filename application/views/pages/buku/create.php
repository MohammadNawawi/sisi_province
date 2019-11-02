<?= validation_errors() ?>
<?= form_open('buku/store') ?>
<!--<form action="" method="post">-->
<div class="form-group">
    <label>Judul Buku</label>
    <!--<input type="text" name="name" class="form-control" placeholder="Judul Buku" required="">-->
    <?= form_input(["type" => "text", "name" => "name", "class" => "form-control", "placeholder" => "Judul Buku"]) ?>
</div>
<div class="form-group">
    <label>Penerbit</label>
    <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
</div>
<div class="form-group">
    <label>Pengarang</label>
    <input type="text" name="pengarang" class="form-control" placeholder="Pengarang">
</div>
<button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>
<?= form_close() ?>
<!--</form>-->
