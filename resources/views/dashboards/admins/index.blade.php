@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')


@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Flot Charts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Flot</li>
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
            <!-- interactive chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Interactive Area Chart
                </h3>

                <div class="card-tools">
                  Real time
                  <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="interactive" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="1497" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1198.2px; height: 300px;"></canvas><canvas class="flot-overlay" width="1497" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1198.2px; height: 300px;"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="36" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text><text x="148.20564621145076" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text><text x="264.38746439326894" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">20</text><text x="380.56928257508713" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">30</text><text x="496.7511007569053" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">40</text><text x="612.9329189387236" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">50</text><text x="729.1147371205417" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">60</text><text x="845.2965553023599" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">70</text><text x="961.4783734841781" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">80</text><text x="1077.6601916659963" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">90</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="16.903905868530273" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="8.95156192779541" y="226.66666666666666" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="8.95156192779541" y="184.33333333333334" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">40</text><text x="8.95156192779541" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">60</text><text x="8.95156192779541" y="99.66666666666667" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">80</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">120</text><text x="1" y="57.333333333333336" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">100</text></g></svg></div></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Line Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="line-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="714" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 571.6px; height: 300px;"></canvas><canvas class="flot-overlay" width="714" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 571.6px; height: 300px;"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="37" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text><text x="114.42222222222223" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">2</text><text x="191.84444444444446" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">4</text><text x="269.2666666666667" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">6</text><text x="346.6888888888889" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">8</text><text x="420.1349391407437" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text><text x="497.557161362966" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">12</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="1" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-1.5</text><text x="1" y="226.66666666666669" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-1.0</text><text x="1" y="184.33333333333334" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-0.5</text><text x="5.975780487060547" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">1.5</text><text x="5.975780487060547" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0.0</text><text x="5.975780487060547" y="99.66666666666667" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0.5</text><text x="5.975780487060547" y="57.333333333333336" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">1.0</text></g></svg></div></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

            <!-- Area chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Area Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="area-chart" style="height: 338px; padding: 0px; position: relative;" class="full-width-chart"><canvas class="flot-base" width="762" height="422" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 609.6px; height: 338px;"></canvas><canvas class="flot-overlay" width="762" height="422" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 609.6px; height: 338px;"></canvas></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- Bar chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Bar Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="714" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 571.6px; height: 300px;"></canvas><canvas class="flot-overlay" width="714" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 571.6px; height: 300px;"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="117.22293957796967" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">February</text><text x="219.5136352192272" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">March</text><text x="316.5551138270985" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">April</text><text x="411.16104365262123" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">May</text><text x="27.510368936712098" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">January</text><text x="500.9138498132879" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">June</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.952343940734863" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="8.952343940734863" y="205.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">5</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="78.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">15</text></g></svg></div></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

            <!-- Donut chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Donut Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="714" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 571.6px; height: 300px;"></canvas><canvas class="flot-overlay" width="714" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 571.6px; height: 300px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 69.5px; left: 343.838px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series2<br>30%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 209.5px; left: 321.838px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series3<br>20%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 128.5px; left: 162.7px;"><div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series4<br>50%</div></span></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
     
    </section>
    <!-- /.content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js" ></script>
 


@endsection