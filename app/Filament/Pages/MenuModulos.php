<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class MenuModulos extends Page
{
    // ✅ ESTA ES LA VISTA (contenido)
        public string $view = 'filament.pages.menu-modulos';
    // ❌ quitamos navegación de Filament (sidebar)
        //protected static ?string $navigationIcon = null;
        protected static string | \BackedEnum | null $navigationIcon = null;
        protected static bool $shouldRegisterNavigation = false;
    // ✅ datos dinámicos
        public $modulos = [];

    // ✅ layout personalizado (estructura HTML)
    /*public function getLayout(): string
    {
        return 'filament.pages.menu-principal';
    }*/

    // ✅ se ejecuta al cargar la página
    public function mount()
    {
        $idBloque = session('id_bloque');

        // 🔥 luego esto lo conectas a BD
        $this->modulos = [
            [
                'id' => 1,
                'NOMBRE_MODULO' => 'Solicitudes',
                'ICONO' => 'solicitudes.jpg',
                'RUTA' => '/admin/solicitudes'
            ],
            [
                'id' => 2,
                'NOMBRE_MODULO' => 'Configuración',
                'ICONO' => 'configuracion.jpg',
                'RUTA' => '/admin/configuracion'
            ],
        ];
    }

    // ✅ ir a módulo
    public function irModulo($ruta)
    {
        return redirect()->to($ruta);
    }

    // ✅ volver al menú principal
    public function irMenuPrincipal()
    {
        return redirect()->to('/admin/menu-principal');
    }

    // ✅ cerrar sesión
    public function logout()
    {
        auth()->logout();

        return redirect()->to('/admin/login');
    }
}
