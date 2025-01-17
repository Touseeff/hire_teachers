@include('layout.backend.header_script')
<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6  pt-5">
            <div class=" m-2">
                <div class="card card-outline card-success">
                    <div class="card-header text-center">
                        <img width="200px" src="{{ asset('/public/assets/frontend/img/logo_tp.png') }}" alt="logo">
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">School Registration Form</p>

                        @if (isset($status) == 'alert-success' && isset($success))
                            <x-message-banner msg="{{ $success }}" class="{{ $status }}" />
                        @elseif (isset($status) == 'alert-danger' && isset($error))
                            <x-message-banner msg="{{ $error }}" class="{{ $status }}" />
                        @endif
                        <form action="{{ route('school.store') }}" method="post">
                            @csrf
                            <div class="row">

                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="school_name" class="form-control"
                                            placeholder="School name">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('school_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="admin_name" class="form-control"
                                            placeholder="Admin Name">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('admin_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="password" class="form-control"
                                            placeholder="password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="country" class="form-control"
                                            placeholder="Country Exp:USA">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="number" name="number" class="form-control"
                                            placeholder="phone number">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                </div>
                                <!-- /.col -->
                                <div class="col-4 d-flex justify-content-end">
                                    <button type="submit" name="submit" style="margin-right: 1px"
                                        class=" btn btn-primary btn-block ">Register</button>
                                    <a class="btn btn-dark" href="{{ url('/') }}">Cancel</a>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <p class="pt-2"><span>Already have an account ? <a href="{{ url('/user/login/create') }}"
                                    class="text-center text-success">Login </a></span></p>

                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<!-- /.register-box -->
@include('layout.backend.footer_script')
