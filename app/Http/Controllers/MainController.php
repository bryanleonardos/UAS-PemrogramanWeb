<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

use App\ProductModel;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth/Index');
    }

    public function LoginView()
    {
        return view('Auth/Login');
    }

    public function RegisterView()
    {
        return view('Auth/Register');
    }

    public function AdminView()
    {
        $ProductModel = DB::table('products')->get();
        return view('Admin/Admin-Tables', ['product' => $ProductModel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Product-CRUD/Add');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required|integer',
            'stock' => 'required|integer|min:0'
        ]);

        $products = new ProductModel;
        $products->Name = $request->name;
        $products->Price = $request->harga;
        $products->Stock = $request->stock;

        $products->save();

        return redirect('/admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductModel $product)
    {
        return view('Admin/Product-CRUD/Update', compact('product'));
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
        ProductModel::where('ID', $id)->update([
            'Name' => $request->name,
            'Price' => $request->harga,
            'Stock' => $request->stock
        ]);

        return redirect('/admin')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductModel $product) // https://stackoverflow.com/questions/35402228/write-custom-query-in-laravel-5
    {
        DB::table('products')->where('ID', '=', $product->IDphp )->delete();
        DB::statement('ALTER TABLE `products` AUTO_INCREMENT = 0');
        
        return redirect('/admin');

        // SOFT DELETE GAK BISA -_-
        //ProductModel::destroy($product->ID);
        //$product = ProductModel::find($product->ID);
        //$product->delete();

        //return redirect('/admin');
    }
}
