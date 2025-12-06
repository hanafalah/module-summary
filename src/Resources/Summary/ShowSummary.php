<?php

namespace Hanafalah\ModuleSummary\Resources\Summary;

use Illuminate\Http\Request;

class ShowSummary extends ViewSummary
{

    public function toArray(Request $request): array
    {
        $arr = [];
        $arr = array_merge(parent::toArray($request), $arr);

        return $arr;
    }
}
