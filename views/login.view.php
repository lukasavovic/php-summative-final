<?php require "views/partials/header.view.php" ?>
<div class="container">
    <form action="/admin/validate" method="POST" class="loginForm">

        <label for="email">Email</label>
        <input type="email" required name="email" id="email" class="inputLogin">

        <label for="password">Password</label>
        <input type="password" required name="password" id="password" class="inputLogin">

        <button>Submit</button>
        <a href="/admin/signup">Not registred? Register Here</a>
    </form>
</div>
<?php require "views/partials/footer.view.php" ?>
