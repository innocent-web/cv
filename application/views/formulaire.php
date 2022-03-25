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
			<?php echo form_open('cv/insert_cv'); ?>
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
												<div class="col-lg-3">
                              <div id="dropzone1">
                                  <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
                                      <div class="dz-message needsclick download-custom">
                                          <span class="adminpro-icon adminpro-cloud-computing-down download-icon"></span>
                                          <h2>Photo.</h2>
                                      </div>
                                  </form>
                              </div>
                          </div>
												<div class="col-lg-9">
													<div class="row">
															<div class="col-md-12 form-group-inner">
																<label >Matricule</label>
																<input type="hidden"  name="idagent"/>
																<input type="text" id="im" name="im" data-mask="999 999" class="form-control form-control-sm" />
															</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group-inner">
															<label>Nom</label>
															<input type="text" id="nom"  name="nom" class="form-control form-control-sm" />
														</div>

														<div class="col-md-6 form-group-inner">
															<label>Prénoms</label>
															<input type="text" id="prenom"  name="prenom" class="form-control form-control-sm" />
														</div>
													</div>
												</div>
											</div>
											<div class="row">

												<div class="col-md-4 form-group-inner data-custon-pick" id="data_11">
													<label >Date d'entrer dans l'administration</label>
														<div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="dateadmin" class="form-control" >
                                </div>
															</div>

                          <div class="chosen-select-single col-md-4 mg-b-20">
                              <label>CORPS</label>
                                  <?php echo $corps; ?>
                          </div>
                          <div class="chosen-select-single col-md-4 mg-b-20">
                              <label>GRADE</label>
                                  <?php echo $grade; ?>
                          </div>

											</div>


											<div class="row">
												<div class="col-md-4 form-group-inner">
													<label >Adresse</label>
													<input type="text"  name="adresse" class="form-control form-control-sm"/>
												</div>
												<div class="col-md-4 form-group-inner">
													<label >Télephone</label>
													<input type="text" id="nom" name="telephone" data-mask="999 99 999 99" class="form-control form-control-sm" />
												</div>
												<div class="col-md-4 form-group-inner">
													<label class="form-label" for="form12">Email</label>
													<input type="text"  name="email" class="form-control form-control-sm" />
												</div>
											</div>
											<div class="row">
												<div class="col-md-4 form-group-inner">
													<label class="form-label" for="form12">CIN</label>
													<input type="text"  name="cin" class="form-control form-control-sm" />
												</div>
												<div class="col-md-4 form-group-inner data-custon-pick" id="data_12">
													<label >Date de naissance</label>
													<div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="datenaissance" class="form-control" >
                            </div>
												</div>
												<div class="col-md-4 form-group-inner">
													<label class="form-label" for="form12">Lieu de naissance</label>
													<input type="text"  name="" class="form-control form-control-sm" />
												</div>
											</div>
											<!--div class="row">
												<div class="col-md-12 form-group-inner">
													<label class="form-label" for="form12">Situation familiale</label>
													<input type="text"  name="" class="form-control form-control-sm" />
												</div>
											</div-->
                          <div class="row">
                              <div class="chosen-select-single col-md-4 mg-b-20">
                                  <label>DIRECTION</label>
                                  <?php echo $direction; ?>
                              </div>
															<div class="chosen-select-single col-md-4 mg-b-20">
                                  <label>SERVICE</label>
                                      <?php echo $service; ?>
                              </div>
															<div class="chosen-select-single col-md-4 mg-b-20">
                                  <label>FONCTION</label>
                                      <?php echo $fonction; ?>
                              </div>
                          </div>

										</div>
									</div>
								</div>

								<div class="form-group-inner">
                    <div class="login-btn-inner">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <div class="login-horizental cancel-wp pull-left">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


						</div>
					</div>
		</div>
		<?php echo form_close();?>
	</div>
</div>
