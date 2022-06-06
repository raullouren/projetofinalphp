<?php
include_once("templates/header.php");

if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }


}
?>
<main id="post-container">
<div class="content-container">
<h1 id="main-title"><?= $currentPost['title'] ?></h1>
<p id="post-description"><?= $currentPost['description']?></p>
<div class="img-container">
    <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
</div>
<p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ut a est, labore animi aliquid? Eos, id cum ducimus, at eligendi mollitia consequatur corporis magnam natus totam consequuntur nostrum repellat.
Repudiandae ipsam quaerat aspernatur, voluptatibus suscipit asperiores? Similique dolorem cumque quo libero, delectus tempore ut amet placeat quibusdam quod consequuntur accusamus. Molestiae officiis dolores vel neque blanditiis doloribus ea temporibus.
Modi hic tempore quas commodi vitae alias iusto earum amet consequuntur, aspernatur itaque, animi magni vero. Ratione nihil rerum reprehenderit? Voluptates praesentium voluptatum sed officia laborum amet ducimus ab sint!
Nisi expedita ullam voluptates assumenda ipsum libero, eligendi possimus eum voluptatum dignissimos eaque explicabo fuga at quas maiores debitis illum a quae aspernatur tenetur autem. Blanditiis excepturi non sint culpa.
Dolore qui, voluptatum aperiam natus quo sapiente blanditiis aliquam assumenda suscipit porro quod obcaecati omnis numquam architecto totam, commodi unde vel error molestias velit iusto, beatae facilis ab. Est, repellendus.
</p>
<p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ut a est, labore animi aliquid? Eos, id cum ducimus, at eligendi mollitia consequatur corporis magnam natus totam consequuntur nostrum repellat.
Repudiandae ipsam quaerat aspernatur, voluptatibus suscipit asperiores? Similique dolorem cumque quo libero, delectus tempore ut amet placeat quibusdam quod consequuntur accusamus. Molestiae officiis dolores vel neque blanditiis doloribus ea temporibus.
Modi hic tempore quas commodi vitae alias iusto earum amet consequuntur, aspernatur itaque, animi magni vero. Ratione nihil rerum reprehenderit? Voluptates praesentium voluptatum sed officia laborum amet ducimus ab sint!
Nisi expedita ullam voluptates assumenda ipsum libero, eligendi possimus eum voluptatum dignissimos eaque explicabo fuga at quas maiores debitis illum a quae aspernatur tenetur autem. Blanditiis excepturi non sint culpa.
Dolore qui, voluptatum aperiam natus quo sapiente blanditiis aliquam assumenda suscipit porro quod obcaecati omnis numquam architecto totam, commodi unde vel error molestias velit iusto, beatae facilis ab. Est, repellendus.
</p>
</div>

<aside id="nav-container">
<h3 id="tags-title">Tags</h3>
<ul id="tag-list">
    <?php foreach($currentPost['tags'] as $tag): ?>         
        <li><a href="#"><?= $tag ?>></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
    </ul>
</aside>
</main>
<?php
include_once("templates/footer.php")
?>