<?php

declare(strict_types=1);

namespace Sajya\Server\Tests\Fixtures;

use Illuminate\Support\Collection;
use Sajya\Server\Procedure;

class SubtractProcedure extends Procedure
{
    /**
     * The name of the procedure that will be
     * displayed and taken into account in the search
     *
     * @var string
     */
    public static string $name = 'subtract';

    /**
     * @param Collection $params
     *
     * @return array|int|string|void
     */
    public function handle(Collection $params)
    {
        return $params->first() - $params->last();
    }
}