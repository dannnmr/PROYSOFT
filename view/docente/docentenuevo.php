<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="card bg-info text-white">   
			  <div class="modal-header">				 				
				<center>
					<h4 class="modal-title" id="myModalLabel">Registrar Docente</h4>
				</center>
				<ol class="breadcrumb">
					<li class="active">Magnificarte</li>
				</ol>
			  </div>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form cod_docente="frm-docente" action="?c=docente&a=Guardar"
						method="post" enctype="multipart/form-data">
						<input type="hidden" name="estado" value="1"></input>
						<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">CI:</label>
								</div>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="ci">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Telefono:</label>
								</div>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="telefono">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Fecha de Nacimiento:</label>
								</div>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="fechanacimiento">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">nombre:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nombre">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Apellido Paterno:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="apellidoP">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Apellido Materno:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="apellidoM">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">direccion:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="direccion">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">genero:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="genero">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">especialidad:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="especialidad">
								</div>
							</div>
							
						</div>
				
				</div>
				<div class="modal-footer">
					<button type="submit" name="agregar" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-disk"></span>
						 GuardarRegistro
					</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<span class="glyphicon glyphicon-remove"></span>
						 Cancelar
					</button>
					</form>
				</div>

			</div>
		</div>
	</div>