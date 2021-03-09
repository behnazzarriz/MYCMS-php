<?php
$catObj = new Categories();
$cats = $catObj->getAllCategories();
?>
<div class="col-md-4">

    <!-- Blog Search Well -->

        <div class="card bg-light">
            <div class="card-header">
                <h4>Blog Search</h4>
            </div>
            <div class="card-body">
                <form method="post" action="search.php">
                    <div class="input-group">
                        <input type="text" name="searchQuery" class="form-control">
                        <span class="input-group-btn">
                            <button name="searchSubmit" class="btn btn-default" type="submit">
                                <span class="fa fa-search"></span>
                        </button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.input-group -->
        </div>


    <!-- Blog Categories Well -->
    <div class="card bg-light mt-4">
        <div class="card-header">
            <h4>Blog Categories</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <?php
                        $count=count($cats);
                        for ($i=0;$i<=$count/2;$i++){
                         ?>
                            <li><a href="?catId=<?=$cats[$i]['id']?>"><?=$cats[$i]['name']?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <?php
                        for ($i=$count/2+1;$i<$count;$i++){
                            ?>
                            <li><a href="?catId=<?=$cats[$i]['id']?>"><?=$cats[$i]['name']?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="card bg-light mt-4">
        <div class="card-header">
            <h4>Side Widget Well</h4>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci
                accusamus
                laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>
    </div>

</div>
