<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/admin-head'); ?>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
            $this->load->view('admin/admin-nav');
            $this->load->view('admin/admin-sidebar');
        ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Artikel List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>MY BLOG</h2><hr/>
                        <form action="<?php echo site_url('admin/update/'.$id)?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="judul" class="form-control" placeholder="Judul" value="<?php echo $judul;?>"/><br/>
                            <textarea  id="ckedtor" name="isi" class="form-control ckeditor"><?php echo $body;?></textarea><br/>
                            <button class="btn btn-success" type="submit">POST</button>
                        </form>
                    </div>
                    
                </div>
            </section>
            <!-- /.content -->
        </div>

        <?php
            $this->load->view('admin/admin-footer');
        ?>

    </div>

    <script src="<?php echo base_url().'assets/jquery/jquery-3.6.0.min.js'?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
      $(function () {
        // Fungsi untuk mengganti textarea dengan ckeditor style
          CKEDITOR.replace( 'editor1' ,{
              extraPlugins : 'syntaxhighlight',        
              toolbar: [
                     ['Source'] ,
                     ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Image'] ,
                   ]              
            });
 
      });
    </script>
</body>
</html>