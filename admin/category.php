
<?php
include_once 'incs/header.php';
include_once 'incs/navigation.php';
?>
<?php
$catObj=new Categories();
$cats=$catObj->getAllCategories();
//delete
if(isset($_GET['deleteId'])){
    $catId=$_GET['deleteId'];
    $catObj->deleteCategoryByID($catId);
    //refresh page
    $currentPage=$_SERVER['PHP_SELF'];
    header("Location:$currentPage");
}
//add Category
if(isset($_POST['AddCategory'])){
    $catName=$_POST['name'];
    $catDescription=$_POST['description'];
    if($catName=="" || empty($catName)){
        $ErrorPage="Fill the name of Category";
    }
    else{
        $catObj->addCategory($catName,$catDescription);
        //refresh page
        $currentPage=$_SERVER['PHP_SELF'];
        header("Location:$currentPage");
    }
}
//get data of table
if(isset($_GET['editId'])){
    $catId=$_GET['editId'];
    $catResult=$catObj->getCategoryById($catId);


}
//edit
if(isset($_POST['EditCategory'])){
    $catId=$_GET['editId'];
    $catName=$_POST['editName'];
    $catDescription=$_POST['editDescription'];
    if($catName=="" || empty($catName)){
        $ErrorPage="Fill the name of Category";
    }
    else{

        $catObj->updateCategory($catId,$catName,$catDescription);
        //refresh page
        $currentPage=$_SERVER['PHP_SELF'];
        header("Location:$currentPage");

    }


}
?>
<div id="wrapper">

    <!-- Sidebar -->
    <?php
    include_once 'incs/sidebar.php';
    ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Categories</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>
            <?php
            if(isset($ErrorPage)){
                ?>
                <span class="alert alert-danger">
                    <?=$ErrorPage?>
                </span>

                <?php
                unset($ErrorPage);
            }
            ?>
            <span></span>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm12">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="nameInput">Name of Category :</label>
                            <input type="text" name="name" id="nameInput" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description of Category :</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="AddCategory" class="btn btn-primary" value="Add Category">
                        </div>
                    </form>
                    <?php
                    if(isset($_GET['editId'])){
                        ?>

                        <form method="post" action="">
                            <div class="form-group">
                                <label >Name of Category :</label>
                                <input type="text" name="editName" class="form-control" value="<?=$catResult['name']?>">
                            </div>
                            <div class="form-group">
                                <label>Description of Category :</label>
                                <input type="text"  name="editDescription" class="form-control" value="<?=$catResult['description']?>">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="EditCategory" class="btn btn-info" value="Edit Category">
                            </div>
                        </form>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-lg-6 col-md-12 col-sm12 col-sm-12">

                <div class="table-responsive">
                    <table id="categoryTable" class="table table-bordered table-hover" style="width: 100%">
                        <thead>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Update</td>
                        <td>Delete</td>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($cats as $cat){
                            ?>
                            <tr>
                                <td><?=$cat['id']?></td>
                                <td><?=$cat['name']?></td>
                                <td><?=$cat['description']?></td>
                                <td><a href="?editId=<?=$cat['id']?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="?deleteId=<?=$cat['id']?>" class="btn btn-danger">Delete</a> </td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>

                    </table>
                </div>
                    </div>

            </div>


        </div>
        <!-- /.container-fluid -->


<?php
include_once 'incs/footer.php';
?>