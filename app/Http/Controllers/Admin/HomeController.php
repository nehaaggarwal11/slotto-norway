<?php

namespace App\Http\Controllers\Admin;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class HomeController
{
    public function index()
    {
        return view('admin.home');
    }

    public function generateSitemap()
    {
        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url){ // Remove http and https route then add url base route
                $uri = implode('/', $url->segments());
                $link = str_replace(['/no/no','/no/en'], '/no', config('app.url') . '/' . $uri);
                $url->setUrl($link);
                return $url;
            })
            ->getSitemap()
            ->writeToFile(public_path('sitemap.xml'));

        return response()->json([
            "success" => true,
            "message" => "A new sitemap was generated.",
        ]);
    }
}
