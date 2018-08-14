<?php require "views/partials/adminHeader.view.php" ?>
<div class="container">
    <form action="/admin/createuser" method="POST"  class="loginForm">

        <label for="firstName">First Name</label>
        <input type="text" required name="firstName" id="firstName" class="inputLogin">

        <label for="lastName">Last Name</label>
        <input type="text" required name="lastName" id="lastName" class="inputLogin">

        <label for="email">E-mail</label>
        <input type="email" required name="email" id="email" class="inputLogin">

        <label for="password">Password</label>
        <input type="password" required name="password" id="password" class="inputLogin">

        <button>Submit</button>
    </form>
</div>
<?php require "views/partials/footer.view.php" ?>
