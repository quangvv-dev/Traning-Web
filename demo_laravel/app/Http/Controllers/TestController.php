<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "hello";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return "create "
        ."<br>"."part: ".$request->path()
        ."<br>"."url: ".$request->url()
        ."<br> kt url co' chuoi test k: ".$request->is('*test*')
        ."<br> kiem tra method: ".$request->isMethod('get')
        //$request->all(),$request->name, $request->input('name'),$request->file('img')
        //$request->has('name') gia tri dau vao
         ;
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
        return "show ".$id;
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

    public function setcookie()
    {
        $response = new Response();
        $response->withCookie('tencookie','giatri',0.1);
        echo "da setcookie";
        return $response;
    }

    public function getcookie(Request $request)
    {
        echo "cookie cua ban la: ";
       return $request->cookie('tencookie'); 
    }
}
