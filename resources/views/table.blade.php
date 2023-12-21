<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Murid</title>

    <!-- Custom fonts for this template-->
    <link href="assets/fonts/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="assets/dist/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/dist/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('parts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="assets/imgs/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Siswa</h1>
                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"> Siswa Baru </i></button>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Miftah</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Miftah Coeg</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Miftah Asmoking</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Miftah Cok</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Hida</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Miftah1</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Miftah2</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Miftah3</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Miftah4</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Miftah5</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Miftah69</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Miftah420</td>
                                            <td>Syukron</td>
                                            <td style="display:flex;justify-content: center;">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fas fa-scroll" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-print" />&nbsp;</i></button>&nbsp;<button
                                                    type="button" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt" />&nbsp;</i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>TPQ AL - MASYHURIYAH</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="assets/dist/jquery/jquery.min.js"></script>
    <script src="assets/dist/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/dist/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/dist/css/sb-admin-2.min.css"></script>
    <script src="assets/dist/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/dist/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/dist/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/dist/js/datatables-demo.js"></script>

</body>

</html>