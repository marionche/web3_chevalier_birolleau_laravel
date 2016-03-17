<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Models\Post;

class PostController extends Controller
{
    public function __construct() {

    $this->middleware('auth')->only(['create', 'edit']);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {


        $list = Post::paginate(10);

        return view ('posts.index', compact ('list'));
         
        /*

        $posts->title = "Mon nouveau titre";
        $posts->content = "Mon contenu";
        $posts->user_id = Auth::user()->id;

        $posts->save();

        Création de son comentaire

        */ 


        /* dd($posts->all()); "Enregistrer les nouvelles données" */

    	/* dd($posts->find(2)->title); "Trouve l'id que lui a donnée" */
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'title'=>'required |max:10',
            'content'=> 'required'
        ]);
        $post = new Post;
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;
        $post->fill($input)->save();

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   	public function show($id)
    {

        $post = Post::findOrFail($id);
       
       return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $post = Post::findOrFail($id);
        return view('posts.edit',compact('post'));
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

        $this -> validate($request,[
            'title'=>'required',
            'content'=> 'required'
        ]);

        $post = Post::findOrFail($id);
        $input = $request->input();
        $post->fill($input)->save();

        /* return redirect()->back(); ------->>>>"retour sur la vue precedente" */

        return redirect()
            ->route('post.show', $id)
            ->with('success', 'Votre article a bien été édité');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

         return redirect()
             ->route('post.index')
             ->with('success', 'Votre article a bien été supprimé');

    }
}
