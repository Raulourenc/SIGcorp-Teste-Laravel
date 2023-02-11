<?php

namespace Modules\Company\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Company\Entities\Info;
use Modules\Company\Entities\Job;

class CompanyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Info::factory(10)->create();
        Job::factory(10)->create();
        // $this->call("OthersTableSeeder");
    }
}
