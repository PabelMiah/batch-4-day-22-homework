<?php include 'pages/includes/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($newsVar as $news) {?>
                <div class="col-md-4 mt-3">
                <div class="card" style="height: 550px">
                    <img src="<?php echo $news['image'] ?>" alt="" class="card-img-bottom" style="height: 250px"/>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $news['name'] ?></h3>
                        <p class="text-justify"><?php echo $news['description'] ?></p>
                        <a href="action.php?pages=collection-details&&collection_id=<?php echo $news['id']; ?>" class="btn btn-outline-warning float-right">More</a>
                    </div>
                </div>
           </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php' ?>


