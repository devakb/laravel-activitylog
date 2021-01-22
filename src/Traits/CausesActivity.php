<?php

namespace Devakb\Activitylog\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Devakb\Activitylog\ActivitylogServiceProvider;

trait CausesActivity
{
    public function actions(): MorphMany
    {
        return $this->morphMany(
            ActivitylogServiceProvider::determineActivityModel(),
            'causer'
        );
    }
}
