<!doctype html>
<html lang="en">

<head>
    @include('Login_pages.css')
    <title>Sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>



    <div class="panel-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="login-box" style="margin-left:auto;margin-right:auto">
            <h2>Sign up</h2>
            <form method="post" action="{{ url('user_store') }}" enctype="multipart/form-data" role="form"
                class="form-horizontal form-groups-bordered">
                @csrf
                <div class="user-box">
                    <input type="text" value="{{ old('fname') }}" name="fname" required>
                    <label>First Name</label>
                    <span class="text-danger">
                        @error('fname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="user-box">
                    <input type="text" value="{{ old('lname') }}" name="lname" required>
                    <label>Last Name</label>
                    <span class="text-danger">
                        @error('lname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="user-box">
                    <input type="text" name="Email" value="{{ old('email') }}" required>
                    <label>Email</label>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="user-box">
                    <input type="password" name="Password" required>
                    <label>Password</label>
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>



                <button class="btn" style="border:none; background-color: (0, 0, 0) border-radius:2px">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                </button>
                <br>
                <br>
                <div style="float:right" class="user-box">
                    <span style="color:white">Already Have a account?</span>
                    <a href="{{ url('Login') }}">
                        <br>

                        <span style="color:#03e9f4">Login Here</span>
                    </a>
                </div>

            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
