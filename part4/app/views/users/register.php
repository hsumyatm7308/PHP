<?php require APPROOT . '/views/layout/header.php'; ?>

<?php
ini_set('display_errors', 1);

?>

<section class="col-md-4 mx-auto py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card bg-light rounded-0">
                    <div class="card-body">
                        <?php flash('register_success'); ?>
                        <h3>Register Form</h3>
                        <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                            <div class="form-group mb-3">
                                <label for="fullname">Full Name</label>
                                <input type="text" name="fullname" id="fullname"
                                    class="form-control form-control-sm rounded-0 <?php echo (!empty($data['fullnameerror'])) ? "is-invalid" : '' ?>"
                                    value="<?php echo $data['fullname'] ?>" />
                                <span class="invalid-feedback">
                                    <?php echo $data['fullnameerror']; ?>
                                </span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control form-control-sm rounded-0 <?php echo (!empty($data['emailerror'])) ? "is-invalid" : '' ?>"
                                    value="<?php echo $data['email'] ?>" />
                                <span class="invalid-feedback">
                                    <?php echo $data['emailerror']; ?>
                                </span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-sm rounded-0 <?php echo (!empty($data['passworderror'])) ? "is-invalid" : '' ?>"
                                    value="<?php echo $data['password']; ?>" />
                                <span class="invalid-feedback">
                                    <?php echo $data['passworderror']; ?>
                                </span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="comfirmpassword">Comfirm Password</label>
                                <input type="password" name="comfirmpassword" id="comfirmpassword"
                                    class="form-control form-control-sm rounded-0 <?php echo (!empty($data['comfirmpassworderror'])) ? "is-invalid" : '' ?>"
                                    value="<?php echo $data['comfirmpassword']; ?>" />
                                <span class="invalid-feedback">
                                    <?php echo $data['comfirmpassworderror']; ?>
                                </span>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo URLROOT; ?>/users/login">Have an account ? Login Here</a>

                                </div>
                                <div class="col text-end">
                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Register</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php require APPROOT . '/views/layout/footer.php'; ?>