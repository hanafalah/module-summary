<?php

namespace Hanafalah\ModuleSummary\Resources\Summary;

use Illuminate\Http\Request;
use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewSummary extends ApiResource
{

    public function toArray(Request $request): array
    {
        $arr = [
            'id'             => $this->id,
            'reference_type' => $this->reference_type,
            'reference'      => $this->relationValidation('reference', function () {
                return $this->reference->toViewApi()->resolve();
            }),
            'group_summary_id' => $this->group_summary_id
        ];

        return $arr;
    }
}
