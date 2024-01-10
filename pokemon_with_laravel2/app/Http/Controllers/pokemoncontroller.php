<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class pokemoncontroller extends Controller
{
 
  public function index(){
    $datos = DB::select("select * from pkmdatos ");
    return view('welcome')->with("datos",$datos);
  } 

  public function create(Request $request){

try {
  $sql=DB::insert("insert into pkmdatos(nombre,tipo,tamano,peso)values(?,?,?,?)",[
    $request->formnombre,
    $request->formtipo,
    $request->formtamaño,
    $request->formpeso,
  ]);
} catch (\Throwable $th) {
  $sql=0;
}
if ($sql == true){
  return back()->with("Excelente", "Pokemon añadido");
}else{
  return back()->with("Error", "No se pudo añadir el Pokemon");
}
  }

/////
public function update(Request $request){
  $sql = DB::update(
      "UPDATE pkmdatos SET nombre = ?, tipo = ?, tamano = ?, peso = ? WHERE id = ?", 
      [
          $request->formnombre,
          $request->formtipo,
          $request->formtamaño,
          $request->formpeso,
          $request->formid // Asegúrate de tener el valor del ID disponible
      ]
  );
 
  if ($sql > 0){
      return back()->with("Excelente", "Pokemon actualizado");
  } else {
      return back()->with("Error", "No se pudo actualizar el Pokemon");
  }
}
public function delete($id){

  try {
    $sql=DB::delete(" delete from pkmdatos where id=$id" );
  } catch (\Throwable $th) {
    $sql=0;
  }
  if ($sql == true){
    return back()->with("Excelente", "Pokemon borrado corectamente");
  }else{
    return back()->with("Error", "No se pudo borrar el Pokemon");
  }
    }
}


