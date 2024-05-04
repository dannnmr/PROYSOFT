<div class="modal fade" id="edit_<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hcod_tutorden="true">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h1 class="page-header">
				<?php echo $r->id != null ? $r->nombre :'Nuevo Registro'; ?>
				</h1>

				<ol class="breadcrumb">
					<li class="active"><b>Editar Tutor</b></li>
				</ol>
			</div>
			<div class="modal-body">
			<div class="container-fluid">
			<form cod_tutor="frm-tutor" action="?c=tutor&a=Editar" method="post" enctype="multipart/form-data">
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
						<label class="control-label" style="position:relative; top:7px;">Nombre tutor:</label>
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
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $r->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hcod_tutorden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hcod_tutorden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar </h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $r->nombre; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="?c=tutor&a=Eliminar&id=<?php echo $r->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>