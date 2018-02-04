<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait ShowPositionTrait
{
    /** @var ?bool */
    protected $showPosition;

    /**
     * @param ?bool $show
     * @return $this
     */
    public function setShowPosition($show)
    {
        $this->showPosition = boolval($show);

        return $this;
    }

    /** @return ?bool */
    public function isShowPosition()
    {
        return $this->showPosition;
    }

    /** @return string */
    public function getShowPositionUrlParameterName()
    {
        return 'showPosition';
    }
}
