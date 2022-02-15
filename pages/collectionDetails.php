<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $collectionDetails['image']; ?>" alt="" class="img-fluid" style="height: 300px"/>

            </div>
            <div class="col-md-6">
                <div class="card card-body" style="min-height: 300px">
                    <h2 class="font-weight-bold"><?php echo $collectionDetails['name']; ?></h2>
                    <p><?php echo $collectionDetails['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'; ?>
