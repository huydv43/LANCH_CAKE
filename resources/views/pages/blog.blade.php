@extends('master')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="/sources/assets/img/blog/blog-1.jpg">
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span>James Myers</span></li>
                                    <li>13 Nov 2020</li>
                                    <li>112 Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2>Delivering Kisses And Miracles</h2>
                            <p>Herbs are fun and easy to grow. When harvested they make even the simplest meal seem like
                                a gourmet delight. By using herbs in your cooking you can easily change the flavors of
                            your recipes in many different ways, according to which herbs you add...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="/sources/assets/img/blog/blog-2.jpg">
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span>James Myers</span></li>
                                    <li>13 Nov 2020</li>
                                    <li>112 Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2>Make Grilling A Healthy Experience</h2>
                            <p>Herbs are fun and easy to grow. When harvested they make even the simplest meal seem like
                                a gourmet delight. By using herbs in your cooking you can easily change the flavors of
                            your recipes in many different ways, according to which herbs you add...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="/sources/assets/img/blog/blog-3.jpg">
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span>James Myers</span></li>
                                    <li>13 Nov 2020</li>
                                    <li>112 Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2>Bbq Myths Getting You Down</h2>
                            <p>Herbs are fun and easy to grow. When harvested they make even the simplest meal seem like
                                a gourmet delight. By using herbs in your cooking you can easily change the flavors of
                            your recipes in many different ways, according to which herbs you add...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="/sources/assets/img/blog/blog-4.jpg">
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span>James Myers</span></li>
                                    <li>13 Nov 2020</li>
                                    <li>112 Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2>Keep That Cooking Area Clean</h2>
                            <p>Herbs are fun and easy to grow. When harvested they make even the simplest meal seem like
                                a gourmet delight. By using herbs in your cooking you can easily change the flavors of
                            your recipes in many different ways, according to which herbs you add...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="shop__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><span class="arrow_carrot-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Enter keyword">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>Follow me</h5>
                            <div class="blog__sidebar__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>Popular posts</h5>

                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="/sources/assets/img/blog/br-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h4>Secret To Cooking Vegetables</h4>
                                        <span>13 Nov 2020</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="/sources/assets/img/blog/br-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h4>Bbq Myths Getting You Down</h4>
                                        <span>13 Nov 2020</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="/sources/assets/img/blog/br-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h4>Save Money The Crock Pot Way</h4>
                                        <span>13 Nov 2020</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="/sources/assets/img/blog/br-4.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h4>Grilling Tips For The Dog Days Of Summer</h4>
                                        <span>13 Nov 2020</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="/sources/assets/img/blog/br-5.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h4>Barbeque Techniques Two Methods To Consider</h4>
                                        <span>13 Nov 2020</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>Categories</h5>
                            <div class="blog__sidebar__item__categories">
                                <ul>
                                    <li><a href="#">Repice <span>36</span></a></li>
                                    <li><a href="#">Guides <span>18</span></a></li>
                                    <li><a href="#">News <span>09</span></a></li>
                                    <li><a href="#">Videos <span>12</span></a></li>
                                    <li><a href="#">Trending <span>27</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>NEWsLETTeR</h5>
                            <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <label for="agg">
                                    I agree to the terms & conditions
                                    <input type="checkbox" id="agg">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection