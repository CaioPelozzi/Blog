<?php 

    include_once("helpers/url.php");
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost= 0;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }

?>

 <main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident aliquam natus amet consectetur officiis quam voluptas fuga, et corporis ut sint iste delectus sunt explicabo aspernatur! Dignissimos earum asperiores sit?
            Officia perspiciatis perferendis nesciunt quis quisquam hic? Veritatis, optio autem? Modi delectus illum sint rerum veritatis corporis sapiente ipsa et repudiandae repellendus quaerat, atque recusandae placeat tempora obcaecati magni. Ad.
            Aliquam praesentium voluptate dolores mollitia dicta facilis assumenda sed asperiores illo molestias fugiat, totam nihil quis impedit accusamus delectus deserunt consequatur. Praesentium aperiam maxime porro quidem culpa velit suscipit delectus!
            Consequuntur necessitatibus, reprehenderit eius aliquid nostrum iste doloremque voluptas sapiente eaque! Incidunt pariatur, eum inventore a voluptatum aperiam beatae! Porro, accusantium? Sapiente accusantium veniam libero. Iure inventore nihil expedita ullam!
            Molestias error provident repudiandae aliquam eius, quidem aspernatur omnis eos assumenda aut a magni quisquam autem beatae optio, dolorem, quo repellat! Ipsa laborum impedit sed aspernatur animi, ut repellendus magni.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident aliquam natus amet consectetur officiis quam voluptas fuga, et corporis ut sint iste delectus sunt explicabo aspernatur! Dignissimos earum asperiores sit?
            Officia perspiciatis perferendis nesciunt quis quisquam hic? Veritatis, optio autem? Modi delectus illum sint rerum veritatis corporis sapiente ipsa et repudiandae repellendus quaerat, atque recusandae placeat tempora obcaecati magni. Ad.
            Aliquam praesentium voluptate dolores mollitia dicta facilis assumenda sed asperiores illo molestias fugiat, totam nihil quis impedit accusamus delectus deserunt consequatur. Praesentium aperiam maxime porro quidem culpa velit suscipit delectus!
            Consequuntur necessitatibus, reprehenderit eius aliquid nostrum iste doloremque voluptas sapiente eaque! Incidunt pariatur, eum inventore a voluptatum aperiam beatae! Porro, accusantium? Sapiente accusantium veniam libero. Iure inventore nihil expedita ullam!
            Molestias error provident repudiandae aliquam eius, quidem aspernatur omnis eos assumenda aut a magni quisquam autem beatae optio, dolorem, quo repellat! Ipsa laborum impedit sed aspernatur animi, ut repellendus magni.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag):?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach;?>
            </ul>
        <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach;?>
            </ul>
    </aside>
 </main>

<?php 

    include_once("templates/footer.php")

?>