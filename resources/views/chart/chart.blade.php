@extends('layout.master')
@section('content-wrapper')

@include('loader.loader')
     <!-- Content Header (Page header) -->
<section class="content-header">
     <div class="container-fluid">
     <div class="row mb-2">
          <div class="col-sm-6">
          <h1>ChartJS</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">ChartJS</li>
          </ol>
          </div>
     </div>
     </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
     <div class="container-fluid">
     <div class="row">
          <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="card card-primary">
          <div class="card-header">
               <h3 class="card-title">Area Chart</h3>

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
               <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               </div>
          </div>
          <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- DONUT CHART -->
          <div class="card card-danger">
          <div class="card-header">
               <h3 class="card-title">Donut Chart</h3>

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
               <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- PIE CHART -->
          <div class="card card-danger">
          <div class="card-header">
               <h3 class="card-title">Pie Chart</h3>

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
               <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
          </div>
          <!-- /.card -->

          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="card card-info">
          <div class="card-header">
               <h3 class="card-title">Line Chart</h3>

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

          <!-- BAR CHART -->
          <div class="card card-success">
          <div class="card-header">
               <h3 class="card-title">Bar Chart</h3>

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
               <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               </div>
          </div>
          <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- STACKED BAR CHART -->
          <div class="card card-success">
          <div class="card-header">
               <h3 class="card-title">Stacked Bar Chart</h3>

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
               <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               </div>
          </div>
          <!-- /.card-body -->
          </div>
          <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->
     </div>
     <!-- /.row -->
     </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@push('plugin-scripts')
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<!-- Custome js for chart -->
<script src="{{ asset('assets/dist/js/custom.js') }}"></script>
@endpush

@push('custom-scripts')
@endpush