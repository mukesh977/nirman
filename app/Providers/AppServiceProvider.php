<?php

namespace App\Providers;

use App\Http\View\Composer\AboutUsComposer;
use App\Http\View\Composer\CategoryComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 
use App\Http\View\Composer\NavbarComposer;
use App\Http\View\Composer\ContactComposer;
use App\Http\View\Composer\LogoComposer;
use App\Http\View\Composer\FooterComposer;
use App\Http\View\Composer\TagComposer;
use ConsoleTVs\Charts\Registrar as Charts;

class AppServiceProvider extends ServiceProvider
{
	public function register()
	{
        $this->app->bind('path.public', function () {
			return base_path() . '/../public_html';
		});
	}

	public function boot(Charts $charts)
	{
		Schema::defaultStringLength(191); 

		$charts->register([
			\App\Charts\SaleChart::class
		]);

		View::composer('frontend.includes.navbar', NavbarComposer::class);
		
		View::composer(['frontend.shop', 'frontend.category', 'frontend.tag'], CategoryComposer::class);
		View::composer(['frontend.shop', 'frontend.tag',  'frontend.category'], TagComposer::class);
		// View::composer(['frontend.includes.navbar', 'frontend.includes.footer'], LogoComposer::class);
		// View::composer('frontend.includes.footer', AboutUsComposer::class);
		// View::composer(['frontend.includes.navbar', 'frontend.includes.footer'], ContactComposer::class);
		// View::composer('frontend.includes.footer', FooterComposer::class);
	}
}
