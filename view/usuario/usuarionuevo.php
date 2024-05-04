<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="card bg-info text-white">   
			  <div class="modal-header">				 				
				<center>
					<h4 class="modal-title" id="myModalLabel">Registrar usuario</h4>
				</center>
				<ol class="breadcrumb">
					<li class="active">Magnificarte</li>
				</ol>
			  </div>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form cod_usuario="frm-usuario" action="?c=usuario&a=Guardar"
						method="post" enctype="multipart/form-data">
						<input type="hidden" name="estado" value="1"></input>
						<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">ci:</label>
								</div>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="ci">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">telefono:</label>
								</div>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="telefono">
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
										style="position: relative; top: 7px;">Contraseña:</label>
								</div>
								<div class="col-sm-9">
									<input type="password" class="form-control" name="pass">
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">username:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="username">
								</div>
							</div>
						</div>
                        <?php $nombre	=	$this->model->ListasDesplegable();  ?>
						<div class="form-group">
							<label>Tipo usuario <span class="text-danger">*</span></label> <select
								name="id" class="form-control">
								<option value="">SELECCiONE TIPO USUARIO</option>
								<?php foreach ($nombre as $r) : ?>
									<option value="<?php echo $r->id; ?>"><?php echo $r->nombre; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<?php $permiso	=	$this->model->ListasDesplegableP();  ?>
						<div class="form-group">
							<label>permiso<span class="text-danger">*</span></label> <select
								name="id" class="form-control">
								<option value="">SELECCIONE PERMISO</option>
								<?php foreach ($permiso as $r) : ?>
									<option value="<?php echo $r->id; ?>"><?php echo $r->permiso; ?></option>
								<?php endforeach; ?>
							</select>
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