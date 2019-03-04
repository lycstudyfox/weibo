<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 安全方面考虑，在批量生成之前需要临时关闭安全保护
        Model::unguard();

        $this->call(UsersTableSeeder::class);

        // 最后再重新打开安全保护
        Model::reguard();
    }
}
