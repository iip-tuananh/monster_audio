<?php

namespace App\Http\Controllers\Front;

use App\Helpers\FileHelper;
use App\Http\Traits\ResponseTrait;
use App\Model\Admin\Block;
use App\Model\Admin\Category;
use App\Model\Admin\CategorySpecial;
use App\Model\Admin\Product;
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
        $data['banners'] = Banner::with(['image'])->get();
        $data['partners'] = Partner::with(['image'])->get();
        $data['reviews'] = Review::with(['image'])->get();
        $data['newProducts'] = Product::with(['image'])->where('status', 1)->limit(6)->orderBy('id','DESC')->inRandomOrder()->get();
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
                    $q->where('status', 1);
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

        return view('site.home', $data);
    }

    public function getProductList($categorySlug)
    {
        $category = Category::findBySlug($categorySlug);
        $products = Product::query()->with(['image', 'galleries.image'])
            ->where('cate_id', $category->id)
            ->latest()->get();

        return view('site.product_category', compact('products', 'category'));
    }

    public function searchProducts(Request $request) {
        $inStock = $request->get('availability') == 'true' ? 1 : 2;
        $priceGte = $request->get('priceGte');
        $priceLte = $request->get('priceLte');
        $sortBy = $request->input('sort_by');

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

        $products = $products->get();

        $json = new \stdClass();
        $json->success = true;
        $json->message = "Thao tác thành công!";
        $json->data = view('site.partials.product_list', compact('products'))->render();

        return Response::json($json);
    }
}
