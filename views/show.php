<?php
//
//foreach ($cats as $i => $url) { if ($i!==$_GET['cat_id']+0) continue; ?>
<!--    <p>-->
<!--        --><?//=$_GET['cat_id']?>
<!--    </p>-->
<!--    <style>-->
<!--        img{width: 800px}-->
<!--    </style>-->
<!--    <a href="/cat">-->
<!--        <img src="--><?//=$url?><!--" alt="--><?//=$i?><!--">-->
<!--    </a>-->
<!---->
<!---->
<?php //} ?>
<a href="/headers?id=<?=$id?>">add to fav</a><br>
<hr>
<a href="/cat">
    <img src="<?=$src?>" alt="<?=$name?>" width="850">
</a><br><hr>
<p><?=$id?></p>












