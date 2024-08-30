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

                    {{-- @php
                        session()->forget('success');
                        session()->forget('error');
                    @endphp --}}

                    {{-- @if (session('status') == 'alert-success' && session('success'))
                    <x-message-banner msg="{{ session('success') }}" class="{{ session('status') }}" />
                @elseif (session('status') == 'alert-danger' && session('error'))
                    <x-message-banner msg="{{ session('error') }}" class="{{ session('status') }}" />
                @endif --}}

                    {{--  --}}


                    {{--  --}}
                    {{--  --}}
                    <div class="card-body">
                        @if (isset($status) == 'alert-success' && isset($success))
                            <x-message-banner msg="{{ $success }}" class="{{ $status }}" />
                        @elseif (isset($status) == 'alert-danger' && isset($error))
                            <x-message-banner msg="{{ $error }}" class="{{ $status }}" />
                        @endif
                        <p class="login-box-msg">Reset Password</p>
                        <form action="{{ url('/user/password/reset/'.$token ) }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input hidden type="text" name="remember_token" value="{{$token}}">
                                <input type="password" name="password" class="form-control" placeholder="New Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Change password</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        {{-- </form> --}}

                        <p class="mt-3 mb-1">
                            <a class="text-success text-decoration-none" href="{{ route('login.create') }}">Login</a>
                        </p>
                    </div>
                </div><!-- /.card -->
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<!-- /.register-box -->
@include('layout.backend.footer_script')
