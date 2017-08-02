<?php
include 'menu.php';
include 'products.php';
include 'categories_example.php';
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Разметка</title>
  <meta name="description" content="The Html5">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="js/html5shim.js"></script><![endif]-->
</head>
<header>
  <h1>Лого</h1>
  <nav>
    <ul>
      <?php foreach ($menu as $value): ?>
        <?php if ($value -> visible): ?>
          <?php if ($value -> menu_id == 1): ?>
            <li>
              <a href="<?php echo $value -> url ?>"><?php echo $value -> name ?></a>
            </li>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>
<main role="main">
  <div class="side">
    <aside>
      <h3>Side bar</h3>
      <?php if ($categories_data) :?>
        <ul>
        <?php foreach ($categories_data as $categories) :?>
          <li>
            <?= $categories->name ?>
            <?php if ($categories->id == $categories->parent_id) :?>
            <ul>
              <?php foreach ($categories->subcategories as $subcategory): ?>
                <li><?= $subcategoty->name ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif ?>
          </li>
        <?php endforeach ?>
        </ul>
      <?php endif ?>
    </aside>
  </div>
  <div class="content">
    <?php if ($products) :?>
    <?php foreach ($products as $product) :?>
      <?php if ($product -> visible): ?>
        <div class="product">
            <p class="productDate"><?php echo date('m.d.y', strtotime($product -> created)); ?></p>
            <div class="productImg">
              <img src="#" alt="img">
            </div>
            <div class="productInfo">
              <a href="<?php echo $product -> url; ?>" class="productTitle"><?php echo $product -> name; ?></a>
              <p class="previewPrice"><?php echo ceil($product -> variant -> price); ?> грн.</p>
              <?php if (count($product -> variants) > 1): ?>
                <select class="productSelect">
                  <?php foreach ($product -> variants as $item) :?>
                      <?php if ($item -> id != $product -> variant -> id): ?>
                          <option value="#"><?php echo ceil($item -> price); ?> грн.</option>
                      <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              <?php endif; ?>
            <div class="productControl">
            <div class="productReadmore">
              <p class="productReadmore">Подробнее</p>
            </div>
            <button type="button">
              <p>Купить</p>
            </button>
          </div>
        </div>
      </div>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endif ?>
  </div>
</main>
<footer>
  <section id="author">Футер</section>
</footer>
