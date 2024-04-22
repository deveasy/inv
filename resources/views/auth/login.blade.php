<x-auth-layout>
<x-auth-session-status class="mb-4" :status="session('status')" />
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sign-In</h4>
                <div class="nk-block-des">
                    <p>Access Creace Inventory using your email and password.</p>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <x-input-error :messages="$errors->get('email')" class="mt-2 alert alert-danger" />
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="default-01">Username</label>
                </div>
                <div class="form-control-wrap">
                    <input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="Enter your username" autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="password">Password</label>
                    <a class="link link-primary link-sm" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Sign in</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4"> New on our platform? <a href="{{ route('register') }}">Create an account</a>
        </div>
    </div>
</div>
</x-auth-layout>
