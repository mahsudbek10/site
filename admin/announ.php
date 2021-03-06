<?php
require_once '../db/db.php';

$result = R::getAll("SELECT * FROM pages WHERE what=?", [$_GET['type']]);
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
<!-- Font Awesome -->
<link rel="stylesheet" href="https://eduastana.epolice.kz/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="https://eduastana.epolice.kz/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://eduastana.epolice.kz/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- Theme style -->
<link rel="stylesheet" href="https://eduastana.epolice.kz/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=CZqa6-xnfbZ2h9j253pTs9oBVOSJMGYHEph7ZdKrEM_IzFlrY5lIhWJM8xLby4L3llqdIAad2XjNUj6qhphikA" charset="UTF-8"></script>

<a class="btn btn-info m-5" href="addannoun?type=<?= $_GET['type'] ?>">Добавить <?= $type ?></a><hr>
<?php if(isset($_SESSION['mess'])){echo $_SESSION['mess'];unset($_SESSION['mess']);} ?>
<table class="table table-bordered table-hover w-10" id="myTable">
    <thead>
        <tr>
            <th>id</th>
            <th>Тема каз</th>
            <th>Тема рус</th>
            <th>Тема анг</th>
            <th>Действие</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name_kz'] ?></td>
                <td><?= $item['name_ru'] ?></td>
                <td><?= $item['name_en'] ?></td>
                <td><?= "<a href='edit?id=" . $item['id'] . "'>Редактировать</a>" . " <a href='announ?delete=" . $item['id'] . "&type=".$_GET['type']."'>Удалить</a>" ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- jQuery -->
<script src="https://eduastana.epolice.kz/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://eduastana.epolice.kz/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script src="https://eduastana.epolice.kz/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://eduastana.epolice.kz/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://eduastana.epolice.kz/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://eduastana.epolice.kz/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "language":
                    {
                        "processing": "Подождите...",
                        "search": "Поиск:",
                        "lengthMenu": "Показать _MENU_ записей",
                        "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                        "infoEmpty": "Записи с 0 до 0 из 0 записей",
                        "infoFiltered": "(отфильтровано из _MAX_ записей)",
                        "loadingRecords": "Загрузка записей...",
                        "zeroRecords": "Записи отсутствуют.",
                        "emptyTable": "В таблице отсутствуют данные",
                        "paginate": {
                            "first": "Первая",
                            "previous": "Предыдущая",
                            "next": "Следующая",
                            "last": "Последняя"
                        },
                        "aria": {
                            "sortAscending": ": активировать для сортировки столбца по возрастанию",
                            "sortDescending": ": активировать для сортировки столбца по убыванию"
                        },
                        "select": {
                            "rows": {
                                "_": "Выбрано записей: %d",
                                "0": "Кликните по записи для выбора",
                                "1": "Выбрана одна запись"
                            },
                            "1": "%d ряд выбран",
                            "_": "%d ряда(-ов) выбрано",
                            "cells": {
                                "1": "1 ячейка выбрана",
                                "_": "Выбрано %d ячеек"
                            },
                            "columns": {
                                "1": "1 столбец выбран",
                                "_": "%d столбцов выбрано"
                            }
                        },
                        "searchBuilder": {
                            "conditions": {
                                "string": {
                                    "notEmpty": "Не пусто",
                                    "startsWith": "Начинается с",
                                    "contains": "Содержит",
                                    "empty": "Пусто",
                                    "endsWith": "Заканчивается на",
                                    "equals": "Равно",
                                    "not": "Не"
                                },
                                "date": {
                                    "after": "После",
                                    "before": "До",
                                    "between": "Между",
                                    "empty": "Пусто",
                                    "equals": "Равно",
                                    "not": "Не",
                                    "notBetween": "Не между",
                                    "notEmpty": "Не пусто"
                                },
                                "moment": {
                                    "after": "После",
                                    "before": "До",
                                    "between": "Между",
                                    "empty": "Не пусто",
                                    "equals": "Между",
                                    "not": "Не",
                                    "notBetween": "Не между",
                                    "notEmpty": "Не пусто"
                                },
                                "number": {
                                    "between": "В промежутке от",
                                    "empty": "Пусто",
                                    "equals": "Равно",
                                    "gt": "Больше чем",
                                    "gte": "Больше, чем равно",
                                    "lt": "Меньше чем",
                                    "lte": "Меньше, чем равно",
                                    "not": "Не",
                                    "notBetween": "Не в промежутке от",
                                    "notEmpty": "Не пусто"
                                }
                            },
                            "data": "Данные",
                            "deleteTitle": "Удалить условие фильтрации",
                            "logicAnd": "И",
                            "logicOr": "Или",
                            "title": {
                                "0": "Конструктор поиска",
                                "_": "Конструктор поиска (%d)"
                            },
                            "value": "Значение",
                            "add": "Добавить условие",
                            "button": {
                                "0": "Конструктор поиска",
                                "_": "Конструктор поиска (%d)"
                            },
                            "clearAll": "Очистить всё",
                            "condition": "Условие"
                        },
                        "searchPanes": {
                            "clearMessage": "Очистить всё",
                            "collapse": {
                                "0": "Панели поиска",
                                "_": "Панели поиска (%d)"
                            },
                            "count": "{total}",
                            "countFiltered": "{shown} ({total})",
                            "emptyPanes": "Нет панелей поиска",
                            "loadMessage": "Загрузка панелей поиска",
                            "title": "Фильтры активны - %d"
                        },
                        "thousands": ",",
                        "buttons": {
                            "pageLength": {
                                "_": "Показать 10 строк",
                                "-1": "Показать все ряды",
                                "1": "Показать 1 ряд"
                            },
                            "pdf": "PDF",
                            "print": "Печать",
                            "collection": "Коллекция <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                            "colvis": "Видимость столбцов",
                            "colvisRestore": "Восстановить видимость",
                            "copy": "Копировать",
                            "copyKeys": "Нажмите ctrl or u2318 + C, чтобы скопировать данные таблицы в буфер обмена.  Для отмены, щелкните по сообщению или нажмите escape.",
                            "copySuccess": {
                                "1": "Скопирована 1 ряд в буфер обмена",
                                "_": "Скопировано %ds рядов в буфер обмена"
                            },
                            "copyTitle": "Скопировать в буфер обмена",
                            "csv": "CSV",
                            "excel": "Excel"
                        },
                        "decimal": ".",
                        "infoThousands": ",",
                        "autoFill": {
                            "cancel": "Отменить",
                            "fill": "Заполнить все ячейки <i>%d<i><\/i><\/i>",
                            "fillHorizontal": "Заполнить ячейки по горизонтали",
                            "fillVertical": "Заполнить ячейки по вертикали",
                            "info": "Пример автозаполнения"
                        }
                    }
        });
    });
</script>

<?php
if($_SERVER['REQUEST_METHOD'] ==="GET"){
    if(isset ($_GET['delete'], $_GET['type'])){
        $ok = R::exec("DELETE FROM pages WHERE id=?",[$_GET['delete']]);
        if($ok){
            $_SESSION['mess']="<div class='text-danger'>Удалена</div>";
            echo "<script>window.location.href='announ?type=".$_GET['type']."'</script>";
        }
    }
}
?>