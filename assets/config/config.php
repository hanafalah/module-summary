<?php

use Hanafalah\ModuleSummary\Models as ModuleSummaryModels;
use Hanafalah\ModuleSummary\Commands as ModuleSummaryCommands;

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
