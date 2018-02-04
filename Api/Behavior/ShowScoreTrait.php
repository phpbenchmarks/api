<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait ShowScoreTrait
{
    /** @var ?bool */
    protected $showScore;

    /**
     * @param ?bool $show
     * @return $this
     */
    public function setShowScore($show)
    {
        $this->showScore = boolval($show);

        return $this;
    }

    /** @return ?bool */
    public function isShowScore()
    {
        return $this->showScore;
    }

    /** @return string */
    public function getShowScoreUrlParameterName()
    {
        return 'showScore';
    }
}
