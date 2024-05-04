<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    </head>
    <body class="container">
        <div>
            <div>
                <div>
                    <h1>Course Registration System</h1>
                    <hr>
                </div>
            </div>
            <div>
                <div>
                    <a href="include/add.php">
                        <button class="btn btn-primary mb-3">Add New</button>
                    </a>
                    <!--              <div>
                                      <label for="search">Search</label>
                                      <input type="text" name="search" oninput="">
                                  </div>-->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Description</th>
                                <!--<th scope="col">Action</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './include/model.php';
                            $model = new Model(); // Creating an instance of the Model class
                            $rows = $model->fetch();  // Fetching data from the model
                            $i = 1;
                            if (!empty($rows)) {
                                foreach ($rows as $row) {     // Looping through each fetched row

                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['code']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
<!--                                        <td>
                                            <a href="include/read.php?id=<?php echo $row['code']; ?>">
                                                <button class="readBtn">Read</button>
                                            </a>
                                            <a href="include/delete.php?id=<?php echo $row['code']; ?>">
                                                <button>Delete</button>
                                            </a>
                                            <a href="include/edit.php?id=<?php echo $row['code']; ?>">
                                                <button>Edit</button>
                                            </a>
                                        </td>-->
                                    </tr>

                                    <?php
                                }
                            } else {
                                echo "no data";
                            }
                            ?>
                        </tbody>
                    </table>

                   

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>
