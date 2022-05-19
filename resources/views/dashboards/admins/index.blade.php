@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')


@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  parameters
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
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                 
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-right">
                    <div style="display:inline;width:120px;height:120px;"><canvas width="150" height="150" style="width: 120px; height: 120px;"></canvas><input type="text" class="knob" value="30" data-width="120" data-height="120" data-fgcolor="#f56954" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(245, 105, 84); padding: 0px; appearance: none;"></div>

                    <div class="knob-label">Temperature </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-right">
                    <div style="display:inline;width:90px;height:90px;"><canvas width="112" height="112" style="width: 90px; height: 90px;"></canvas><input type="text" class="knob" value="30" data-thickness="0.1" data-width="90" data-height="90" data-fgcolor="#00a65a" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 166, 90); padding: 0px; appearance: none;"></div>

                    <div class="knob-label">Soil moisture </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-right">
                    <div style="display:inline;width:120px;height:120px;"><canvas width="150" height="150" style="width: 120px; height: 120px;"></canvas><input type="text" class="knob" data-thickness="0.2" data-anglearc="250" data-angleoffset="-125" value="30" data-width="120" data-height="120" data-fgcolor="#00c0ef" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(0, 192, 239); padding: 0px; appearance: none;"></div>

                    <div class="knob-label">Air humidity </div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Light intensity</h3>

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
                <div class="chart">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


@endsection

