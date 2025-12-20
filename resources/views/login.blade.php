<!doctype html>
<html lang="en">
  <head>
    <title>Login LUNARA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>
  <body style="height:100vh;
             background-image: url('{{ asset('storage/banner/purplebanner.jpg') }}');
             background-size: cover;
             background-position: center;
             background-repeat: no-repeat;">

    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height:100vh;">

            <div class="card shadow-lg" style="width:370px; background:rgba(255,255,255,.88); border-radius:12px;">
                <div class="card-body">
                    <h4 class="text-center mb-3 font-weight-bold">LOGIN</h4>

                    <form action="/cekLogin" method="post">
                        @csrf
                        <div class="form-group pt-2">
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text bg-white" style="cursor:pointer" onclick="togglePassword()">
                                        <i class="fa fa-eye" id="togglePasswordIcon"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-block mt-2">Masuk</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
    function togglePassword() {
        const password = document.getElementById("password");
        const icon = document.getElementById("togglePasswordIcon");

        if (password.type === "password") {
            password.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            password.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
