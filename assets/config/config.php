<?php

use Hanafalah\ModuleSummary\Commands as ModuleSummaryCommands;

return [
    'namespace' => 'Hanafalah\\ModuleSummary',
    'app' => [
        'contracts' => [
            //ADD YOUR CONTRACTS HERE
        ],
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'database' => 'Database',
        'data' => 'Data',
        'resource' => 'Resources',
        'migration' => '../assets/database/migrations'
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts'
    ],
    'database' => [
        'models' => [
        ]
    ],
    'commands' => [
        ModuleSummaryCommands\InstallMakeCommand::class
    ]
];
