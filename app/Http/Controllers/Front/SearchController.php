<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Session;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $cate = Category::all();
        view()->share('cate',$cate);
    }

    public function index(Request $request)
    {
        //
        $listproduct = Product::where('price','>',0);
        if ($request->has('search')){
            $key = $request->search;
            $listproduct = $listproduct->where('name','like','%'.$key.'%');
        }
        elseif ($request->has('pricefrom')){
            $pricefrom = $request->pricefrom;
            $priceto = $request->priceto;

            if ($pricefrom==null&&$pricefrom>0&&$priceto!=null){
                $listproduct = $listproduct->where('price','<',$priceto);
            }

            elseif ($pricefrom!=null&&$priceto==null&&$priceto>0){
                $listproduct = $listproduct->where('price','>',$pricefrom);
            }
            elseif ($priceto<$pricefrom){
                Session::flash('error','Vui lòng chọn khoảng phù hợp');
                return redirect('search');
            }
            elseif($pricefrom!=null&&$priceto!=null&&$pricefrom>0&&$priceto>0){
                $listproduct = $listproduct->where([
                    ['price','>',$pricefrom],
                    ['price','<',$priceto]
                ]);
             }
            elseif (($pricefrom!=null&&$priceto!=null&&($pricefrom<0||$priceto<0))||($pricefrom==null&&$priceto==null)||($pricefrom<0)||($priceto<0)||($pricefrom!=null&&$pricefrom<0)||($priceto!=null&&$priceto<0)){
                Session::flash('error','Vui lòng chọn khoảng phù hợp');
            }
        }
        $listproduct = $listproduct->inRandomOrder()->paginate(15);
        return view('front.viewsearch',['listproduct'=>$listproduct]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
