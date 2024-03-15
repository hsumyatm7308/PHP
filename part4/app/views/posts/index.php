<?php require APPROOT . '/views/layout/header.php'; ?>

<?php
ini_set('display_errors', 1);

?>

<section class="col-md-4 mx-auto py-5">
    <div class="container">

        <?php flash('post_success') ?>


        <div class="row">

            <div class="col-md-6">
                <h3>Posts</h3>

            </div>
            <div class="col-md-6">
                <a href="<?php echo URLROOT; ?>/posts/create" class="btn btn-primary btn-sm rounded-0 float-end">Add</a>
            </div>

        </div>

        <?php foreach ($data['posts'] as $post): ?>
            <div class="card rounded-0 mb-3">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $post->title ?>
                        <p class="small">post by <span class="fw-bold small">
                                <?php echo $post->name ?>
                            </span></p>
                        <p class="small">post date <span class="fw-bold small">
                                <?php echo $post->publicdate ?>
                            </span></p>
                        <div class="card-footer">
                            <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postid ?>"
                                class="btn btn-success btn-sm rounded-0 float-end">Show</a>

                        </div>
                    </h5>
                </div>
                <div class="card-footer">

                </div>

            </div>

        <?php endforeach; ?>
    </div>
</section>


<?php require APPROOT . '/views/layout/footer.php'; ?>