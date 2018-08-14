<?php require "views/partials/adminHeader.view.php" ?>
<a href="/admin" class="logout">Back To Admin</a>

<div class="container">
    <form action="/admin/blog/category" method="POST"  class="loginForm">
        <h3>Crate new category</h3>

        <label for="title">Category Title:</label>
        <input type="text" required name="title" id="title" class="inputLogin">

        <button>Submit</button>
    </form>
</div>
<?php require "views/partials/footer.view.php" ?>
