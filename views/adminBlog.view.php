<?php require "views/partials/adminHeader.view.php" ?>
<a href="/admin" class="logout">Back To Admin</a>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Category id</th>
        <th>Author id</th>
        <th>Thumbnail</th>
    </tr>
<?php foreach ($posts as $post): ?>
    <tr>
        <td><?= $post->id ?></td>
        <td><?= $post->title ?></td>
        <td><?= substr($post->text, 0, 50) ?>...</td>
        <td><?= $post->category_id ?></td>
        <td><?= $post->user_id ?></td>
        <td><img src="<?= $post->image ?>" alt="" width="150"></td>
    </tr>
<?php endforeach; ?>
</table>

<?php require "partials/footer.view.php" ?>
