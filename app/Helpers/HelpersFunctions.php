<?php
namespace App\Helpers;

use Session;

class HelpersFunctions {

    //langue du site
    public static function lang(){
        $data = array(
            ['value' => 'en', 'name' => 'EN', 'flag' => asset('assets/img/elements/en.png')],
            ['value' => 'fr', 'name' => 'FR', 'flag' => asset('assets/img/elements/fr.png')],
        );
        return $data;
    }
}
