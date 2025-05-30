@extends('layouts.app')


@section('title' , 'Все категории')

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div id="aside" class="col-md-3">
                    <form method="GET" action="{{ route('category.index') }}">
                        <div class="aside">
                            <h3 class="aside-title">Категории</h3>
                            <div class="checkbox-filter">
                                @foreach($categories as $category)
                                    <div class="input-checkbox">
                                        <input
                                            type="checkbox"
                                            id="category-{{ $category->id }}"
                                            name="categories[]"
                                            value="{{ $category->slug }}"
                                            {{ in_array($category->slug, request()->input('categories', [])) ? 'checked' : '' }}
                                        />
                                        <label for="category-{{ $category->id }}" style="font-size: 16px">
                                            <span></span>
                                            {{ $category->name }}
                                            <small>({{ $category->products()->count() }})</small>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="aside">
                            <h3 class="aside-title">Цена</h3>
                            <div class="price-filter">
                                <div id="price-slider"></div>
                                <div class="input-number price-min">
                                    <input id="price-min" name="price_min" type="number" value="{{ request('price_min') }}"/>
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                                <span>-</span>
                                <div class="input-number price-max">
                                    <input id="price-max" name="price_max" type="number" value="{{ request('price_max') }}"/>
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger w-100 mt-3 fs-4">Применить фильтр</button>
                    </form>
                </div>

                <div id="store" class="col-md-9 ">
                    <div class="wrapper-row-cards">
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
                                        <span class="price-value">{{ $product->price - $product->discount }}</span>.00 сом
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
                                        data-sku="{{ $product->sku }}"
                                    >
                                        <i class="fa fa-shopping-cart"></i> В корзину
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="store-filter clearfix">
                        <style>
                            .small.text-muted {
                                display: none;
                            }

                            .pagination > .active > a,
                            .pagination > .active > a:focus,
                            .pagination > .active > a:hover,
                            .pagination > .active > span,
                            .pagination > .active > span:focus,
                            .pagination > .active > span:hover {
                                background: #d10024e6;
                                border: none;
                            }
                        </style>
                        {{ $products->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
