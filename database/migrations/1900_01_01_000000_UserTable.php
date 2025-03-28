<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    public function up(): void
    {
        Capsule::schema()->create('UserTable', function (Blueprint $table) {
            $table->string("Id", 36)->primary(true)->index();
            $table->string("NameSurname", 255);
            $table->string("EMail", 255)->index();
            $table->string("Phone", 50)->nullable();
            $table->string("Password", 100);
            $table->string("Status", 36);
            $table->dateTime("LastLoginTime")->nullable();
            $table->integer("isBlock")->default("0");
            $table->integer("MasterUser")->default("0");
            $table->integer("MailVerify")->default("0");
            $table->integer("PhoneVerify")->default("0");
        });
        Capsule::schema()->create('UserVerify', function (Blueprint $table) {
            $table->string("Id", 36)->primary(true)->index();
            $table->string("UserId", 36)->index();
            $table->dateTime("VerifyDate")->useCurrent();
            $table->integer("VerifyType")->default("0")->comment("0: Mail, 1: Phone");
            $table->string("VerifyCode", 10);
        });
    }

    public function down(): void
    {
        Capsule::schema()->dropIfExists('UserTable');
        Capsule::schema()->dropIfExists('UserVerify');
    }
};
