@include('layout.backend.header_script')
<div class="container-fluid" style="background-color: #ced9e7">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 d-flex justify-content-center pt-5">
            <div class="register-box m-2">
                <div class="card card-outline card-success">
                    <div class="card-header text-center">
                        <img width="200px" src="{{ asset('/public/assets/frontend/img/logo_tp.png') }}" alt="logo">
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Register Teacher Form</p>
                        @if (isset($status) == 'alert-success' && isset($success))
                            <x-message-banner msg="{{ $success }}" class="{{ $status }}" />
                        @elseif (isset($status) == 'alert-danger' && isset($error))
                            <x-message-banner msg="{{ $error }}" class="{{ $status }}" />
                        @endif
                        <form action="{{ url('/user/store/') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="first_name" class="form-control" placeholder="Fisrt name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            @error('first_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            @error('last_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Retype password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="number" name="number" class="form-control"
                                    data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']"
                                    data-mask="" inputmode="text" placeholder="Phone number">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                            @error('number')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="row">
                                <div class="col-4">
                                </div>
                                <!-- /.col -->
                                <div class="col-8 d-flex justify-content-end">
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
