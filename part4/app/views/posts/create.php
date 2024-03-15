<?php require APPROOT . '/views/layout/header.php'; ?>

<?php
ini_set('display_errors', 1);

?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card bg-light rounded-0">
                    <div class="card-body">
                        <?php flash('register_success'); ?>
                        <h3>Create New Post</h3>
                        <form action="<?php echo URLROOT; ?>/posts/create" method="POST">
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control form-control-sm rounded-0 <?php echo (!empty($data['titleerr'])) ? "is-invalid" : '' ?>"
                                    value="<?php echo $data['title'] ?>" />
                                <span class="invalid-feedback">
                                    <?php echo $data['titleerr']; ?>
                                </span>
                            </div>



                            <div class="form-group mb-3">
                                <label for="content">Content</label>
                                <textarea type="text" name="content" id="content"
                                    class="form-control form-control-sm rounded-0 <?php echo (!empty($data['contenterr'])) ? "is-invalid" : '' ?>"
                                    rows="10" value="<?php echo $data['content']; ?>"> </textarea>
                                <span class="invalid-feedback">
                                    <?php echo $data['contenterr']; ?>
                                </span>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo URLROOT; ?>/posts" classbtn btn-light btns-m rounded-0><i
                                            class="fas fa-backward"></i>Back</a>

                                </div>
                                <div class="col text-end">
                                    <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>

                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Submit</button>
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