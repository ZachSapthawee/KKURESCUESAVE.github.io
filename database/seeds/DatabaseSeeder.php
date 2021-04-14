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
        // $this->call(UsersTableSeeder::class);

        DB::table('majors')->insert([
            [
                'name' => 'วิทยาการคอมพิวเตอร์และสารสนเทศ',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'วิทยาศาสตร์การกีฬาและการออกกำลังกาย',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'วิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'เทคโนโลยีและนวัตกรรมอาหาร',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'เทคโนโลยีการผลิตสัตว์น้ำ',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'นิติศาสตร์',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'เศรษฐศาสตร์ธุรกิจและการจัดการ',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'รัฐประศาสนศาสตร์',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'บัญชี',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'บริหารธุรกิจ',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'การท่องเที่ยวและอุตสาหกรรมการบริการ',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'วิชาภาษาอังกฤษเพื่อการจัดการธุรกิจ',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'การสอนภาษาอังกฤษในฐานะภาษาต่างประเทศ',
                'major_id' => '001',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);

        DB::table('faculties')->insert([
            'Fac_id' =>	 '001',
            'Faculty' => 'สหวิทยาการ'
        ]);
    }
}
