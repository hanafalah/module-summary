<?php

namespace Zahzah\ModuleSummary\Models\Summary;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zahzah\LaravelHasProps\Concerns\HasProps;
use Zahzah\LaravelSupport\Models\BaseModel;
use Zahzah\ModuleSummary\Resources\Summary\{
    ViewSummary, ShowSummary
};

class Summary extends BaseModel{
    use HasUlids, HasProps, SoftDeletes;

    public $incrementing = false;
    protected $keyType   = "string";
    protected $list      = ['id','parent_id','reference_type','reference_id','props'];
    protected $show      = ['parent_id'];

    public function toViewApi(){
        return new ViewSummary($this);
    }

    public function toShowApi(){
        return new ShowSummary($this);
    }

    public function reference(){return $this->morphTo();}
}