<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sign up</title>
        <link rel="stylesheet" href="../CSS/visualPages.css">
        <link href="../CSS/bootstrap.css" rel="stylesheet" type="text/css">
        <style>
            body { padding-top:30px; }
            .form-control { margin-bottom: 10px; }
        </style>
        <script src="../JS/validaton.js"></script>
    </head>
    <body>
        
        <div class="header"><h1>Data Structures</h1> </div>
        <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            
            <legend><i class="glyphicon glyphicon-globe"></i>Sign up!</legend>
            <form action="Home.html" method="post" class="form" role="form" name='registration' onsubmit="return formValidation();">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                        required autofocus="true" />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                </div>
            </div>
            <input class="form-control" placeholder="Your Email" type="email" name="email" required/>
            <input class="form-control" placeholder="Password" type="password" name="passid" required/>
            <input class="form-control" placeholder="Re-Enter Password" type="password" name="repassid" required/>
            <label for="">
                Birth Date</label>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" type="date" required>
                </div>
            </div>
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                Female
            </label>
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Sign up</button>
            </form>
               
        </div>
    </div>
</div>
            <div class="footer">Copyright 2016 <a href = "https://profiles.udacity.com/u/aagamshah">Aagam Shah </a> </div>
            </div>
    </body>
</html>
