<!-- Special Price -->



<?php
    $brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['top_sale_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }

            // save for later
    if (isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }

    
}





$in_cart = $Cart->getCartId($product->getData('cart'));

?>








<!-- `PRODUCT-SECTION START  -->

<section class="product-section product-section-three">
    <div class="container">
        <div class="ev-top-content">
            <span>Get Your’s One</span>
            <h2>Products Are on Sale</h2>
            <p>When the musics over turn off the lig lore magn epteur sint occaecat cupidatat non proide</p>
        </div>
        <div class="menu-fulter">
            <ul class=" justify-content-center nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"><a href="#" class="nav-link active" id="pills-home-tab" data-bs-toggle="tab" data-bs-target="#pills-home" role="tab" aria-selected="true">Recent Listed</a></li>
                <li class="nav-item" role="presentation"><a href="#" class="nav-link" id="pills-profile-tab" data-bs-toggle="tab" data-bs-target="#pills-profile" role="tab" aria-selected="true">Popular Pets</a></li>
                <li class="nav-item" role="presentation"><a href="#" class="nav-link " id="pills-contact-tab" data-bs-toggle="tab" data-bs-target="#pills-contact" role="tab" aria-selected="true">Top Featured</a></li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="products ev-products">
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/recent/shape-1.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                                <h2 class="product-title"><a href="single-product.html">polo shirt for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/recent/shape-2.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Girls night gown</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/recent/shape-3.png" alt="products">
                            </a>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Mens stylish T-shirt</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/recent/shape-4.png" alt="products">
                            </a>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Simple soft towel</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/recent/shape-5.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Woman fashion dress</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/recent/shape-6.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Original desi Dog</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="products ev-products">
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/popular/shape-1.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                                <h2 class="product-title"><a href="single-product.html">polo shirt for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/popular/shape-2.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Girls night gown</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/popular/shape-3.png" alt="products">
                            </a>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Mens stylish T-shirt</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/popular/shape-4.png" alt="products">
                            </a>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Simple soft towel</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/popular/shape-5.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                                <h2 class="product-title"><a href="single-product.html">polo shirt for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/popular/shape-6.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Girls night gown</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="products ev-products">
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/top/shape-1.png" alt="products">
                            </a>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Mens stylish T-shirt</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/top/shape-2.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Simple soft towel</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/top/shape-3.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                                <h2 class="product-title"><a href="single-product.html">polo shirt for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/top/shape-4.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Girls night gown</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/top/shape-5.png" alt="products">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Mens stylish T-shirt</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/index-3/products/top/shape-6.png" alt="products">
                            </a>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Simple soft towel</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="shop-with-sidebar.html" class="view-all">View All</a>
    </div>
</section>

<!-- PRODUCT-SECTION END  -->


































 
 
 <!-- Featured Products area start here  -->
        <div class="featured-productss-area section-top pb-100">




            <div class="container">








                <div class="row">


                <?php array_map(function ($item) use($in_cart){ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                    
                        <div class="single-grid-product">
                        
                            <div class="product-top">
                            
                            <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" ></a>

                            </div>


                            <div class="product-info text-center">
                                <h4 class="product-catagory"><?php echo $item['item_cat'] ?? "Unknown"; ?></h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html"><?php echo  $item['item_name'] ?? "Unknown";  ?></a></h3>
                                <!-- <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul> -->
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$<?php echo $item['item_price'] ?? '0' ; ?></span>
                                </div>
                                <!-- <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color"
                                                class="color-select" type="radio" checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color"
                                                class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>
    
                                        <label>
                                            <input name="modal-product-color"
                                                class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div> -->

                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>



                                <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo '<button type="submit"  class="add-cart  btn-success ">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="add-cart action-btn btn-warning  ">Add to Cart</button>';
                                }
                                ?>
                                </form>


                               
                                
                            </div>
                        </div>
                    </div>
















                    <?php }, $product_shuffle) ?>
                </div>
            </div>
        </div>
        <!-- Featured Products area end here  -->