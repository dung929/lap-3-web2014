<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=Lap_3',
    'root',
    ''
);
 $sql = 'SELECT * FROM dien_thoai';

 $statement=$connect ->prepare($sql);

 $statement ->execute();
 $dien_thoai=$statement ->fetchAll();
 ?>

 <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Information</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($dien_thoai as $key => $value): ?>
            <tr>
                <td><?= $value ['id'] ?></td>
                <td><?= $value ['name'] ?></td>
                <td><?= $value ['price'] ?></td>
                <td><?= ($value ['price'] >200) ? 'Đắt' : 'Rẻ' ?></td>
            </tr>
<?php endforeach ?>
    </tbody>
 </table>