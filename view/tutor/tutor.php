 <!-- DataTables -->
 <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
	<!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
        $(function () {           
            $('.tabla').DataTable(
            {
                bLengthChange: true,
                lengthMenu: [[5, 10, -1], [5, 10, "All"]],
                bFilter: true,
                bSort: true,
                bPaginate: true,
                responsive: true,
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                    }
            });
        });
    </script>
<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TUTOR</h1>
            <button href="#addnew" class="btn btn-success" data-toggle="modal"> Nuevo Tutor</button>
              <asp:Button ID="btnModalIns" runat="server" Text="Nuevo Registro" data-toggle="modal" data-target="#myModalIns" CssClass="btn btn-primary" />
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Trimestre</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
	<table class="table table-striped table-hover tabla">
		<thead class="table-dark">
			<tr>
                <th>id</th>
				        <th>CI</th>
                <th>Telefono</th>
				        <th>Nombre</th>
				        <th>ApellidoP</th>
                <th>ApellidoM</th>
				        <th>Parentesco</th>
				        <th>Estado</th>
                <th>Accion</th>

                
			</tr>
		</thead>
		<tbody>
			<?php foreach($this->model->Listar() as $r): ?>
			<tr>
				<td><?php echo $r->id; ?></td>
        <td><?php echo $r->ci; ?></td>
        <td><?php echo $r->telefono; ?></td>
				<td><?php echo $r->nombre; ?></td>
				<td><?php echo $r->apellidoP; ?></td>
        <td><?php echo $r->apellidoM; ?></td>
				<td><?php echo $r->parentesco; ?></td>
        <?php if($r->estado=1){
          echo'<td><button class="btn btn-success"> Activo </button></td>';
        }
        ?>
       
				<td><div class="btn-group">
					<a href="#edit_<?php echo $r->id; ?>"
					class="btn btn-primary btn-sm" data-toggle="modal"><i class="fas fa-edit" ></i></a>&nbsp;&nbsp;	
					<a href="#delete_<?php echo $r->id; ?>"
					class="btn btn-danger btn-sm" data-toggle="modal"><i class="fas fa-trash-alt" ></i></a></td>	
					<?php include('tutoreditareliminar.php');?>	
					</div>		
			  </tr>
			<?php endforeach;?>			
		</tbody>
	  <?php include('tutornuevo.php');?>	
	</table>

</div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>