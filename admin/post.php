<?php
include_once 'incs/header.php';
include_once 'incs/navigation.php';
?>
<?php
$postObj=new Post();
$posts=$postObj->getAllPosts();
$catObj=new  Categories();
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
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">View all posts</li>
            </ol>

          <div class="row">
             <?php
             if(isset($_GET['type'])){
                 switch ($_GET['type']){
                     case "newPost":
                         break;
                     case "editPost":
                         break;
                     default :
                         include_once 'incs/postTableData.php';
                         break;
                 }
             }
             else{
                 include_once 'incs/postTableData.php';
             }
             ?>
          </div>


        </div>
        <!-- /.container-fluid -->


<?php
include_once 'incs/footer.php';
?>