<?php

namespace Zahzah\ModuleSummary\Commands;

class InstallMakeCommand extends EnvironmentCommand{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module-summary:install';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command ini digunakan untuk installing awal module transaction';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $provider = 'Zahzah\ModuleSummary\ModuleSummaryServiceProvider';

        $this->comment('Installing Module Transaction...');
        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'config'
        ]);
        $this->info('✔️  Created config/module-summary.php');

        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'migrations'
        ]);
        $this->info('✔️  Created migrations');
        
        $migrations = $this->setMigrationBasePath(database_path('migrations'))->canMigrate();
        $this->callSilent('migrate', ['--path' => $migrations]);
        $this->info('✔️  App table migrated');

        $this->comment('zahzah/module-summary installed successfully.');
    }
}