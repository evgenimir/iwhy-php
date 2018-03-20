<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

<!-- CONTAIN START -->
  <section class="ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-3 mb-sm-30 col-lgmd-20per">
          <div class="sidebar-block">
              <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
                  <div class="sidebar-title">
                      <h3>Все категории</h3> <span></span>
                  </div>
                  <div class="sidebar-contant">
                      <?php foreach ($categories as $category): ?>
                          <ul>
                              <li><a class="side" href="/category/<?= $category['id'] ?>"><?= $category['name'] ?> <span>(<?= Product::getProductCountInCategory($category['id']); ?></span>)</a></li>
                          </ul>
                      <?php endforeach; ?>
                  </div>
              </div>
            <div class="sidebar-box mb-40"> <span class="opener plus"></span>
            </div>
              <div class="sidebar-box sidebar-item mb-40"> <span class="opener plus"></span>
                  <div class="sidebar-title">
                      <h3>Не пропустите</h3> <span></span>
                  </div>
                  <div class="sidebar-contant">
                      <ul>
                          <?php foreach ($recommendedProducts as $product): ?>
                              <li>
                                  <div class="pro-media"> <a href="/product/<?= $product['id'] ;?>"><img alt="T-shirt" src="<?= Product::getImage($product['id']); ?>"></a> </div>
                                  <div class="pro-detail-info"> <a href="/product/<?= $product['id'] ;?>"><?= $product['name'] ;?></a>
                                      <div class="price-box"> <span class="price"><?= $product['price'] ;?> руб.</span> </div>
                                      <div class="cart-link">
                                          <form>
                                              <button title="Add to Cart" class="add-to-cart" data-id="<?= $product['id'] ;?>">В корзину</button>
                                          </form>
                                      </div>
                                  </div>
                              </li>
                          <?php endforeach; ?>
                      </ul>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-10 col-md-9 col-lgmd-80per">
          <div class="inner-banner2 visible-md visible-lg mb-40">
              <img src="/templates/iwhy/images/inner-banner2.jpg" alt="Electrro">
          </div>
          <div class="product-listing list-type">
            <div class="row">
                <?php foreach ($categoryProduct as $product): ?>
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                      <?php if ($product['sale']): ?>
                        <div class="main-label sale-label"><span>Sale</span></div>
                      <?php endif; ?>
                      <?php if ($product['is_new']): ?>
                          <div class="main-label new-label"><span>New</span></div>
                      <?php endif; ?>
                    <div class="product-image two">
                        <a href="/product/<?= $product['id']; ?>">
                            <img src="<?= Product::getImage($product['id']); ?>" alt="<?= $product['name']; ?>">
                        </a>
                    </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name">
                        <a href="/product/<?= $product['id']; ?>"><?= $product['name']; ?></a>
                    </div>
                    <div class="price-box">
                        <?php if ($product['sale']): ?>
                            <span class="price sale">
                                <?= $product['price']; ?> руб.
                            </span>
                        <?php else: ?>
                            <span class="price normal">
                                <?= $product['price']; ?> руб.
                            </span>
                        <?php endif; ?>
                        <?php if ($product['old_price'] != 0 ): ?>
                            <del class="price old-price">
                                <?= $product['old_price']; ?>
                            </del>
                        <?php endif; ?>
                    </div>
                    <p><?= $product['description']; ?></p>
                    <div class="bottom-detail">
                      <ul>
                          <li class="pro-cart-icon">
                              <form>
                                  <button title="Добавить" class="add-to-cart" data-id="<?= $product['id']; ?>"><span></span>Добавить в корзину</button>
                              </form>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="pagination-bar">
                  <?= $pagination->get(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END -->

<?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>