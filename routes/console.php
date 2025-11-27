<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('generate:sitemap', function () {

    $sitemap = Sitemap::create();

    // Statik sayfalar
    $sitemap->add(Url::create('/'));
    $sitemap->add(Url::create('/about-us'));
    $sitemap->add(Url::create('/services'));
    $sitemap->add(Url::create('/portfolio'));
    $sitemap->add(Url::create('/our-team'));
    // $sitemap->add(Url::create('/blog'));

    // ✔ Dinamik blog yazıları
    // $blogs = Blog::all();

    // foreach ($blogs as $blog) {
    //     $sitemap->add(Url::create('/blog/' . $blog->slug));
    // }

    // Dosyayı kaydet
    $sitemap->writeToFile(public_path('sitemap.xml'));

    $this->info('Sitemap generated with dynamic blog posts.');
});