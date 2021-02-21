<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallProject extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Project';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        // drop all tables in DB
        $this->call('tables:drop');

        // clear cache
        $this->info('Clearing cache...');
        $this->call('config:clear');

        // install voyager
        $this->info('Installing Voyager...');
        $this->call('voyager:install');

        // default seed
        $this->call('db:seed');

        $this->info('Project is READY.');
        return true;
    }
}
