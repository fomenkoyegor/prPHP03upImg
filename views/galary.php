<style>
    img {
        width: 400px;
    }
</style>
<!--<a href="/?page=main"><button>home</button></a>-->

<form action="/cats/add" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="name"/>
    <input type="file" name="img" accept="image/*"/>
    <input type="submit" value="add">
</form>

<style>
    .show {
        display: flex;justify-content: space-between;flex-wrap: wrap;
    }

    .show .img {
        width: 33%;
    }
    .show .img a:hover img{transform: scale(1.5);transition: all 1s}
</style>

<div class="show">
    <?php
    foreach ($cats as $i => $url): ?>
        <div class="img">
            <h5>name:<?= $url["name"] ?></h5>
            <a href="/cat/show?cat_id=<?= $url["id"] ?>">
                <img src="<?= $url["url"] ?>" alt="<?= $url["name"] ?>">
            </a>
            <p>id:<?= $url["id"] ?></p>
        </div>
    <?php endforeach; ?>
</div>
