<?php
require "../../class/db/clsController.php";
$obj_cnsc = new clsCnsc();
$usuarios = $obj_cnsc->CantidadClientes();
$listar_usuarios = mysqli_fetch_assoc($usuarios);
//echo $listar_usuarios['cantidad'];
$producto = $obj_cnsc->CantidadProducto();
$listar_producto = mysqli_fetch_assoc($producto);
//echo $listar_noticias['cantidad'];
$categoria = $obj_cnsc->CantidadCategoria();
$listar_categoria = mysqli_fetch_assoc($categoria);
//echo $listar_especialistas['cantidad'];

//ENTRADA
$eenero = $obj_cnsc->CantidadMesEntrada(1);
$eene = mysqli_fetch_assoc($eenero);
$efebrero = $obj_cnsc->CantidadMesEntrada(2);
$efeb = mysqli_fetch_assoc($efebrero);
$emarzo = $obj_cnsc->CantidadMesEntrada(3);
$emar = mysqli_fetch_assoc($emarzo);
$eabril = $obj_cnsc->CantidadMesEntrada(4);
$eabr = mysqli_fetch_assoc($eabril);
$emayo = $obj_cnsc->CantidadMesEntrada(5);
$emay = mysqli_fetch_assoc($emayo);
$ejunio = $obj_cnsc->CantidadMesEntrada(6);
$ejun = mysqli_fetch_assoc($ejunio);
$ejulio = $obj_cnsc->CantidadMesEntrada(7);
$ejul = mysqli_fetch_assoc($ejulio);
$eagosto = $obj_cnsc->CantidadMesEntrada(8);
$eago = mysqli_fetch_assoc($eagosto);
$eseptiembre = $obj_cnsc->CantidadMesEntrada(9);
$esep = mysqli_fetch_assoc($eseptiembre);
$eoctubre = $obj_cnsc->CantidadMesEntrada(10);
$eoct = mysqli_fetch_assoc($eoctubre);
$enoviembre = $obj_cnsc->CantidadMesEntrada(11);
$enov = mysqli_fetch_assoc($enoviembre);
$ediciembre = $obj_cnsc->CantidadMesEntrada(12);
$edic = mysqli_fetch_assoc($ediciembre);


//SALIDA
$senero = $obj_cnsc->CantidadMesSalida(1);
$sene = mysqli_fetch_assoc($senero);
$sfebrero = $obj_cnsc->CantidadMesSalida(2);
$sfeb = mysqli_fetch_assoc($sfebrero);
$smarzo = $obj_cnsc->CantidadMesSalida(3);
$smar = mysqli_fetch_assoc($smarzo);
$sabril = $obj_cnsc->CantidadMesSalida(4);
$sabr = mysqli_fetch_assoc($sabril);
$smayo = $obj_cnsc->CantidadMesSalida(5);
$smay = mysqli_fetch_assoc($smayo);
$sjunio = $obj_cnsc->CantidadMesSalida(6);
$sjun = mysqli_fetch_assoc($sjunio);
$sjulio = $obj_cnsc->CantidadMesSalida(7);
$sjul = mysqli_fetch_assoc($sjulio);
$sagosto = $obj_cnsc->CantidadMesSalida(8);
$sago = mysqli_fetch_assoc($sagosto);
$sseptiembre = $obj_cnsc->CantidadMesSalida(9);
$ssep = mysqli_fetch_assoc($sseptiembre);
$soctubre = $obj_cnsc->CantidadMesSalida(10);
$soct = mysqli_fetch_assoc($soctubre);
$snoviembre = $obj_cnsc->CantidadMesSalida(11);
$snov = mysqli_fetch_assoc($snoviembre);
$sdiciembre = $obj_cnsc->CantidadMesSalida(12);
$sdic = mysqli_fetch_assoc($sdiciembre);
?>
<section class="content-header">
  <h1>
    Resumen
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box bg-aqua">
        <span class="info-box-icon">
          <i class="fa fa-users" aria-hidden="true"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text">PERSONAL</span>
          <span class="info-box-number"><?php echo $listar_usuarios['cantidad']; ?></span>
          <div class="progress">
            <div class="progress-bar" style="width:100%"></div>
          </div>
            <span class="progress-description">
             Clientes registrados
            </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box bg-aqua">
        <span class="info-box-icon"><i class="fa fa-tags"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Producto</span>
          <span class="info-box-number"><?php echo $listar_producto['cantidad']; ?></span>
          <div class="progress">
            <div class="progress-bar" style="width:100%"></div>
          </div>
              <span class="progress-description">
                Productos registrados
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box bg-aqua">
        <span class="info-box-icon">
          <!--<i class="fa fa-laundry" aria-hidden="true"></i>-->
          <i class="fa fa-th" aria-hidden="true"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text">Categoria</span>
          <span class="info-box-number"><?php echo $listar_categoria['cantidad']; ?></span>

          <div class="progress">
            <div class="progress-bar" style="width:100%"></div>
          </div>
          <span class="progress-description">
            Ordenes registrados
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>

  <div class="row">

    <div class="col-md-12">
      <!-- Bar chart -->
      <div class="box box-primary">
        <div class="box-header with-border" style="background: #ff9932;padding: 5px;color: #fff;">
          <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Ordenes</h3>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="barChart" style="height:230px"></canvas>
          </div>
        </div>
        <div class="box-footer">
            <div class="row">
              <div class="col-sm-6 col-xs-6 col-md-4">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-circle-o text-red"></i> Entradas</span>
                </div>
              </div>              <!-- /.col -->
              <div class="col-sm-6 col-xs-6 col-md-4">
                <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-circle-o text-yellow"></i> Salidas</span>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
        <!-- /.box-body-->
      </div>
    </div>
  </div>
  <!-- Info boxes -->
  <!-- /.row -->
</section>
<!-- /.content -->
<script type="text/javascript">
$("#editar_definicion").click(function(){
  funcionajax("pages/resumen/definicion.php","contenido-main","");
});
$("#editar_sintomas").click(function(){
  funcionajax("pages/resumen/sintomas.php","contenido-main","");
});
$("#editar_prevencion").click(function(){
  funcionajax("pages/resumen/prevencion.php","contenido-main","");
});
$("#editar_tratamiento").click(function(){
  funcionajax("pages/resumen/tratamiento.php","contenido-main","");
});


  $(function () {
    var data = [], totalPoints = 100

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid  : {
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#ff9932'
      },
      lines : {
        fill : true, //Converts the line chart to area chart
        color: '#ff9932'
      },
      yaxis : {
        min : 0,
        max : 100,
        show: true
      },
      xaxis : {
        show: true
      }
    })

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#ff9932'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#ff9932', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })

    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })
    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#ff9932'
    }


    var areaChartData = {
      labels  : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#d2d6de',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(0,0,0,1)',
          data                : [<?php echo $eene['id']; ?>, <?php echo $efeb['id']; ?>, <?php echo $emar['id']; ?>, <?php echo $eabr['id']; ?>, <?php echo $emay['id']; ?>,
          <?php echo $ejun['id']; ?>, <?php echo $ejul['id']; ?>, <?php echo $eago['id']; ?>, <?php echo $esep['id']; ?>, <?php echo $eoct['id']; ?>, <?php echo $enov['id']; ?>,
          <?php echo $edic['id']; ?>]
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $sene['id']; ?>, <?php echo $sfeb['id']; ?>, <?php echo $smar['id']; ?>, <?php echo $sabr['id']; ?>, <?php echo $smay['id']; ?>,
          <?php echo $sjun['id']; ?>, <?php echo $sjul['id']; ?>, <?php echo $sago['id']; ?>, <?php echo $ssep['id']; ?>, <?php echo $soct['id']; ?>, <?php echo $snov['id']; ?>,
          <?php echo $sdic['id']; ?>]
        }
      ]
    }


    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }


    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#f39c12'
    barChartData.datasets[0].strokeColor = '#f39c12'
    barChartData.datasets[1].fillColor   = '#dd4b39'
    barChartData.datasets[1].strokeColor = '#dd4b39'




    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)


    var bar_data2 = {
      data : [['Correctivo', 10], ['Preventivo', 8], ['Predictivo', 10]],
      color: ['#ff9932','#000000','#ff9932']
    }
    $.plot('#bar-chart2', [bar_data2], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.9,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })



    var donutData = [
      { label: 'Abiertas', data: 30, color: '#dd4b39' },
      { label: 'En Proceso', data: 20, color: '#00a65a' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
  })

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
