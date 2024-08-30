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
                                <h3 class="card-title">Profile Update</h3>

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
                            <form action="{{ url('/user/ProfileStore/' . $user->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <div class="input-group mb-3">
                                                    <input hidden type="text" name="id" value="{{ $user->id }}">
                                                    <input type="text" name="name" value="{{ $user->name }}"
                                                        class="form-control" placeholder="" disabled>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <div class="select2-purple">
                                                    <div class="input-group mb-3">
                                                        <input type="email" value="{{ $user->email }}" name="email"
                                                            class="form-control" placeholder="" disabled>
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <span class="fas fa-envolup"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <div class="select2-purple">
                                                    <div class="input-group mb-3">
                                                        <input type="number" value="{{ $user->phone_number }}"
                                                            name="phone_number" class="form-control" placeholder=""
                                                            disabled>
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <span class="fas fa-envolup"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <div class="select2-purple">
                                                    <div class="input-group mb-3">
                                                        <input type="date" name="date_of_birth" class="form-control"
                                                            placeholder="">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <span class="fas fa-envolup"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <div class="select2-purple">
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="country" class="form-control"
                                                            placeholder="">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <span class="fas fa-envolup"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="select2-purple">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Male"
                                                                name="gender" checked="">
                                                            <label class="form-check-label">Male</label>
                                                            <br>
                                                            <input class="form-check-input" type="radio" value="Female"
                                                                name="gender" checked="">
                                                            <label class="form-check-label">Female</label>
                                                            <br>
                                                            <input class="form-check-input" type="radio" value="Other"
                                                                name="gender" checked="">
                                                            <label class="form-check-label">Other</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <!-- /.col -->

                                        <!-- /.col -->

                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6 pb-3">
                                            <div class="form-group">
                                                <label>CV /Resume</label>
                                                <div class="custom-file">
                                                    <input type="file" name="cv" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.col -->
                                    </div>
                            </form>
                            <button type="submit" name="submit"
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
