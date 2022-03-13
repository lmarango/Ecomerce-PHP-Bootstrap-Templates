<?php
include("modulos/ventas.php")
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

      <!-- Main row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de ventas</h3>

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
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th width="5%">ID</th>
                  <th width="20%" class="text-center">Clave</th>
                  <th width="25%" class="text-center">Fecha</th>
                  <th width="30%"class="text-center">Correo</th>
                  <th width="20%">Total</th>
                </tr>
                <?php foreach($listaVentas as $venta){?>
                <tr>
                  <td><?php echo $venta['ID'];?></td>
                  <td><?php echo $venta['ClaveTransaccion'];?></td>
                  <td><?php echo $venta['Fecha'];?></td>
                  <td><?php echo $venta['Correo'];?></td>
                  <td><?php echo $venta['Total'];?></td>
                </tr>
                <?php }?>
                <tr>
                  <td colspan="3" align="right"><h3>Total acumulado</h3></td>
                  <td align="right"><h3>$ <?php echo number_format($totalVentas);?> COP</h3></td>
                  <td></td>
                </tr>
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