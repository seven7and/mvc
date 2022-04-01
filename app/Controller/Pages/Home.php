<?php

namespace App\Controller\Pages;
use App\Model\Entity\Organization;
use App\Utils\View;

class Home extends Page {

    public static function getHome(){
        //VIEW DA HOME
        $obOrganization = new Organization();
        $content = View::render('pages/home', [
            'name' => $obOrganization->name ,
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);
        return parent::getPages('Acreditando', $content);
    }

}