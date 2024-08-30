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
                        {{-- Display success or error messages --}}
                        @if (isset($status) && $status == 'alert-success' && isset($success))
                            <x-message-banner msg="{{ $success }}" class="{{ $status }}" />
                        @elseif (isset($status) && $status == 'alert-danger' && isset($error))
                            <x-message-banner msg="{{ $error }}" class="{{ $status }}" />
                        @endif

                        <p class="login-box-msg">Login Form</p>

                        <form id="loginForm" action="{{ route('login.match') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="hidden" id="buttonId" name="button_id" value="">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <span>
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                {{ $message }}
                            @enderror
                            <div class="row">
                                <div class="col-12">
                                    <!-- Submit Button -->
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>

                                    <!-- Button for testing -->
                                    <a  class="btn" type="submit" name="submit" onclick="login(this)" id="testingButton" class="btn btn-primary btn-block">Testing</a>

                                    <a href="{{ url('/') }}" class="btn btn-dark btn-block">Cancel</a>
                                    <a class="text-success text-decoration-none" href="{{ route('forgot.create') }}">I forgot my password</a>
                                    <br>
                                    <a class="text-success text-decoration-none" href="{{ route('user.create') }}">Register a new membership</a>
                                    <br>
                                    <a class="text-success text-decoration-none" href="{{ route('school.create') }}">Register a new school</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>

@include('layout.backend.footer_script')

<script>
    function login(button) {
        var form = document.getElementById('loginForm');
        var buttonId = button.id; // Get the button ID

        if (form) {
            // Set the hidden input field value to the button ID
            document.getElementById('buttonId').value = buttonId;
            form.submit(); // Submit the form
            alert(buttonId);
        } else {
            alert('Form not found');
            console.error('Form element not found');
        }
    }
</script>
