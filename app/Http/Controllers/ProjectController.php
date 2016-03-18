<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct() {

        $this->middleware('auth')->only('create');
        $this->middleware('isadmin')->only('index');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Projet::paginate(10);

        return view('projets.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'name_author' => 'required',
            'adress' => 'required',
            'telephone' => 'required',
            'suivi' => 'required',
            'adresse' => 'required',
            'telephones' => 'required',
            'fiche' => 'required',
            'type_projet' => 'required',
            'contexte' => 'required',
            'demande' => 'required',
            'objectifs' => 'required',
            'contraintes' => 'required'

        ]);

        $projet = new Projet();
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;

        $projet->fill($input)->save();

        return redirect()->back()->with('success', 'Votre projet a bien été proposé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::findOrFail($id);

        return view('projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projet = Project::findOrFail($id);
        return view('projets.edit', compact('projet'));
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

        $projet = Project::findOrFail($id);
        $input = $request->input();
        $projet->fill($input)->save();

        return redirect()->back()->with('success', 'Votre modification a bien étée prise en compte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Project::findOrFail($id);

        $projet->delete();

        return redirect()->route('projet.index')->with('success', 'Votre article a bien été supprimé');
    }

}