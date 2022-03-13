<?php
include 'global/config.php';
include 'global/conexion.php';
include 'global/sesiones.php';
include("modulos/productos.php");
include 'global/config.php';
?>
<?php include("cabecera.php");?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->

      <!-- FOrmulario de productos-->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar producto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNombre" class="col-sm-2 control-label">Título del libro</label>
                  <div class="col-sm-6">
                    <input type="text" name="txtNombre" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputDescripcion" class="col-sm-2 control-label">Descripción</label>
                  <div class="col-sm-10">
                    <input type="text" name="txtDescripcion" class="form-control" id="descripcion" placeholder="Descripcion">
                  </div>
                </div>
                <div class="form-group">
                <label for="inputPrecio" class="col-sm-2 control-label">Precio($COP)</label>
                  <div class="col-sm-2">
                    <input type="text" name="txtPrecio" class="form-control" id="precio" placeholder="Precio">
                  </div>
                </div>
                <div class="form-group">
                <label for="inputImagen" class="col-sm-2 control-label">Imagen (url)</label>
                  <div class="col-sm-6">
                    <input type="file" name="txtImagen" class="form-control" id="imagen" placeholder="Imagen">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="btnRegProducto" value="RegProducto" class="btn btn-primary center-block">Registrar producto</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

        </div>
      </div>
    
      <!-- Fin de formulario de productos-->
      <!-- Main row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de productos</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th width="5%">ID</th>
                  <th width="15%" class="text-center">Nombre</th>
                  <th width="40%" class="text-center">Descripción</th>
                  <th width="15%"class="text-center">Precio</th>
                  <th width="20%">Imagen</th>
                  <th width="5%">--</th>
                </tr>
                <?php
                  $sentencia=$pdo->prepare("SELECT * FROM `tblproductos`");
                  $sentencia->execute();
                  $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                  //print_r($listaProductos);
                ?>
                <?php foreach ($listaProductos as $producto) { ?>
                <tr>
                  <td><?php echo $producto['ID'];?></td>
                  <td><?php echo $producto['Nombre'];?></td>
                  <td><?php echo $producto['Descripcion'];?></td>
                  <td align="center"><?php echo number_format($producto['Precio']);?></td>
                  <td><img height="200px" width="150" src="<?php echo $producto['Imagen'];?>"></img></td>
                  <td>
                    <form action="" method="post">

                    <input type="hidden" name="txtID" value="<?php echo $producto['ID'];?>">

                    <button 
                    class="btn btn-danger" 
                    type="submit"
                    name="btnEliminar"
                    value="Eliminar"
                    >Eliminar</button>

                    </form>  
                  </td>
                </tr>
                <?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("piePagina.php");?>