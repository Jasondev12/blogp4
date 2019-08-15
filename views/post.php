<?php

$post = get_post();
if($post == false){
    header("Location:index.php?page=error");
}else{
            ?>

</div>

<div class="parallax-container">
    <div class="parallax">
        <img src="img/posts/<?= $post->image ?>" alt="<?= $post->title ?>" />
    </div>
</div>



<div class="container">


    <h2><?= $post->title ?></h2>
    <h6>Par <?= $post->name ?> le <?= date("d/m/Y à H:i", strtotime($post->date))?></h6>
    <p><?= nl2br($post->content)?></p>

    <?php

}
?>
    <hr>
    <h4>Commenter:</h4>
    <?php
    if(isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $comment = htmlspecialchars(trim($_POST['comment']));
        $errors = [];

        if(empty($name) || empty($email) || empty($comment)){
            $errors['empty'] = "Tous les champs n'ont pas été remplis";
        }else{
            if(!flilter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "L'adresse email n'est pas valide";
            }
        }
    }
    ?>



    <form method="post">
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input type="text" name="name" id="name " />
                <label for="name">Nom</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input type="email" name="email" id="email " />
                <label for="email">Adresse email</label>
            </div>
            <div class="input-field col s12 m12">
                <textarea name="comment" id="comment" class="materialize-textarea"></textarea>
                <label for="comment">Commentaire</label>
            </div>
            <div class="col s12">
                <button type="submit" name="submit" class="btn light-blue waves-effect wave-light">Commenter ce post</button>
            </div>
        </div>
    </form>