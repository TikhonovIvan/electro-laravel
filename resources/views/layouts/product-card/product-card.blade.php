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

                                    <p class="product-category">Артикул: {{ $product->sku}}</p>
                                </div>

                                <div class="add-to-cart">
                                    <button
                                        class="add-to-cart-btn"
                                        data-id="{{ $product->id }}"
                                        data-name="{{ $product->name }}"
                                        data-price="{{ $product->price - $product->discount }}"
                                        data-img="{{ $product->images->first() ? asset('uploads/' . $product->images->first()->image_path) : asset('img/no-image.png') }}"
                                        data-sku="{{ $product->sku }}"
                                    >
                                        <i class="fa fa-shopping-cart"></i> В корзину
                                    </button>
                                </div>
                            </div>
                        @endforeach


                        <!-- /card-info -->
                    </div>


                    <style>
                        .small.text-muted {
                            display: none;
                        }

                        .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
                            background: #d10024e6;
                            border: none;

                        }
                    </style>
                    {{--                    Пагинация--}}
                    <div class="pagination-block">
                        {{$products->links()}}
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


