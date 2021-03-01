<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php
$title = "<span class='text-success'>Astana </span> "
        . "<span class='text-danger'>Education </span> "
        . "<span class='text-primary'>Center </span> "
        . "<span class='text-warning'>Тест </span>";
require_once '../db/db.php';
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
                            <h5><b>Добавить тестовых вопросов</b></h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Предмет</label>
                                        <select id="s" class="form-control select2" style="width: 100%;">
                                            <?php $result = R::getAll("SELECT * FROM test_subjects"); 
                                            foreach($result as $item):?>
                                            <option <?php//= ($item['id']==20 || $item['id']==21) ? 'disabled' : '' ?> value="<?= $item['id']; ?>"><?= $item['name'] ." ".$item['id'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
									<div class="form-group">
                                        <label>Вариант для Оқу сауаттылығы/Грамотность чтения</label>
                                        <div class="mb-3">
                                            <input name="variant" id="v"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Вопрос</label>
                                        <div class="mb-3">
                                            <textarea id="q" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Ответ А</label><div class="icheck-success d-inline">
                                                                <input type="checkbox" id="ta">
                                                                <label for="ta">Правильный ответ
                                                                </label>
                                                              </div>
                                        <div class="mb-3">
                                            <textarea id="a" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ответ В</label><div class="icheck-success d-inline">
                                                                <input type="checkbox" id="tb">
                                                                <label for="tb">Правильный ответ
                                                                </label>
                                                              </div>
                                        <div class="mb-3">
                                            <textarea id="b" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ответ С</label><div class="icheck-success d-inline">
                                                                <input type="checkbox" id="tc">
                                                                <label for="tc">Правильный ответ
                                                                </label>
                                                              </div>
                                        <div class="mb-3">
                                            <textarea id="c" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ответ D</label><div class="icheck-success d-inline">
                                                                <input type="checkbox" id="td">
                                                                <label for="td">Правильный ответ
                                                                </label>
                                                              </div>
                                        <div class="mb-3">
                                            <textarea id="d" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ответ Е</label><div class="icheck-success d-inline">
                                                                <input type="checkbox" id="te">
                                                                <label for="te">Правильный ответ
                                                                </label>
                                                              </div>
                                        <div class="mb-3">
                                            <textarea id="e" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ответ F</label><div class="icheck-success d-inline">
                                                                <input type="checkbox" id="tf">
                                                                <label for="tf">Правильный ответ
                                                                </label>
                                                              </div>
                                        <div class="mb-3">
                                            <textarea id="f" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ответ G</label><div class="icheck-success d-inline">
                                                                <input type="checkbox" id="tg">
                                                                <label for="tg">Правильный ответ
                                                                </label>
                                                              </div>
                                        <div class="mb-3">
                                            <textarea id="g" class="textarea" placeholder="Place some text here"
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ответ H</label><div class="icheck-success d-inline">
                                                                <input type="checkbox" id="th">
                                                                <label for="th">Правильный ответ
                                                                </label>
                                                              </div>
                                        <div class="mb-3">
                                            <textarea id="h" class="textarea" placeholder="Place some text here"
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
                            <b>Минимум один из ответов должно быть правильным!</b>
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
        <!-- InputMask -->
        <!--<script src="../plugins/moment/moment.min.js"></script>
        <script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
         date-range-picker 
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>
         bootstrap color picker 
        <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>-->
        <!-- Tempusdominus Bootstrap 4 -->
        <!--<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>-->
        <!-- Bootstrap Switch -->
        <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        
        
        <!-- Page script -->
        <script>
            $(document).ready(function(){
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
                
                
                $('#send').on('click', function() {
                    $.post("../send/addtest.php",
                    {
					  v: $('#v').val(),
                      s: $('#s').val(),
                      q: $('#q').val(),
                      a: $('#a').val(),
                      b: $('#b').val(),
                      c: $('#c').val(),
                      d: $('#d').val(),
                      e: $('#e').val(),
                      f: $('#f').val(),
                      g: $('#g').val(),
                      h: $('#h').val(),
                      ta: $('#ta').prop('checked'),
                      tb: $('#tb').prop('checked'),
                      tc: $('#tc').prop('checked'),
                      td: $('#td').prop('checked'),
                      te: $('#te').prop('checked'),
                      tf: $('#tf').prop('checked'),
                      tg: $('#tg').prop('checked'),
                      th: $('#th').prop('checked'),
                    },
                    function(data,status){
                        if(data['status']==='success'){
                            console.log(data['status']);
                            Toast.fire({
                                icon: 'success',
                                title: 'Тестовый вопрос успешно добавлен'
                            });
                            $('#q').summernote('code','<p><br></p>');
                            $('#a').summernote('code','<p><br></p>');
                            $('#b').summernote('code','<p><br></p>');
                            $('#c').summernote('code','<p><br></p>');
                            $('#d').summernote('code','<p><br></p>');
                            $('#e').summernote('code','<p><br></p>');
                            $('#f').summernote('code','<p><br></p>');
                            $('#g').summernote('code','<p><br></p>');
                            $('#h').summernote('code','<p><br></p>');
                            $('#ta').prop('checked', false);
                            $('#tb').prop('checked', false);
                            $('#tc').prop('checked', false);
                            $('#td').prop('checked', false);
                            $('#te').prop('checked', false);
                            $('#tf').prop('checked', false);
                            $('#tg').prop('checked', false);
                            $('#th').prop('checked', false);
                        } else if(data['status'] === 'failure') {
                            Toast.fire({
                                icon: 'error',
                                title: 'Тестовый вопрос не добавлен, попробуйте снова'
                            });
                        }
                    });
                });
            });
        </script>
    </body>
</html>


