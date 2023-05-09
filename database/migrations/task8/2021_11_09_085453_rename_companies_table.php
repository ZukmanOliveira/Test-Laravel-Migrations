<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCompaniesTable extends Migration
{
    
    public function up(): void
    {
        // TASK: add a migration to rename table "company" into "companies"
        Schema::rename('company','companys');
    }
    
    public function down(): void
    {
        Schema::rename('company','company');
    }
}
