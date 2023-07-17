<?php
include '../inc/Header.php';
?>
<!-- Header Area End -->

<!-- Breadcumb area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Product Detalis</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li class="current"><a href="product-details.html">Product Detalis Tab Style One</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="single-products-area section-padding section-md-padding">
        <div class="container">
            <!-- Single Product Start -->
            <section class="mirora-single-product pb--80 pb-md--60">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Tab Content Start -->
                        <div class="tab-content product-details-thumb-large" id="myTabContent-3">
                            <div class="tab-pane fade show active" id="product-large-one">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn" href="assets/img/products/3-900x900.jpg">
                                        <img src="https://htmldemo.net/mirora/mirora/assets/img/products/3-900x900.jpg"
                                            alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-two">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn" href="assets/img/products/4-900x900.jpg">
                                        <img src="assets/img/products/4-900x900.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-three">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn" href="assets/img/products/5-900x900.jpg">
                                        <img src="assets/img/products/5-900x900.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-four">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn" href="assets/img/products/6-900x900.jpg">
                                        <img src="assets/img/products/6-900x900.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-five">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn" href="assets/img/products/10-900x900.jpg">
                                        <img src="assets/img/products/10-900x900.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content End -->

                        <!-- Product Thumbnail Carousel Start -->
                        <div class="product-details-thumbnail">
                            <div class="thumb-menu product-details-thumb-menu nav-vertical-center"
                                id="thumbmenu-horizontal">
                                <div class="thumb-menu-item">
                                    <a href="#product-large-one" data-bs-toggle="tab" class="nav-link active">
                                        <img src="assets/img/products/3-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#product-large-two" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/products/4-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#product-large-three" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/products/5-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#product-large-four" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/products/6-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#product-large-five" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/products/10-450x450.jpg" alt="product thumb">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Thumbnail Carousel End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Single Product Content Start -->
                        <div class="product-details-content">
                            <div class="product-details-top">
                                <h2 class="product-details-name">Aliquam lobortis</h2>
                                <div class="ratings-wrap">
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>
                                        <a class="review-btn" href="#singleProductTab">1 Reviews</a>
                                        <a class="review-btn" href="#singleProductTab">write a review</a>
                                    </span>
                                </div>
                                <ul class="product-details-list list-unstyled">
                                    <li>Brand: <a href="">Apple</a></li>
                                    <li>Product Code: Watches</li>
                                    <li>Reward Points: 600</li>
                                    <li>Availability: In Stock</li>
                                </ul>
                                <div class="product-details-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>

                            <div class="product-details-bottom">

                                <p class="product-details-availability"><i class="fa fa-check-circle"></i>200 In
                                    Stock</p>
                                <div class="product-details-action-wrapper mb--20">
                                    <div class="product-details-action-top d-flex align-items-center mb--20">
                                        <div class="quantity">
                                            <span>Qty: </span>
                                            <input type="number" class="quantity-input" name="qty" id="pro_qty"
                                                value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product-details-action-bottom">
                                        <a href="wishlist.html">+Add to wishlist</a>
                                        <a href="compare.html">+Add to compare</a>
                                    </div>
                                </div>
                                <p class="product-details-tags">
                                    Tags: <a href="shop.html">Sport</a>,
                                    <a href="shop.html">Luxury</a>
                                </p>
                                <div class="social-share">
                                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                                        class="facebook share-button">
                                        <i class="fa fa-facebook"></i>
                                        <span>Like</span>
                                    </a>
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                                        class="twitter share-button">
                                        <i class="fa fa-twitter"></i>
                                        <span>Tweet</span>
                                    </a>
                                    <a href="#" class="share share-button">
                                        <i class="fa fa-plus-square"></i>
                                        <span>Share</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Content End -->
                    </div>
                </div>
            </section>
            <!-- Single Product End -->

            <!-- Single Product Tab Start -->
            <section class="product-details-tab bg--dark-4 ptb--80 ptb-md--60">
                <div class="row">
                    <div class="col-12">
                        <ul class="product-details-tab-head nav nav-tab" id="singleProductTab" role="tablist">
                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link active" id="nav-desc-tab"
                                    data-bs-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link" id="nav-details-tab" data-bs-toggle="tab"
                                    href="#nav-details" role="tab" aria-controls="nav-details"
                                    aria-selected="true">Additional Information</a>
                            </li>

                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link" id="nav-review-tab" data-bs-toggle="tab"
                                    href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">review
                                    (2)</a>
                            </li>
                        </ul>
                        <div class="product-details-tab-content tab-content">
                            <div class="tab-pane fade show active" id="nav-desc" role="tabpanel"
                                aria-labelledby="nav-desc-tab">
                                <p class="product-details-description">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est
                                    at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.
                                    Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a
                                    neque libero.</p>
                                <p class="product-details-description">
                                    Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem,
                                    quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies
                                    massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero
                                    hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus
                                    nisi posuere nisl, in accumsan elit odio quis mi.
                                </p>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="nav-details" aria-labelledby="nav-details-tab">
                                <div class="product-details-additional-info">
                                    <h3>Additional Information</h3>
                                    <div class="table-content table-responsive">
                                        <table class="shop_attributes">
                                            <tr>
                                                <th>Color: </th>
                                                <td>
                                                    <p>Black, Blue, Gold</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Size: </th>
                                                <td>
                                                    <p>XXL, XL, L, M</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
                                <div class="product-details-review-wrap">
                                    <h2 class="mb--20">2 REVIEWS FOR ALIQUAM LOBORTIS</h2>
                                    <div class="review mb--40">
                                        <div class="review__single">
                                            <div class="review__meta">
                                                <p class="review__author">HasTech</p>
                                                <p class="review__date">October 12, 2014</p>
                                            </div>
                                            <div class="review__content">
                                                <p class="review__text">
                                                    It’s both good and bad. If Nikon had achieved a high-quality
                                                    wide lens camera with a 1 inch sensor, that would have been
                                                    a very competitive product. So in that sense, it’s good for
                                                    us. But actually, from the perspective of driving the 1 inch
                                                    sensor market, we want to stimulate this market and that
                                                    means multiple manufacturers.
                                                </p>
                                                <div class="ratings">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review__single">
                                            <div class="review__meta">
                                                <p class="review__author">HasTech</p>
                                                <p class="review__date">October 12, 2014</p>
                                            </div>
                                            <div class="review__content">
                                                <p class="review__text">
                                                    It’s both good and bad. If Nikon had achieved a high-quality
                                                    wide lens camera with a 1 inch sensor, that would have been
                                                    a very competitive product. So in that sense, it’s good for
                                                    us. But actually, from the perspective of driving the 1 inch
                                                    sensor market, we want to stimulate this market and that
                                                    means multiple manufacturers.
                                                </p>
                                                <div class="ratings">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="mb--20">Add a Review</h2>
                                    <form class="form form--review">
                                        <div class="form__group clearfix mb--20">
                                            <label class="form__label d-block">Your Ratings</label>
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5" />
                                                <label class="full" for="star5" title="Awesome - 5 stars">
                                                </label>
                                                <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                <label class="half" for="star4half" title="Pretty good - 4.5 stars">
                                                </label>
                                                <input type="radio" id="star4" name="rating" value="4" />
                                                <label class="full" for="star4" title="Pretty good - 4 stars">
                                                </label>
                                                <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                <label class="half" for="star3half" title="Meh - 3.5 stars">
                                                </label>
                                                <input type="radio" id="star3" name="rating" value="3" />
                                                <label class="full" for="star3" title="Meh - 3 stars">
                                                </label>
                                                <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                <label class="half" for="star2half" title="Kinda bad - 2.5 stars">
                                                </label>
                                                <input type="radio" id="star2" name="rating" value="2" />
                                                <label class="full" for="star2" title="Kinda bad - 2 stars">
                                                </label>
                                                <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                <label class="half" for="star1half" title="Meh - 1.5 stars">
                                                </label>
                                                <input type="radio" id="star1" name="rating" value="1" />
                                                <label class="full" for="star1" title="Sucks big time - 1 star">
                                                </label>
                                                <input type="radio" id="starhalf" name="rating" value="half" />
                                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form__group clearfix mb--20">
                                            <label class="form__label d-block" for="review_name">Name
                                                <sup>*</sup></label>
                                            <input id="review_name" name="review_name" class="form__input">
                                        </div>
                                        <div class="form__group clearfix mb--20">
                                            <label class="form__label d-block" for="review_email">Email
                                                <sup>*</sup></label>
                                            <input id="review_email" name="review_email" class="form__input">
                                        </div>
                                        <div class="form__group clearfix mb--20">
                                            <label class="form__label d-block" for="review">Your Review
                                                <sup>*</sup></label>
                                            <textarea id="review" name="review"
                                                class="form__input form__input--textarea"></textarea>
                                            <div class="help-block">
                                                <span>Note: </span>
                                                HTML is not translated!
                                            </div>
                                        </div>
                                        <div class="form__group text-right">
                                            <button type="submit" class="btn btn-medium btn-style-1">Continue</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Single Product Tab End -->

            <!-- Related Product Start -->
            <section class="related-products-area pt--80 pb--20 pb-md--15 pt-md--60">
                <div class="row">
                    <div class="col-12 mb--20">
                        <div class="section-title">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel nav-top js-product-carousel-2">
                            <div class="mirora-product">
                                <div class="product-img">
                                    <img src="assets/img/products/2-450x450.jpg" alt="Product" class="primary-image" />
                                    <img src="assets/img/products/2-2-450x450.jpg" alt="Product"
                                        class="secondary-image" />
                                    <div class="product-img-overlay">
                                        <span class="product-label discount">
                                            -7%
                                        </span>
                                        <a data-bs-toggle="modal" data-bs-target="#productModal"
                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                            View</a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <span>Cartier</span>
                                    <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                    <div class="product-price-wrapper">
                                        <span class="money">$550.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$700.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mirora_product_action text-center position-absolute">
                                    <div class="product-rating">
                                        <span>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content...
                                    </p>
                                    <div class="product-action">
                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="add_cart cart-item action-cart" href="cart.html"
                                            title="wishlist"><span>Add to cart</span></a>
                                        <a class="same-action compare-mrg" data-bs-toggle="modal"
                                            data-bs-target="#productModal" href="compare.html">
                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mirora-product">
                                <div class="product-img">
                                    <img src="assets/img/products/4-450x450.jpg" alt="Product" class="primary-image" />
                                    <img src="assets/img/products/4-4-450x450.jpg" alt="Product"
                                        class="secondary-image" />
                                    <div class="product-img-overlay">
                                        <span class="product-label discount">
                                            -7%
                                        </span>
                                        <a data-bs-toggle="modal" data-bs-target="#productModal"
                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                            View</a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <span>Cartier</span>
                                    <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                    <div class="product-price-wrapper">
                                        <span class="money">$550.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$700.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mirora_product_action text-center position-absolute">
                                    <div class="product-rating">
                                        <span>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content...
                                    </p>
                                    <div class="product-action">
                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="add_cart cart-item action-cart" href="cart.html"
                                            title="wishlist"><span>Add to cart</span></a>
                                        <a class="same-action compare-mrg" data-bs-toggle="modal"
                                            data-bs-target="#productModal" href="compare.html">
                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mirora-product">
                                <div class="product-img">
                                    <img src="assets/img/products/6-450x450.jpg" alt="Product" class="primary-image" />
                                    <img src="assets/img/products/6-6-450x450.jpg" alt="Product"
                                        class="secondary-image" />
                                    <div class="product-img-overlay">
                                        <span class="product-label discount">
                                            -7%
                                        </span>
                                        <a data-bs-toggle="modal" data-bs-target="#productModal"
                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                            View</a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <span>Cartier</span>
                                    <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                    <div class="product-price-wrapper">
                                        <span class="money">$550.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$700.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mirora_product_action text-center position-absolute">
                                    <div class="product-rating">
                                        <span>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content...
                                    </p>
                                    <div class="product-action">
                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="add_cart cart-item action-cart" href="cart.html"
                                            title="wishlist"><span>Add to cart</span></a>
                                        <a class="same-action compare-mrg" data-bs-toggle="modal"
                                            data-bs-target="#productModal" href="compare.html">
                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mirora-product">
                                <div class="product-img">
                                    <img src="assets/img/products/8-450x450.jpg" alt="Product" class="primary-image" />
                                    <img src="assets/img/products/8-8-450x450.jpg" alt="Product"
                                        class="secondary-image" />
                                    <div class="product-img-overlay">
                                        <span class="product-label discount">
                                            -7%
                                        </span>
                                        <a data-bs-toggle="modal" data-bs-target="#productModal"
                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                            View</a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <span>Cartier</span>
                                    <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                    <div class="product-price-wrapper">
                                        <span class="money">$550.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$700.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mirora_product_action text-center position-absolute">
                                    <div class="product-rating">
                                        <span>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content...
                                    </p>
                                    <div class="product-action">
                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="add_cart cart-item action-cart" href="cart.html"
                                            title="wishlist"><span>Add to cart</span></a>
                                        <a class="same-action compare-mrg" data-bs-toggle="modal"
                                            data-bs-target="#productModal" href="compare.html">
                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mirora-product">
                                <div class="product-img">
                                    <img src="assets/img/products/10-450x450.jpg" alt="Product" class="primary-image" />
                                    <img src="assets/img/products/10-10-450x450.jpg" alt="Product"
                                        class="secondary-image" />
                                    <div class="product-img-overlay">
                                        <span class="product-label discount">
                                            -7%
                                        </span>
                                        <a data-bs-toggle="modal" data-bs-target="#productModal"
                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                            View</a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <span>Cartier</span>
                                    <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                    <div class="product-price-wrapper">
                                        <span class="money">$550.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$700.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mirora_product_action text-center position-absolute">
                                    <div class="product-rating">
                                        <span>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content...
                                    </p>
                                    <div class="product-action">
                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="add_cart cart-item action-cart" href="cart.html"
                                            title="wishlist"><span>Add to cart</span></a>
                                        <a class="same-action compare-mrg" data-bs-toggle="modal"
                                            data-bs-target="#productModal" href="compare.html">
                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mirora-product">
                                <div class="product-img">
                                    <img src="assets/img/products/12-450x450.jpg" alt="Product" class="primary-image" />
                                    <img src="assets/img/products/12-12-450x450.jpg" alt="Product"
                                        class="secondary-image" />
                                    <div class="product-img-overlay">
                                        <span class="product-label discount">
                                            -7%
                                        </span>
                                        <a data-bs-toggle="modal" data-bs-target="#productModal"
                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                            View</a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <span>Cartier</span>
                                    <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                    <div class="product-price-wrapper">
                                        <span class="money">$550.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$700.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mirora_product_action text-center position-absolute">
                                    <div class="product-rating">
                                        <span>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content...
                                    </p>
                                    <div class="product-action">
                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="add_cart cart-item action-cart" href="cart.html"
                                            title="wishlist"><span>Add to cart</span></a>
                                        <a class="same-action compare-mrg" data-bs-toggle="modal"
                                            data-bs-target="#productModal" href="compare.html">
                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mirora-product">
                                <div class="product-img">
                                    <img src="assets/img/products/14-450x450.jpg" alt="Product" class="primary-image" />
                                    <img src="assets/img/products/14-14-450x450.jpg" alt="Product"
                                        class="secondary-image" />
                                    <div class="product-img-overlay">
                                        <span class="product-label discount">
                                            -7%
                                        </span>
                                        <a data-bs-toggle="modal" data-bs-target="#productModal"
                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                            View</a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <span>Cartier</span>
                                    <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                    <div class="product-price-wrapper">
                                        <span class="money">$550.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$700.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mirora_product_action text-center position-absolute">
                                    <div class="product-rating">
                                        <span>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star theme-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content...
                                    </p>
                                    <div class="product-action">
                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="add_cart cart-item action-cart" href="cart.html"
                                            title="wishlist"><span>Add to cart</span></a>
                                        <a class="same-action compare-mrg" data-bs-toggle="modal"
                                            data-bs-target="#productModal" href="compare.html">
                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Related Product End -->
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->


<!-- Footer Start -->
<footer class="footer border-top ptb--40 ptb-md--30">
    <div class="container">
        <div class="row mb--40 mb-md--30">
            <div class="col-lg-4 col-md-6 mb-md--30">
                <div class="footer-widget">
                    <h3 class="widget-title">About Mirora</h3>
                    <div class="widget-content mb--20">
                        <p>Address: 123 Main Street, Anytown, <br> CA 12345 - USA.</p>
                        <p>Phone: (012) 800 456 789</p>
                        <p>Fax: (012) 800 456 789</p>
                        <p>Email: Contact@plazathemes.com</p>
                    </div>
                    <ul class="social social-round">
                        <li class="social__item">
                            <a class="social__link" href="https://facebook.com" target="_blank"
                                rel="noopener noreferrer">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://twitter.com" target="_blank"
                                rel="noopener noreferrer">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://youtube.com" target="_blank"
                                rel="noopener noreferrer">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://instagram.com" target="_blank"
                                rel="noopener noreferrer">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://plus.google.com" target="_blank"
                                rel="noopener noreferrer">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-md--30">
                <div class="footer-widget">
                    <h3 class="widget-title">Information</h3>
                    <ul class="widget-menu">
                        <li><a href="">About Us</a></li>
                        <li><a href="">Delivery Information</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms &amp; Conditions</a></li>
                        <li><a href="">Gift Certificates</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-sm--30">
                <div class="footer-widget">
                    <h3 class="widget-title">Extras</h3>
                    <ul class="widget-menu">
                        <li><a href="">Brands</a></li>
                        <li><a href="">Gift Certificates</a></li>
                        <li><a href="">Affiliate</a></li>
                        <li><a href="">Specials</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Returns</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h3 class="widget-title">Custom Products</h3>
                    <div class="widget-product">
                        <div class="product">
                            <div class="product-img">
                                <img src="assets/img/products/11-450x450.jpg" alt="products">
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <h4 class="product-title">
                                    <a href="product-details.html" tabindex="0">Acer Aspire E 15</a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-img">
                                <img src="assets/img/products/11-450x450.jpg" alt="products">
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <h4 class="product-title">
                                    <a href="product-details.html" tabindex="0">Acer Aspire E 15</a>
                                </h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb--40 mb-md--30">
            <div class="col-12">
                <ul class="footer-menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">Online Store</a></li>
                    <li><a href="">Promotion</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms Of Use</a></li>
                    <li><a href="">Sitemap</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="copyright-text">&copy; Mirora 2021 Made With <i class="fa fa-heart"></i> BY <a
                        href="https://hasthemes.com">HasThemes</a> </p>
                <img src="assets/img/others/payment.png" alt="payment">
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Scroll To Top Start -->
<a class="scroll-to-top" href=""><i class="fa fa-angle-double-up"></i></a>
<!-- Scroll To Top End -->

<!-- Popup Subscribe Box Start -->

<!-- <div class="popup-subscribe-box" id="subscribe-popup">
            <div class="popup-subscribe-box-content">
                <div class="popup-subscribe-box-body">
                    <a href="#subscribe-popup" class="popup-close">close</a>
                    <h3>NEWSLETTER</h3>
                    <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
                    <form class="popup-subscribe-form validate" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                        <input type="email" name="popup-subscribe-email" id="popup-subscribe-email" placeholder="Enter your email here...">
                        <input type="submit" value="Subscribe" class="btn subscribe-btn btn-medium btn-style-1">
                        <div class="form-group text-center mt--20">
                            <input type="checkbox" name="hide-popup" id="hide-popup">
                            <label for="hide-popup"> Don't show this popup again </label>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->

<!-- Popup Subscribe Box End -->

<!-- Modal Start -->
<div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">Close</span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 mb-sm--20">
                            <div class="tab-content product-thumb-large">
                                <div id="thumb1" class="tab-pane active show fade">
                                    <img src="assets/img/products/1-1-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb2" class="tab-pane fade">
                                    <img src="assets/img/products/2-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb3" class="tab-pane fade">
                                    <img src="assets/img/products/10-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb4" class="tab-pane fade">
                                    <img src="assets/img/products/11-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb5" class="tab-pane fade">
                                    <img src="assets/img/products/12-600x600.jpg" alt="product thumb">
                                </div>
                                <div id="thumb6" class="tab-pane fade">
                                    <img src="assets/img/products/13-600x600.jpg" alt="product thumb">
                                </div>
                            </div>
                            <div class="product-thumbnail">
                                <div class="thumb-menu" id="modal-thumbmenu">
                                    <div class="thumb-menu-item">
                                        <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                            <img src="assets/img/products/1-1-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/2-2-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/10-10-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/11-11-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb5" data-bs-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/12-12-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#thumb6" data-bs-toggle="tab" class="nav-link">
                                            <img src="assets/img/products/13-13-450x450.jpg" alt="product thumb">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="modal-box product">
                                <h3 class="product-title">Acer Aspire E 15</h3>
                                <div class="ratings mb--20">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <ul class="product-detail-list list-unstyled mb--20">
                                    <li>Brand: <a href="">Apple</a></li>
                                    <li>Product Code: Watches</li>
                                    <li>Reward Points: 600</li>
                                    <li>Availability: In Stock</li>
                                </ul>
                                <div class="product-price border-bottom pb--20 mb--20">
                                    <span class="regular-price">$100.50</span>
                                    <span class="sale-price">$98.98</span>
                                </div>
                                <div class="product-options mb--20">
                                    <h3>Available Options</h3>
                                    <div class="form-group">
                                        <label><sup>*</sup>Color Switch</label>
                                        <select>
                                            <option> --- Please Select --- </option>
                                            <option>Black</option>
                                            <option>Blue</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-action-wrapper mb--20">
                                    <div class="product-action-top d-flex align-items-center mb--20">
                                        <div class="quantity">
                                            <span>Qty: </span>
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1"
                                                min="1">
                                        </div>
                                        <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product-action-bottom">
                                        <a href="wishlist.html">+Add to wishlist</a>
                                        <a href="compare.html">+Add to compare</a>
                                    </div>
                                </div>
                                <p class="product-tags">
                                    Tags: <a href="shop.html">Sport</a>,
                                    <a href="shop.html">Luxury</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

</div>
<!-- Main Wrapper End -->


<!-- ************************* JS Files ************************* -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery.min.js"></script>

<!-- Bootstrap and Popper Bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- All Plugins Js -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail Js -->
<script src="assets/js/ajax-mail.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>