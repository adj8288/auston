
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
                    <p>Please fill this form and submit to add SMS record to the database.</p>
                    <form action="" method="post">

                        <div class="form-group">
                            <label>Receiver</label>
                            <input type="text" name="receiver" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="msg" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>