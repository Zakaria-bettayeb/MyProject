@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')


@section('content')

{{--<h1>parameters</h1>--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-3 col-6">--}}
{{--            <!-- small box -->--}}
{{--            <div class="small-box bg-info">--}}
{{--                <div class="inner">--}}
{{--                    <h3>150</h3>--}}

{{--                    <p>New Orders</p>--}}
{{--                </div>--}}
{{--                <div class="icon">--}}
{{--                    <i class="ion ion-bag"></i>--}}
{{--                </div>--}}
{{--                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- ./col -->--}}
{{--        <div class="col-lg-3 col-6">--}}
{{--            <!-- small box -->--}}
{{--            <div class="small-box bg-success">--}}
{{--                <div class="inner">--}}
{{--                    <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

{{--                    <p>Bounce Rate</p>--}}
{{--                </div>--}}
{{--                <div class="icon">--}}
{{--                    <i class="ion ion-stats-bars"></i>--}}
{{--                </div>--}}
{{--                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- ./col -->--}}
{{--        <div class="col-lg-3 col-6">--}}
{{--            <!-- small box -->--}}
{{--            <div class="small-box bg-warning">--}}
{{--                <div class="inner">--}}
{{--                    <h3>44</h3>--}}

{{--                    <p>User Registrations</p>--}}
{{--                </div>--}}
{{--                <div class="icon">--}}
{{--                    <i class="ion ion-person-add"></i>--}}
{{--                </div>--}}
{{--                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- ./col -->--}}
{{--        <div class="col-lg-3 col-6">--}}
{{--            <!-- small box -->--}}
{{--            <div class="small-box bg-danger">--}}
{{--                <div class="inner">--}}
{{--                    <h3>65</h3>--}}

{{--                    <p>Unique Visitors</p>--}}
{{--                </div>--}}
{{--                <div class="icon">--}}
{{--                    <i class="ion ion-pie-graph"></i>--}}
{{--                </div>--}}
{{--                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- ./col -->--}}
{{--    </div>--}}
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
                      <div  class="col-lg-6 col-6">
                          <!-- small box -->
                          <div  class="small-box bg-info">
                              <div class="inner" style="background-color: #00ff80">
                                  <h3 style="color: red">150</h3>

                                  <p>New Orders</p>
                              </div>
                              <div class="icon">
{{--                                  <i class="ion ion-bag"></i>--}}
{{--                                  <i class="fa-solid fa-temperature-list"></i>--}}
                                  <i class="fas fa-temperature-low"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-6 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                                  <p>Bounce Rate</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <!-- ./col -->
                  </div>
                  <div class="row">
                      <div  class="col-lg-4 col-6">
                          <!-- small box -->
                          <div  class="small-box bg-info">
                              <div class="inner" style="background-color: #00ff80">
                                  <h3 style="color: red">150</h3>

                                  <p>New Orders</p>
                              </div>
                              <div class="icon">
{{--                                  <i class="ion ion-bag"></i>--}}
{{--                                  <i class="fa-solid fa-temperature-list"></i>--}}
                                  <i class="fas fa-temperature-low"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                                  <p>Bounce Rate</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                              <div class="inner">
                                  <h3>44</h3>

                                  <p>User Registrations</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
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
            <h5 class="mb-2">Articles</h5>
        <div class="card card-success">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-primary text-white">Card Title</h5>
                    <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                    <a href="#" class="text-white">Last update 2 mins ago</a>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="../dist/img/photo2.png" alt="Dist Photo 2">
                  <div class="card-img-overlay d-flex flex-column justify-content-center">
                    <h5 class="card-title text-white mt-5 pt-2">Card Title</h5>
                    <p class="card-text pb-2 pt-1 text-white">
                      Lorem ipsum dolor sit amet, <br>
                      consectetur adipisicing elit <br>
                      sed do eiusmod tempor.
                    </p>
                    <a href="#" class="text-white">Last update 15 hours ago</a>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="../dist/img/photo3.jpg" alt="Dist Photo 3">
                  <div class="card-img-overlay">
                    <h5 class="card-title text-primary">Card Title</h5>
                    <p class="card-text pb-1 pt-1 text-white">
                      Lorem ipsum dolor <br>
                      sit amet, consectetur <br>
                      adipisicing elit sed <br>
                      do eiusmod tempor. </p>
                    <a href="#" class="text-primary">Last update 3 days ago</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

