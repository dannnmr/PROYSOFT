
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hcod_claseden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hcod_estudianteden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar </h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $r->nivel; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="?c=clase&a=Eliminar&id=<?php echo $r->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
<!-- Ventana Editar Registros CRUD -->

<div class="modal fade" id="edit_<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hcod_claseen="true">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h1 class="page-header">
    				<?php echo $r->id != null ? $r->nivel : 'Nuevo Registro'; ?>
				</h1>
				<ol class="breadcrumb">
					<li class="active"><b>Editar clase</b></li>
				</ol>
			</div>
			<div class="modal-body">
			<div class="container-fluid">
			<form cod_estudiante="frm-clase" action="?c=clase&a=Editar" method="post" enctype="multipart/form-data">
    			<input type="hidden" name="id" value="<?php echo $r->id; ?>" />
    			<input type="hidden" name="estado" value="1"></input>				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cantidad:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="cantidad" value="<?php echo $r->cantidad; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fecha Registro:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="fecharegistro" value="<?php echo $r->fecharegistro; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nivel :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nivel" value="<?php echo $r->nivel; ?>">
					</div>
				</div>
				<?php $Nivel=$this->model->ListasDesplegable();  ?>
					<div class="form-group">	
						<label>TipoClase<span class="text-danger">*</span></label> <select name="idtipoclase" class="form-control">
						<option value="">SELECIONE LA TIPO CLASE</option>
						<?php foreach ($Nivel as $r) : ?>
						<option value="<?php echo $r->id; ?>"> <?php echo $r->nombre; ?></option>
						<?php endforeach; ?>
						</select>
					</div>			
           		
                   <?php $Nivel=$this->model->ListasDesplegable2();  ?>
					<div class="form-group">	
						<label>Docente<span class="text-danger">*</span></label> <select name="iddocente" class="form-control">
						<option value="">SELECIONE EL DOCENTE</option>
						<?php foreach ($Nivel as $r) : ?>
						<option value="<?php echo $r->id; ?>"> <?php echo $r->nombre; ?></option>
						<?php endforeach; ?>
						</select>
					</div>	
                    <?php $Nivel=$this->model->ListasDesplegable3();  ?>
					<div class="form-group">	
						<label>Usuario<span class="text-danger">*</span></label> <select name="idusuario" class="form-control">
						<option value="">SELECIONE EL USUARIO</option>
						<?php foreach ($Nivel as $r) : ?>
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

