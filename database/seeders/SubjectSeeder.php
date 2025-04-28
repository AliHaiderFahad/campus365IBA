<?php

namespace Database\Seeders; // Add the namespace

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;
use App\Models\EnrollSubject;

class SubjectSeeder extends Seeder
{
      /**
     * Run the database seeds.
     */
    public function run(): void
    {

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate tables before seeding
        DB::table('subjects')->truncate();
        DB::table('program_subject')->truncate();
        DB::table('enroll_subjects')->truncate();
        DB::table('enroll_subject_subject')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	 	
	$subjects = array(
	  array('id' => '1','title' => 'Introduction to Business','code' => 'BUS 101','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '2','title' => 'English Writing and Public Speaking','code' => 'BUS 102','credit_hour' => '2','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '3','title' => 'Business Mathematics','code' => 'BUS 103','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '4','title' => 'Business Communication','code' => 'BUS 104','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '5','title' => 'Society, Business, and Government','code' => 'BUS 105','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '6','title' => 'Business Statistics I','code' => 'BUS 106','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '7','title' => 'Microeconomics','code' => 'BUS 108','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '8','title' => 'Principles of Management','code' => 'MGT 101','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '9','title' => 'Financial Accounting I','code' => 'ACT 101','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '10','title' => 'Introduction to Psychology','code' => 'BUS 110','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '11','title' => 'Business Statistics II','code' => 'BUS 207','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '12','title' => 'Macroeconomics','code' => 'BUS 209','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '13','title' => 'Financial Accounting II','code' => 'ACT 202','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '14','title' => 'Organization Behavior','code' => 'MGT 202','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '15','title' => 'Introduction to Marketing','code' => 'MKT 201','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '16','title' => 'Introduction to Finance','code' => 'FIN 201','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '17','title' => 'Financial Management','code' => 'FIN 202','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '18','title' => 'Human Resource Management','code' => 'HRM 201','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '19','title' => 'Management Accounting','code' => 'ACT 203','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '20','title' => 'Legal Environment in Business','code' => 'BUS 211','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '21','title' => 'Management Information System','code' => 'MIS 201','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '22','title' => 'Marketing Management','code' => 'MKT 202','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '23','title' => 'Production and Operation Management','code' => 'BUS 312','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '24','title' => 'Taxation and Auditing','code' => 'ACT 304','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '25','title' => 'Bank Management','code' => 'FIN 303','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '26','title' => 'Operation Research','code' => 'BUS 313','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '27','title' => 'Socio Economic Study of Bangladesh','code' => 'BUS 314','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '28','title' => 'Business Ethics','code' => 'BUS 315','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '29','title' => 'Entrepreneurship','code' => 'BUS 416','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '30','title' => 'Business Research Methodology','code' => 'BUS 417','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '31','title' => 'Advance Strategic Management','code' => 'MGT 403','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '32','title' => 'Research Project','code' => 'BUS 498','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '33','title' => 'Internship','code' => 'BUS 499','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '34','title' => 'Advance Corporate Finance','code' => 'FIN 401','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '35','title' => 'Financial Institutions and Markets','code' => 'FIN 402','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '36','title' => 'Investment and Portfolio Management','code' => 'FIN 403','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '37','title' => 'Real Estate Finance and Investment','code' => 'FIN 404','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '38','title' => 'Financial Statement Analysis','code' => 'FIN 405','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '39','title' => 'Working Capital Management','code' => 'FIN 406','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '40','title' => 'Financial Engineering','code' => 'FIN 407','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '41','title' => 'Public Finance','code' => 'FIN 408','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '42','title' => 'International Financial Management','code' => 'FIN 409','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '43','title' => 'Risk Management and Insurance','code' => 'FIN 410','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '44','title' => 'Behavioral Finance','code' => 'FIN 411','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '45','title' => 'Theory of Finance','code' => 'FIN 412','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '46','title' => 'Selected Issues in Finance','code' => 'FIN 413','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '47','title' => 'Consumer Behavior','code' => 'MKT 401','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '48','title' => 'Service Marketing','code' => 'MKT 402','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '49','title' => 'Marketing Channel Management','code' => 'MKT 403','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '50','title' => 'Strategic Brand Management','code' => 'MKT 404','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '51','title' => 'International Marketing','code' => 'MKT 405','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '52','title' => 'Integrated Marketing Communication','code' => 'MKT 406','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '53','title' => 'Customer Relationship Management','code' => 'MKT 407','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '54','title' => 'Export Import Marketing','code' => 'MKT 408','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '55','title' => 'Sales Management','code' => 'MKT 409','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '56','title' => 'Product Management','code' => 'MKT 410','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '57','title' => 'Fundamentals of E-Marketing','code' => 'MKT 411','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '58','title' => 'Global Marketing','code' => 'MKT 412','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '59','title' => 'Selected Issues in Marketing','code' => 'MKT 413','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '60','title' => 'Workforce Policy and Planning','code' => 'HRM 401','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '61','title' => 'Labor and Industrial Law','code' => 'HRM 402','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '62','title' => 'Industrial Relations','code' => 'HRM 403','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '63','title' => 'Performance Management','code' => 'HRM 404','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '64','title' => 'Conflict Management','code' => 'HRM 405','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '65','title' => 'Compensation Management','code' => 'HRM 406','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '66','title' => 'Training and Development','code' => 'HRM 407','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '67','title' => 'Trade Union and Collective Bargaining','code' => 'HRM 408','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '68','title' => 'Labor Economics','code' => 'HRM 409','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '69','title' => 'Selected Issues in Human Resource Management','code' => 'HRM 410','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '70','title' => 'Accounting Information System','code' => 'ACT 401','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '71','title' => 'Strategic Management Accounting','code' => 'ACT 402','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '72','title' => 'Accounting for Government and Non-Profit Organization','code' => 'ACT 403','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '73','title' => 'Cost Accounting','code' => 'ACT 404','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '74','title' => 'Intermediate Accounting','code' => 'ACT 405','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '75','title' => 'Advanced Financial Accounting','code' => 'ACT 406','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '76','title' => 'Advanced Auditing','code' => 'ACT 407','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '77','title' => 'Special Issues in Accounting','code' => 'ACT 408','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '78','title' => 'System Analysis and Design','code' => 'MIS 401','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '79','title' => 'Introduction to Database','code' => 'MIS 402','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '80','title' => 'Object Oriented Programming','code' => 'MIS 403','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '81','title' => 'Web Based Programming','code' => 'MIS 404','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '82','title' => 'Network Resource Management','code' => 'MIS 405','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '83','title' => 'Internet Security','code' => 'MIS 406','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '84','title' => 'E-Commerce','code' => 'MIS 407','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '85','title' => 'Decision Support System','code' => 'MIS 408','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	  array('id' => '86','title' => 'Selected Issues in Management Information System','code' => 'MIS 409','credit_hour' => '3','subject_type' => '0','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38')
	);

    foreach ($subjects as $subject) {
    
    	unset($subject['created_at']);
    	unset($subject['updated_at']);
    	unset($subject['id']);
    	

		$subject_id = DB::table('subjects')->insertGetId($subject);
        

		DB::table('program_subject')->insert([
            'program_id' => 1,
			'subject_id' => $subject_id,
        ]);
    }


	   // Insert Data
	   $enrollSubject = EnrollSubject::firstOrCreate(
		['program_id' => 1, 'semester_id' => 1, 'section_id' => 1],
		['program_id' => 1, 'semester_id' => 1, 'section_id' => 1]
		);

		// Attach Update
		$enrollSubject->subjects()->sync(array(1,2,3,8,9));


		// Insert Data
		$enrollSubject = EnrollSubject::firstOrCreate(
			['program_id' => 1, 'semester_id' => 1, 'section_id' => 2],
			['program_id' => 1, 'semester_id' => 1, 'section_id' => 2]
			);
	
			// Attach Update
			$enrollSubject->subjects()->sync(array(1,2,3,8,9));


	$subjects = array(
		// Core Courses
		array('title' => 'Advanced Management Principles','code' => 'MBA 601','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Core Course','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Corporate Financial Reporting','code' => 'MBA 602','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Core Course','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Marketing Strategy','code' => 'MBA 603','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Core Course','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Business Ethics and Corporate Governance','code' => 'MBA 604','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Core Course','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Strategic Management','code' => 'MBA 605','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Core Course','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	
		// Major Courses (example: Finance)
		array('title' => 'Corporate Finance','code' => 'FIN 601','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Major - Finance','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Financial Markets and Institutions','code' => 'FIN 602','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Major - Finance','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'International Finance','code' => 'FIN 603','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Major - Finance','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Financial Derivatives','code' => 'FIN 604','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Major - Finance','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Advanced Investment Analysis','code' => 'FIN 605','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Major - Finance','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	
		// Minor Courses (example: Marketing)
		array('title' => 'Digital Marketing','code' => 'MKT 601','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Minor - Marketing','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Consumer Insights','code' => 'MKT 602','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Minor - Marketing','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	
		// Dissertation
		array('title' => 'Dissertation in Finance','code' => 'FIN 699','credit_hour' => '3','subject_type' => '4','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Dissertation based on major area','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	);

	$sub_ids = [];
	foreach ($subjects as $subject) {
    
    	unset($subject['created_at']);
    	unset($subject['updated_at']);
    	unset($subject['id']);
    	

		$subject_id = DB::table('subjects')->insertGetId($subject);
        $sub_ids[] = $subject_id;

		DB::table('program_subject')->insert([
            'program_id' => 2,
			'subject_id' => $subject_id,
        ]);
    }


	// Insert Data
	$enrollSubject = EnrollSubject::firstOrCreate(
		['program_id' => 2, 'semester_id' => 1, 'section_id' => 1],
		['program_id' => 2, 'semester_id' => 1, 'section_id' => 1]
		);

		// Attach Update
	$enrollSubject->subjects()->sync(array($sub_ids[0],$sub_ids[1],$sub_ids[2],$sub_ids[3],$sub_ids[4]));


	// Insert Data
	$enrollSubject = EnrollSubject::firstOrCreate(
		['program_id' => 2, 'semester_id' => 1, 'section_id' => 2],
		['program_id' => 2, 'semester_id' => 1, 'section_id' => 2]
		);

		// Attach Update
	$enrollSubject->subjects()->sync(array($sub_ids[0],$sub_ids[1],$sub_ids[2],$sub_ids[3],$sub_ids[4]));


	$subjects = array(
		array('title' => 'Advance Management','code' => 'MBA 501','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Managerial Economics','code' => 'MBA 502','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Financial Accounting','code' => 'MBA 503','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Advance Marketing Management','code' => 'MBA 504','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Organizational Behavior','code' => 'MBA 505','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Quantitative Techniques for Business','code' => 'MBA 506','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Advance Business Communication','code' => 'MBA 507','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Managerial Finance','code' => 'MBA 508','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Advance Human Resource Management','code' => 'MBA 509','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Operations Management','code' => 'MBA 510','credit_hour' => '3','subject_type' => '1','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => NULL,'status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	
		array('title' => 'Banking Operations and Risk Management','code' => 'FIN 631','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Banking and Finance','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Investment Analysis and Portfolio Management','code' => 'FIN 632','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Banking and Finance','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Strategic Marketing','code' => 'MKT 631','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Marketing','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Advance Consumer Behavior','code' => 'MKT 632','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Marketing','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Performance and Compensation Management','code' => 'HRM 631','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'HR Management','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Information Systems Management','code' => 'MIS 631','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'MIS','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Database Systems for Business','code' => 'MIS 632','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'MIS','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Quantitative Decision Making','code' => 'QBA 631','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Quantitative Business Analysis','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'Project Management in Development','code' => 'DM 631','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'Development Management','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
		array('title' => 'International Trade and Business','code' => 'IB 631','credit_hour' => '3','subject_type' => '2','class_type' => '1','total_marks' => NULL,'passing_marks' => NULL,'description' => 'International Business','status' => '1','created_at' => '2025-04-08 17:56:38','updated_at' => '2025-04-08 17:56:38'),
	);
	$sub_ids = [];
	foreach ($subjects as $subject) {
    
    	unset($subject['created_at']);
    	unset($subject['updated_at']);
    	unset($subject['id']);
    	

		$subject_id = DB::table('subjects')->insertGetId($subject);
        
		$sub_ids[] = $subject_id;

		DB::table('program_subject')->insert([
            'program_id' => 3,
			'subject_id' => $subject_id,
        ]);
    }

	// Insert Data
	$enrollSubject = EnrollSubject::firstOrCreate(
		['program_id' => 3, 'semester_id' => 9, 'section_id' => 1],
		['program_id' => 3, 'semester_id' => 9, 'section_id' => 1]
		);

		// Attach Update
	$enrollSubject->subjects()->sync(array($sub_ids[0],$sub_ids[1],$sub_ids[2],$sub_ids[3],$sub_ids[4]));


	// Insert Data
	$enrollSubject = EnrollSubject::firstOrCreate(
		['program_id' => 3, 'semester_id' => 9, 'section_id' => 2],
		['program_id' => 3, 'semester_id' => 9, 'section_id' => 2]
		);

		// Attach Update
	$enrollSubject->subjects()->sync(array($sub_ids[0],$sub_ids[1],$sub_ids[2],$sub_ids[3],$sub_ids[4]));



    $this->command->info('Subjects seeded successfully.');
   
}


}