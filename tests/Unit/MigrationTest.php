<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * Migration Test
 * - On this test we will check if you know how to:
 *
 * 1. Create migration
 * 2. Setup Columns
 *
 * @package Tests\Feature\Exam
 */
class MigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Create jokes table
     *
     * @test
    */
    public function create_daily_logs_table()
    {
        $this->assertTrue(
            Schema::hasTable('jokes')
        );
    }

    /**
     * @test
     */
    public function create_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('jokes', [
                'id',
                'name',
                'email',
                'joke',
                'like',
                'deslike',
                'created_at',
                'updated_at',
            ])
        );
    }

}
