<?php
include_once 'inc/header.php';
include_once 'inc/navigation.php';
$postObj=new Post();
$posts=$postObj->getAllPosts();
?>


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- First Blog Post -->
            <?php
            foreach ($posts as $post){
                $date=strtotime($post['date']);
             ?>
                <h2>
                    <a href="#"><?=$post['title']?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?=$post['author']?></a>
                </p>
                <p><span class="fa fa-clock"></span> Posted <?=date('g:ia \o\n l jS F Y', $date)?></p>
                <hr>
                <img class="img-fluid" src="images/<?=$post['image']?>" alt="">
                <hr>
                <p><?=$post['content']?></p>
                <a class="btn btn-primary" href="#">Read More <span class="fa fa-angle-right"></span></a>

                <hr>

                <?php
            }
            ?>



            <!-- Pager -->
            <ul class="">
                <li class="btn  btn-outline-primary">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="btn float-md-right btn-outline-primary">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php
        include_once 'inc/sidebar.php';
        ?>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
<?php
include_once 'inc/footer.php';
?>
<!--    //is a change-->
