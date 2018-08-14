<?php require "views/partials/adminHeader.view.php" ?>
<form action="/admin/blog/create" method="POST" class="loginForm" enctype="multipart/form-data">

    <h3>Create New Blog Post</h3>

    <label for="title">Title</label>
    <input type="text" required name="title" id="title" class="inputLogin">

    <label for="image">Image</label>
    <input type="file" name="image" id="image" class="inputLogin" >

    <label for="text">Description</label>
    <textarea name="text" id="text" cols="30" rows="10" class="inputLogin"></textarea>

    <label for="category_id">Category</label>
    <select name="category_id" id="category_id" class="inputLogin">
            <option value=""></option>
            <?php foreach ($categories as $category): ?>
                <?php $selected = ($category->id === $product->category_id) ? "selected" : "" ?>
                <option value="<?= $category->id ?>" <?= $selected ?>><?= $category->title  ?></option>
            <?php endforeach; ?>
    </select>

    <label for="user_id">Author</label>
    <select name="user_id" id="user_id" class="inputLogin">
        <option value=""></option>
        <?php foreach ($users as $user): ?>
            <?php $selected = ($user->id === $product->category_id) ? "selected" : "" ?>
            <option value="<?= $user->id ?>" <?= $selected ?>><?= $user->firstName  ?> <?= $user->lastName  ?></option>
        <?php endforeach; ?>
    </select>

    <button>Submit</button>
</form>
<?php require "partials/footer.view.php" ?>
