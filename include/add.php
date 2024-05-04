<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <title>Management System</title>
    </head>
    <body class="container">
        <div>
            <div>
                <div>
                    <h1>TVET GUIDE System</h1>
                    <hr>
                </div>
            </div>
            <div>
                <div>
                    <?php
                    include 'model.php';
                    $model = new Model();
                    $insert = $model->insert();
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" id="code" name="code" oninput="validateSoureCode()">
                            <small id="errorSC" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="des">Description</label>
                            <input type="text" class="form-control" id="des" name="des" oninput="validateDesc()">
                            <small id="errorDes" class="form-text text-muted"></small>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="../js/tvet_val.js" type="text/javascript"></script>
    </body>
</html>