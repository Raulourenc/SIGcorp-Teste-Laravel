<?php
namespace Modules\Company\Repositories;

use Modules\Company\Repositories\Interfaces\ApplicationRepositoryInterface;
use Modules\Company\Entities\Application;

class ApplicationRepository implements ApplicationRepositoryInterface {

    public function storeApplication($data) 
    {
        $ids = Application::all();
     
        foreach($ids as $i){
            if($i->info_id == $data['info_id'] && $i->job_id == $data['job_id']){
                return redirect()->back()->with('message', 'Você ja se cadastrou nessa vaga!');
            } 
        }   
        return Application::create($data);
    }
}