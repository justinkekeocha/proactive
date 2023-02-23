<x-layout title="Register">

  @push('headTags')
  <link href="{{ asset('assets/css/signup.css') }}" rel="stylesheet"> 
  @endpush

  <section class="login-wrapper">
    <div class="login-card">
         <div class="column">
             <div class="intro">
                 <h2 class="mt-3 mb-3">Register</h2>
                 <p class="mt-2 mb-4">Let's get you started</p>
             </div>
             <div>
                <x-google-login-button/>
                 <div class="demacator">
                     <p>Or</p>
                 </div>
                 <form class="login-form" action="/signup" method="POST" id="signupForm">
                     <div class="form-group">
                         <label>Full name</label>
                         <input placeholder="Enter your full name" type="text" name="name" />
                     </div>
                     <div class="form-group">
                         <label>Email address</label>
                         <input placeholder="Email address" type="email" name="email" />
                     </div>
                     <div class="form-group">
                         <label>Password</label>
                         <input placeholder="Password" type="password" name="password" />
                     </div>

                     <button>Join for free</button>
                 </form>

                 <span class="page-link">Already have an account? <a href="/login">Log in</a></span>
             </div>
         </div>
     </div>
 </section> 
      
   @push('footerTags')
   <script src='{{ asset('assets/js/signup.js') }}'></script> 
   @endpush

</x-layout>
   