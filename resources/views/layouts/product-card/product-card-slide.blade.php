
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Топ продаж</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active">
                                <a data-toggle="tab" href="#tab2">Ноутбуки</a>
                            </li>
                            <li><a data-toggle="tab" href="#tab2">Смартфоны</a></li>
                            <li><a data-toggle="tab" href="#tab2">Камеры</a></li>
                            <li><a data-toggle="tab" href="#tab2">Аксесуары</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <!-- product -->
                                @foreach($products as $product)
                                    <div class="product card-info">
                                        <div class="product-img">
                                            @if ($product->images->first())
                                                <img src="{{ asset('uploads/' . $product->images->first()->image_path) }}"
                                                     alt="{{ $product->name }}">
                                            @else
                                                <img src="{{ asset('img/no-image.png') }}" alt="Нет изображения">
                                            @endif

                                            @if ($product->discount > 0)
                                                <div class="product-label">
                                                    <span class="sale">-{{ $product->discount }}%</span>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="product-body">
                                            <p class="product-category">{{ $product->category->name ?? 'Без категории' }}</p>

                                            <h3 class="product-name">
                                                <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                            </h3>

                                            <h4 class="product-price">
                                                <span class="price-value">{{ $product->price - $product->discount }}</span>.00
                                                сом
                                                <del class="product-old-price">{{ $product->price }} сом</del>
                                            </h4>
                                        </div>

                                        <div class="add-to-cart">
                                            <button
                                                class="add-to-cart-btn"
                                                data-id="{{ $product->id }}"
                                                data-name="{{ $product->name }}"
                                                data-price="{{ $product->price - $product->discount }}"
                                                data-img="{{ $product->images->first() ? asset('uploads/' . $product->images->first()->image_path) : asset('img/no-image.png') }}"
                                            >
                                                <i class="fa fa-shopping-cart"></i> В корзину
                                            </button>
                                        </div>
                                    </div>
                                @endforeach




                                <!-- /product -->
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

