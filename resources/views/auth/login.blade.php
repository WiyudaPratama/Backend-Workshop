<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/frontend/icon/hamburger.png" type="image/png">
  <title>CampTenn</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">

</head>
<body>

  <main>
    <section class="section-login d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6 text-center">
            <div class="card shadow">
              <div class="card-body">
                <h1>Login Admin</h1>
                <p>Login Admin BPC (Budidarma Programming CLub)</p>
                <form action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Input your email" autofocus>
                    @error('email')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Input your password">
                    @error('password')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="form-group form-check text-left">
                    <input type="checkbox" class="form-check-input" id="remeber" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remeber">Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-login px-4 py-2 mb-3 btn-block">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="{{ url('frontend/library/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ url('frontend/library/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>