<?php
  //instancia de la clase controlador
  $controller_reportes = new MVC();
  //se verifica que se haya iniciado sesion
  $controller_reportes->verificarLoginController();

?>
  <head>
    <title>Reportes</title>
  </head>
  <body>
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Reportes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Reportes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">

                    <div class="row">
                      <div class="col-6">
                        <label>Grupo:</label>
                        <select class="form-control select2">
                          <option>Grupo</option>
                        </select>
                      </div>
                      <div class="col-3">
                        <label>Unidad:</label>
                        <select class="form-control select2">
                          <option>Unidad 1</option>
                          <option>Unidad 2</option>
                          <option>Unidad 3</option>
                        </select>
                      </div>
                      <div class="col-3">
                        <label></label><br>
                        <input type="submit" name="btn_agregar" value="Filtrar" class="btn btn-success form-control">
                      </div>
                      

                    </div>

                  </div>
                
                  <div class="form-group">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Reporte</h3>
                      </div>
                    <div class="card-body p-0">


                      <br>
                    <div class="table-responsive">
                    <table width="100%" id="example1" class="table table-bordered table-striped">
                      <thead>
                        <th>Alumno</th>
                        <th>Periodo de sesiones</th>
                        <th>Numero de horas</th>
                      </thead>
                      <tbody>
                       
                      </tbody>
                    </table>
                    </div>
                  </div>
                  </div>
                </div>
              </form>
            </div>    
      <script>
      	

      </script>
    </div>
  </body>
