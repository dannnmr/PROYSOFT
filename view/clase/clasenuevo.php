<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="card bg-info text-white">   
			  <div class="modal-header">				 				
				 <center>
					<h4 class="modal-title" id="myModalLabel">Registrar Clase</h4>
				 </center>
				 <ol class="breadcrumb">
					<li class="active"><b>Clase Nueva</b></li>
				 </ol>
			  </div>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form cod_estudiante="frm-clase" action="?c=clase&a=Guardar"
						method="post" enctype="multipart/form-data">
						<input type="hidden" name="Estado" value="1"></input>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Cantidad:</label>
								</div>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="cantidad">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Fecha Registro:</label>
								</div>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="fecharegistro">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label class="control-label"
										style="position: relative; top: 7px;">Nivel:</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nivel">
								</div>
							</div>
							
							<?php $Nivel=$this->model->ListasDesplegable();  ?>
							<div class="form-group">	
								<label>Tipo Clase<span class="text-danger">*</span></label> <select name="idtipoclase" class="form-control">
									<option value="">SELECCIONE LA CLASE</option>
									<?php foreach ($Nivel as $n) : ?>
										<option value="<?php echo $n->id; ?>"> <?php echo $n->nombre; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
                            <?php $Nivel=$this->model->ListasDesplegable2();  ?>
							<div class="form-group">	
								<label>Docente<span class="text-danger">*</span></label> <select name="iddocente" class="form-control">
									<option value="">SELECCIONE EL DOCENTE</option>
									<?php foreach ($Nivel as $n) : ?>
										<option value="<?php echo $n->id; ?>"> <?php echo $n->nombre; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
                            <?php $Nivel=$this->model->ListasDesplegable3();  ?>
							<div class="form-group">	
								<label>Usuario<span class="text-danger">*</span></label> <select name="idusuario" class="form-control">
									<option value="">SELECCIONE EL USUARIO</option>
									<?php foreach ($Nivel as $n) : ?>
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
