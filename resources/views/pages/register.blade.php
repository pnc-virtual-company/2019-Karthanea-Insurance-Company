<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                                             <div class="row text-center">
                                                <form action="">
                                                    <div class="form-group">
                                                        <a href="{{url('/login')}}" class="btn btn-info btn-sm right text-white">Submit Register</a>
                                                    </div>
                                                  </form>
                                             </div>
                                             
                                            </div>
                                          </footer>
                              </div>
                            </div>
                  </div>
            </div>
            <div class="col-3"></div>

        </div>
    </div>
</body>
</html>