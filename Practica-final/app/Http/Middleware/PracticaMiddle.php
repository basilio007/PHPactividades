<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PracticaMiddle
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado
        if ($request->user() && $request->user()->rol == 'admin') {
            
            // Si el rol del usuario es 'admin', redirige a la ruta '/logearse'
            return redirect()->route('Proyecto.login');
        }

        // Si el rol del usuario no es 'admin', redirige a la ruta '/userview'
        return redirect()->route('proyecto.Uview');
    }
}
