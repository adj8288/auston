<?php

// Check if the form is submitted

if ( isset( $_GET['submit'] ) ) {

// retrieve the form data by using the element's name attributes value as key

    $receiver = $_GET['receiver'];
    $msg = $_GET['msg'];
// display the results

    echo'<h3>Form GET Method</h3>';

echo 'Your message " ' . $msg .' " was sent to ' . $receiver; exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send SMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Send SMS</h2>
                </div>
                <p>Please fill this form and submit to send SMS.</p>

                <form action="get.php" method="get">
                    <div class="form-group">
                        <label>Receiver's Phone Number: </label>
                        <input type="text" name="receiver" class="form-control" value="" placeholder="Receiver">
                    </div>

                    <div class="form-group">
                        <label>Outgoing Message: </label>
                        <textarea name="msg" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <input type="submit" name="submit" />
                    <a href="create.php" class="btn btn-default">Cancel</a>
                </form>


            </div>
        </div>
    </div>
</div>
</body>
</html>

