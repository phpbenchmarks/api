<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait BorderTypeTrait
{
    /** @var ?int */
    protected $borderType;

    /**
     * @param ?int $borderType Use BorderTypeService constants
     * @return $this
     */
    public function setBorderType($borderType)
    {
        $this->borderType = $borderType;

        return $this;
    }

    /** @return ?int */
    public function getBorderType()
    {
        return $this->borderType;
    }

    /** @return string */
    public function getBorderTypeUrlParameterName()
    {
        return 'borderType';
    }
}
