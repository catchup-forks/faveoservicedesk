<?php

namespace App\Itil\database\seeds;

use DB;
use Illuminate\Database\Seeder;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SdReleaseStatus extends Seeder
{
    public function run()
    {
        $created_at = date('Y-d-m H:m:i');
        $updated_at = date('Y-d-m H:m:i');

        DB::table('sd_release_status')
            ->insert([
                'name' => 'Open',
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        DB::table('sd_release_status')
            ->insert([
                'name' => 'On Hold',
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        DB::table('sd_release_status')
            ->insert([
                'name' => 'In Progress',
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        DB::table('sd_release_status')
            ->insert([
                'name' => 'Incomplete',
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        DB::table('sd_release_status')
            ->insert([
                'name' => 'Completed',
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
    }
}
