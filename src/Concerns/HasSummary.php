<?php

namespace Hanafalah\ModuleSummary\Concerns;

use Illuminate\Database\Eloquent\Model;

trait HasSummary
{
    public static function bootHasSummary()
    {
        static::created(function ($query) {
            $query->summary()->firstOrCreate();
        });
    }

    public function summary()
    {
        return $this->morphOneModel('Summary', 'reference');
    }
}
