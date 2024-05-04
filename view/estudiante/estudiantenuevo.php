<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="card bg-info text-white">   
			  <div class="modal-header">				 				
				 <center>
					<h4 class="modal-title" id="myModalLabel">Registrar Estudiante</h4>
				 </center>
				 <ol class="breadcrumb">
					<li class="active"><b>Estudiante Nuevo</b></li>
				 </ol>
			  </div>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form cod_estudiante="frm-estudiante" action="?c=estudiante&a=Guardar"
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
										style="position: relative; top: 7px;">Nombre:</label>
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
										style="position: relative; top: 7px;">Direccion:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="direccion">
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Genero:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="genero">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Ocupacion:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="ocupacion">
								</div>
							</div>
							<?php $nombre=$this->model->ListasDesplegable();  ?>
							<div class="form-group">	
								<label>Tutor<span class="text-danger">*</span></label> <select name="idTutor" class="form-control">
									<option value="">SELECCIONE TUTOR</option>
									<?php foreach ($nombre as $n) : ?>
										<option value="<?php echo $n->id; ?>"> <?php echo $n->nombre; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>

				</div>
				<div class="modal-footer">
					<button type="submit" name="agregar" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-disk"></span> Guardar
						Registro
					</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						<span class="glyphicon glyphicon-remove"></span> Cancelar
					</button>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
