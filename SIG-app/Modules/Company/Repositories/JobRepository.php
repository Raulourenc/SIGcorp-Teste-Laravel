<?php
namespace Modules\Company\Repositories;

use Modules\Company\Repositories\Interfaces\JobRepositoryInterface;
use Modules\Company\Entities\Job;
use Modules\Company\Entities\Application;
use Modules\Company\Entities\Info;
use App\Models\User;

class JobRepository implements JobRepositoryInterface {

    public function listJob() 
    {
        if(auth()->user()->status === 'admin') {
            $id = auth()->user()->id;
            return Job::where('user_id', $id)->paginate(20);
        } else {
            return Job::latest()->paginate(20);
        }
    }

    public function storeJob($data) 
    {
        return Job::create($data);
    }

    public function updateJob($data, $id) 
    {
        $job = Job::where('id', $id)->first();
        $job->name = $data['name'];
        $job->description = $data['description'];
        $job->remuneration = $data['remuneration'];
        $job->type = $data['type'];
        $job->status = $data['status'];
        $job->save();
    }

    public function deleteJob($id) 
    {
        $job = Job::find($id);
        $job->delete();
    }

    public function findJobEdit($id)
    {   
        return Job::where('id', $id)->first()->getAttributes();
    }

    public function findJob($search)
    { 
            if(isset($search['_token'])) {
                return $events = Job::where([
                    [$search['filter'], 'like', '%'.$search['search'].'%'],
                ])
                ->orderBy($search['filter'])
                ->latest()
                ->paginate($search['paginate']);

            } else {
                return $events =Job::latest()->paginate(20);
            }
    

    }

    public function deleteA()
    {  
        $jobs = Job::all();
        foreach($jobs as $job){
              $job->delete();
        }
        return;
    }

    public function CPV($id){//id da vaga
        $application = Application::where('job_id', $id)->get();
        $application = $application->all();

        $array = array();
        foreach($application as $app){
            $idd = $app['info_id'];//id de quem se candidatou
            array_push($array, $idd);
        }
       
        $arrayInfo = array();
        foreach($array as $a){
            $c = Info::where('user_id',$a)->get();
            array_push($arrayInfo, $c);
        }
        return $arrayInfo;
    }

    public function InfoId() {
        $i = auth()->user()->id;
        return $id = Job::where('user_id', $i)->pluck('id');
    }
}
