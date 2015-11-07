<?php

namespace App\Support;

class Menu
{
    public static function make($file)
    {
        $items = [];
        $menu = __DIR__."/../Data/$file";
        $user = session('user');

        if (file_exists($menu)) {
            $options = json_decode(file_get_contents($menu), true);
            foreach ($options as $n => $o) {
                $add = true;
                if (array_key_exists('type', $o) && array_key_exists('type', $user)) {
                    $add = ($user['type'] == $o['type']);
                }

                if ($add) {
                    $item = [
                        'label' => $n,
                        'icon' => $o['icon'],
                        'route' => $o['route'],
                    ];

                    array_push($items, $item);
                }
            }
        }

        return $items;
    }
}
