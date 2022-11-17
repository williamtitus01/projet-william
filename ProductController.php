<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
  //afficher les information
    public function index()
    {
     $data = Products::all();
     return view('welcome', [
        'products' => $data
     ]);
    }
    public function formulaire()
    {
      $data = Products::all();
      return view('dashboard', [
         'products' => $data
      ]);
     }
  //pour faire un lien vers une autre page, en paramètre id pour cibler
  public function description($id)
  {
    $data = Products::find($id);
    return view('user.description', [
      'product' => $data
    ]);
  }

  public function save(Request $req)
  {
  //enregistrement des images dans le dossier public storage
    $filename = time() . '.' . $req->gallery->extension();
    $path = $req->file('gallery')->storeAs(
      'gallery',
      $filename,
      'public'
    );
    // print_r($req->input());
    $product = new Products;
    $product->name = $req->name;
    $product->price = $req->price;
    $product->quantity = $req->quantity;
    $product->category = $req->category;
    $product->gallery = $path;
    $product->description = $req->description;
    $product->save();
    return redirect('/formulaire');
  }
  public function edit($id)
  {
    $products = Products::find($id);
    return view('edit', compact('products'));
  }
  public function update(Request $req, $id)
  {
  
    // print_r($req->input());
    $product = Products::find($id);
    dd($id);
    $product->name = $req->name;
    $product->price = $req->price;
    $product->quantity = $req->quantity;
    $product->category = $req->category;
    $product->description = $req->description;
    $product->update();
    return redirect('/dashboard', [
      'product' => $product
    ])->with("successUpdate", "Product update with successfully!");
    
  }
  public function destroy($item) 
  { 
    Products::find($item)->delete();
    return back()->with("successDelete", "Product delete with successfully!");
  }
 

}
