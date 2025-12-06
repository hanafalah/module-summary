<?php

namespace Hanafalah\ModuleSummary\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BaseModuleSummary extends PackageManagement
{
    /** @var array */
    protected $__module_summary_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig('module-summary', $this->__module_summary_config);
    }
}
