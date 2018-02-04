<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait ComponentVersionTrait
{
    /** @var ?string */
    protected $componentVersion;

    /**
     * @param ?string $componentVersion Use FrameworkService constants
     * @return $this
     */
    public function setComponentVersion($componentVersion)
    {
        $this->componentVersion = $componentVersion;

        return $this;
    }

    /** @return ?string */
    public function getComponentVersion()
    {
        return $this->componentVersion;
    }
}
