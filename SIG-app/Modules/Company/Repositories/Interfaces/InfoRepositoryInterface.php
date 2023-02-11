<?php

namespace Modules\Company\Repositories\Interfaces;

Interface InfoRepositoryInterface 
{
    public function listInfo($search);
    public function storeInfo($data);
    public function updateInfo($data, $id);
    public function deleteInfo($id);
    public function findInfo($id); 
    public function myApplications(); 
}