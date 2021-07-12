@extends('master')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Wishlist</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Wishlist Section Begin -->
    <section class="wishlist spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wishlist__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Stock</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="/sources/assets/img/shop/cart/cart-1.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>Vanilla Salted Caramel</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 15.00</td>
                                    <td class="cart__stock">In stock</td>
                                    <td class="cart__btn"><a href="#" class="primary-btn">Add to cart</a></td>
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="/sources/assets/img/shop/cart/cart-2.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>German Chocolate</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 32.50</td>
                                    <td class="cart__stock">In stock</td>
                                    <td class="cart__btn"><a href="#" class="primary-btn">Add to cart</a></td>
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="/sources/assets/img/shop/cart/cart-3.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>SWEET AUTUMN LEAVES</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 23.50</td>
                                    <td class="cart__stock">In stock</td>
                                    <td class="cart__btn"><a href="#" class="primary-btn">Add to cart</a></td>
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="/sources/assets/img/shop/cart/cart-4.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>Gluten Free Mini Dozen</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 32.50</td>
                                    <td class="cart__stock">In stock</td>
                                    <td class="cart__btn"><a href="#" class="primary-btn">Add to cart</a></td>
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wishlist Section End -->
@endsection