<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class MenuPrincipal extends Page
{
    //protected string $view = 'filament.pages.menu-principal';
    public function getLayout(): string
    {
        return 'layouts.menu-principal';
    }
}
