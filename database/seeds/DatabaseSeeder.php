<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('scheme')->insert([
            
        	'musclegroup' => 'borst'
        ]);

        DB::table('scheme')->insert([
            
        	'musclegroup' => 'schouders'
        ]);

        DB::table('scheme')->insert([
            
        	'musclegroup' => 'armen'
        ]);

        DB::table('scheme')->insert([
            
        	'musclegroup' => 'biceps'
        ]);

        DB::table('scheme')->insert([
            
        	'musclegroup' => 'triceps'
        ]);

        DB::table('scheme')->insert([
            
        	'musclegroup' => 'rug'
        ]);

        DB::table('scheme')->insert([
            
        	'musclegroup' => 'buik'
        ]);

        DB::table('scheme')->insert([
            
        	'musclegroup' => 'benen'
        ]);

        DB::table('scheme')->insert([
            
            'musclegroup' => 'full body'
        ]);



        DB::table('exercises')->insert([

            'exercisename' => 'bench press',
            'scheme_id' => 1,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'dumbbell bench press',
            'scheme_id' => 1,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'dumbbell fly',
            'scheme_id' => 1,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'machine chest fly',
            'scheme_id' => 1,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'machine chest press',
            'scheme_id' => 1,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'bumbbell shoulder press',
            'scheme_id' => 2,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'military press',
            'scheme_id' => 2,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'bumbbell lateral raise',
            'scheme_id' => 2,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'machine rear delt fly',
            'scheme_id' => 2,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'barbell bicep curl',
            'scheme_id' => 4,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'dumbbell bicep curl',
            'scheme_id' => 4,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'hammer curl',
            'scheme_id' => 4,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'tricep cable pushdown',
            'scheme_id' => 5,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'lying barbell tricep extension',
            'scheme_id' => 5,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'dips',
            'scheme_id' => 5,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'lat pulldown',
            'scheme_id' => 6,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'deadlift',
            'scheme_id' => 6,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'pull up',
            'scheme_id' => 6,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'barbell bent over row',
            'scheme_id' => 6,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'sit ups',
            'scheme_id' => 7,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'hanging knee raise',
            'scheme_id' => 7,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'hanging leg raise',
            'scheme_id' => 7,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'squats',
            'scheme_id' => 8,
            'sets' => 3,
            'reps' => 8

        ]);


        DB::table('exercises')->insert([

            'exercisename' => 'leg extension machine',
            'scheme_id' => 8,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'leg curl',
            'scheme_id' => 8,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'leg press',
            'scheme_id' => 8,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'joggen',
            'scheme_id' => 9,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'push ups',
            'scheme_id' => 9,
            'sets' => 3,
            'reps' => 8

        ]);

        DB::table('exercises')->insert([

            'exercisename' => 'pull ups',
            'scheme_id' => 9,
            'sets' => 3,
            'reps' => 8

        ]);
    }
}