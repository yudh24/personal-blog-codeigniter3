<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('blog/blog_head');?>
    <body>
        <!-- Navigation-->
        <?php $this->load->view('blog/blog_nav');?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Panji Yudha</h1>
                            <span class="subheading">Simple Personal Blog Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <?php
                        function limit_words($string, $word_limit){
                            $words = explode(" ",$string);
                            return implode(" ",array_splice($words,0,$word_limit));
                        }
                        foreach ($post->result() as $row) :
                    ?>
                    <div class="post-preview">
                        <a href="<?php echo base_url().'blog/detail/'.$row->id;?>">
                            <h2 class="post-title"><?php echo $row->judul;?></h2>
                            <h3 class="post-subtitle"><?php echo limit_words($row->body,10);?></h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Panji Yudha Tama</a>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php endforeach;?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php $this->load->view('blog/blog_footer'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url().'assets/blog/js/scripts.js' ?>"></script>
    </body>
</html>