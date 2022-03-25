<!DOCTYPE html>
<html lang="en">
<head>
	<title>Codeigniter - Dynamically Add or Remove input fields using JQuery</title>
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->
        <link rel="stylesheet" href="<?php echo css_url('bootstrap.min') ?>" />
	<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script-->
        <script type="text/javascript" src="<?php echo js_url('jquery-1.11.3.min')?>"></script>
	<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script-->
        <script type="text/javascript" src="<?php echo js_url('bootstrap.min')?>"></script>
</head>
<body>

<div class="container">
	<h4>Codeigniter - Dynamically Add or Remove input fields using JQuery</h4><br>
	<form class="form-horizontal" action="<?php site_url()?>/index.php/Add_Remove/store" method="post">
		<div id="dynamic_field">
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Name:</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name[]" autocomplete="off">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-5">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]" autocomplete="off">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="mobno">Mobile Number:</label>
				<div class="col-sm-5">
					<input type="number" class="form-control" id="mobno" placeholder="Enter Mobile Number" name="mobno[]" autocomplete="off">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="button" name="add" id="add" class="btn btn-success">Add More</button>
			</div>
		</div>
		<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
	</form>
</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		var i=1;

		$('#add').click(function(){
			i++;
			$('#dynamic_field').append('<div id="row'+i+'"><div class="form-group"><label class="control-label col-sm-2" for="name">Name:</label><div class="col-sm-5"><input type="text" class="form-control"  placeholder="Enter Name" name="name[]" autocomplete="off"></div></div><div class="form-group"><label class="control-label col-sm-2" for="email">Email:</label><div class="col-sm-5"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]" autocomplete="off"></div></div><div class="form-group"><label class="control-label col-sm-2" for="mobno">Mobile Number:</label><div class="col-sm-5"><input type="number" class="form-control" id="mobno" placeholder="Enter Mobile Number" name="mobno[]" autocomplete="off"></div><button type="button" name="remove" id="'+i+'" class="btn btn-custon-three btn-danger btn_remove">X</button></div></div></div>');
		});

		$(document).on('click', '.btn_remove', function(){
			var button_id = $(this).attr("id");
			var res = confirm('Etes vous vraiment supprimer ce champs?');
			if(res==true){
				$('#row'+button_id+'').remove();
				$('#'+button_id+'').remove();
			}
		});

	});
</script>
</html>
