<h1></h1>

<table border=1>
    <tr><th>Курс</th><th>Пользователь</th><th>Статус</th><th>Действия</th></tr>

    <?php foreach($applications as $app): ?>

        <tr>
            <td><?= $app->coursename ?></td>
            <td><?= $app->user->username ?></td>
            <td><?= $app->status ?></td>

            <td>
                <a href="index.php?r=site/change-status&id=<?= $app->id ?>&status=new">Новая</a>
                <a href="index.php?r=site/change-status&id=<?= $app->id ?>&status=studying">обучение</a>
                <a href="index.php?r=site/change-status&id=<?= $app->id ?>&status=completed">завершено</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>