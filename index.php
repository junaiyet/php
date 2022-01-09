<!-- index -->
<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        .password {
            position: relative;
        }

        .password i {
            position: absolute;
            right: 0;
            top: 33px;
            width: 36px;
            height: 36px;
            line-height: 34px;
            text-align: center;
            background: green;
            color: white;
        }
    </style>
</head>

<body>


    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Registration form</h3>
                        </div>
                       <?php if(isset($_SESSION['success'])){ ?>
                              <div class="alert alert-success">
                                  <?=$_SESSION['success']?>
                              </div>

                       <?php } unset ($_SESSION['success'])?>

                        <div class="card-body">
                            <form action='post.php' method="POST">
                                <div class="mb-3">
                                    <label class="form-label">name</label>
                                    <input type="text" class="form-control" name='name'
                                        value=" <?php echo (isset($_SESSION['old_name'])?$_SESSION['old_name']: ""); unset($_SESSION['old_name'])?>">

                                    <?php if(isset($_SESSION['name-error'])){?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo $_SESSION['name-error'] ?>
                                    </div>
                                    <?php } unset  ($_SESSION['name-error'])?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name='email'
                                        value=" <?php echo (isset($_SESSION['old_email'])? $_SESSION['old_email']: ""); unset($_SESSION['old_email'])?>">

                                    <?php if(isset($_SESSION['email-error'])){?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo $_SESSION['email-error'] ?>
                                    </div>
                                    <?php } unset  ($_SESSION['email-error'])?>
                                </div>
                                <div class="mb-3 password">
                                    <label class="form-label">password</label>
                                    <input type="password" class="form-control" id="password" name='password'
                                        value="<?php echo (isset($_SESSION['old_password'])? $_SESSION['old_password']: ""); unset($_SESSION['old_password'])?>">

                                    <?php if(isset($_SESSION['password-error'])){?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo $_SESSION['password-error'] ?>
                                    </div>
                                    <?php } unset  ($_SESSION['password-error'])?>

                                    <i class="fa fa-eye" onclick="password_show()"></i>
                                </div>
                                <div class="mb-3 password">
                                    <label class="form-label">Confirm password</label>
                                    <input type="password" class="form-control"  name='confirm_password'>

                                    <?php if(isset($_SESSION['confirm_password-error'])){?>
                                    <div class="alert alert-danger mt-2">
                                        <?php echo $_SESSION['confirm_password-error'] ?>
                                    </div>
                                    <?php } unset  ($_SESSION['confirm_password-error'])?>

                                    <!-- <i class="fa fa-eye" onclick="password_show()"></i> -->
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



    <script>
        function password_show() {
            var password_input = document.getElementById('password');
            if (password_input.type == 'password') {
                password_input.type = 'text';
            } else {
                password_input.type = 'password';
            }
        }
    </script>
</body>

</html>