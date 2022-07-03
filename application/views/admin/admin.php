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
                <table class="table table-hover">
                    <tr text-align="center">
                        <th>ID</th>
                        <th>Judul</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                        foreach ($post->result() as $row) :
                    ?>
                    <tr>
                        <td><?php echo $row->id;?></td>
                        <td><?php echo $row->judul;?></td>
                        <td><a href="<?php echo site_url('admin/delete/'.$row->id)?>">Hapus</a></td>
                        <td><a href="<?php echo site_url('admin/edit/'.$row->id)?>">Edit</a></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </section>
            <!-- /.content -->
        </div>

        <?php
            $this->load->view('admin/admin-footer');
        ?>

    </div>
</body>
</html>