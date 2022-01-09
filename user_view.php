

<?php
require 'db.php';

$select_users = "SELECT * FROM users";
$select_users_result = mysqli_query($bd_connection, $select_users);



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <section>
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="card">
                      <div class="card-header">
                          <h3>
                          user informations
                          </h3></div>
                      <div class="card-body">
                          <table class="table table-border">
                              <tr>
                                  <td>sl </td>
                                  <td>name </td>
                                  <td>email </td>
                                  <td>action </td>
                              </tr>
                              <?php foreach($select_users_result as $user){?>
                                <tr>
                                    <td><?=$user['id']?></td>
                                    <td><?=$user['name']?></td>
                                    <td><?=$user['email']?></td>
                                    <td>
                                        <a href="" class="btn btn-danger"> Delete</a>
                                    </td>
                                </tr>
                                <?php }?>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>