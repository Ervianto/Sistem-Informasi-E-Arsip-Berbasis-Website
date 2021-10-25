<div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/sidebar') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php $this->load->view('templates/topbar') ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">About</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center m-5">
                                <img src="<?= base_url('vendor/') ?>img/kevin.jpg" width="200"><br>
                            </div>
                            <div class="col m-5">
                                <p align=left><h4><strong>Aplikasi Ini dibuat Oleh : </strong></h4>
                                <h4>Nama : Ervianto Bagus Wibowo</h4>
                                <h4>NIM  : 1931710025</h4>
                                <h4>Kelas : MI-3D</h4>
                                <h4>Tanggal : 25 Oktober 2021</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php $this->load->view('templates/copyright') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>