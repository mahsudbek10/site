<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
$title = "<span class='text-success'>#12 </span> "
        . "<span class='text-danger'>Школа </span> "
        . "<span class='text-primary'>им. </span> "
        . "<span class='text-warning'>М.Горького </span>";
require_once '../db/db.php';
if (isset($_GET['type'])) {
    if ($_GET['type'] == 1)
        $type = "Полезные ссылки";
    if ($_GET['type'] == 2)
        $type = "в раздел Школа";
    if ($_GET['type'] == 3)
        $type = "новости";
    if ($_GET['type'] == 4)
        $type = "объявление";
}
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="../img/favicon.png" rel="icon">
        <title><?= strip_tags($title) ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- daterange picker -->
        <!--<link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">-->
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- summernote -->
        <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <!--<link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">-->
        <!-- Select2 -->
        <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
    </head>
    <body >
        <div class="wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"><b><?= $title; ?></b> </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <!--<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>-->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h5><b>Добавить <?= $type ?></b></h5>
                            <div class="row">
                                <!-------------------------------------------Название------------------------------------------------>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="type" value="<?= $_GET['type'] ?>" />
                                        <label>Фото</label>
                                        <div class="mb-3">
                                            <textarea id="photo" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Тема на казахском</label>
                                        <div class="mb-3">
                                            <textarea id="kztheme" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Тема на русском</label>
                                        <div class="mb-3">
                                            <textarea id="rutheme" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Тема на английском</label>
                                        <div class="mb-3">
                                            <textarea id="entheme" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-------------------------------------------ТЕКСТ------------------------------------------------>
                                    <div class="form-group">
                                        <label>Текст на казахском</label>
                                        <div class="mb-3">
                                            <textarea id="kztext" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Текст на русском</label>
                                        <div class="mb-3">
                                            <textarea id="rutext" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Текст на английском</label>
                                        <div class="mb-3">
                                            <textarea id="entext" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="send" class="btn btn-outline-primary">Добавить</button>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-danger">
                            <b>Заполните все поля!</b>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="../plugins/select2/js/select2.full.min.js"></script>
        <!-- Summernote -->
        <script src="../plugins/summernote/summernote-bs4.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="../plugins/toastr/toastr.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>


        <!-- Page script -->
        <script>
            $(document).ready(function () {
                //Initialize Select2 Elements
                $('.select2').select2();
                // Summernote
                $('.textarea').summernote();
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });


                $('#send').on('click', function () {
                    $.post("add",
                            {
                                type: $('#type').val(),
                                photo: $('#photo').val(),
                                kztheme: $('#kztheme').val(),
                                rutheme: $('#rutheme').val(),
                                entheme: $('#entheme').val(),
                                kztext: $('#kztext').val(),
                                rutext: $('#rutext').val(),
                                entext: $('#entext').val(),

                            },
                            function (data, status) {
                                if (data['status'] === 'success') {
                                    console.log(data['status']);
                                    Toast.fire({
                                        icon: 'success',
                                        title: 'Добавлен'
                                    });
                                    $('#photo').summernote('code', '<p><br></p>');
                                    $('#kztheme').summernote('code', '<p><br></p>');
                                    $('#rutheme').summernote('code', '<p><br></p>');
                                    $('#entheme').summernote('code', '<p><br></p>');
                                    $('#kztext').summernote('code', '<p><br></p>');
                                    $('#rutext').summernote('code', '<p><br></p>');
                                    $('#entext').summernote('code', '<p><br></p>');
                                } else if (data['status'] === 'failure') {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'Не добавлен'
                                    });
                                }
                            });
                });
            });
        </script>
    </body>
</html>




