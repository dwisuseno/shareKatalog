<!--
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
-->
<head>
        <meta charset="UTF-8">
        <title><?php echo $title?></title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        
        <link rel="shortcut icon" href="<?php echo base_url('')?>img/palyja.png" />
        <style>
        input:-moz-read-only { /* For Firefox */
            background-color: blue;
        }

        input:read-only {
        background-color: blue;
        }
        </style>
        <!-- bootstrap framework -->
        <link href="<?php echo base_url(''); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        
        <!-- custom icons -->
            <!-- font awesome icons -->
            <link href="<?php echo base_url(''); ?>assets/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
            <!-- ionicons -->   
            <link href="<?php echo base_url(''); ?>assets/icons/ionicons/css/ionicons.min.css" rel="stylesheet" media="screen">
            <!-- flags -->
            <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/icons/flags/flags.css">
         <script src="<?php echo base_url(''); ?>assets/js/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(''); ?>assets/js/serial.js" type="text/javascript"></script>       
        <script>
            var chart;
            var chartData = [
                {
                    "year": 2011,
                    "jumlah peta": 176,
                },
                {
                    "year": 2012,
                    "jumlah peta": 1004,
                },
                {
                    "year": 2013,
                    "jumlah peta": 535,
                    
                },
                {
                    "year": 2014,
                    "jumlah peta": 715,
                    
                },
                {
                    "year": 2015,
                    "jumlah peta": 726,
                    
                }

            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();

                chart.dataProvider = chartData;
                chart.categoryField = "year";
                chart.startDuration = 1;

                chart.handDrawn = true;
                chart.handDrawnScatter = 3;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // column graph
                var graph1 = new AmCharts.AmGraph();
                graph1.type = "column";
                graph1.title = "Jumlah Peta";
                graph1.lineColor = "#a668d5";
                graph1.valueField = "jumlah peta";
                graph1.lineAlpha = 1;
                graph1.fillAlphas = 1;
                graph1.dashLengthField = "dashLengthColumn";
                graph1.alphaField = "alpha";
                graph1.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
                chart.addGraph(graph1);

                // line
                var graph2 = new AmCharts.AmGraph();
                graph2.type = "line";
                graph2.title = "Expens";
                graph2.lineColor = "#fcd202";
                graph2.valueField = "expenses";
                graph2.lineThickness = 3;
                graph2.bullet = "round";
                graph2.bulletBorderThickness = 3;
                graph2.bulletBorderColor = "#fcd202";
                graph2.bulletBorderAlpha = 1;
                graph2.bulletColor = "#ffffff";
                graph2.dashLengthField = "dashLengthLine";
                graph2.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
                chart.addGraph(graph2);

                // LEGEND
                var legend = new AmCharts.AmLegend();
                legend.useGraphSettings = true;
                chart.addLegend(legend);

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    <!-- page specific stylesheets -->

        <!-- datatables -->
        <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/lib/DataTables/media/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/lib/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css">
        <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/lib/DataTables/extensions/Scroller/css/dataTables.scroller.min.css">

        <!-- nvd3 charts -->
        <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/lib/novus-nvd3/nv.d3.min.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/lib/owl-carousel/owl.carousel.css">
                
        <!-- main stylesheet -->
        <link href="<?php echo base_url(''); ?>assets/css/style.css" rel="stylesheet" media="screen">
        
        <!-- google webfonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin' rel='stylesheet' type='text/css'>
        
        <!-- moment.js (date library) -->
        <script src="<?php echo base_url(''); ?>assets/lib/moment-js/moment.min.js"></script>

       
        <style type="text/css">
.judul {
    color: white;
    margin-top: 13px;
    font-size: 18pt;
}
.sisi {
    margin-top: 18px;
}

.centered {
    margin: 0 auto;
    margin-left: 170px;
    margin-top: 2px;
    text-align: center;
}
.bayangan {
    box-shadow: 0px 0px 8px grey;
}
</style>

 
    </head>