<div class="admin-body" id="main">
    <div class="navBar-left">
        <h3>Admin panel for our little shop</h3>
    </div>
    <div class="index-admin">

        <a href="/admin/blog" class="backHome"><i class="fas fa-arrow-circle-left" id="backHome"></i> Back To All Products</a>

        <div class="container-fluid create-wrapper">
            <div class="singleProduct-page">
                <div class="picture"  style="background-image: url(<?= $post->image ?>); background-repeat: no-repeat;width: 100%;height: 100%;">
                </div>
                <div class="description">

                    <h4>Title: <span style="color: #4b5868"><?= $post->title ?></span></h4>
                    <h5>ID: <?= $post->id ?>, Description: </h5>
                    <p><?= $post->text ?></p>
                    <div class="buttons">
                        <form action="/admin/products/edit" method="get"><button class="formButton">
                                <input type="hidden" name="id" value="<?= $post->id ?>"><i class="fas fa-edit"></i></button>
                        </form>
                        <form class="deleteForm" action="/admin/products/destroy" method="post">
                            <button class="formButton">
                                <i class="fas fa-minus-circle"></i><input type="hidden" name="id" value="<?= $post->id ?>">
                        </form>
                    </div>

                </div>
            </div>