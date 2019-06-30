<?php

use Illuminate\Database\Seeder;

class InquiriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'user_id' => 1,
          'title' => 'test',
          'question' => 'test',
          'answer' => 'test',
        ];
        DB::table('inquiries')->insert($param);

        $param = [
          'user_id' => 2,
          'title' => 'sample',
          'question' => 'sample',
          'answer' => 'sample',
        ];
        DB::table('inquiries')->insert($param);

        $param = [
          'user_id' => 1,
          'title' => 'hoge',
          'question' => 'fuga',
          'answer' => 'hogefuga',
        ];
        DB::table('inquiries')->insert($param);


    }
}
