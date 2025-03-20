<?php

namespace Hanafalah\ModuleSummary\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleSummary\Contracts\Summary as ContractsSummary;
use Hanafalah\ModuleSummary\Resources\Summary\{
    ViewSummary,
    ShowSummary
};

class Summary extends PackageManagement implements ContractsSummary
{
    protected array $__guard   = ['id'];
    protected array $__add     = ['reference_type', 'reference_id'];
    protected string $__entity = 'Summary';
    public static $summary_model;

    protected array $__resources = [
        'view' => ViewSummary::class,
        'show' => ShowSummary::class
    ];
}
