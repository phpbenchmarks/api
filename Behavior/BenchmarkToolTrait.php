<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Behavior;

trait BenchmarkToolTrait
{
    /** @var ?string */
    protected $benchmarkTool;

    /**
     * @param ?string $benchmarkTool
     * @return $this
     */
    public function setBenchmarkTool($benchmarkTool)
    {
        $this->benchmarkTool = $benchmarkTool;

        return $this;
    }

    /** @return ?string */
    public function getBenchmarkTool()
    {
        return $this->benchmarkTool;
    }
}
