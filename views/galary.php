<style>
    img {
        width: 400px;
    }
</style>
<!--<a href="/?page=main"><button>home</button></a>-->

<form action="/cats/add" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="name" />
    <input type="file" name="img" accept="image/*" />
    <input type="submit" value="add">
</form>



<?php




foreach ($cats as $i => $url): ?>

    <a href="/cat/show?cat_id=<?= $url["id"] ?>">

        <h5>name:<?=$url["name"] ?></h5>
        <img src="<?= $url["url"] ?>" alt="<?=$url["name"] ?>">
        <p>id:<?=$url["id"] ?></p>


    </a>

<?php endforeach; ?>
