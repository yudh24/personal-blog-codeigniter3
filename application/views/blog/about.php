<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('blog/blog_head');?>
    <body>
        <!-- Navigation-->
        <?php $this->load->view('blog/blog_nav');?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                        <?php 
                        foreach ($about->result() as $row) :
                        ?>
                            <h1><?php echo $row->nama; ?></h1>
                            <span class="subheading">This is what I do.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <?php echo $row->deskripsi; 
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php $this->load->view('blog/blog_footer'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url().'assets/blog/js/scripts.js' ?>"></script>
    </body>
</html>