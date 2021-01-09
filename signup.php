<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="sign">
    <nav class="navbar navbar-light" style="background-color: #fde4e3f6;">
        <a class="navbar-brand" href="index.php">
          <img src="images\img2.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fde3e3;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            </nav>
            </nav>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <table class="table table-borderless">
                    <tr>
                        <td class="sign">First Name</td>
                        <td><input type="text" class="form-control"></td>
                
                        <td class="sign">Last Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td class="sign">Email ID</td>
                        <td><input type="text" class="form-control"></td>
                        <td class="sign">Ph No</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                   <tr>
                       <td class="sign">Address</td>
                       <td><input type="text" class="form-control"></td>
                    <td class="sign">Password</td>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <td class="sign">Confirm Password</td>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <td class="sign">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                              Agree Terms & Conditions
                            </label>
                          </div>
                    </td>
                </tr>
                   <tr>
                       <td></td>
                       <td><button class="btn btn-danger">Register</button></td>
                   </tr>
               </table>
            </div>
        </div>
    </div>  
</body>
</html>