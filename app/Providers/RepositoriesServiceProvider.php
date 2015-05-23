<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

    protected $defer = false;

    public function register()
    {
      $this->app->bind(
        'Repositories\RoomRepositoryInterface',
        'Repositories\EloquentRoomRepository'
      );
    }

}
