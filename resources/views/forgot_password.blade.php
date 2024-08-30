@include('layout.backend.header_script')
<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 d-flex justify-content-center pt-5">
            <div class="register-box">
                <div class="card card-outline card-success">
                    <div class="card-header text-center">
                        <img width="200px" src="{{ asset('/public/assets/frontend/img/logo_tp.png') }}" alt="logo">
                    </div>
                    <div class="card-body">
                        {{--  --}}
                        @if (session('status') == 'alert-success' && session('success'))
                        <x-message-banner msg="{{ session('success') }}" class="{{ session('status') }}" />
                    @elseif (session('status') == 'alert-danger' && session('error'))
                        <x-message-banner msg="{{ session('error') }}" class="{{ session('status') }}" />
                    @endif
                        {{--  --}}
                        <p class="login-box-msg">Forgot Password</p>
                        <form action="{{ route('forgot.store') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Request new
                                        password</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <p class="mt-3 mb-1">
                            <a class="text-success text-decoration-none" href="{{ route('login.create') }}">Login</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<!-- /.register-box -->
@include('layout.backend.footer_script')
