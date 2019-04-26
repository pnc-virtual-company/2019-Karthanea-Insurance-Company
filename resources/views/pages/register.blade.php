<!DOCTYPE html>
<html lang="en">
<head>
        {{-- <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            {{ config('app.name', 'Skeleton') }}
        </title> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container"><br><br><br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                    <div class="row">
                            <div class="col s12 ">
                              <div class="card-panel ">
                               	  <form action="">
                                        <div class="card  bg-info p-4 shadow-lg">
                                                <h6 class="text-center text-white">Register</h6>
                                            </div>
                                       <div class="input-field">
                                               <i class="material-icons prefix" class="text-secondary">markunread</i>
                                               <input type="text" id="autocomplete-input" class="autocomplete icons">
                                               <label for="autocomplete-input ">Username</label>
                                        </div>
                                        <div class="input-field">
                                               <i class="material-icons prefix">map</i>
                                               <input type="text" id="autocomplete-input" class="autocomplete icons">
                                               <label for="autocomplete-input">Address</label>
                                        </div>
                                        <div class="input-field">
                                               <i class="material-icons prefix">call</i>
                                               <input type="text" id="autocomplete-input" class="autocomplete icons">
                                               <label for="autocomplete-input">Phone Number</label>
                                        </div>
                                        <div class="input-field">
                                               <i class="material-icons prefix">markunread</i>
                                               <input type="text" id="autocomplete-input" class="autocomplete icons">
                                               <label for="autocomplete-input">Address</label>
                                        </div>
                                        <footer>
                                               <div class="container">
                                                <div class="row d-flex justify-content-center mt-5">
                                                       <div class="form-group">
                                                           <a href="{{url('/login')}}" class="btn btn-info btn-sm right text-white">Submit Register</a>
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