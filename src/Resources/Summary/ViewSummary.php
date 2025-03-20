<?php

namespace Zahzah\ModuleSummary\Resources\Summary;

use Illuminate\Http\Request;
use Zahzah\LaravelSupport\Resources\ApiResource;

class ViewSummary extends ApiResource{

    public function toArray(Request $request): array
    {
        $arr = [
            'id'             => $this->id,
            'reference_type' => $this->reference_type,
            'reference'      => $this->relationValidation('reference',function(){
                return $this->reference->toViewApi();
            }),
            'group_summary_id' => $this->group_summary_id
        ];
        
        return $arr;
    }

}