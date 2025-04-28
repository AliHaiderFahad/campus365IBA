<?php

namespace Database\Seeders; // Add the namespace

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Program;
use App\Models\Batch;
use App\Models\Session;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Section;
use App\Models\ClassRoom;
use App\Models\Application;
use App\Models\StudentEnroll;
use App\Models\EnrollSubject;
use App\Models\EnrollSubjectSubject;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; // Import the Str class

class AcademicFlowSeeder extends Seeder
{
      /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tables before seeding
        DB::table('batch_program')->truncate();
        DB::table('batches')->truncate();
        DB::table('faculties')->truncate();
        DB::table('program_semester')->truncate();
        DB::table('program_semester_sections')->truncate();
        DB::table('programs')->truncate();
        DB::table('sections')->truncate();
        DB::table('semesters')->truncate();
        DB::table('sessions')->truncate();
        DB::table('program_session')->truncate();
        

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // Faculties
        $faculty = DB::table('faculties')->insertGetId([
            'title' => 'Institute of Business Administration',
            'slug' => 'institute-of-business-administration',
            'shortcode' => 'IBA-JU',
            'status' => 1,
            'created_at' => '2025-04-03 09:07:15',
            'updated_at' => '2025-04-03 09:07:15',
        ]);

        // Programs
        $programBBA = DB::table('programs')->insertGetId([
            'faculty_id' => $faculty,
            'title' => 'Bachelor of Business Administration',
            'slug' => 'bachelor-of-business-administration',
            'shortcode' => 'BBA',
            'registration' => 0,
            'status' => 1,
            'created_at' => '2025-04-03 09:07:46',
            'updated_at' => '2025-04-03 09:07:46',
        ]);

        $programMBA = DB::table('programs')->insertGetId([
            'faculty_id' => $faculty,
            'title' => 'Masters of Business Administration',
            'slug' => 'masters-of-business-administration',
            'shortcode' => 'MBA',
            'registration' => 0,
            'status' => 1,
            'created_at' => '2025-04-03 09:08:36',
            'updated_at' => '2025-04-03 09:08:36',
        ]);

        $programWMBA = DB::table('programs')->insertGetId([
            'faculty_id' => $faculty,
            'title' => 'Weekend Masters of Business Administration',
            'slug' => 'weekend-masters-of-business-administration',
            'shortcode' => 'WMBA',
            'registration' => 0,
            'status' => 1,
            'created_at' => '2025-04-03 09:09:02',
            'updated_at' => '2025-04-03 09:09:02',
        ]);

        // Batches
        $batch28th = DB::table('batches')->insertGetId([
            'title' => '28th Batch',
            'start_date' => '2024-01-01',
            'status' => 1,
            'created_at' => '2025-04-03 09:11:14',
            'updated_at' => '2025-04-03 09:12:39',
        ]);

        $batch29th = DB::table('batches')->insertGetId([
            'title' => '29th Batch',
            'start_date' => '2025-01-01',
            'status' => 1,
            'created_at' => '2025-04-03 09:11:43',
            'updated_at' => '2025-04-03 09:12:52',
        ]);

        $batch40th = DB::table('batches')->insertGetId([
            'title' => '40th Batch',
            'start_date' => '2024-01-01',
            'status' => 1,
            'created_at' => '2025-04-03 09:14:39',
            'updated_at' => '2025-04-03 09:14:39',
        ]);

        $batch41st = DB::table('batches')->insertGetId([
            'title' => '41st Batch',
            'start_date' => '2025-01-03',
            'status' => 1,
            'created_at' => '2025-04-03 09:15:07',
            'updated_at' => '2025-04-03 09:15:07',
        ]);

        $batch15th = DB::table('batches')->insertGetId([
            'title' => '15th Batch',
            'start_date' => '2025-01-01',
            'status' => 1,
            'created_at' => '2025-04-03 09:15:48',
            'updated_at' => '2025-04-03 09:15:48',
        ]);

        $batch16th = DB::table('batches')->insertGetId([
            'title' => '16th Batch',
            'start_date' => '2025-04-01',
            'status' => 1,
            'created_at' => '2025-04-03 09:16:04',
            'updated_at' => '2025-04-03 09:16:04',
        ]);

        // batch_program
        DB::table('batch_program')->insert([
            'batch_id' => $batch28th,
            'program_id' => $programMBA,
        ]);

        DB::table('batch_program')->insert([
            'batch_id' => $batch29th,
            'program_id' => $programMBA,
        ]);

        DB::table('batch_program')->insert([
            'batch_id' => $batch40th,
            'program_id' => $programBBA,
        ]);

        DB::table('batch_program')->insert([
            'batch_id' => $batch41st,
            'program_id' => $programBBA,
        ]);

        DB::table('batch_program')->insert([
            'batch_id' => $batch15th,
            'program_id' => $programWMBA,
        ]);

        DB::table('batch_program')->insert([
            'batch_id' => $batch16th,
            'program_id' => $programWMBA,
        ]);

        // semesters
        $semester1st = DB::table('semesters')->insertGetId([
            'title' => '1st Semester',
            'year' => '1',
            'status' => 1,
            'created_at' => '2025-04-03 09:33:22',
            'updated_at' => '2025-04-03 09:33:22',
        ]);

        $semester2nd = DB::table('semesters')->insertGetId([
            'title' => '2nd Semester',
            'year' => '1',
            'status' => 1,
            'created_at' => '2025-04-03 09:33:37',
            'updated_at' => '2025-04-03 09:33:37',
        ]);

        $semester3rd = DB::table('semesters')->insertGetId([
            'title' => '3rd Semester',
            'year' => '2',
            'status' => 1,
            'created_at' => '2025-04-03 09:35:09',
            'updated_at' => '2025-04-03 09:35:09',
        ]);

        $semester4th = DB::table('semesters')->insertGetId([
            'title' => '4th Semester',
            'year' => '2',
            'status' => 1,
            'created_at' => '2025-04-03 09:35:34',
            'updated_at' => '2025-04-03 09:35:34',
        ]);

        $semester5th = DB::table('semesters')->insertGetId([
            'title' => '5th Semester',
            'year' => '3',
            'status' => 1,
            'created_at' => '2025-04-03 09:37:43',
            'updated_at' => '2025-04-03 09:37:43',
        ]);

        $semester6th = DB::table('semesters')->insertGetId([
            'title' => '6th Semester',
            'year' => '3',
            'status' => 1,
            'created_at' => '2025-04-03 09:38:03',
            'updated_at' => '2025-04-03 09:38:03',
        ]);

        $semester7th = DB::table('semesters')->insertGetId([
            'title' => '7th Semester',
            'year' => '4',
            'status' => 1,
            'created_at' => '2025-04-03 09:38:15',
            'updated_at' => '2025-04-03 09:38:15',
        ]);

        $semester8th = DB::table('semesters')->insertGetId([
            'title' => '8th Semester',
            'year' => '4',
            'status' => 1,
            'created_at' => '2025-04-03 09:38:28',
            'updated_at' => '2025-04-03 09:38:28',
        ]);

        $semester1stTri = DB::table('semesters')->insertGetId([
            'title' => '1st Trimester',
            'year' => '1',
            'status' => 1,
            'created_at' => '2025-04-03 09:40:06',
            'updated_at' => '2025-04-03 09:41:40',
        ]);

        $semester2ndTri = DB::table('semesters')->insertGetId([
            'title' => '2nd Trimester',
            'year' => '1',
            'status' => 1,
            'created_at' => '2025-04-03 09:40:42',
            'updated_at' => '2025-04-03 09:40:42',
        ]);

        $semester3rdTri = DB::table('semesters')->insertGetId([
            'title' => '3rd Trimester',
            'year' => '1',
            'status' => 1,
            'created_at' => '2025-04-03 09:40:55',
            'updated_at' => '2025-04-03 09:40:55',
        ]);

        $semester4thTri = DB::table('semesters')->insertGetId([
            'title' => '4th Trimester',
            'year' => '1',
            'status' => 1,
            'created_at' => '2025-04-03 09:41:23',
            'updated_at' => '2025-04-03 09:41:23',
        ]);

        // program_semester
        DB::table('program_semester')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester1st,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester1st,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester2nd,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester2nd,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester3rd,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester3rd,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester4th,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester4th,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester5th,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester6th,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester7th,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester8th,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester1stTri,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester2ndTri,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester3rdTri,
        ]);

        DB::table('program_semester')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester4thTri,
        ]);

        // sections
        $sectionA = DB::table('sections')->insertGetId([
            'title' => 'Section A',
            'seat' => NULL,
            'status' => 1,
            'created_at' => '2025-04-03 09:42:23',
            'updated_at' => '2025-04-03 09:42:23',
        ]);

        $sectionB = DB::table('sections')->insertGetId([
            'title' => 'Section B',
            'seat' => NULL,
            'status' => 1,
            'created_at' => '2025-04-03 09:42:36',
            'updated_at' => '2025-04-03 09:42:36',
        ]);

        $sectionC = DB::table('sections')->insertGetId([
            'title' => 'Section C',
            'seat' => NULL,
            'status' => 1,
            'created_at' => '2025-04-03 09:42:48',
            'updated_at' => '2025-04-03 09:42:48',
        ]);

        $sectionD = DB::table('sections')->insertGetId([
            'title' => 'Section D',
            'seat' => NULL,
            'status' => 1,
            'created_at' => '2025-04-03 09:43:01',
            'updated_at' => '2025-04-03 09:43:01',
        ]);

        // program_semester_sections
        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester1st,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester1st,
            'section_id' => $sectionB,
        ]);

        
        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester2nd,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester2nd,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester3rd,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester3rd,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester4th,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester4th,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester5th,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester5th,
            'section_id' => $sectionB,
        ]);


        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester6th,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester6th,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester7th,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester7th,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester8th,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programBBA,
            'semester_id' => $semester8th,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester1st,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester1st,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester2nd,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester2nd,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester3rd,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester3rd,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester4th,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programMBA,
            'semester_id' => $semester4th,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester1stTri,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester1stTri,
            'section_id' => $sectionB,
        ]);


        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester1stTri,
            'section_id' => $sectionC,
        ]);


        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester2ndTri,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester2ndTri,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester2ndTri,
            'section_id' => $sectionC,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester3rdTri,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester3rdTri,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester3rdTri,
            'section_id' => $sectionC,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester4thTri,
            'section_id' => $sectionA,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester4thTri,
            'section_id' => $sectionB,
        ]);

        DB::table('program_semester_sections')->insert([
            'program_id' => $programWMBA,
            'semester_id' => $semester4thTri,
            'section_id' => $sectionC,
        ]);
        // sessions
        $session2023_2024 = DB::table('sessions')->insertGetId([
            'title' => '2023-2024',
            'start_date' => '2023-07-01',
            'end_date' => '2024-06-30',
            'status' => 1,
            'created_at' => '2025-04-03 09:44:07',
            'updated_at' => '2025-04-03 09:44:07',
        ]);

        $session2024_2025 = DB::table('sessions')->insertGetId([
            'title' => '2024-2025',
            'start_date' => '2024-07-01',
            'end_date' => '2025-06-30',
            'status' => 1,
            'created_at' => '2025-04-03 09:44:23',
            'updated_at' => '2025-04-03 09:44:23',
        ]);

        $summer_2025 = DB::table('sessions')->insertGetId([
            'title' => 'Summer-2025',
            'start_date' => '2024-07-01',
            'end_date' => '2025-06-30',
            'status' => 1,
            'created_at' => '2025-04-03 09:44:23',
            'updated_at' => '2025-04-03 09:44:23',
        ]);

        $fall_2024 = DB::table('sessions')->insertGetId([
            'title' => 'Fall-2024',
            'start_date' => '2024-07-01',
            'end_date' => '2025-06-30',
            'status' => 1,
            'created_at' => '2025-04-03 09:44:23',
            'updated_at' => '2025-04-03 09:44:23',
        ]);

        // program_session
        DB::table('program_session')->insert([
            'program_id' => $programBBA,
            'session_id' => $session2023_2024,
        ]);

        DB::table('program_session')->insert([
            'program_id' => $programBBA,
            'session_id' => $session2024_2025,
        ]);

        DB::table('program_session')->insert([
            'program_id' => $programMBA,
            'session_id' => $session2023_2024,]);

        DB::table('program_session')->insert([
            'program_id' => $programMBA,
            'session_id' => $session2024_2025,
        ]);

        DB::table('program_session')->insert([
            'program_id' => $programWMBA,
            'session_id' => $fall_2024,
        ]);

        DB::table('program_session')->insert([
            'program_id' => $programWMBA,
            'session_id' => $summer_2025,
        ]);
    }
}


