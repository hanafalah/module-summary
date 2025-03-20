<?php 

use Zahzah\ModuleSummary\Models as ModuleSummaryModels;
use Zahzah\ModuleSummary\Commands as ModuleSummaryCommands;

return [
    'commands' => [
        ModuleSummaryCommands\InstallMakeCommand::class
    ],
    'database' => [
        'models' => [
            'Summary'  => ModuleSummaryModels\Summary\Summary::class,
        ]
    ]
];