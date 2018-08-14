<?php require "partials/header.view.php" ?>
<div class="container-fluid pagewrapper">
    <a href="" id="menu">Menu</a>
    <div class="main">
        <h1>Hi visitor!</h1>
        <p>I’m a web developer and graphic designer living in Amherst, Nova Scotia, Canada. I spend my days with my hands in many different areas of web development from back end programming (PHP, Django/Python, Ruby on Rails) to front end engineering (HTML, CSS, and jQuery/Javascript), digital accessibility, user experience and visual design.
            I’m extremely passionate about web development and design in all it’s forms and helping small businesses and artisans build and improve their online presence. Aside from web development, I enjoy spending my time with my wife, sons, and daughter, brewing beer, taking photos and playing & watching sports (hockey, golf, and mixed martial arts to name a few).
             Contact me on <span style="color: burlywood; font-weight: bolder"><a href="#">webdeveloper@office.com</a></span></p>
    </div>
    <div class="right-nav">
        <ul class="right-nav-items">
            <li><a href="/">Home</a></li>
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
