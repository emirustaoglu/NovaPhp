<?php

use NovaPhp\Database\DB;

return new class {

    public function run(): void
    {
        DB::table('exampleTable')->insert([
            [
               "EkleyenKullanici" => "NovaPhp",
            ]
        ]);
    }
};