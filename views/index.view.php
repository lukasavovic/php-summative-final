<?php require "partials/header.view.php" ?>
<div id="carouselExampleIndicators" class="carousel slide sliderr" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://images.pexels.com/photos/458555/pexels-photo-458555.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Slide 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab animi aperiam excepturi illo modi placeat quae! Quasi, quo repellat.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/450441/pexels-photo-450441.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/196666/pexels-photo-196666.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php require "partials/footer.view.php" ?>
