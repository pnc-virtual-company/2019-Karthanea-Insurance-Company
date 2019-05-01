<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{ config('app.name', 'Karthanea') }}
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class="container"><br><br><br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="row">
                    <div class="col s12 ">
                        <div class="card-panel ">
                            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                            <form action="{{ route('register')}}" method="POST">
                                @csrf
                              <div class="card  bg-info p-4 shadow-lg">
                                  <h6 class="text-center text-white">Register</h6>
                              </div>
                              @include('validation-errors')
                              <div class="input-field">
                                        <i class="material-icons prefix" class="text-secondary">person</i>
                                        <input type="text" id="autocomplete-input" name="name" required value="{{ old('name') }}" class="autocomplete icons">
                                        <label for="autocomplete-input ">Username</label>
                                  </div>
                                  <div class="input-field">
                                         <i class="material-icons prefix">markunread</i>
                                         <input type="text" id="autocomplete-input" name="email" required value="{{ old('email') }}" class="autocomplete icons">
                                         <label for="autocomplete-input">Email</label>
                                  </div>
                                  <div class="input-field">
                                         <i class="material-icons prefix">lock</i>
                                         <input type="password" id="autocomplete-input" name="password" required class="autocomplete icons">
                                         <label for="autocomplete-input">Password</label>
                                      </div>
                                    <div class="input-field">
                                         <i class="material-icons prefix">lock</i>
                                         <input type="password" id="autocomplete-input" name="password_confirmation" required class="autocomplete icons">
                                         <label for="autocomplete-input">Password</label>
                                    </div>
                                  <footer>
                                      <div class="container">
                                          <div class="row d-flex justify-content-center mt-5">
                                              <div class="form-group">
                                                  <input type="submit" class="btn btn-info btn-sm right text-white" value="Submit Register">
                                              </div>
                                          </div>
                                      </div>
                                  </footer>
                               </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
</script>