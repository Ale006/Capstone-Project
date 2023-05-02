</div>
<!-- /.content -->
<div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner" style="background-color: #FF9900;">
                <div class="row">
                    <div class="col-sm text-center text-dark">
                        Copyright &copy; 2023 Natural Centric
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Graficos-->
    <script>
    // grafico cantidad de usuario
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      // Define the chart to be drawn.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Element');
      data.addColumn('number', 'Percentage');
      <?php foreach($graficoU as $gu):?>
      data.addRows([
        ['<?=$gu['estado']?>', <?=$gu['cantidad']?>]
      ]);
      <?php endforeach?>

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('usuarioschart'));
      chart.draw(data, null);
    }
    </script>

    <script>
        // grafico cantidad de personal
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      // Define the chart to be drawn.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Element');
      data.addColumn('number', 'Percentage');
      <?php foreach($graficoP as $gp):?>
      data.addRows([
        ['<?=$gp['estado']?>', <?=$gp['cantidad']?>]
      ]);
      <?php endforeach?>

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('personalchart'));
      chart.draw(data, null);
    }
    </script>

<script>
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      // Define the chart to be drawn.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Element');
      data.addColumn('number', 'Percentage');
      <?php foreach($graficoE as $ge):?>
      data.addRows([
        ['<?=$ge['empresa']?>', <?=$ge['cantidad']?>]
      ]);
      <?php endforeach?>

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('empresachart'));
      chart.draw(data, null);
    }
  </script>
</body>
</html>
