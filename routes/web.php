<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\PortfolioContentController;
use App\Http\Controllers\BlogsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[frontendController::class,'home'])->name('home');
Route::get('/service',[frontendController::class,'service'])->name('service');
Route::get('/project',[frontendController::class,'project'])->name('project');

Route::get('/Partner',[frontendController::class,'partner'])->name('partner');
Route::get('/career',[frontendController::class,'career'])->name('career');

Route::get('/portfolio',[frontendController::class,'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}',[frontendController::class,'singlePortfolio'])->name('singlePortfolio');
Route::get('/project/{slug}',[frontendController::class,'singleProject'])->name('singleProject');
Route::get('news/',[frontendController::class,'blog'])->name('blog');
Route::get('/news/{slug}',[frontendController::class,'singlepost'])->name('singlepost');
Route::get('/about',[frontendController::class,'about'])->name('about');
Route::get('/free-quate',[frontendController::class,'freeQuote'])->name('quote');
Route::get('/tag/{slug}',[frontendController::class,'searchTag'])->name('searchTag');
Route::get('/category/{slug}',[CategoryController::class,'singleCat'])->name('singleCat');
Route::get('/service/{slug}',[ServicesController::class,'singleService'])->name('singleService');
Route::get('/submain/{id}',[ServicesController::class,'subMain']);





/* ==================Service Routes==================*/

Route::get('/videomaking',[ServiceController::class,'videomaking'])->name('videomaking');
Route::get('/softwaredevelopment',[ServiceController::class,'softwaredevelopment'])->name('softwaredevelopment');
Route::get('/businessconsultancy',[ServiceController::class,'businessconsultancy'])->name('businessconsultancy');
Route::get('/digitalmarketing',[ServiceController::class,'digitalmarketing'])->name('digitalmarketing');
Route::get('/graphicsdesign',[ServiceController::class,'graphicsdesign'])->name('graphicsdesign');
Route::get('/webdesignanddevelopment',[ServiceController::class,'webdesignanddevelopment'])->name('webdesignanddevelopment');
Route::get('/socialmedia',[ServiceController::class,'socialmedia'])->name('socialmedia');
Route::get('/appdesign',[ServiceController::class,'appdesign'])->name('appdesign');


/*======================== Digital Marketing Routes=============*/  

Route::get('/socialmediamarketing',[DigitalMarketingController::class,'socialmediamarketing'])->name('socialmediamarketing');
Route::get('/contentmarketing',[DigitalMarketingController::class,'contentmarketing'])->name('contentmarketing');
Route::get('/emailmarketing',[DigitalMarketingController::class,'emailmarketing'])->name('emailmarketing');
Route::get('/videomarketing',[DigitalMarketingController::class,'videomarketing'])->name('videomarketing');
Route::get('/influencermarketing',[DigitalMarketingController::class,'influencermarketing'])->name('influencermarketing');
Route::get('/seo',[DigitalMarketingController::class,'seo'])->name('seo');
Route::get('/analyticsandtracking',[DigitalMarketingController::class,'analyticsandtracking'])->name('analyticsandtracking');

/*======================== Portfolio Content Routes=============*/ 

Route::get('/allproject',[PortfolioContentController::class,'allproject'])->name('allproject');
Route::get('/digitalmarketingportfolio',[PortfolioContentController::class,'digitalmarketingportfolio'])->name('digitalmarketingportfolio');
Route::get('/seoportfolio',[PortfolioContentController::class,'seoportfolio'])->name('seoportfolio');
Route::get('/graphicsportfolio',[PortfolioContentController::class,'graphicsportfolio'])->name('graphicsportfolio');
Route::get('/websiteportfolio',[PortfolioContentController::class,'websiteportfolio'])->name('websiteportfolio');
Route::get('/ecommerceportfolio',[PortfolioContentController::class,'ecommerceportfolio'])->name('ecommerceportfolio');

 /*======================== Portfolio Graphic Design=============*/ 
 Route::get('/logodesign',[PortfolioContentController::class,'logodesign'])->name('logodesign');
 Route::get('/brandingdesign',[PortfolioContentController::class,'brandingdesign'])->name('brandingdesign');
 Route::get('/posterdesign',[PortfolioContentController::class,'posterdesign'])->name('posterdesign');


 /*======================== Portfolio Website=============*/ 

 Route::get('/allwebsite',[PortfolioContentController::class,'allwebsite'])->name('allwebsite');

 /*======================== Portfolio E-Commerce =============*/ 
 Route::get('/allecommerce',[PortfolioContentController::class,'allecommerce'])->name('allecommerce');

 /*======================== Portfolio SEO=============*/ 
 Route::get('/allseo',[PortfolioContentController::class,'allseo'])->name('allseo');

 /*======================== Portfolio Digital Marketing=============*/ 
 Route::get('/alldigitalmarketing',[PortfolioContentController::class,'alldigitalmarketing'])->name('alldigitalmarketing');

 /* ==================Blogs Route=================== */
 Route::get('/blogs',[BlogsController::class,'blogs'])->name('blogs');
 Route::get('/blog1',[BlogsController::class,'blog1'])->name('blog1');
 Route::get('/blog2',[BlogsController::class,'blog2'])->name('blog2');
 Route::get('/blog3',[BlogsController::class,'blog3'])->name('blog3');
 Route::get('/blog4',[BlogsController::class,'blog4'])->name('blog4');
 Route::get('/blog5',[BlogsController::class,'blog5'])->name('blog5');
 Route::get('/blog6',[BlogsController::class,'blog6'])->name('blog6');
Route::get('/popup',[frontendController::class,'popup'])->name('quote2');
Route::match(['get','post'],'/search',[ServicesController::class,'serviceSearch'])->name('service.search');


Route::get('/contact',[frontendController::class,'contact'])->name('contact');
Route::post('/send-message',[frontendController::class,'sendmessage'])->name('sendmessage');
Route::match(['get','post'],'/send-quote',[frontendController::class,'freequotesend'])->name('freequotesend');

Auth::routes();

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::match(['get','post'],'/settings',[ServicesController::class,'settings'])->name('settings');
    Route::match(['get','post'],'/pages/{about}',[ServicesController::class,'pages'])->name('pages');
    Route::view('service', 'admin.services.list');
    Route::match(['get', 'post'], '/profile', [AdminController::class,'profile'])->name('profile');
    Route::post('/update-password',[AdminController::class,'updatepassword'])->name('updatepassword');
    Route::resources([
        'blog'=>BlogController::class,
        'tag'=>TagController::class,
        'category'=>CategoryController::class,
        'service'=>ServicesController::class,
        'portfolio'=>PortfolioController::class,
        'project'=>ProjectController::class,
        'team'=>TeamController::class,

    ]);
});
Route::get('/migrate', function(){
    Artisan::call('migrate:fresh', ['--force' => true]);
    dd('migrated!');
});

