<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AdministradorFormRequest;
use App\administrador;
use DB;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $admin = DB::table('administradors')->where('nombre', 'LIKE', '%' . $query . '%')->orderBy('id', 'asc')->paginate(5);
            return view('Administrador.index', ["admin" => $admin, "searchText" => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdministradorFormRequest $request)
    {
        $admnistrador = new Administrador;
        $admnistrador->nombre = $request->get('nombre');
        $admnistrador->documento = $request->get('documento');
        $admnistrador->password = $request->get('password');
        $admnistrador->save();
        return Redirect::to('administrador');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrador=administrador::find($id);
        return view('administrador.edit',compact('administrador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'nombre'=>'required', 'documento'=>'required' , 'password'=>'required']);
        administrador::find($id)->update($request->all());
        return redirect()->route('administrador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admnistrador= Administrador::findOrFail($id);
        $admnistrador->delete();
        return redirect()->route('administrador.index');
    }
}
