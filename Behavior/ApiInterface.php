<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Behavior;

interface ApiInterface
{
    /** @return ?string */
    public function getData();

    /** @return bool */
    public function hasErrors();

    /** @return string[] */
    public function getErrors();
}
