<?php

namespace Hanafalah\ModuleSummary\Schemas;

use Hanafalah\ModuleSummary\{
    Supports\BaseModuleSummary
};
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;

class Summary extends BaseModuleSummary implements DataManagement
{
    public function booting(): self
    {
        static::$__class = $this;
        static::$__model = $this->{$this->__entity . "Model"}();
        return $this;
    }

    protected array $__guard   = ['id', 'parent_id', 'reference_type', 'reference_id'];
    protected array $__add     = ['status'];
    protected string $__entity = 'Summary';

    /**
     * Add a new API access or update the existing one if found.
     *
     * The given attributes will be merged with the existing API access.
     *
     * @param array $attributes The attributes to be added to the API access.
     *
     * @return \Illuminate\Database\Eloquent\Model The API access model.
     */
    public function addOrChange(?array $attributes = []): self
    {
        $this->updateOrCreate($attributes);
        return $this;
    }
}
