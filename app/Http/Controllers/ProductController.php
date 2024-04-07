<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;
use DB;


class ProductController extends Controller
{

    public function tablesIndex(){
        $product = Product::all();
        $category = Category::all();

        return view('admin.tables',compact('product','category'));
    }
    
    public function categoryAdd(Request $r){

        $fileOriginalName = $r->file('imageCategory')->getClientOriginalName();
       $image = time() . $fileOriginalName;
       $r->imageCategory->storeAs('image', $fileOriginalName, 'public');

        $c = new Category();
        $c->nameCategory = $r->nameCategory;
        $c->descriptionCategory = $r->descriptionCategory;
        $c->imageCategory = $fileOriginalName;

         $result = $c->save();

        if($result){
        Session::flash('message', 'Uspešno ste dodali kategoriju!'); 
        Session::flash('alert-class', 'alert-success'); 
        }else{
        Session::flash('message', 'Greška prilikom dodavanja kategorije!'); 
        Session::flash('alert-class', 'alert-danger'); 
    }
       
      return redirect('/category');       
    }

        

    public function categoryIndex(){

        $category = Category::query()->orderBy('id','desc')->get();
        $product = Product::all();
        $sumaProizvoda = 0;
        return view('admin.category', compact('category','product', 'sumaProizvoda'));
    }

    public function deleteCategory($id){

        $c = Category::findOrFail($id);
        $result = $c->delete();

          if($result){
        Session::flash('message', 'Uspešno ste obrisali kategoriju!'); 
        Session::flash('alert-class', 'alert-success'); 
        }else{
        Session::flash('message', 'Greška prilikom brisanja kategorije!'); 
        Session::flash('alert-class', 'alert-danger'); 
        }
        return redirect('/category');

    }


    public function deleteProduct($id){
          $c = Product::findOrFail($id);
        $result = $c->delete();

          if($result){
        Session::flash('message', 'Uspešno ste obrisali Proizvod!'); 
        Session::flash('alert-class', 'alert-success'); 
        }else{
        Session::flash('message', 'Greška prilikom brisanja Proizvoda!'); 
        Session::flash('alert-class', 'alert-danger'); 
        }
        return redirect('/product');
    }


    public function productIndex(){
        $category = Category::all();
        $product = Product::all();
        return view('admin.product',compact('category','product'));
    }


     public function productAdd(Request $request)
    {
  
       $fileOriginalName = $request->file('imageProduct')->getClientOriginalName();
       $image = time() . $fileOriginalName;
       $request->imageProduct->storeAs('image', $fileOriginalName, 'public');
       
       $a = new Product();
       $a->idCategory = $request->categoryID;
       $a->nameProduct = $request->nameProduct;
       $a->descriptionProduct = $request->descriptionProduct;
       $a->priceProduct = $request->priceProduct;
       $a->imageProduct = $fileOriginalName;
      $result = $a->save();
   
   if($result){
        Session::flash('message', 'Uspešno ste dodali proizvod!'); 
        Session::flash('alert-class', 'alert-success'); 
   }else{
        Session::flash('message', 'Greška prilikom dodavanja proizvoda!'); 
        Session::flash('alert-class', 'alert-danger'); 
    }
       
      return redirect('/product');       
    }



    public function editCategory(Request $r, $id){

        $c = Category::findOrFail($id);

        $c->nameCategory = $r->newCategoryName;
        $c->descriptionCategory = $r->newCategoryDescription;
        if($r->newPhotoCategory){
             $fileOriginalName = $r->file('newPhotoCategory')->getClientOriginalName();
       $image = time() . $fileOriginalName;
       $r->newPhotoCategory->storeAs('image', $fileOriginalName, 'public');

       $c->imageCategory = $fileOriginalName;
        }

      $result =  $c->save();

       if($result){
        Session::flash('message', 'Uspešno ste izmenili kategoriju!'); 
        Session::flash('alert-class', 'alert-success'); 
   }else{
        Session::flash('message', 'Greška prilikom izmene kategorije!'); 
        Session::flash('alert-class', 'alert-danger'); 
    }
        return redirect('/category');

    }


    public function editProduct(Request $r, $id){
   $c = Product::findOrFail($id);

    if($r->newPhotoProduct){
             $fileOriginalName = $r->file('newPhotoProduct')->getClientOriginalName();
       $image = time() . $fileOriginalName;
       $r->newPhotoProduct->storeAs('image', $fileOriginalName, 'public');

       $c->imageProduct = $fileOriginalName;
        }

        $c->idCategory = $r->newProductCategory;
        $c->nameProduct = $r->newProductName;
        $c->descriptionProduct = $r->newProductDescription;
        $c->priceProduct = $r->newProductPrice;
       

      $result =  $c->save();

       if($result){
        Session::flash('message', 'Uspešno ste izmenili proizvod!'); 
        Session::flash('alert-class', 'alert-success'); 
   }else{
        Session::flash('message', 'Greška prilikom izmene proizvoda!'); 
        Session::flash('alert-class', 'alert-danger'); 
    }
        return redirect('/product');
    }

    public function shopIndex(){

        $product = Product::all();
        $category = Category::all();

        return view('pages.shop',compact('product','category'));
    }


     public function indexFront(){
       
         $product = Product::all();
        $category = Category::all();
   
        return view('pages.index',compact('product','category'));

    }




}
