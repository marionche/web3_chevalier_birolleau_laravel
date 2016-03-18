<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        $list = Project::paginate(10);

        return view('projects.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
            'type_project' => 'required',
            'contexte' => 'required',
            'demande' => 'required',
            'objectifs' => 'required',
            'contraintes' => 'required'

        ]);

        $project = new Project();
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;

        $project->fill($input)->save();

        return redirect()->back()->with('success', 'Votre project a bien été proposé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Projet::findOrFail($id);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
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

        $project = Project::findOrFail($id);
        $input = $request->input();
        $project->fill($input)->save();

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
        $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->route('project.index')->with('success', 'Votre article a bien été supprimé');
    }

}