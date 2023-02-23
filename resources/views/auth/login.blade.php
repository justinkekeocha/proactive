<x-layout title="Login">

  @push('headTags')
  <link href="{{ asset('assets/css/signup.css') }}" rel="stylesheet"> 
  @endpush

  <section class="login-wrapper">
    <div class="login-card">
            <div class="column">
                <div class="intro">
                    <h2 class="mt-3 mb-3">Login</h2>
                    <p class="mt-2 mb-4">Access your dashboard</p>
                </div>
                <div>
                    <x-google-login-button/>
                    <div class="demacator">
                        <p>Or</p>
                    </div>
                    <form class="login-form" action="/login" method="POST" id="loginForm">
                        <div class="form-group">
                            <label>Email address</label>
                            <input placeholder="Email address" type="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input placeholder="Password" type="password" name="password" />
                        </div>
                        <div>
                            <input type="checkbox" name="remember" />
                            <label for="vehicle1"> Remember me</label><br>
                        </div>
                        <button>Log In</button>
                    </form>

                    <span class="page-link">Don't have an account? <a href="/signup">Sign up</a></span>
                </div>
            </div>
        </div>
  </section> 
      
   @push('footerTags')
   <script src='{{ asset('assets/js/login.js') }}'></script> 
   @endpush

</x-layout>
   