<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
          @csrf

            <h2 class="title">Đăng nhập</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input placeholder="Username" id="email" type="email" name="email" required autofocus/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Password" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Nhớ tài khoản') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                @endif
            </div>
            <input type="submit" value="Đăng nhập" class="btn solid" />
            
            <p class="social-text">Hoặc đăng nhập bằng tài khoản mạng xã hội</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              
            </div>
          </form>
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
          @csrf
            <h2 class="title">Đăng kí</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required placeholder="Confirm Password" />
            </div>
            <input type="submit" class="btn" value="Đăng kí" />
         
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Chưa có tài khoản?</h3>
            <p>
              Hãy cùng khám phá những điều mới lạ về văn hoá thế giới.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Đăng kí
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Đã có tài khoản?</h3>
            <p>
              Chào mừng quay lại và tiếp tục khám phá về văn hoá thế giới.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Đăng nhập
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/login.js"></script>
  </body>
</html>
