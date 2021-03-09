<!-- Navigation -->
<?php
$catObj=new Categories();
$cats=$catObj->getAllCategories();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-md-3">
    <a class="navbar-brand" href="#">CMS Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="admin">Admin</a></li>
            <?php
            foreach ($cats as $cat){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?=$cat['name']?></a>
                </li>
            <?php
            }
            ?>
        </ul>
        <!--<span class="navbar-text">-->
        <!--Navbar text with an inline element-->
        <!--</span>-->
    </div>
</nav>