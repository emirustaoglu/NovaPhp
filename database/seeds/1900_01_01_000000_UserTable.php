<?php

use Core\DB;
use Core\RawSql;

return new class {

    public function run(): void
    {
        DB::table('UserTable')->insert([
            [
                "Id" => new RawSql("NOW()"),
                "NameSurname" => "NovaPhp",
                "EMail" => "emiru893@gmail.com",
                "Password" => "",
                "Status" => ""
            ]
        ]);
    }
};