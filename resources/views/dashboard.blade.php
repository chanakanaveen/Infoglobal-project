@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="card">
                                <div class="card-header border-0">
                                  <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Person Age Breakdown chart</h3>
                                  </div>
                                </div>
                                <div class="card-body">
                                  <div class="d-flex">
                                    <div id="columnchart_material-2" style="width: 800px; height: 400px;"></div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header border-0">
                                  <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Religion by Presentage</h3>
                                  </div>
                                </div>
                                <div class="card-body">
                                  <div class="d-flex">
                                    <div id="chart_div"></div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header border-0">
                                  <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Person Birth Month Count Chart</h3>
                                  </div>
                                </div>
                                <div class="card-body">
                                  <div class="d-flex">
                                    <div id="columnchart_material" style="width: 800px; height: 400px;"></div>
                                  </div>
                                </div>
                              </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('scripts')

{{-- religion chart ------------------------------------------- --}}

<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart']});

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Religion');
    data.addColumn('number', 'count');
    data.addRows([
      <?php echo $religionChart; ?>

    ]);

    // Set chart options
    var options = {'title':'',
                   'width':800,
                   'height':400,
                   is3D: true,};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>

 {{-- month chart ------------------------------------------- --}}

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data1 = google.visualization.arrayToDataTable([
          ['Month', 'Count'],
          <?php echo $monthChart; ?>
        ]);

        var options1 = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data1, google.charts.Bar.convertOptions(options1));
      }
    </script>

    // {{-- age chart ------------------------------------------- --}}

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data2 = google.visualization.arrayToDataTable([
          ['Age Range', 'Count'],
          <?php echo $ageChart; ?>
        ]);

        var options2 = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material-2'));

        chart.draw(data2, google.charts.Bar.convertOptions(options2));
      }
    </script>



@endsection
