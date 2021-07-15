<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getHome()
    {   $sliders = Slider::where('slider_status','1')->get();
        return view(
            'pages.home',
            ['sliders' => $sliders]
        );
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getShop()
    {
        return view('pages.shop');
    }

    public function getBlog()
    {
        return view('pages.blog');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getProductDetail()
    {
        return view('checkout.product_detail');
    }

    public function getBlogDetail()
    {
        return view('pages_details.blog_detail');
    }

    public function getShoppingCart()
    {
        return view('checkout.shopping_cart');
    }

    public function getCheckout()
    {
        return view('checkout.checkout');
    }

    public function getWishlist()
    {
        return view('checkout.wishlist');
    }

    public function getCourses()
    {
        return view('courses.courses');
    }

    public function getDashboard()
    {
        return view('admin.dashboard');
    }
}
