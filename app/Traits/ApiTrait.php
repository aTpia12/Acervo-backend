<?php

namespace  App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait ApiTrait{

    public function scopeIncluded(Builder $query)
    {
        if(empty(request('included')))
        {
            return;
        }

        $value = explode(',', request('included'));

        $query->with($value);
    }

    public function scopeFilter(Builder $query)
    {
        if(empty(request('filter')))
        {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $filter => $value)
        {
            if($allowFilter->contains($filter))
            {
                $query->where($filter, 'LIKE', '%'.$value.'%');
            }

        }
    }
}
