<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GuzzleServiceProvider extends ServiceProvider {

    protected $defer = false;

    public function register()
    {
      $this->app->singleton('Guzzle',
          function() {
            return new \GuzzleHttp\Client();
          });
    }
}
