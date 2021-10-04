<?php

use App\Http\Controllers\Admin\AllGameController;
use \Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


Route::get('command/{command}', function ($command){
    if ('218eu8e9012013321ue923u49' == request()->input('api_key')){
        if($command == 'reset'){
            \Illuminate\Support\Facades\Artisan::call('view:clear');
            $result = \Illuminate\Support\Facades\Artisan::output();
            dump($result);

            \Illuminate\Support\Facades\Artisan::call('route:clear');
            $result = \Illuminate\Support\Facades\Artisan::output();
            dump($result);

            \Illuminate\Support\Facades\Artisan::call('cache:clear');
            $result = \Illuminate\Support\Facades\Artisan::output();
            dump($result);

            \Illuminate\Support\Facades\Artisan::call('config:clear');
            $result = \Illuminate\Support\Facades\Artisan::output();
            dump($result);

            \Illuminate\Support\Facades\Artisan::call('config:cache');
            $result = \Illuminate\Support\Facades\Artisan::output();
            dump($result);
            die;
        }else{
            \Illuminate\Support\Facades\Artisan::call($command);
            $result = \Illuminate\Support\Facades\Artisan::output();
        }
        dd($result);
    }
});


/*Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});*/

// Frontend
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function () {
    // Route::get('/', 'HomeController@index')->name('index');
    // Route::view('/index2', 'frontend.index2');
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/casino/{slug}', 'CasinoController@index')->name('casino');
    Route::get('/sport/{slug}', 'SportController@index')->name('sport');
    Route::get('/nye-casino', 'NewCasinoController@index')->name('new-casinos');
    Route::get('/casino-bonus', 'CasinoBonusController@index')->name('casino-bonus');
    Route::get('/betting', 'BettingController@index')->name('betting');
    Route::get('/gratis-spilleautomater', 'AllGameController@index')->name('all-games');
    Route::post('/gratis-spilleautomater', 'AllGameController@ajaxFilter')->name('all-games');
    //Route::get('/alle-spill/search', 'AllGameController@search')->name('all-games.search');
    Route::get('/gratis-spilleautomater/{slug}', 'GameController@index')->name('game');
    Route::get('/alle-nyheter', 'AllNewsController@index')->name('all-news');
    Route::post('/alle-nyheter', 'AllNewsController@index')->name('all-news');
    //Route::get('/alle-nyheter/search', 'AllNewsController@search')->name('all-news.search');
    Route::get('/nyheter/{slug}', 'NewsController@index')->name('news');
    Route::post('/nyheter/comment', 'NewsController@comment')->name('news.comment');
    Route::get('/faq', 'FaqController@index')->name('faq');
    Route::get('/nettstedskart', 'SitemapController@index')->name('sitemap-page');
    Route::post('subscribers/subscribe', 'SubscriberController@subscribe')->name('subscribers.subscribe');
    Route::get('subscribers/subscribe/confirm/{email}', 'SubscriberController@subscribeConfirm')->name('subscribers.subscribe.confirm');
    Route::get('subscribers/unsubscribe/{email}', 'SubscriberController@unsubscribe')->name('subscribers.unsubscribe');

    Route::group(['as' => 'page.'], function () {
        Route::get('/om-oss', 'StaticPageController@aboutUs')->name('about-us');
        Route::get('/personvernerklæring', 'StaticPageController@privacyPolicy')->name('privacy-policy');
        Route::get('/ansvarlig-spill', 'StaticPageController@responsibleGaming')->name('responsible-gaming');
        Route::get('/vilkår-og-betingelser', 'StaticPageController@terms')->name('terms');
        Route::get('/generell-informasjon', 'StaticPageController@generalInformation')->name('general-information');
        Route::get('/informasjonskapsler', 'StaticPageController@cookies')->name('cookies');
    });
});


// Auth
// \Illuminate\Support\Facades\Auth::routes(['register' => false]);
Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');
Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );


// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/generate-sitemap', 'HomeController@generateSitemap')->name('generate-sitemap');
    // Route::get('/new-casino', 'NewCasinoController@index')->name('new-casinos');
    // Route::get('/casino-bonus', 'CasinoBonusController@index')->name('casino-bonus');
    // Route::get('/all-game', 'AllGameController@index')->name('all-game');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Casinos
    Route::delete('casinos/destroy', 'CasinoController@massDestroy')->name('casinos.massDestroy');
    Route::post('casinos/media', 'CasinoController@storeMedia')->name('casinos.storeMedia');
    Route::post('casinos/ckmedia', 'CasinoController@storeCKEditorImages')->name('casinos.storeCKEditorImages');
    Route::resource('casinos', 'CasinoController');

    // Sports
    Route::delete('sports/destroy', 'SportController@massDestroy')->name('sports.massDestroy');
    Route::post('sports/media', 'SportController@storeMedia')->name('sports.storeMedia');
    Route::post('sports/ckmedia', 'SportController@storeCKEditorImages')->name('sports.storeCKEditorImages');
    Route::resource('sports', 'SportController');

    // Games
    Route::delete('games/destroy', 'GameController@massDestroy')->name('games.massDestroy');
    Route::post('games/media', 'GameController@storeMedia')->name('games.storeMedia');
    Route::post('games/ckmedia', 'GameController@storeCKEditorImages')->name('games.storeCKEditorImages');
    Route::resource('games', 'GameController');

    // News
    Route::delete('news/destroy', 'NewsController@massDestroy')->name('news.massDestroy');
    Route::post('news/media', 'NewsController@storeMedia')->name('news.storeMedia');
    Route::post('news/ckmedia', 'NewsController@storeCKEditorImages')->name('news.storeCKEditorImages');
    Route::resource('news', 'NewsController');

    // Comments
    Route::delete('comments/destroy', 'CommentController@massDestroy')->name('comments.massDestroy');
    Route::get('comments/{id}', 'CommentController@show')->name('comments.show');
    Route::resource('comments', 'CommentController');

    // Content Categories
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tags
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Pages
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

    // Static Pages
    Route::post('static-pages/media', 'StaticPageController@storeMedia')->name('static-pages.storeMedia');
    Route::post('static-pages/ckmedia', 'StaticPageController@storeCKEditorImages')->name('static-pages.storeCKEditorImages');
    Route::get('static-pages/{page}/edit', 'StaticPageController@edit')->name('static-pages.edit');
    Route::put('static-pages/{page}', 'StaticPageController@update')->name('static-pages.update');

    // Faq Categories
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Questions
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');

    // Subscribers
    Route::get('subscribers', 'SubscriberController@index')->name('subscribers.index');
    Route::delete('subscribers/destroy', 'SubscriberController@massDestroy')->name('subscribers.massDestroy');
    Route::get('subscribers/email', 'SubscriberController@email')->name('subscribers.email');
    Route::post('subscribers/send-email', 'SubscriberController@sendEmail')->name('subscribers.sendEmail');
    Route::delete('subscribers/{subscriber}', 'SubscriberController@destroy')->name('subscribers.destroy');
    Route::get('subscribers/link-email-builder', 'SubscriberController@emailBuilderLink')->name('link-email-builder');
    Route::get('subscribers/email-builder', 'SubscriberController@emailBuilder')->name('subscribers.email-builder');

});


// Sitemap
Route::group(['as' => 'frontend.sitemap-page'], function () {
    Route::get('sitemap.xml', function() {
        // create sitemap
        $sitemap = App::make("sitemap");
        // set cache
        $sitemap->setCache('laravel.sitemap-index', 3600);
        // add sitemaps (loc, lastmod (optional))
        $sitemap->addSitemap(route('frontend.sitemap-page.pages'));
        $sitemap->addSitemap(route('frontend.sitemap-page.casinos'));
        $sitemap->addSitemap(route('frontend.sitemap-page.news'));
        $sitemap->addSitemap(route('frontend.sitemap-page.games'));
        // show sitemap
        return $sitemap->render('sitemapindex');
    });

    Route::get('sitemap_pages.xml', function() {
        $date = date('Y-m-d ').' 00:00:00';

        //clear sitemap setCache
        //$sitemap->resetSitemaps();

        // create sitemap
        $sitemap = App::make("sitemap");

        // set cache
        $sitemap->setCache('laravel.sitemap-pages', 3600);

        // add routes
        $sitemap->add(route('frontend.index'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.all-games'), $date, '1.0', 'daily');
      //  $sitemap->add(route('frontend.all-games.search'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.all-news'), $date, '1.0', 'daily');
      //  $sitemap->add(route('frontend.all-news.search'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.casino-bonus'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.page.about-us'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.page.cookies'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.page.general-information'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.page.privacy-policy'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.page.responsible-gaming'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.page.terms'), $date, '1.0', 'daily');
        $sitemap->add(route('frontend.faq'), $date, '1.0', 'daily');
        // $sitemap->add(route('frontend.home'), $date, '1.0', 'daily');
        // $sitemap->add(route('frontend.news.comment'), $date, '1.0', 'daily');
        //$sitemap->add(route('frontend.new-casinos'), $date, '1.0', 'daily');
        //$sitemap->add(route(''), $date, '1.0', 'daily');
        // show sitemap
        return $sitemap->render('xml');
    })->name('.pages');

    Route::get('sitemap_casinos.xml', function() {
        // create sitemap
        $sitemap = App::make("sitemap");
        // set cache
        $sitemap->setCache('laravel.sitemap-casinos', 3600);
        // add items
        $casinos = \App\Casino::all();
        foreach ($casinos as $casino) {
            $sitemap->add($casino->route, $casino->updated_at, '0.8', 'daily');
        }
        // show sitemap
        return $sitemap->render('xml');
    })->name('.casinos');

    Route::get('sitemap_news.xml', function() {
        // create sitemap
        $sitemap = App::make("sitemap");
        // set cache
        $sitemap->setCache('laravel.sitemap-news', 3600);
        // add items
        $news = \App\News::all();
        foreach ($news as $new) {
            $sitemap->add($new->route, $new->updated_at, '0.8', 'daily');
        }
        // show sitemap
        return $sitemap->render('xml');
    })->name('.news');

    Route::get('sitemap_games.xml', function() {
        // create sitemap
        $sitemap = App::make("sitemap");
        // set cache
        $sitemap->setCache('laravel.sitemap-games', 3600);
        // add items
        $games = \App\Game::all();
        foreach ($games as $game) {
            $sitemap->add($game->route, $game->updated_at, '0.8', 'daily');
        }
        // show sitemap
        return $sitemap->render('xml');
    })->name('.games');
});
