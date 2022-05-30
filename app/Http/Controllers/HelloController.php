<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
global $head,$style,$body,$end;
$head='<html><head>';


$style=<<<E0F

        <style>
         body {fontsize:16pt;color:#999;}
        </style>
        
    E0F;

    $body='</head><body>';
    $end='</body></html>';

    function tag($tag,$txt){
     return "<{$tag}>".$txt."</{$tag}>";
    }



class HelloController extends Controller{
        public function index(){
            global $head,$style,$body,$end;

            $html =$head.tag('title','Hello/Index').$body
            . tag('h1','Index').tag('p','this is Index page')
            . '<a href ="/hello/other">go to Other page</a>'
            .$end;
            return $html;
        }


        public function other(){
            global $head,$style,$body,$end;

            $html =$head.tag('title','Hello/Other').$style.$body
            . tag('h1','Other').tag('p','this is Ohter page')
            .$end;
            return $html;
        }





    }

    

