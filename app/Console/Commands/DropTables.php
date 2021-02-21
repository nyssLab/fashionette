<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DropTables extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tables:drop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drops all the tables in the database';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $this->info('Dropping all tables in Database...');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach (DB::select('SHOW TABLES') as $table) {
            $table_array = get_object_vars($table);
            DB::statement('DROP TABLE IF EXISTS ' . $table_array[key($table_array)]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->info('Dropping completed.');
        return true;
    }
}
