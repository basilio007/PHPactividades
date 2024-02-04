<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;


class ProyectoController extends Controller
{
    
 
 
  public function index(){
   return view("welcome"); 
  }

  public function create(Request $request){
    try{
        $sql=DB::insert("insert into datos(nick,email,nombre,apellidos,dni,fecha_nacimiento,contraña,rol)values(?,?,?,?,?,?,?,?)",[
            $request->nick,  
            $request->email,
            $request->nombre,
            $request->apellidos,
            $request->dni,
            $request->fecha_nacimiento,
            $request->contraña,
            $request->rol
        ]);  
    }catch(\Throwable $th){
        return back()->with("incorecto","Usuario no registrado ha habido un error");
    }
if ($sql == true) {
    return redirect()->route('Proyecto.login')->with("corecto","Usuario creado correctamente");

}else{
    return back()->with("incorecto","Usuario no registrado ha habido un errr");
}
  }
//funcion que devuelve la vista del login
  public function loginview(){
    return view("ProyectoLogin"); 
   }

   //funcion para la logica del login
  public function login(Request $request) {
    $usuario = Usuario::where('email', $request->email)
                        ->where('contraña', $request->password)
                        ->first();
    
                        
    if ($usuario) {

        return redirect()->route('app.see')->with('mensaje', 'Usuario autenticado correctamente');
    } else {
        // Usuario no encontrado
        return back()->with('error', 'Credenciales inválidas. Inténtalo de nuevo.');
    }

   
}

public function app(){
    //return view("aplicacion");
    $data = DB::select("SELECT * FROM datos"); 

    return view('aplicacion')->with('data', $data); 
}

// funcion que permite que el boton logout funcione
public function logout()
{
    return redirect()->route('Pproyecto.index')->with('mensaje', 'Sesión cerrada correctamente');
}

// funcion que devuelve la vista para modificar unuario (Admin)
public function modificar(){
    return view('modificar');
}

// funcion para modificar el usuario
public function actualizar(Request $request) {
    $usuario = Usuario::findOrFail($request->id); // Suponiendo que tu modelo de usuario se llama Usuario

    $usuario->nick = $request->input('nuevo_nick');
    $usuario->email = $request->input('nuevo_email');
    $usuario->nombre = $request->input('nuevo_nombre');
    $usuario->apellidos = $request->input('nuevos_apellidos');
    $usuario->dni = $request->input('nuevo_dni');
    $usuario->fecha_nacimiento = $request->input('nueva_fecha_nacimiento');

    // Guardar los cambios en la base de datos
    $usuario->save();

    // Redirigir a alguna página de confirmación o a la lista de usuarios
    return redirect()->route('app.see')->with('success', 'Datos actualizados correctamente');
}




// funcion que que permite que el boton cancelar funcione
public function retroceder(){
    return redirect()->route('app.see');
}
// funcion a que devielve la vista de la modificacion de login
public function modifique(){
    return redirect()->route('proyecto.mmdfikusr');
}

public function Uview(){
    return view('vistausuario');
}

// funcion para eliminar usuario
public function delete($id){
    $usuario = Usuario::findOrFail($id);
    $usuario->delete();

    return redirect()->back()->with('success', 'Usuario eliminado correctamente');
}

}

// public function app () {
   
    
//     $userId = auth()->id(); // Suponiendo que estás utilizando el sistema de autenticación de Laravel

//     // Recuperar los datos del usuario desde la base de datos
//     $userData = DB::table('datos')->where('id', $userId)->first(); // Suponiendo que tienes una columna 'id' en tu tabla 'datos'

//     // Pasar los datos del usuario a la vista
//     return view('aplicacion')->with('userData', $userData);
// }


// funcion para recuperar todos los datos de la base de datos







