

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Новы товары</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="wrapper-cards-block">
                        <!-- card-info -->
                        <div class="product card-info">
                            <div class="product-img">
                                <img src=" {{asset('assets/img/product01.png ')}}" alt="Ноутбук Asus A15" />
                                <div class="product-label">
                                    <span class="sale">-30%</span>
                                    <span class="new">Новинка</span>
                                </div>
                            </div>

                            <div class="product-body">
                                <p class="product-category">Ноутбук</p>
                                <h3 class="product-name">
                                    <a href="{{route('product.show', 1)}}">Ноутбук Asus A15</a>
                                </h3>
                                <h4 class="product-price">
                                    <span class="price-value">98000</span>.00 сом
                                    <del class="product-old-price">99000.00 сом</del>
                                </h4>
                                <div class="product-rating">
                                    <div class="d-none">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>

                                <div class="product-btns">
                                    <button class="add-to-wishlist d-none">
                                        <i class="fa fa-heart-o"></i>
                                        <span class="tooltipp">Избранное</span>
                                    </button>

                                    <button class="quick-view">
                                        <a href=""><i class="fa fa-eye"></i></a>
                                        <span class="tooltipp">Посмотреть</span>
                                    </button>
                                </div>
                            </div>

                            <div class="add-to-cart">
                                <button
                                    class="add-to-cart-btn"
                                    data-id="1"
                                    data-name="Ноутбук Asus A15"
                                    data-price="98000"
                                    data-img="./img/product01.png"
                                >
                                    <i class="fa fa-shopping-cart"></i> В корзину
                                </button>
                            </div>
                        </div>

                        <div class="product card-info">
                            <div class="product-img">
                                <img src="{{asset('assets/img/product02.png ')}}" alt="Ноутбук Asus A15" />
                                <div class="product-label">
                                    <span class="sale">-30%</span>
                                    <span class="new">Новинка</span>
                                </div>
                            </div>

                            <div class="product-body">
                                <p class="product-category">Наушники</p>
                                <h3 class="product-name">
                                    <a href="product.html">Наушники Asus G15</a>
                                </h3>
                                <h4 class="product-price">
                                    <span class="price-value">8000</span>.00 сом
                                    <del class="product-old-price">9000.00 сом</del>
                                </h4>
                                <div class="product-rating">
                                    <div class="d-none">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>

                                <div class="product-btns">
                                    <button class="add-to-wishlist d-none">
                                        <i class="fa fa-heart-o"></i>
                                        <span class="tooltipp">Избранное</span>
                                    </button>

                                    <button class="quick-view">
                                        <a href="product.html"><i class="fa fa-eye"></i></a>
                                        <span class="tooltipp">Посмотреть</span>
                                    </button>
                                </div>
                            </div>

                            <div class="add-to-cart">
                                <button
                                    class="add-to-cart-btn"
                                    data-id="2"
                                    data-name="Наушники Asus A15"
                                    data-price="8000"
                                    data-img="./img/product02.png"
                                >
                                    <i class="fa fa-shopping-cart"></i> В корзину
                                </button>
                            </div>
                        </div>

                        <!-- /card-info -->
                    </div>

                    <div class="pagination-block">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


