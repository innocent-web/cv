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
			<div class="col-lg-5">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin-pro-accordion-wrap mg-b-15 shadow-reset">
							<div class="alert-title">
								<h2>FORMULAIRE</h2>
							</div>
							<div class="panel-group adminpro-custon-design" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading accordion-head">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
												DETAILS PERSONNELS </a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse panel-ic collapse in">
										<div class="panel-body admin-panel-content animated bounce">
											<div class="row">
												<div class="col-lg-4">
                                                                                                    <div id="dropzone1">
                                                                                                        <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
                                                                                                            <div class="dz-message needsclick download-custom">
                                                                                                                <span class="adminpro-icon adminpro-cloud-computing-down download-icon"></span>
                                                                                                                <h2>Photo.</h2>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
												<div class="col-lg-8">
													<div class="row">
														<div class="col-md-12 form-group-inner">
															<label>Nom</label>
															<input type="text" id="nom"  name="nom" class="form-control form-control-sm" />
														</div>
													</div>
													<div class="row">
														<div class="col-md-12 form-group-inner">
															<label>Prénoms</label>
															<input type="text" id="prenom"  name="prenom" class="form-control form-control-sm" />
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 form-group-inner">
													<label >Matricule</label>
													<input type="text" id="im" name="" data-mask="999 999" class="form-control form-control-sm" />
												</div>
												
                                                                                           
                                                                                                <div class="chosen-select-single col-md-5 mg-b-20">
                                                                                                    <label>CORPS</label>
                                                                                                        <?php echo $corps; ?>
                                                                                                </div>
                                                                                                <div class="chosen-select-single col-md-4 mg-b-20">
                                                                                                    <label>GRADE</label>
                                                                                                        <?php echo $grade; ?>
                                                                                                </div>
                                                                                        
											</div>
											<div class="row">
												<div class="col-md-12 form-group-inner data-custon-pick" id="data_11">
													<label >Date d'entrer dans l'administration</label>
													<div class="input-group date">
                                                                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                                            <input type="text" class="form-control" >
                                                                                                        </div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 form-group-inner">
													<label >Adresse</label>
													<input type="text"  name="" class="form-control form-control-sm"/>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6 form-group-inner">
													<label >Télephone</label>
													<input type="text" id="nom" name="" data-mask="999 99 999 99" class="form-control form-control-sm" />
												</div>
												<div class="col-md-6 form-group-inner">
													<label class="form-label" for="form12">Email</label>
													<input type="text"  name="" class="form-control form-control-sm" />
												</div>
											</div>
											<div class="row">
												<div class="col-md-6 form-group-inner data-custon-pick" id="data_12">
													<label >Date de naissance</label>
													<div class="input-group date">
                                                                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                                            <input type="text" class="form-control" >
                                                                                                        </div>
												</div>
												<div class="col-md-6 form-group-inner">
													<label class="form-label" for="form12">Lieu de naissance</label>
													<input type="text"  name="" class="form-control form-control-sm" />
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 form-group-inner">
													<label class="form-label" for="form12">Situation familiale</label>
													<input type="text"  name="" class="form-control form-control-sm" />
												</div>
											</div>
                                                                                        <div class="row">
                                                                                            <div class="chosen-select-single col-md-12 mg-b-20">
                                                                                                <label>DIRECTION</label>
                                                                                                <?php echo $direction; ?>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="chosen-select-single col-md-12 mg-b-20">
                                                                                                <label>SERVICE</label>
                                                                                                    <?php echo $service; ?>
                                                                                            </div>
                                                                                        </div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading accordion-head">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
												EXPERIENCE PROFESSIONNELLE</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse panel-ic collapse">
										<div class="panel-body admin-panel-content animated bounce">
                                                                                    <div id="dynamic_field_experience">
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group data-custon-pick data-custom-mg" id="data_5">
														<label class="form-label">Date debut / fin</label>
														<div class="input-daterange input-group" id="datepicker">
															<input type="text" class="form-control" name="start" value="" />
															<span class="input-group-addon">à</span>
															<input type="text" class="form-control" name="end" value="" />
														</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div class=" form-group-inner">
														<label class="form-label" >Titre du poste</label>
														<input type="text"  name="" class="form-control form-control-sm" />
													</div>
												</div>

												<div class="col-lg-2">
													<div class="login-btn-inner">
														<div class="login-horizental">
                                                                                                                    <button id="add_experience" class="btn btn-sm btn-primary login-submit-cs" type="button"><i class="fas fa-plus"></i></button>
														</div>
													</div>
												</div>
											</div>
                                                                                    </div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading accordion-head">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
												FORMATION ACADEMIQUE</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse panel-ic collapse">
										<div class="panel-body admin-panel-content animated bounce">
                                                                                    <div id="dynamic_field_academique">
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group data-custon-pick data-custom-mg" id="data_6">
														<label class="form-label">Date debut / fin</label>
														<div class="input-daterange input-group" id="datepicker">
															<input type="text" class="form-control" name="start" value="" />
															<span class="input-group-addon">à</span>
															<input type="text" class="form-control" name="end" value="" />
														</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div class=" form-group-inner">
														<label class="form-label" >Diplome obtenue</label>
														<input type="text"  name="" class="form-control form-control-sm" />
													</div>
												</div>

												<div class="col-lg-2">
													<div class="login-btn-inner">
														<div class="login-horizental">
															<button id="add_academique" class="btn btn-sm btn-primary login-submit-cs" type="button"><i class="fas fa-plus"></i></button>
														</div>
													</div>
												</div>
											</div>
                                                                                    </div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading accordion-head">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
												AUTRES FORMATIONS</a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse panel-ic collapse">
										<div class="panel-body admin-panel-content animated bounce">
                                                                                    <div id="dynamic_field_other_formation">
											<div class="row">
												<div class="col-lg-5">
													<div class="form-group data-custon-pick data-custom-mg" id="data_1">
														<label class="form-label">Date </label>
														<div class="input-group date">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
												<div class="col-lg-5">
													<div class=" form-group-inner">
														<label class="form-label" >Cert/Att/Diplôme</label>
														<input type="text"  name="" class="form-control form-control-sm" />
													</div>
												</div>

												<div class="col-lg-2">
													<div class="login-btn-inner">
														<div class="login-horizental">
															<button id="add_other_formation" class="btn btn-sm btn-primary login-submit-cs" type="button"><i class="fas fa-plus"></i></button>
														</div>
													</div>
												</div>
											</div>
                                                                                    </div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading accordion-head">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
												 COMPETENCES</a>
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse panel-ic collapse">
										<div class="panel-body admin-panel-content animated bounce">
											<div id="dynamic_field_competence">
												<div class="row">
													<div class="col-lg-5 form-group-inner">
														<label >Compétence</label>
														<input type="text" id="nom" name="" class="form-control form-control-sm" />
													</div>
													<div class="col-lg-5 form-group-inner">
														<label class="form-label" for="form12">Niveau</label>
														<input type="text"  name="" class="form-control form-control-sm" />
													</div>
													<div class="col-lg-2">
														<div class="login-btn-inner">
															<div class="login-horizental">
																<button id="add_competence" class="btn btn-sm btn-custon-three btn-primary" type="button"><i class="fas fa-plus"></i></button>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div id="dropzone1">
                                                                <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <span class="adminpro-icon adminpro-cloud-computing-down download-icon"></span>
                                                                        <h2>CV detaillé en word ou pdf</h2>
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="view-mail-reply-list">
                                                                <ul class="view-mail-forword">
                                                                    
                                                                    <li><a class="compose-discard-bt" href="#"><i class="fa fa-times"></i> Annuler</a>
                                                                    </li>
                                                                    <li><a href="#"><i class="fa fa-download"></i> Enregistrer</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-7">
                            <div class="dashone-adminprowrap shadow-reset mg-b-30">
                                <div class="dash-adminpro-project-title">
                                    <h2>DETAIL PERSONNEL</h2>
                                    <hr/>
                                    <p>Nom et Prénoms : <span id="nomValue">&nbsp;</span>&nbsp;<span id="prenomValue">&nbsp;</span></p>
                                    <p>Date et lieu de naissance / Age : <span id="age">&nbsp;</span></p>
                                    <p>Situation familiale: <span id="famille">&nbsp;</span></p>
                                    <p>Adresse: <span id="adresse">&nbsp;</span></p>
                                    <p>Contact:Tel/Mail: <span id="tel">&nbsp;</span><span id="mail">&nbsp;</span></p>
                                    <p>IM/Corps et grade: <span id="imValue">&nbsp;</span><span id="corp">&nbsp;</span><span id="grade">&nbsp;</span></p>
                                    <p>Date d'entrée dans l'administration: <span id="dateadmin">&nbsp;</span></p>
                                </div>
                                
                                <div class="dash-adminpro-project-title">
                                    <h2>EXPERIENCE PROFESSIONNEL</h2>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <p>Date debut - Date Fin:<span id="datedebutexp">&nbsp;</span><span id="datefinexp">&nbsp;</span></p>
                                        </div>
                                        <div class="col-lg-7">
                                            <p>Titre du poste:<span id="titreposte">&nbsp;</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash-adminpro-project-title">
                                    <h2>FORMATION ACADEMIQUE </h2>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <p>Date debut - Date Fin:</p>
                                        </div>
                                        <div class="col-lg-7">
                                            <p>Diplôme obtenue:</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash-adminpro-project-title">
                                    <h2>AUTRES FORMATIONS </h2>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <p>Date debut - Date Fin:</p>
                                        </div>
                                        <div class="col-lg-7">
                                            <p>Certificat/Attestation/Diplôme:</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash-adminpro-project-title">
                                    <h2>COMPETENCES </h2>
                                    <hr/>
                                    <p>&nbsp;</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="view-mail-reply-list">
                                            <ul class="view-mail-forword">


                                                <li><a href="#"><i class="fa fa-download"></i> Telécharger en pdf</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var i=1,j=1,k=1,l=1;
                

		$('#add_competence').click(function(){
			i++;
			$('#dynamic_field_competence').append('<div id="row'+i+'">	<div class="row"><div class="col-lg-5 form-group-inner"><label >Compétence</label><input type="text"  name="competence[]" class="form-control form-control-sm" /></div>	<div class="col-lg-5 form-group-inner">	<label class="form-label" for="form12">Niveau</label>	<input type="text"  name="niveau[]" class="form-control form-control-sm" /></div><div class="col-lg-2">	<div class="login-btn-inner"><div class="login-horizental"><button name="remove" id="'+i+'" class="btn btn-custon-three btn-danger  btn_remove" type="button">x</button>				</div>			</div>		</div>	</div>	</div>');
		});
		$('#add_other_formation').click(function(){
			j++;
			$('#dynamic_field_other_formation').append('<div id="row'+j+'"><div class="row"><div class="col-lg-5">        <div class="form-group data-custon-pick data-custom-mg" id="data_other_'+j+'"> <label class="form-label">Date </label>                <div class="input-group date">                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>                        <input type="text" class="form-control" value="">                </div>        </div></div><div class="col-lg-5">        <div class=" form-group-inner">                <label class="form-label" >Cert/Att/Diplôme</label>                <input type="text"  name="" class="form-control form-control-sm" />        </div></div><div class="col-lg-2">        <div class="login-btn-inner">                <div class="login-horizental">      <button name="remove" id="'+j+'" class="btn btn-custon-three btn-danger  btn_remove" type="button"><i class="fas fa-trash-alt"></i></button> </div> </div></div></div></div>');
		});
		$('#add_academique').click(function(){
			k++;
			$('#dynamic_field_academique').append('<div id="row'+k+'"><div class="row"><div class="col-lg-6">        <div class="form-group data-custon-pick data-custom-mg" id="data_academique_'+k+'">                <label class="form-label">Date debut / fin</label>                <div class="input-daterange input-group" id="datepicker">                        <input type="text" class="form-control" name="start" value="" />                        <span class="input-group-addon">à</span>                        <input type="text" class="form-control" name="end" value="" />                </div>        </div></div><div class="col-lg-4">        <div class=" form-group-inner">                <label class="form-label" >Diplome obtenue</label>                <input type="text"  name="" class="form-control form-control-sm" />        </div></div><div class="col-lg-2">        <div class="login-btn-inner">                <div class="login-horizental">                        <button name="remove" id="'+k+'" class="btn btn-custon-three btn-danger  btn_remove" type="button"><i class="fas fa-trash"></i></button>                </div>        </div></div></div></div>');
		});
                $('#add_experience').click(function(){
			l++;
			$('#dynamic_field_experience').append('<div id="row'+l+'"><div class="row">    <div class="col-lg-6">            <div class="form-group data-custon-pick data-custom-mg" id="data_exp_'+l+'">                    <label class="form-label">Date debut / fin</label>                    <div class="input-daterange input-group" id="datepicker">                            <input type="text" class="form-control" name="start" value="" />                            <span class="input-group-addon">à</span>                            <input type="text" class="form-control" name="end" value="" />                    </div>            </div>    </div>    <div class="col-lg-4">            <div class=" form-group-inner">                    <label class="form-label" >Titre du poste</label>                    <input type="text"  name="" class="form-control form-control-sm" />            </div>    </div>    <div class="col-lg-2">            <div class="login-btn-inner">                    <div class="login-horizental">                         <button name="remove" id="'+l+'" class="btn btn-custon-three btn-danger  btn_remove" type="button"><i class="fas fa-trash"></i></button>                         </div>            </div>    </div></div> </div> ');
		});

		$(document).on('click', '.btn_remove', function(){
			var button_id = $(this).attr("id");
			var res = confirm('Êtes-vous sûr de vouloir supprimer ce champ?');
			if(res==true){
				$('#row'+button_id+'').remove();
				$('#'+button_id+'').remove();
			}
		});
                $("#nom").keyup(function(){
                    document.getElementById("nomValue").innerHTML = $("#nom").val();
                 });
                $("#prenom").keyup(function(){
                    document.getElementById("prenomValue").innerHTML = $("#prenom").val();
                 });
                $("#im").keyup(function(){
                    document.getElementById("imValue").innerHTML = $("#im").val();
                 });
               

	});
</script>
           