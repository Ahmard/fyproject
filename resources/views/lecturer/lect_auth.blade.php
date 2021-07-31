<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <link href="img/logo/logo.png" rel="icon">
            <link href={{asset("assets/vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
            <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css">
            <link href={{asset("assets/css/ruang-admin.min.css")}} rel="stylesheet">   
            <title>Lecturer Authentication Page </title>
    </head>
    
<body >
     

    {{-- <div class="d-flex justify-content-center">
        <div class="col-sm-4" style="margin-top:220px;margin-left:870px;">
           
                    <form action="" method="POST" style="border:darkslategrey;">
                        <div class="header text-white mt-3" style="margin-left:100px;"><h2>Student Login </h2></div>
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('RegNo') is-invalid @enderror"
                                   placeholder="Registration Number" name="RegNo" value="{{old('RegNo')}}" required style="font-size:16px;">
                            <div class="d-inline">
                                @error('RegNo')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <input type="password" class="form-control @error('Password') is-invalid @enderror"
                                   placeholder="Password" name="Password" required style="font-size:16px;">
                            <div class="d-inline">
                                @error('password')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button style="font-size:18px;"type="submit" class="btn btn-primary mt-3 form-control">Login</button>
                        </div>
                    </form>
                </div> 

               
                    --}}
               
                    <div style=" letter-spacing:2px;padding:2px;text-transform:uppercase;font-weight:bold;"><h4 class="text-center text-info mt-4 "style="font-weight:bolder;">Supervisor Authentication</h4></div>
                    <div class="container-login">
                        <div class=" col-lg-12 mt-4">
                                @php
                                echo\App\PageMsg::renderAll();
                            @endphp
                                      <form method="POST" action="{{ route('lecturer.lect_auth.submit') }}" style="border:3px solid white;">
                                       @csrf
                                        <div class="form-group">
                                          <input type="email" class="form-control mb-4"placeholder="University Mail" required name="Email">
                                        </div>
                                        <div class="form-group">
                                          <button type="submit" class="btn btn-info btn-block" style="font-weight:bolder;letter-spacing:2px;">Authenticate</a>
                                        </div>
                                        <div><h6 class="text-center text-azure" style="font-weight:bolder;letter-spacing:2px;">Already authenticated ? <a class="link text-info" href="{{ route('lecturer.auth.login') }}" style=" text-decoration:none;font-weight:bolder;font-size:18px;">Login</a></h6></div>
                                     
                                      </form>
                                    </div>
                                  </div>
                                
</body>

</html>