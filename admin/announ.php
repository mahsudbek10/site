<?php

require_once '../db/db.php';

$result = R::getAll("SELECT * FROM pages WHERE what=?",[$_GET['type']]);
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
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<a class="btn btn-info" href="addannoun?type=<?= $_GET['type'] ?>">Добавить <?= $type ?></a><hr>
<table border="1" class="dataTable" id="myTable">
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
            <td><?= "<a href='edit?id=".$item['id']."'>Редактировать</a>"." <a href='announ?delete=".$item['id']."'>Удалить</a>" ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>