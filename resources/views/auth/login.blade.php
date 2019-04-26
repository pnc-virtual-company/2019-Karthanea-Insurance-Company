<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
    <title>{{('Karthanea')}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container"><br><br><br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                    <div class="row">
                            <div class="col s12 ">
                              <div class="card-panel ">
                                         <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                            <div class="card  bg-info p-4 shadow-lg">
                                                    <h6 class="text-center text-white">Login</h6>
                                                </div>
                                           <div class="input-field">
                                                   <i class="material-icons prefix" class="text-secondary">markunread</i>
                                                   <input type="text" id="autocomplete-input" class="autocomplete icons" required autofocus>
                                                   <label for="autocomplete-input ">Email</label>
                                            </div>
                                            <div class="input-field">
                                                   <i class="material-icons prefix">https</i>
                                                   <input type="text" id="autocomplete-input" class="autocomplete icons" required>
                                                   <label for="autocomplete-input">Password</label>
                                            </div>
                                            <footer>
                                                   <div class="container">
                                                    <div class="row d-flex justify-content-center mt-5">
                                                      <div class="form ">
                                                           @csrf
                                                           <div class="form-group">
                                                               <a href="{{url('/')}}" class="btn btn-info btn-sm right text-white text-center">LOGIN</a>
                                                           </div>
                                                           <div class="form-group text-info">
                                                               <div class="title">
                                                                   <div class="title-row">
                                                                     <div class="bar-container">
                                                                       <div class="bar"></div>
                                                                     </div>
                                                                     <div class="text">
                                                                       <p>OR</p>
                                                                     </div>
                                                                     <div class="bar-container">
                                                                       <div class="bar"></div>
                                                                     </div>
                                                                   </div>
                                                                 </div>
                                                           </div>
                                                           <div class="form-group">
                                                               <a href="{{url('/register')}}" class="btn btn-info btn-sm right text-white text-center">Register</a>
                                                           </div>
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