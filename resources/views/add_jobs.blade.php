@extends('layout.backend.main-containt')
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <div class="content-header">
      <div class="container-fluid bg-primary">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">xyz</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
        <!-- /.content-header -->

        <!-- Main content -->
        {{-- <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section> --}}
        <!-- /.content -->
        {{-- profile Update form --}}
        <!-- Main content -->
        <section class="content pt-3">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col">
                        {{-- profile Update start --}}
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Create Jobs Form</h3>

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
                            <form action="{{ route('jobs.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Job Title</label>
                                                <div class="input-group mb-3">
                                                    <input hidden type="text" name="school_id" value="{{ $school_id }}"
                                                        class="form-control" placeholder="">
                                                    <input type="text" name="job_title" value=""
                                                        class="form-control" placeholder="">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Expire Date</label>
                                                <input type="date" name="expire_date" class="form-control"
                                                    placeholder="Enter your Address">
                                            </div>
                                        </div>
                                        <!-- /.col -->

                                        <!-- /.col -->
                                        <!-- /.col -->

                                        <!-- /.col -->
                                        <div class="col-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Jobs Details</label>
                                                <textarea name="job_details" class="form-control" rows="6" placeholder="Enter ..."></textarea>
                                            </div>
                                        </div>


                                        <!-- /.col -->

                                        <!-- /.col -->
                                    </div>
                            </form>
                            <button type="submit" value="submit" name="submit"
                                class="btn  btn-primary d-flex justify-content-end">Submit</button>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                        </div>
                    </div>

                    {{-- profile Update end --}}

                </div>
            </div>
            <!-- /.row -->
    </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
@endsection
