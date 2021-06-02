<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    Permission::create(['name' => 'Create User']);
	Permission::create(['name' => 'View User']);
	Permission::create(['name' => 'Edit User']);
	Permission::create(['name' => 'Delete User']);

	Permission::create(['name' => 'Create Answer']);
	Permission::create(['name' => 'View Answer']);
	Permission::create(['name' => 'Edit Answer']);
	Permission::create(['name' => 'Delete Answer']);

	Permission::create(['name' => 'Create Choice']);
	Permission::create(['name' => 'View Choice']);
	Permission::create(['name' => 'Edit Choice']);
	Permission::create(['name' => 'Delete Choice']);

	Permission::create(['name' => 'Create Course']);
	Permission::create(['name' => 'View Course']);
	Permission::create(['name' => 'Edit Course']);
	Permission::create(['name' => 'Delete Course']);

	Permission::create(['name' => 'Create Exam']);
	Permission::create(['name' => 'View Exam']);
	Permission::create(['name' => 'Edit Exam']);
	Permission::create(['name' => 'Delete Exam']);

	Permission::create(['name' => 'Create Module']);
	Permission::create(['name' => 'View Module']);
	Permission::create(['name' => 'Edit Module']);
	Permission::create(['name' => 'Delete Module']);

	Permission::create(['name' => 'Create Page']);
	Permission::create(['name' => 'View Page']);
	Permission::create(['name' => 'Edit Page']);
	Permission::create(['name' => 'Delete Page']);

	Permission::create(['name' => 'Create Question']);
	Permission::create(['name' => 'View Question']);
	Permission::create(['name' => 'Edit Question']);
	Permission::create(['name' => 'Delete Question']);

	 Permission::create(['name' => 'Create Quiz']);
	Permission::create(['name' => 'View Quiz']);
	Permission::create(['name' => 'Edit Quiz']);
	Permission::create(['name' => 'Delete Quiz']);

	Permission::create(['name' => 'Create Resource']);
	Permission::create(['name' => 'View Resource']);
	Permission::create(['name' => 'Edit Resource']);
	Permission::create(['name' => 'Delete Resource']);

	Permission::create(['name' => 'Create StudentCourse']);
	Permission::create(['name' => 'View StudentCourse']);
	Permission::create(['name' => 'Edit StudentCourse']);
	Permission::create(['name' => 'Delete StudentCourse']);

	Permission::create(['name' => 'Create Student']);
	Permission::create(['name' => 'View Student']);
	Permission::create(['name' => 'Edit Student']);
	Permission::create(['name' => 'Delete Student']);

    }
}
