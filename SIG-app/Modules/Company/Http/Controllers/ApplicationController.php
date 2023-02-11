<?php

namespace Modules\Company\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Company\Repositories\Interfaces\ApplicationRepositoryInterface;
use Modules\Company\Entities\Application;

class ApplicationController extends Controller
{

    private $applicationRepository;

    public function __construct(ApplicationRepositoryInterface $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {  
        $data = $request->validate([
        'info_id' => 'required|integer',
        'job_id' => 'required|integer',
         
        ]);
        $this->applicationRepository->storeApplication($data);

        return redirect()->route('listApplications');
    }

}
