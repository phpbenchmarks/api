<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait PhpVersionTrait
{
    /** @var ?string */
    protected $phpVersion;

    /**
     * @param ?string $phpVersion Use PhpVersionService constants
     * @return $this
     */
    public function setPhpVersion($phpVersion)
    {
        $this->phpVersion = $phpVersion;

        return $this;
    }

    /** @return ?string */
    public function getPhpVersion()
    {
        return $this->phpVersion;
    }
}
