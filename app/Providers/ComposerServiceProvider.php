<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('home', function($view) {
            // dd('here');
            $items = \App\Item::get()->sortBy('order');
            $types = \App\Type::get()->sortBy('order');

            $view->with(compact('items', 'types'));
        });

        view()->composer('diner', function($view) {
            // dd('there');
            $featuredItems = \App\Item::featuredItems();
            $types = \App\Type::get()->sortBy('order');

            $menuItems = [];
            foreach ($types as $t => $type) {
                $menuItems[$t] = \App\Item::getItems($type->slug)->sortBy('order');
                $menuItems[$t]->typeName = $type->name;
                $menuItems[$t]->typeSlug = $type->slug;

            }
            // dd($menuItems);

            $view->with(compact('featuredItems', 'menuItems', 'types'));
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
