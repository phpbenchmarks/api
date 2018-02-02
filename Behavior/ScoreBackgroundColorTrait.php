<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Behavior;

trait ScoreBackgroundColorTrait
{
    /** @var ?string */
    protected $scoreBackgroundColor;

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setScoreBackgroundColor($color)
    {
        $this->scoreBackgroundColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getScoreBackgroundColor()
    {
        return $this->scoreBackgroundColor;
    }

    /** @return string */
    public function getScoreBackgroundColorUrlParameterName()
    {
        return 'scoreBackgroundColor';
    }
}
