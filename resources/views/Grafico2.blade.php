@extends('adminlte::page')

@section('title', 'Titulacion')

@section('content_header')
    <h1>Titulacion</h1>
@stop

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div id="container"></div>
        

            </div>
        </div>
    </div>
    
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/data.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/export-data.js"></script>

@stop


@section('js')
    
        <script>
            const cData= JSON.parse(`<?php echo $data; ?>`);
            
            Highcharts.getJSON('https://demo-live-data.highcharts.com/aapl-c.json', function (data) {
  // Create the chart
  
            Highcharts.stockChart('container', {


                rangeSelector: {
                selected: 1
            },

                title: {
                text: 'PH'
    },

    series: [{
      name: cData.name,
      data: <?= $data ?>,
      tooltip: {
                valueDecimals: 2
      }
    }]
  });
});





</script>

@stop
