<?php require "partials/header.view.php" ?>
<div class="container-fluid pagewrapper">
    <a href="" id="menu">Menu</a>
    <div class="main-content">
        <div class="video">
            <div class="headings">
                <h1>Life of the simple man</h1>
                <h3>from traveler to web developer</h3>
                <h3>Luka</h3>
            </div>
            <video autoplay muted loop id="myVideo">
                <source src="../storage/d.mp4" type="video/mp4">
            </video>
        </div>
        <div class="blogposts container">

        </div>
    </div>
    <div class="right-nav">
        <ul class="right-nav-items">
            <li><a href="">Home</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="admin">Admin Panel</a></li>
        </ul>
    </div>
</div>

<script>
    var menu = document.getElementById('menu');
    var rightNav = document.querySelector('.right-nav');
    menu.addEventListener('click', (e)=>{
        e.preventDefault();
        if(menu.innerHTML === 'Menu'){
            menu.innerHTML = 'Close';
        } else {
            menu.innerHTML = 'Menu'
        }
        rightNav.classList.toggle('shrink');
    });
</script>

<?php require "partials/footer.view.php" ?>
