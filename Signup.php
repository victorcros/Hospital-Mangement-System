<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="resources/js/jquery-3.4.1.js"></script>
        <script src="resources/js/javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
        <script src="resources/js/bootstrap.js"></script>
        <title>Sign Up</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 border">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 col-sm-6 col-md-4 form-border my-5">
                            <img class="d-block mx-auto py-3" width="35%" src="resources/images/user.png"
                                alt="user_photo">
                            <form action="#" method="post" onsubmit="isValidate()"> 
                                <div class="form-group">
                                    <input type="email" class="form-control" id="EmailID" placeholder="Email ID">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="Password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="ConfirmPassword"
                                        placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="Contact" placeholder="Contact No.">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>