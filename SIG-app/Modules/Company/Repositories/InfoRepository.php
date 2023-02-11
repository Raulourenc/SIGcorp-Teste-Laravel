<?php
namespace Modules\Company\Repositories;

use Modules\Company\Repositories\Interfaces\InfoRepositoryInterface;
use Modules\Company\Entities\Info;
use Modules\Company\Entities\Job;
use Modules\Company\Entities\Application;

class InfoRepository implements InfoRepositoryInterface {

    public function storeInfo($data) 
    {
        return Info::create($data);
    }

    public function updateInfo($data, $id) 
    {
        $info = Info::where('id', $id)->first();
        $info->name = $data['name'];
        $info->lastname = $data['lastname'];
        $info->age = $data['age'];
        $info->email = $data['email'];
        $info->job = $data['job'];
        $info->save();
    }

    public function deleteInfo($id) 
    {
        $info = Info::find($id);
        $info->delete();
    }

    public function findInfo($id)
    {   
        return Info::where('user_id', $id)->first();
    }

    public function listInfo($search)
    {   
        if(isset($search['_token'])) {
            return $info = Info::where([
                [$search['filter'], 'like', '%'.$search['search'].'%']
            ])
            ->orderBy($search['filter'])
            ->latest()
            ->paginate($search['paginate']);

        } else {
            return $info = Info::latest()->paginate(20);
        }
        
    
    }

    public function myApplications() {

        $id = auth()->user()->id;
        $jobsIds = Application::where('info_id', $id)->get('job_id');
        $jobs = array();
        foreach($jobsIds as $jId){
            $j = Job::where('id', $jId['job_id'])->get();
            array_push($jobs, $j);
        }
        return $jobs;
     
    }

}
