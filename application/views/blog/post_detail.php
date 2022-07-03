<?php
    $b=$post_detail->row_array();
?>

<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('blog/blog_head');?>
    <body>
        <!-- Navigation-->
        <?php $this->load->view('blog/blog_nav');?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php echo $b['judul'];?></h1>
                            <span class="meta">
                                Posted by
                                <a href="#!">Panji Yudha</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <?php echo $b['body'];?>
                        <p>
                            By : 
                            <a href="http://spaceipsum.com/">Panji Yudha</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
        <?php $this->load->view('blog/blog_footer'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>