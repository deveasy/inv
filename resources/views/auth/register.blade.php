<x-auth-layout>

<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Register</h4>
                <div class="nk-block-des">
                    <p>Create New Dashlite Account</p>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="form-group">
                <label class="form-label" for="name">Name</label>
                <div class="form-control-wrap">
                    <input type="text" name="name" class="form-control form-control-lg" id="name" required placeholder="Enter your name">
                </div>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <div class="form-group">
                <label class="form-label" for="email">Email or Username</label>
                <div class="form-control-wrap">
                    <input type="text" name="email" class="form-control form-control-lg" id="email" required placeholder="Enter your username">
                </div>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
                </div>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <div class="form-group">
                <label class="form-label" for="password_confirmation">Confirm Password</label>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input type="password" name="password_confirmation" class="form-control form-control-lg" id="password_confirmation" placeholder="Confirm your password">
                </div>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <div class="form-group">
                <div class="custom-control custom-control-xs custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox">
                    <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Register</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ route('login') }}"><strong>Sign in instead</strong></a>
        </div>
        <div class="text-center pt-4 pb-3">
            <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
        </div>
        <ul class="nav justify-center gx-8">
            <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
        </ul>
    </div>
</div>
</x-auth-layout>
