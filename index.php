<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Toys.php';
require_once __DIR__ . '/database/db.php';
require_once __DIR__ . '/Traits/Weightable.php';




include __DIR__ . '/partials/header.php';
?>



<main>
    <section class="container">


        <div class="row row-cols-2 m-5">
            <?php foreach ($products as $product) { ?>
            <div class="col my-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0 align-items-center">
                        <h5 class="card-title text-center py-3">
                            <?php echo $product->name; ?>
                        </h5>
                        <div class="col-md-6">
                            <img src="<?php echo $product->img; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6 px-4">
                            <div class="card-body">

                                <div class="d-flex justify-content-center align-items-center py-4">
                                    <img class="icon" src="<?php echo $product->category->printIcon() ?>" alt="">
                                    <p class="card-text px-4">
                                        <?php echo $product->category->name; ?>
                                    </p>
                                </div>
                                <h6 class="card-title">cod.
                                    <?php echo $product->id; ?>
                                </h6>
                                <p class="card-text">
                                    <?php echo $product->description; ?>
                                </p>
                                <?php if (get_class($product) === "Toys") { ?>
                                <p class="card-text"> Materiali:
                                    <?php echo $product->material ?>
                                </p>
                                <?php } ?>
                                <?php if (get_class($product) === "Food") { ?>
                                <p class="card-text">
                                    <?php
                    try {
                        echo $product->getWeight();
                    } catch (Exception $e) {
                        echo 'Eccezzione' . $e->getMessage();
                    }
                                    ?>
                                </p>
                                <p class="card-text"> Al gusto di:
                                    <?php echo $product->taste ?>
                                </p>
                                <?php } ?>
                                <h6 class="card-title">
                                    <?php echo $product->price; ?> €
                                </h6>
                                <a href="#" class="btn btn-warning my-2">Aggiungi al carello</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>


    </section>
</main>

<?php
include __DIR__ . '/partials/footer.php';
?>