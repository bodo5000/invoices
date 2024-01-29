<div class="register-box">
    <div class="register-logo">
        <a href="{{ route('register') }}"><b>Invo</b>ices</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form wire:submit="register" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input wire:model="name" type="text" class="form-control" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>

                    </div>
                </div>

                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="input-group mb-3">
                    <input wire:model="email" type="email" class="form-control" placeholder="Email">
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
                    <input wire:model="password" type="password" class="form-control" placeholder="Password">
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
                    <input wire:model='password_confirmation' type="password" class="form-control"
                        placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                @enderror


                <div class="input-group mb-3">
                    <input wire:model="image" type="file" class="form-control" placeholder="image" accept="image/*">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-image"></span>
                        </div>
                    </div>
                </div>
                @if ($image)
                    <div class="image w-25 mb-2">
                        <img src="{{ $image->temporaryUrl() }}" class="img-circle elevation-2 w-50" alt="User Image">
                    </div>
                @endif

                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>

                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
