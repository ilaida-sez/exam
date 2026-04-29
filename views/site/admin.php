<h1></h1>

<table border=1>
    <tr><th>Курс</th><th>Пользователь</th><th>Статус</th><th>Действия</th></tr>

    <?php foreach($applications as $app): ?>

        <tr>
            <td><?= $app->coursename ?></td>
            <td><?= $app->user->username ?></td>
            <td><?= $app->status ?></td>

            <td>
                <a href="site/change-status?id=<?= $app->id ?>&status=new">new</a>
                <a href="site/change-status?id=<?= $app->id ?>&status=studying">studying</a>
                <a href="site/change-status?id=<?= $app->id ?>&status=completed">completed</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>