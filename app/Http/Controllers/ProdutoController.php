<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // return "index";

       $produtos = Produto::paginate(3);
        return view('site.home', compact('produtos'));

        $produtos = Produto::paginate(5);
        $produtos = Categoria::all();
        return view('admin.produtos', compact('produtos'));
    }

    //public function index() {
       
       
    //}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produto = Produto::find($id);
        $produto->create();
        return redirect()->route('admin.produtos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = $request->all();

        if($request->imagem) {
          $produto['imagem'] = $request->imagem->store('produtos');
        }

        $produto['slug'] = Str::slug($request->nome);

        //$produtos = Produto::create($produto);
        
        return redirect()->route('admin.produtos')->with('sucesso', 'Produto cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('admin.produtos');
    }
}
