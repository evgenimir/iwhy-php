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
            <div class="sidebar-box mb-40 visible-md visible-lg">
                <img src="/templates/iwhy/images/banner-l.jpg" alt="Electrro">
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
          <div class="inner-banner2 mb-40 visible-md visible-lg">
            <a href="shop.html">
                <img src="/templates/iwhy/images/inner-banner2.jpg" alt="iWHY.ru">
            </a>
          </div>
          <div class="shorting mb-30">
          </div>
          <div class="product-listing">
            <div class="inner-listing">
              <div class="row">
                  <?php foreach ($catalogProducts as $product): ?>
                <div class="col-md-4 col-xs-6 mb-30">
                    <div class="product-item">
                        <?php if ($product['is_new']) :?>
                            <div class="main-label new-label"><span>New</span></div>
                        <?php endif; ?>
                        <?php if ($product['sale']) :?>
                            <div class="main-label sale-label"><span>sale</span></div>
                        <?php endif; ?>
                        <div class="product-image">
                            <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>">
                                <img src="<?= Product::getImage($product['id']); ?>" alt="<?= $product['name']; ?>" title="<?= $product['name']; ?>">
                            </a>
                            <div class="product-detail-inner">
                                <div class="detail-inner-left left-side">
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
                        <div class="product-item-details">
                            <div class="product-item-name"> <a title="Подробнее о товаре" href="/product/<?= $product['id']; ?>"><?= $product['name']; ?></a> </div>
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
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                  <!--
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="images/2.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="images/3.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/4.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="images/5.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/6.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/7.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="images/8.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="images/9.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/10.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="images/11.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/12.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/1.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="images/2.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/3.jpg" alt="Electrro"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left left-side">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                        <div class="detail-inner-left right-side">
                          <ul>
                            <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                      <div class="rating-summary-block right-side">
                        <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                -->
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
    </div>
  </section>
  <!-- CONTAINER END -->

<?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>