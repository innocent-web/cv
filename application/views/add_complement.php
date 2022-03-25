<div class="breadcome-area mg-b-30 small-dn">
	<div class="container-fluid">
		<div class="row">
			&nbsp;
		</div>
	</div>
</div>

<div class="basic-form-area mg-b-15 ">
	<div class="container-fluid">
		<div class="row">

					<div class="col-lg-12">
						<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset">
							<div class="alert-title">
								<h2><?php echo $infosAgent->nom .' '.$infosAgent->prenom  ?></h2>
							</div>
							<div class="sparkline12-list shadow-reset mg-t-30">
										 <div class="sparkline12-hd">
												 <div class="main-sparkline12-hd">
														<h1>Expérience professionnelle <button data-toggle="modal" data-target="#Add_experience_professionnelle" type="button" class="btn btn-custon-rounded-four btn-default"><i class="fas fa-plus fa-fw"></i> Ajouter</button></h1>



												 </div>
										 </div>
										 <div class="sparkline12-graph">
												 <div class="static-table-list">
														 <table class="table hover-table">
																 <thead>
																		 <tr>
																				 <th>#</th>
																				 <th>Date début</th>
																				 <th>Date fin</th>
																				 <th>Titre du poste</th>
																				 <th>Action</th>
																		 </tr>
																 </thead>
																 <tbody>
																		 <tr>
																				 <td>1</td>
																				 <td>Mamun</td>
																				 <td>Roshid</td>
																				 <td>@Facebook</td>
																				 <td>&nbsp;</td>
																		 </tr>

																 </tbody>
														 </table>
												 </div>
										 </div>
								 </div>

								 <div class="sparkline12-list shadow-reset mg-t-30">
	 										 <div class="sparkline12-hd">
	 												 <div class="main-sparkline12-hd">
	 														 <h1>Formation Académique</h1>

	 												 </div>
	 										 </div>
	 										 <div class="sparkline12-graph">
	 												 <div class="static-table-list">
	 														 <table class="table hover-table">
	 																 <thead>
	 																		 <tr>
	 																				 <th>#</th>
	 																				 <th>First Name</th>
	 																				 <th>Last Name</th>
	 																				 <th>Username</th>
	 																		 </tr>
	 																 </thead>
	 																 <tbody>
	 																		 <tr>
	 																				 <td>1</td>
	 																				 <td>Mamun</td>
	 																				 <td>Roshid</td>
	 																				 <td>@Facebook</td>
	 																		 </tr>

	 																 </tbody>
	 														 </table>
	 												 </div>
	 										 </div>
	 								 </div>

									 <div class="sparkline12-list shadow-reset mg-t-30">
		 										 <div class="sparkline12-hd">
		 												 <div class="main-sparkline12-hd">
		 														 <h1>Autres formations</h1>

		 												 </div>
		 										 </div>
		 										 <div class="sparkline12-graph">
		 												 <div class="static-table-list">
		 														 <table class="table hover-table">
		 																 <thead>
		 																		 <tr>
		 																				 <th>#</th>
		 																				 <th>First Name</th>
		 																				 <th>Last Name</th>
		 																				 <th>Username</th>
		 																		 </tr>
		 																 </thead>
		 																 <tbody>
		 																		 <tr>
		 																				 <td>1</td>
		 																				 <td>Mamun</td>
		 																				 <td>Roshid</td>
		 																				 <td>@Facebook</td>
		 																		 </tr>

		 																 </tbody>
		 														 </table>
		 												 </div>
		 										 </div>
		 								 </div>

										 <div class="sparkline12-list shadow-reset mg-t-30">
			 										 <div class="sparkline12-hd">
			 												 <div class="main-sparkline12-hd">
			 														 <h1>Compétences</h1>

			 												 </div>
			 										 </div>
			 										 <div class="sparkline12-graph">
			 												 <div class="static-table-list">
			 														 <table class="table hover-table">
			 																 <thead>
			 																		 <tr>
			 																				 <th>#</th>
			 																				 <th>First Name</th>
			 																				 <th>Last Name</th>
			 																				 <th>Username</th>
			 																		 </tr>
			 																 </thead>
			 																 <tbody>
			 																		 <tr>
			 																				 <td>1</td>
			 																				 <td>Mamun</td>
			 																				 <td>Roshid</td>
			 																				 <td>@Facebook</td>
			 																		 </tr>

			 																 </tbody>
			 														 </table>
			 												 </div>
			 										 </div>
			 								 </div>
					</div>
		</div>
	</div>
</div>



<div id="Add_experience_professionnelle" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
		<div class="modal-dialog">
			<form action="#" id="add_exp_form">
				<div class="modal-content">
						<div class="modal-header header-color-modal bg-color-1">
								<h4 class="modal-title">Expérience professionnelle</h4>
								<div class="modal-close-area modal-close-df">
										<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								</div>
						</div>
						<div class="modal-body">
							<div class="col-md-12">
									<div class="sparkline12-graph">
											<div class="basic-login-form-ad">
													<div class="row">
															<div class="col-lg-12">
																	<div class="all-form-element-inner">
																		 <div class="form-group data-custon-pick data-custom-mg" id="periode">
                                          <label>Période </label>
                                          <div class="input-daterange input-group col-lg-12" id="datepicker">
                                              <input type="text" class="form-control" name="debut_exp" value="" />
                                              <span class="input-group-addon">au</span>
                                              <input type="text" class="form-control" name="fin_exp" value="" />
                                          </div>
                                    	</div>
																			<div class="form-group data-custon-pick" >
                                            <label>Titre de poste</label>
                                            <div class="input-group col-lg-12">
                                                <input type="text" name="poste" class="form-control" value="">
                                            </div>
                                        </div>
																	</div>
															</div>
														</div>
												</div>
										</div>
							</div>
						</div>
						<div class="modal-footer">
								<a data-dismiss="modal" href="#">Annuler</a>
								<a href="#" onclick="save()">Save</a>
						</div>
						</form>
				</div>
		</div>
</div>
<script type="text/javascript">
function save()
	{
	$.ajax({
	url : "<?php echo site_url('cv/insert_experience/')?>",
	type: "POST",
	data: $('#add_exp_form').serialize(),
	dataType: "JSON",
	success: function(data)
	{
		 $('#Add_experience_professionnelle').modal('hide');
		location.reload();
	},
	error: function (jqXHR, textStatus, errorThrown)
	{
		alert('Error adding / update data');
	}
			});
	}
</script>
