<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use SEOMeta;
use SEO;
use Artesaos\SEOTools\Facades\SEOTools;

class SeoController extends Controller {

    public static function seoManager($title = null, $description = null, $key = null){
        $title = empty($title) ? "Tojo RODIALSON - A passion for the codes" : $title;

        $description = empty($description) ? "I'm Tojo RODIALSON, backend developer since 2014. I choose this job because I have a passion for codes. Everyday I speak PHP and work on Laravel a big structure. If one day, I'll must speak C# or Java, I'll be very happy :)" : $description;

        $key = empty($key) ? ["Tojo RODIALSON", "backend developer", "back-end developer", "web developer", "website builder", "developer", "freelancer developer", "laravel developer", "php developer", "java developer", "c# developer"] : $key;

        $image = asset('assets/img/logo.png');

        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::setCanonical(url('/'));
        SEOMeta::addKeyword($key);
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@tojorodialson');
        SEO::twitter()->setImage($image);
        SEOTools::jsonLd()->addImage($image);
    }
}
