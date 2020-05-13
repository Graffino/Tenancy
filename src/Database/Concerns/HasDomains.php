<?php

namespace Stancl\Tenancy\Database\Concerns;

use Stancl\Tenancy\Contracts\Domain;

/**
 * @property-read Domain[] $domains
 */
trait HasDomains
{
    public function domains()
    {
        return $this->hasMany(config('tenancy.domain_model'), 'tenant_id');
    }
}