<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;



class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return \View::make('file/file');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request)
    {
      $tipo = "documentos";
      $materia = "webIII";
      $public_path = storage_path();
      //$url = "$tipo/$materia/";
       $url = $public_path.'/app/'.$tipo.'/'.$materia.'/'.$archivo;
      //verificamos si el archivo existe y lo retornamos
      if (file_exists($url))
      {
          Storage::delete($tipo.'/'.$materia.'/'.$archivo);
          return 'Se borro con exito';
      }else{
        return abort (404);
      }

      //si no se encuentra lanzamos un error 404.
    return 'No se deberia llegar aquí';
    }


    /**
     * guarda un archivo en nuestro directorio local.
     *
     * @return Response
     */
    public function save(Request $request)
    {
      $this ->validate($request, [
            'nombre' => 'required|max:60',
            'descripcion' => 'required|max:255',
            'tipo' => 'required',
            'materia' => 'required',
            'file' => 'required'
        ]);
      //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
       $tiempo = localtime();
       //obtenemos el nombre del archivo
       $tConvertido = implode(" ", $tiempo);
       $nombre = $tConvertido.$file->getClientOriginalName();
       $tipo = $_POST['tipo'];
       $materia = $_POST['materia'];
       $path="$tipo/$materia/";
       $url =  $path;
       //indicamos que queremos guardar un nuevo archivo en el disco local
       if (!file_exists($url))
       {
         mkdir($path,0700,true);
       \Storage::disk('local')->put($url.$nombre,  \File::get($file));
     }else{

      \Storage::disk('local')->put($url.$nombre,  \File::get($file));
     }

     /*    ________________________________________________________
     *    |       IMPORTANTE GUARDAR DATOS                        |
     *    |                 EN BASE DE DATOS                      |
     *    ¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
     */
       return view('profile');

    }
    public function download($url)
    {

      if (file_exists($url))
      {
        return response()->download($url);

      }else{
        return abort (404);
      }

      //si no se encuentra lanzamos un error 404.
    return 'No se deberia llegar aquí';
    }





}