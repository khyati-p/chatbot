<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create New Account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/signup.css"> -->
</head>
<body>
<div class="signup-form">
    <form action="{{url('add')}}"  method="POST">
        <div class="form-header">
            <h2>Sign Up</h2>
            
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Example: khyati" name="user_name" autocomplete="off" required="required">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="user_pass" autocomplete="off" required="required">
        </div>

        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Login</button>
        </div>
         
    </form>
    //<div class="text-center small">Already have an account? <a href="signin.php">Signin here</a></div>
</div>
</body>
</html>   
