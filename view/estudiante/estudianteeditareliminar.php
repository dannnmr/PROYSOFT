
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hcod_estudianteden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hcod_estudianteden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar </h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $r->nombre; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="?c=estudiante&a=Eliminar&id=<?php echo $r->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
<!-- Ventana Editar Registros CRUD -->

<div class="modal fade" id="edit_<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hcod_estudianteden="true">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h1 class="page-header">
    				<?php echo $r->id != null ? $r->nombre : 'Nuevo Registro'; ?>
				</h1>
				<ol class="breadcrumb">
					<li class="active"><b>Editar Estudiante</b></li>
				</ol>
			</div>
			<div class="modal-body">
			<div class="container-fluid">
			<form cod_estudiante="frm-estudiante" action="?c=estudiante&a=Editar" method="post" enctype="multipart/form-data">
    			<input type="hidden" name="id" value="<?php echo $r->id; ?>" />
    			<input type="hidden" name="estado" value="1"></input>				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">CI:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="ci" value="<?php echo $r->ci; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Telefono:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="telefono" value="<?php echo $r->telefono; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fecha de Nacimiento:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fechanacimiento" value="<?php echo $r->fechanacimiento; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre estudiante:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" value="<?php echo $r->nombre; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellido Paterno:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellidoP" value="<?php echo $r->apellidoP; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellido Materno:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellidoM" value="<?php echo $r->apellidoM; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Direccion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="direccion" value="<?php echo $r->direccion; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Genero:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="genero" value="<?php echo $r->genero; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Ocupacion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ocupacion" value="<?php echo $r->ocupacion; ?>">
					</div>
				</div>
				
				<?php $nombre=$this->model->ListasDesplegable();  ?>
					<div class="form-group">	
						<label>Tutor<span class="text-danger">*</span></label> <select name="idTutor" class="form-control">
						<option value="">SELECCIONE TUTOR</option>
						<?php foreach ($nombre as $r) : ?>
						<option value="<?php echo $r->id; ?>"> <?php echo $r->nombre; ?></option>
						<?php endforeach; ?>
						</select>
					</div>			
           		</div> 
			</div>
            <div class="modal-footer">
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>                
		</form>
            </div>

        </div>
    </div>
</div>

