<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->composeNavigation();
  }

  /**
   * loads the nav menu with link to latest article
   *
   */
  private function composeNavigation()
  {

    view()->composer('partials.nav', 'App\Http\Composers\NavigationComposer');

  }
  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }
}
