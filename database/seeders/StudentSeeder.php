<?php

namespace Database\Seeders; // Add the namespace
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\StudentEnroll;
use App\Models\EnrollSubject;
class StudentSeeder extends Seeder
{
    public function run(): void
    {

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate tables before seeding
        DB::table('students')->truncate();
        DB::table('student_enrolls')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        // Initialize Faker for generating fake data
        $faker = Faker::create();

        // Fetch all batch-program pairs from the batch_program table
        $batchPrograms = DB::table('batch_program')->get();

        // Create 500 random student entries
        $students = [];
        for ($i = 0; $i < 500; $i++) {
            // Randomly pick a batch_id and program_id pair from batch_program table
            $batchProgram = $batchPrograms->random();
            
            // Create a student record
            $student = [
                'student_id' => $faker->unique()->numerify('S#####'), // Random student_id
                'registration_no' => $faker->unique()->numerify('REG####'), // Random registration number
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), // Default password (hashed)
                'password_text' => 'password', // Plain text password
                'gender' => $faker->randomElement([1,2,3]), // Random gender
                'dob' => $faker->date(), // Random date of birth
                'phone' => $faker->phoneNumber, // Random phone number
                'login' => 1, // Random username/login
                'status' => 1, // Random status
                'batch_id' => $batchProgram->batch_id, // Get batch_id from batch_program
                'program_id' => $batchProgram->program_id, // Get program_id from batch_program
                'created_at' => now(),
                'updated_at' => now(),
            ];
			
			$student_id = DB::table('students')->insertGetId($student);

			$program_sessions = DB::table('program_session')->where('program_id',$student['program_id'])->get();
			$program_sessions_random = $program_sessions->random();
			$program_sem_sec = DB::table('program_semester_sections')->where('program_id',$student['program_id'])->get();
			$program_sem_sec_random =  $program_sem_sec->random();

			$session_id = $program_sessions_random->session_id;
			$semester_id = $program_sem_sec_random->semester_id;
			$section_id = $program_sem_sec_random->section_id;




            // Student Enroll
            $enroll = new StudentEnroll();
            $enroll->student_id = $student_id;
            $enroll->session_id = $session_id;
            $enroll->semester_id = $semester_id;
            $enroll->program_id = $batchProgram->program_id;
            $enroll->section_id = $section_id;
            
            $enroll->save();


            // Assign Subjects
            $enrollSubject = EnrollSubject::where('program_id', $batchProgram->program_id)->where('semester_id', $semester_id)->where('section_id', $section_id)->first();
            
            if(isset($enrollSubject)){
                foreach($enrollSubject->subjects as $subject){
                    // Attach Subject
                    $enroll->subjects()->attach($subject->id);
                }
            }


			




        }

        // Bulk insert 500 students into the students table
       // DB::table('students')->insert($students);
    }
}