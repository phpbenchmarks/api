<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait BenchmarkToolTrait
{
    /** @var ?string */
    protected $benchmarkTool;

    /**
     * @param ?string $benchmarkTool Use BenchmarkToolService constants
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
