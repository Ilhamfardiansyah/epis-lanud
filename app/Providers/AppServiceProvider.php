<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory;
use Faker\Generator as Faker;
use Faker\Provider\Base;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         // Inisialisasi Faker
        $this->app->singleton(Faker::class, function () {
            $faker = FakerFactory::create();

            // Tambahkan provider custom
            $faker->addProvider(new class($faker) extends Base {
                public function nip() {
                    // Format NIP custom
                    return mt_rand(1000000000000000, 9999999999999999);
                }
            });

            return $faker;
        });
    }
}
