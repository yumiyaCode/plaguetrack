@extends('template.admin.master')
@section('prov', 'active')

@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card card-teal mt-4">
              <div class="card-header">
                <h3 class="card-title">Edit Data Provinsi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('province.update', $province->id)}}" method="POST">
              	@csrf
                @method('patch')
                <div class="card-body">
                  <div class="form-group">
                    <label for="provinceInput">Nama Provinsi</label>
                    <input type="text" name="prov_name" class="form-control" value="{{$province->prov_name}}" id="provinceInput" placeholder="Enter Province Name">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-info btn-block">Submit</button>
                </div>
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

