<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend_assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend_assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend_assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('backend_assets/images/favicon.png') }}" />
    <style>
        .form-control:focus{
            color: #fff;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>

                @if ($errors->any())
                <div class="alert alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control p_input" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control p_input" name="email" :value="old('email')" required />
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control p_input" name="phone" :value="old('phone')" required />
                  </div>
                  <div class="form-group">
                    <label>Usertype</label>
                    <select name="usertype" class="form-control p_input">
                      <option value="" disabled>Select One</option>
                      <option value="1" >Doctor</option>
                      <option value="2" >Patient</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control p_input" name="address" :value="old('address')" required />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" name="password" required autocomplete="new-password">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control p_input" name="password_confirmation" required autocomplete="new-password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="{{ route('login') }}"> Login</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('backend_assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('backend_assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend_assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend_assets/js/misc.js') }}"></script>
    <script src="{{ asset('backend_assets/js/settings.js') }}"></script>
    <script src="{{ asset('backend_assets/js/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
</html>