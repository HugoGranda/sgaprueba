<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Livewire\Attributes\On;

class MenuPrincipal extends Page
{
    public string $view = 'filament.pages.menu-principal';
    /*public function getLayout(): string
    {
        return 'layouts.menu-principal';
    }*/
    
    //#[On('accesoBloque')]
    public function accesoBloque($idBloque)
    {
        //dd($idBloque);
        // Guardas en sesión
        session([
            'id_bloque' => $idBloque
        ]);

        // Aquí puedes validar si quieres
        // (igual que tu estado en CI3)

        return $this->redirect('/admin/menu-modulos');
    }
}
