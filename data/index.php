<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <br><br>
    <img src="https://www.nicepng.com/png/detail/19-194337_paypal-logo-transparent-png-paypal-logo-transparent.png" alt="" class="pay"> <br><br>
<center>
<form action="form-process.php" method="POST">
            <div class="form-group">
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="firstname" required>
            </div> <br>
            <div class="form-group">
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="lastname"  required>
            </div>

            <div class="form-group"> <br><br>
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
        <br><br><br>
        <h4>Olvido su correo?</h4>

    </div>
        </form>
    </div>

    
</center>
</body>

</html>