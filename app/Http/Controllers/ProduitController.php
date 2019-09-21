<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits = DB::select('
SELECT pr.id AS id ,pr.nom as nom,pr.description as description,pr.prix as prix, (SELECT ph.path from photos AS ph 
                            WHERE pr.id = ph.id_produit 
                            LIMIT 1) AS path
   FROM produits AS pr;
        ');
//        dd($produits);
        return view('welcome', ['produits' => $produits]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $produit = DB::select('select pr.*,ph.path from produits pr ,  photos ph where pr.id=ph.id_produit and pr.id=?  ', [$id]);
        // print_r(count($produit));
        return view('single-product', ['produit' => $produit]);
    }
    //Haider 
    public function showAll(){
        $produits = DB::select('select * from produits');
        print_r($produits);
        return view('produits', ['produits' => $produits]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
