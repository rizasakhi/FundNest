<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body>

    <div class="container-fluid h-100 d-flex justify-content-center align-items-center col-6 gap-5">
        <div class="col-6">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-6">
            <div data-mdb-input-init class="form-outline mb-4 d-grid gap-3">
                <h1 class="text-center">FundNest</h1>
                <input type="name" id="form3Example3" class="form-control" placeholder="Name" />
                <input type="email" id="form3Example3" class="form-control" placeholder="Email Address" />
                <input type="phone" id="form3Example3" class="form-control" placeholder="Phone Number" />
                <input type="password" id="form3Example3" class="form-control" placeholder="Password" />
                <input type="password" id="form3Example3" class="form-control" placeholder="Confirm Password" />
                <div class="text-center text-lg-start">
                    <button  type="button" class="btn btn-dark"
                      style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                    <p class="small mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('login') }}"
                        class="link-dark">Login</a></p>
                  </div>
              </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>