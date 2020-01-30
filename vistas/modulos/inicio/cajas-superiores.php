<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

$stock = ControladorVentas::ctrSumaTotalStock();

?>

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-cyan">
        <i class="fas fa-dolly-flatbed"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 class="pull-right">Cal producida</h4>
        </div>
        <div class="card-body pull-right">
          2000 Kg
        </div>
      </div>
      <div class="card-chart">
        <canvas id="chart-1" height="80"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-purple">
        <i class="fas fa-truck-loading"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 class="pull-right">Cal vendida</h4>
        </div>
        <div class="card-body pull-right">
          1500 Kg
        </div>
      </div>
      <div class="card-chart">
        <canvas id="chart-2" height="80"></canvas>
      </div>
    </div>
  </div>
  
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-yellow">
        <i class="fas fa-boxes"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 class="pull-right">Cal disponible</h4>
        </div>
        <div class="card-body pull-right">
        <?php echo number_format($stock["total"]); ?> Bultos
        </div>
      </div>
      <div class="card-chart">
        <canvas id="chart-3" height="80"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-orange">
        <i class="fas fa-money-check-alt"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 class="pull-right">Pagos efectuados</h4>
        </div>
        <div class="card-body pull-right">
          $1200000
        </div>
      </div>
      <div class="card-chart">
        <canvas id="chart-1" height="80"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-blue">
        <i class="fas fa-cart-plus"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 class="pull-right">Ventas realizadas</h4>
        </div>
        <div class="card-body pull-right">
          $ <?php echo number_format($ventas["total"]); ?>
        </div>
      </div>
      <div class="card-chart">
        <canvas id="chart-2" height="80"></canvas>
      </div>
    </div>
  </div>
  
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-green">
        <i class="fas fa-dollar-sign"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 class="pull-right">Ingresos</h4>
        </div>
        <div class="card-body pull-right">
          $
        </div>
      </div>
      <div class="card-chart">
        <canvas id="chart-3" height="80"></canvas>
      </div>
    </div>
  </div>
</div>


<!-- 
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h3>$<?php echo ($totalStock); ?></h3>

      <p>Ventas</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalCategorias); ?></h3>

      <p>Categorías</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="categorias" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalClientes); ?></h3>

      <p>Clientes</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="clientes" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">
  
    <div class="inner">
    
      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Productos</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="productos" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div> -->