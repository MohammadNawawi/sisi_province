<!-- <!DOCTYPE html>
<html>

<head>
	<title>SISI App</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css2/bootstrap.css' ?>">
</head>

<body> -->
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
        <a class="p-2 text-dark" href="<?= base_url('pages/create'); ?>">Create</a>
        
    </nav>
    
</div>
	<br />
	<center>
	<div class="col-md-6 col-md-offset-3">
		<div class="thumbnail">
			<h4>
				<center>Training SISI App</center>
			</h4>
			<hr />
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-3">Province</label>
					<div class="col-md-8">
						<select name="province" id="province" class="form-control">
							<option value="0">-PILIH-</option>
							<?php foreach ($data->result() as $row) : ?>
								<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">City</label>
					<div class="col-md-8">
						<select name="city" class="city form-control">
							<option value="0">-PILIH-</option>
						</select>
					</div>

				</div>
			</form>
			<hr />

		</div>
	</div>
	</center>



	<div class="container">
	<table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>

                    <?php foreach($province as $province){ ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $province['name']; ?></td>
                            <td>
							<?php echo anchor('pages/edit/'.$province['id'],'Edit'); ?>
                              <?php echo anchor('pages/hapus/'.$province['id'],'Hapus'); ?>
                            </td>

                        </tr>
                        <?php $i++; ?>
						<?php } ?>
                </tbody>
            </table></div>
	<div class="container">
	<table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Province ID</th>
						
                        <!-- <th scope="col">Action</th> -->

                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>

                    <?php foreach ($city as $city) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $city['name']; ?></td>
                            <td><?= $city['province_id']; ?></td>
								<!-- <td>
									<a href="" class="badge badge-pill badge-success">Edit</a>
									<a href="" class="badge badge-pill badge-danger">Delete</a>
								</td> -->

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table></div>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js2/jquery-2.2.3.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js2/bootstrap.js' ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#province').change(function() {
				var id = $(this).val();
				$.ajax({
					url: "<?php echo base_url(); ?>index.php/pages/get_city",
					method: "POST",
					data: {
						id: id
					},
					async: false,
					dataType: 'json',
					success: function(data) {
						var html = '';
						var i;
						for (i = 0; i < data.length; i++) {
							html += '<option>' + data[i].name + '</option>';
						}
						$('.city').html(html);

					}
				});
			});
		});
	</script>
</body>

</html>