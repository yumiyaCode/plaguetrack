@extends('template.admin.master')

@push('cssdatatable')
  <link rel="stylesheet" href="{{asset("assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
@endpush

@section('glob', 'active')

@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card mt-4">
              <div class="card-header">
                <h3 class="card-title">COVID-19 Global Case</h3>
                <div class="card-tools">
                  <a href="" class="btn btn-primary">Add Data</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Country ID</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                    <th>Positif</th>
                    <th>Reaktif</th>
                    <th>Created At</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>

@endsection


@push('jsdatatable')
<script src="{{asset("assets/adminlte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush