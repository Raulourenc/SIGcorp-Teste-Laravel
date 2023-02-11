<?php

namespace Modules\Company\Repositories\Interfaces;

Interface JobRepositoryInterface 
{
    public function listJob();
    public function storeJob($data);
    public function updateJob($data, $id);
    public function deleteJob($id);
    public function findJob($search); 
    public function findJobEdit($id);
    public function deleteA(); 
    public function CPV($id); 
    public function infoId();
}