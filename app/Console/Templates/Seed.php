<?php

use Core\DB;
use Core\RawSql;

return new class {

    public function run(): void
    {
        DB::table('exampleTableName')->insert([
            [
                "Id" => new RawSql("UUID()"),
                "ColumnName" => "value",
            ]
        ]);
    }
};