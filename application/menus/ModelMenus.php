<?php
namespace application\menus;

class ModelMenus {

    public function main_menu_datas() {
        $menus = [
                    [ 'url' => SITE_URL, 'title' => 'Accueil'],
                    [ 'url' => SITE_URL, '/contact', 'title' => 'Contact']
        ];
        return $menus;
    }

}
