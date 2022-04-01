<?php

namespace App\Controller\Pages;
use App\Utils\View;

class Page
{

    /**
     * Método responsável por renderizar o topo da página
     * @return void
     */
    public static function getHeader(){
        return View::render('pages/header');
    }

    /**
     * Método responsável por renderizar o rodapé da página
     * @return void
     */
    public static function getFooter(){
        return View::render('pages/footer');
    }



    public static function getPages($title, $content){
        echo View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}