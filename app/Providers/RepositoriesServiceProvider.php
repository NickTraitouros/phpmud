<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

    protected $defer = false;

    public function register()
    {
      $this->app->bind(
        'App\ModelSwitcher\Model',
        'Jenssegers\Mongodb\Model' //use MongoDB
      );

      // $this->app->bind(
      //   'App\ModelSwitcher\ModelInterface',
      //   'Illuminate\Database\Eloquent\Model' //use Eloquent
      // );

      $this->app->bind(
        'Repositories\RoomRepositoryInterface',
        'Repositories\EloquentRoomRepository'
      );
    }

}
