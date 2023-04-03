<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">


</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url('https://source.unsplash.com/random/900×700/?products');">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign up</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>

                            <form action="{{route('register-user')}}" method="POST">
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get(success)}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-success">{{Session::get(fail)}}</div>
                                @endif
                                @csrf
                                <div class="form-group mb-3">
                                <label for="name" class="label">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                                <span class="text-danger">@error('name'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                    <label for="email" class="label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">

                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>

                                </div>
                                <div class="form-group d-md-flex">

                                </div>
                            </form>
                            <p class="text-center">Already a member? <a data-toggle="tab" href="{{ url('/login') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
