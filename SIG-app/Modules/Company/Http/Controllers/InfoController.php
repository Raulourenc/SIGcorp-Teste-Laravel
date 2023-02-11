<?php

namespace Modules\Company\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Company\Repositories\Interfaces\InfoRepositoryInterface;
use Modules\Company\Entities\Info;
use Modules\Company\Entities\Application;
use App\Models\User;


class InfoController extends Controller
{

    private $infoRepository;

    public function __construct(InfoRepositoryInterface $infoRepository)
    {
        $this->infoRepository = $infoRepository;
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $id = auth()->user()->id;
        return view('company::infoCreate', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:2|max:40',
            'lastname' => 'required|min:2|max:255',
            'age' => 'required|integer|min:2|max:80',
            'email' => 'required|email|unique:infos,email',
            'job' => 'required|min:2|max:15',
            'user_id' => 'required|integer',
        ],
        [
            'required' => 'O campo é obrigatório',
            'email.email' => 'O email é obrigatório',
            'min' => 'O campo  deve ter no mínimo 2 digitos',
            'max' => 'O campo  deve ter no máximo 40 digitos',
            'integer' => 'O campo estado é obrigatório',
            'unique' => 'O email já está sendo usado',
        ]
        );

        $this->infoRepository->storeInfo($data);

        return redirect()->route('dashboard')->with('message', 'Informação foi criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = $this->infoRepository->findInfo($id);
        return view('company::info', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = $this->infoRepository->findInfo($id);

        return view('company::infoEdit', ['id' => $id], compact('info'));
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $id = info::where('user_id',auth()->user()->id)->pluck('id');
      
        $request->validate([
            'name' => 'required|min:5|max:40',
            'lastname' => 'required|min:3|max:255',
            'age' => 'required|integer|min:3|max:80',
            'email' => 'required|email|unique:infos,email,'.$id[0],
            'job' => 'required|min:3|max:15',
            'user_id' => 'required|integer',
        ],
        [
            'required' => 'O campo é obrigatório',
            'email.email' => 'O email é obrigatório',
            'min' => 'O campo  deve ter no mínimo 3 digitos',
            'max' => 'O campo  deve ter no máximo 40 digitos',
            'integer' => 'O campo estado é obrigatório',
            'unique' => 'O email já está sendo usado',
        ]
        
        );

        $this->infoRepository->updateInfo($request->all(), $id);

        return redirect()->back()->with('message', 'Informações editada com sucesso!');
    
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->infoRepository->deleteInfo($id);

        return redirect()->route('info.index')->with('status', 'Vaga deletada com Sucesso');
    }

    public function liInfo() {
        
        $id = auth()->user()->id;
        $info = $this->infoRepository->listInfo(request()->all());
        return view('company::listInfo', ['id' => $id] ,compact('info'));
    }

    public function listApplications() {

        $list  = $this->infoRepository->myApplications();
        return view('company::signedJobs', compact('list'));
    }
}
