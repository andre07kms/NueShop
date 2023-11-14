<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Produto;
use DB;

class DashboardController extends Controller
{

    public function index() {

        $usuarios = User::all()->count();
        
        // grafico 1 - usuarios
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
    ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();
        
        //preparar arrays
        foreach($usersData as $user) {
            $ano[] = $user->ano;
            $total[] = $user->total;
       }

        //formatar para chart.js
        $userLabel = "'Comparativo de cadastros de usuários'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);

        //grafico 2 - categorias
        //$catData = Categoria::with('produtos')->get();

        //preparar o array
        //foreach($catData as $cat) {
         // $catNome[] = "'".$cat->nome."'";
          //$catTotal[] = $cat->produtos->count();
        //}

       // formatar para chart.js
        //$catLabel = implode(',', $catNome);
        //$catTotal = implode(',', $catTotal);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal'));
    }
}
