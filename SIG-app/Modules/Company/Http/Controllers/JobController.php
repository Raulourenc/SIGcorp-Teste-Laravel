<?php

namespace Modules\Company\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Company\Repositories\Interfaces\JobRepositoryInterface;
use Modules\Company\Entities\Job;
use App\Models\User;

class JobController extends Controller
{

    private $jobRepository;
    
    public function __construct(JobRepositoryInterface $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }
    
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {  
        $ids = $this->jobRepository->infoId();
        $job = $this->jobRepository->listJob();
        $id = auth()->user()->id;
        return view('company::job', ['id' => $id, 'ids' => $ids] ,compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $id = auth()->user()->id;
        return view('company::jobCreate', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:40',
            'description' => 'required|min:3|max:100',
            'remuneration' => 'required|min:3|max:40',
            'type' => 'required|string|min:3|max:40',
            'user_id' => 'required|integer',
            'status' => 'required',
        ],
        [
            'required' => 'O campo é obrigatório',
            'min' => 'O campo  deve ter no mínimo 3 digitos',
            'name.max' => 'O campo  deve ter no máximo 40 digitos',
            'description.max' => 'O campo  deve ter no máximo 100 digitos',
            'remuneration.max' => 'O campo  deve ter no máximo 40 digitos',
            'type.max' => 'O campo  deve ter no máximo 40 digitos',
            'integer' => 'O campo estado é obrigatório',
            'string' => 'O campo não pode conter números',
        ]
        );
    
        $id = auth()->user()->id;
        $this->jobRepository->storeJob($data);

        return redirect()->route('job.create', ['id' => $id])->with('message', 'Vaga foi criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job =  $this->jobRepository->findJob($id);

        return view('company::job', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = $this->jobRepository->findJobEdit($id);

        return view('company::jobEdit', ['id' => $id], compact('job'));
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {  
        $request->validate([
            'name' => 'required|min:3|max:40',
            'description' => 'required|min:3|max:40',
            'remuneration' => 'required|min:3|max:40',
            'type' => 'required|string|min:3|max:40',
            'user_id' => 'required|integer',
            'status' => 'required',
        ],
        [
            'required' => 'O campo é obrigatório',
            'min' => 'O campo  deve ter no mínimo 3 digitos',
            'max' => 'O campo  deve ter no máximo 40 digitos',
            'integer' => 'O campo estado é obrigatório',
            'string' => 'O campo não pode conter números'
        ]
        );

        $this->jobRepository->updatejob($request->all(), $id);

        return redirect()->route('job.index')->with('message', 'Vaga editada com sucesso!');
    
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->jobRepository->deleteJob($id);

        return redirect()->route('job.index')->with('message', 'Vaga deletada com Sucesso');
    }

    public function filter() {

        $id = auth()->user()->id;
        $job = $this->jobRepository->findJob(request()->all());
        
        return view('company::job', ['id' => $id] ,compact('job'));
    }

    public function deleteAll() {

       $this->jobRepository->deleteA();
        
        return view('dashboard')->with('message', 'Todas as Vagas Foram deletadas');
    }

    public function candidatesPerVacancy(Request $request) {

        $id = auth()->user()->id;
        $job = $this->jobRepository->CPV($request->all());
        return view('company::canList', ['id' => $id] ,compact('job'));
    }

}
