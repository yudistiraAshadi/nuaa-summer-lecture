<?php

use Illuminate\Database\Seeder;

class PermissionAndRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        // Add Admin user
        DB::table('role_users')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

        $totalUsers = App\Models\User::all()->count();
        $totalColleges = App\Models\College::all()->count();
        // Get all roles except 'admin' and 'sub-admin'
        $roles = DB::table('roles')->get()->slice(2);

        // Seed 'role_users' pivot table
        for ( $i = 1; $i <= $totalUsers; $i++ ) {
            $randomRole = $roles->random();

            DB::table('role_users')->insert([
                'user_id' => $i,
                'role_id' => $randomRole->id
            ]);

            $applicationForm = factory(App\Models\Applicant\ApplicationForm::class)
                ->create([
                    'user_id' => $i
                ]);
            
            // Fill teacher table if the role of the user == 'teacher'
            if ( $randomRole->name == 'teacher' ) {
                DB::table('teachers')->insert([
                    'user_id' => $i,
                    'college_id' => rand(1, $totalColleges),
                    'course_name' => $applicationForm->course_one_name,
                    'course_description' => $applicationForm->course_one_description,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
        }
    }
}
