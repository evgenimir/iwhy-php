<?php require_once(ROOT . '/views/layouts/iwhy/header.php'); ?>

<!-- CONTAIN START -->
  <section class="ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-3 mb-sm-30 col-lgmd-20per">
          <div class="sidebar-block">
            <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Categories</h3><span></span>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li><a>Clothing <span>(21)</span></a></li>
                  <li><a>Shoes <span>(05)</span></a></li>
                  <li><a>Jewellery <span>(10)</span></a></li>
                  <li><a>Furniture <span>(12)</span></a></li>
                  <li><a>Bags <span>(18)</span></a></li>
                  <li><a>Accessories <span>(70)</span></a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Shop by</h3><span></span>
              </div>
              <div class="sidebar-contant">
                <div class="price-range mb-30">
                  <div class="inner-title">Price range</div>
                  <input class="price-txt" type="text" id="amount">
                  <div id="slider-range"></div>
                </div>
                <div class="size mb-20">
                  <div class="inner-title">Size</div>
                  <ul >
                    <li><a href="#">S (10)</a></li>
                    <li><a href="#">M (05)</a></li>
                    <li><a href="#">L (10)</a></li>
                    <li><a href="#">XL (08)</a></li>
                    <li><a href="#">XXL (05)</a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Color</div>
                  <ul>
                    <li><a>Black <span>(0)</span></a></li>
                    <li><a>Blue <span>(05)</span></a></li>
                    <li><a>Brown <span>(10)</span></a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Manufacture</div>
                  <ul>
                    <li><a>Augue congue <span>(0)</span></a></li>
                    <li><a>Eu magna <span>(05)</span></a></li>
                    <li><a>Ipsum sit <span>(10)</span></a></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-color">Refine</a> </div>
            </div>
            <div class="sidebar-box mb-40 visible-md visible-lg">
              <a href="#">
                <img src="images/left-banner.jpg" alt="Electrro">
              </a>
            </div>
            <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Best Seller</h3><span></span>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a><img alt="T-shirt" src="images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a>Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-md-9 col-lgmd-80per">
          <div class="inner-banner2 visible-md visible-lg mb-40">
              <a href="shop.html">
              <img src="images/inner-banner2.jpg" alt="Electrro">
            </a>
          </div>
          <div class="shorting mb-30">
            <div class="row">
              <div class="col-md-6">
                <div class="view">
                  <div class="list-types grid"> <a href="shop.html">
                    <div class="grid-icon list-types-icon"></div>
                    </a> </div>
                  <div class="list-types list active "> <a href="shop-list.html">
                    <div class="list-icon list-types-icon"></div>
                    </a> </div>
                </div>
                <div class="short-by float-right-sm"> <span>Sort By</span>
                  <div class="select-item">
                    <select>
                      <option value="" selected="selected">Name (A to Z)</option>
                      <option value="">Name(Z - A)</option>
                      <option value="">price(low&gt;high)</option>
                      <option value="">price(high &gt; low)</option>
                      <option value="">rating(highest)</option>
                      <option value="">rating(lowest)</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="show-item right-side float-left-sm"> <span>Show</span>
                  <div class="select-item">
                    <select>
                      <option value="" selected="selected">24</option>
                      <option value="">12</option>
                      <option value="">6</option>
                    </select>
                  </div>
                  <span>Per Page</span>
                  <div class="compare float-right-sm"> <a href="#" class="btn btn-color">Compare (0)</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-listing list-type">
            <div class="row">
                <?php foreach ($categoryProduct as $product): ?>
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"> <img src="/upload/images/product/<?= $product['image']; ?>" alt="Electrro"> </a> </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name">
                      <a href="product-page.html">ID: <?= $product['id']; ?>, Cross Colours Camo Print </a>
                    </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. ipsum primis in faucibus orci luctus et ultrices.</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <a title="Add to Cart" class="" href="/cart/add/<?= $product['id']; ?>"><span></span></a>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"><span></span></a></a></li>
                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"><span></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
                <?php endforeach; ?>
                <!--
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/2.jpg" alt="Electrro"> </a> </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print </a> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. ipsum primis in faucibus orci luctus et ultrices.</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class=""><span></span></button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"><span></span></a></a></li>
                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"><span></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/3.jpg" alt="Electrro"> </a> </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print</a> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. ipsum primis in faucibus orci luctus et ultrices.</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class=""><span></span></button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"><span></span></a></a></li>
                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"><span></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/4.jpg" alt="Electrro"> </a> </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print</a> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. ipsum primis in faucibus orci luctus et ultrices.</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class=""><span></span></button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"><span></span></a></a></li>
                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"><span></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/5.jpg" alt="Electrro"> </a> </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print</a> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. ipsum primis in faucibus orci luctus et ultrices.</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class=""><span></span></button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"><span></span></a></a></li>
                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"><span></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/6.jpg" alt="Electrro"> </a> </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print</a> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. ipsum primis in faucibus orci luctus et ultrices.</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class=""><span></span></button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"><span></span></a></a></li>
                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"><span></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/7.jpg" alt="Electrro"> </a> </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print</a> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. ipsum primis in faucibus orci luctus et ultrices.</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class=""><span></span></button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"><span></span></a></a></li>
                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"><span></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xs-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.html"> <img src="images/8.jpg" alt="Electrro"> </a> </div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print</a> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. ipsum primis in faucibus orci luctus et ultrices.</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class=""><span></span></button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"><span></span></a></a></li>
                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"><span></span></a></li>
                      </ul>
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
  </section>
  <!-- CONTAINER END -->

  <!-- News Letter Start -->
  <section>
    <div class="newsletter">
      <div class="container">
        <div class="">
          <div class="">
            <div class="newsletter-inner center-sm">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <div class="newsletter-bg">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="newsletter-title">
                          <h2 class="main_title">Subscribe Emails</h2>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <form>
                          <div class="newsletter-box">
                            <input type="email" placeholder="Email Here...">
                            <button title="Subscribe" class="btn-color">Subscribe</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- News Letter End -->

<?php require_once(ROOT . '/views/layouts/iwhy/footer.php'); ?>