
	<link rel="stylesheet" href="<?php echo css_url('mdb.min') ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Modal -->
<div
	class="modal fade"
	id="exampleModal"
	tabindex="-1"
	aria-labelledby="exampleModalLabel"
	aria-hidden="true"
>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Authentification
				</h5>
				<button
					type="button"
					class="btn-close"
					data-mdb-dismiss="modal"
					aria-label="Close"
				></button>
			</div>
			<div class="modal-body">
				<form >
					<!-- Email input -->
					<div class="form-outline mb-4">
						<input type="email" id="form1Example1" class="form-control" />
						<label class="form-label" for="form1Example1">Address email ou IM</label>
					</div>
					<!-- Password input -->
					<div class="form-outline mb-4">
						<input type="password" id="form1Example2" class="form-control" />
						<label class="form-label" for="form1Example2">Mot de passe</label>
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
					Fermer
				</button>
				<button type="submit" class="btn btn-primary">
					Connexion
				</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo js_url('mdb.min') ?>"></script>
<!-- Custom scripts -->


	<script>
		$(document).ready(function(){
			$('#exampleModalLabel').modal('show');
		});
	</script>
