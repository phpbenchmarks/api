<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Behavior;

trait BenchmarkTrait
{
    /** @var ?int */
    protected $benchmark;

    /**
     * @param ?int $benchmark
     * @return $this
     */
    public function setBenchmark($benchmark)
    {
        $this->benchmark = $benchmark;

        return $this;
    }

    /** @return ?int */
    public function getBenchmark()
    {
        return $this->benchmark;
    }

    /** @return string */
    public function getBenchmarkUrlParameterName()
    {
        return 'benchmark';
    }
}
