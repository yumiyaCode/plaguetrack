@extends('template.admin.master')
@section('loc', 'active')

@push('css')
  <link rel="stylesheet" href="{{asset("assets/adminlte/plugins/select2/css/select2.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

@endpush

@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card card-teal mt-4">
              <div class="card-header">
                <h3 class="card-title">Edit Data Kasus</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('local.update', $track->id)}}" method="POST">
              	@csrf
                @method('patch')
                  
                  @livewire('kasus', ['selectedRw' => $track->rw_id, 'track_id' => $track->id])
                  
                
                <!-- /.card-body -->

                
              </form>
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>

@endsection
@push('script')
  
<script src="{{asset("assets/adminlte/plugins/select2/js/select2.full.min.js")}}"></script>




@endpush