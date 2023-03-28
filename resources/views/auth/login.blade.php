<link href={{ asset('assets/css/style.css') }} rel="stylesheet">

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Log in</h1>
            <span>or use your account</span>
            <input type="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" />
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <input type="password" name="password" placeholder="Password"
                class="@error('password') is-invalid @enderror" />
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>EPIS</h1>
                <img src={{ asset('assets/img/halim.png') }} width="150px">
                <p>Elektronic Personal Information System</p>
            </div>
        </div>
    </div>
</div>
</form>
