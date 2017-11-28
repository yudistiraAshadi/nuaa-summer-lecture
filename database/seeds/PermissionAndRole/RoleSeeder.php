<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'sub-admin',
            'applicant',
            'accepted_applicant',
            'rejected_applicant',
            'teacher'
        ];
        
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        };
    }
}
