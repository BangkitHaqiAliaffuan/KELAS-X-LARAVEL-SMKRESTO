<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kategori;
use App\Http\Requests\StoreMenuRequest;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        $menus = Menu::join('kategoris','menus.idkategori', '=','kategoris.idkategori')->select(['menus.*', 'kategoris'])->paginate(2);
        return view('Backend.menu.select' ,['menus' => $menus,'kategoris' => $kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('Backend.menu.create', ['kategoris' => $kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $data = $request->validate([
            'gambar' => 'required|max:2048',
            'deskripsi' => 'required',
            'menu' => 'required',
            'harga' => 'required',
        ]);

        $id =$request->idkategori;

        $namagambar = $request->file('gambar')->getClientOriginalName();

        $request -> gambar -> move(public_path('gambar'),$namagambar);


        Menu::create([
            'idkategori' => $id,
            'gambar' => $namagambar,
            'deskripsi' => $data['deskripsi'],
           'menu' => $data['menu'],
        ]);

       return redirect('admin/menu');
    }

    /**
     * Display the specified resource.
     */
    public function show($idmenu)
    {
        Menu::where('idmenu', '=', $idmenu)->delete();
        return redirect('admin/menu');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idmenu)
    {
        $kategoris = Kategori::all();
        $menu = Kategori::where('idmenu', $idmenu)->first();
        return view('Backend.menu.update',['menu'=>$menu, 'kategoris'=>$kategoris]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $idmenu)
    {
        if(isset($request->gambar)){
            
            $namagambar = $request->file('gambar')->getClientOriginalName();
            
            $request->file('gambar')->move(public_path('gambar'), $namagambar);
            
                    $data = $request->validate([
                        'gambar' =>'required|max:2048',
                        'menu' => 'required',
                        'deskripsi' => 'required',
                        'harga' => 'required',
                    ]);
            
            Menu::where('idmenu', $idmenu)->update([
                'deskripsi' => $data['deskripsi'],
                'menu' => $data['menu'],
                'harga' => $data['harga'],
                'gambar' => $namagambar,
            ]);

            
            
        } else{
            $data = $request->validate([
                'menu' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
            ]);
            Menu::where('idmenu', $idmenu)->update([
                'gambar' => $data['gambar'],
                'deskripsi' => $data['deskripsi'],
               'menu' => $data['menu'],
                'harga' => $data['harga']
            ]);
        }        



        return redirect('admin/menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function select(Request $request){
        $id = $request->input('idkategori');
        $kategoris = Kategori::all();
        $menus = Menu::join('kategoris','menus.idkategori', '=','kategoris.idkategori')->select(['menus.*', 'kategoris'])
        ->where('menus.idkategori', $id)
        ->paginate(2);
        return view('Backend.menu.select' ,['menus' => $menus,'kategoris' => $kategoris]);
    }
}
