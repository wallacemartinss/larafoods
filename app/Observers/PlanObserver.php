<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Plan;

class PlanObserver
{

    

    /**
     * Handle the plan "created" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function creating(Plan $plan)
    {
     $ascii = Str::ascii($plan->name);
     $plan->url = Str::kebab($ascii);
        
    }

    /**
     * Handle the plan "updated" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function updating(Plan $plan)
    {
        $ascii = Str::ascii($plan->name);
        $plan->url = Str::kebab($ascii);
    }
}