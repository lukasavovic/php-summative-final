<?php require "partials/header.view.php" ?>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Thumbnail</th>
        <th>Actions</th>
    </tr>
<?php foreach ($posts as $post): ?>
    <tr>
        <td><?= $post->id ?></td>
        <td><?= $post->title ?></td>
        <td><?= substr($post->text, 0, 50) ?>...</td>
        <td><img src="<?= $post->image ?>" alt="" width="150"></td>
        <td><a href="/admin/blog/show/<?= $post->id ?>">Show</a> | <a href="/admin/blog/edit/<?= $post->id ?>">Edit</a>
    </tr>
<?php endforeach; ?>
</table>

<?php require "partials/footer.view.php" ?>
