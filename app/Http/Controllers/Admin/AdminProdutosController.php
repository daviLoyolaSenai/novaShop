<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produtos;
// use Illuminate\Http\Request;

class AdminProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::get();
        return view("admin.produtos", compact("produtos"));
    }

}
