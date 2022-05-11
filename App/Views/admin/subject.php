<!-- Contenido principal -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Administración <small>Materias</small></h1>
			</div>
			<p class="lead">En esta sección puede añadir nuevas materias a la base de datos de la escuela. Ejemplo: Musica, deporte, ingles...</p>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Nueva materia</a></li>
					  	<li><a href="#list" data-toggle="tab">Lista de materias</a></li>
					</ul>

					<!-- Agregar nueva materia-->
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="<?=$baseUrl?>/admin/subject" method="post">
									    	<div class="form-group label-floating">
											  <label class="control-label">Codigo</label>
											  <input class="form-control" type="text" name="code">
											</div>
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" type="text" name="name">
											</div>
											
											<div class="form-group">
										      
										        <h5><b>Grados</b></h5>
													<label class="checkbox-inline">
														<input type="checkbox" id="checkboxEnLinea1" value="opcion_1" name="checkbox[]"> 1er
													  </label>
													  <label class="checkbox-inline">
														<input type="checkbox" id="checkboxEnLinea2" value="opcion_2" name="checkbox[]"> 2do
													  </label>
													  <label class="checkbox-inline">
														<input type="checkbox" id="checkboxEnLinea3" value="opcion_3" name="checkbox[]"> 3er
													  </label>
													  <label class="checkbox-inline">
														<input type="checkbox" id="checkboxEnLinea3" value="opcion_4" name="checkbox[]"> 4to
													  </label>
													  <label class="checkbox-inline">
														<input type="checkbox" id="checkboxEnLinea3" value="opcion_5" name="checkbox[]"> 5to
													  </label>
													  <label class="checkbox-inline">
														<input type="checkbox" id="checkboxEnLinea3" value="opcion_6" name="checkbox[]"> 6to
													  </label>
										        
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
										    <div class="response"></div>
									    </form>
									</div>
								</div>
							</div>
						</div>

						<!-- Lista de materias-->
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<!-- Parte de arriba-->
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Codigo</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Grados</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Borrar</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>100</td>
											<td>Matematicas</td>
											<td>1, 2, 3</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>500</td>
											<td>Ciencias Naturales</td>
											<td>2, 4, 5</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>300</td>
											<td>Ciencias Sociales</td>
											<td>3, 4, 6</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>4</td>
											<td>700</td>
											<td>Musica</td>
											<td>1, 2, 3, 4, 5, 6</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
									</tbody>
								</table>
								<!-- Paginación de materias -->
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notificaciones por si decidimos poner

	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>
-->



  