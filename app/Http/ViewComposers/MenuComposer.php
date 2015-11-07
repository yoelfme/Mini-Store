<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Support\Menu;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menu = Menu::make('menu.json');
        $view->with('menu', $menu);
    }
}