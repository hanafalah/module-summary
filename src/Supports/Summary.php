<?php

namespace Hanafalah\ModuleSummary\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleSummary\Contracts\Summary as ContractsSummary;

class Summary extends PackageManagement implements ContractsSummary
{
    protected string $__entity = 'Summary';
    public $summary_model;
}
