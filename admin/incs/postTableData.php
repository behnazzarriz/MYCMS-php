<div class="table-responsive">
    <table id="postsTable" class="table table-hover table-hover">
        <thead>
        <th>Title</th>
        <th>CategoryName</th>
        <th>Author</th>
        <th>Date</th>
        <th>Status</th>
        <th>Image</th>
        <th>Content</th>
        <th>Tags</th>
        <th>Comment Content</th>
        </thead>
        <tbody>
        <?php

        foreach ($posts as $post){
            ?>
            <tr>
                <td><?=$post['title']?></td>
                <td>
                    <?php
                    $cat=$catObj->getCategoryById($post['category_id']);
                    echo $cat['name'];
                    ?>
                </td>
                <td><?=$post['author']?></td>
                <td><?=$post['date']?></td>
                <td><?=$post['status']?></td>
                <td><img class="img-fluid" src="../images/<?=$post['image']?>"></td>
                <td><?=$post['content']?></td>
                <td><?=$post['tags']?></td>
                <td><?=$post['comment_count']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
