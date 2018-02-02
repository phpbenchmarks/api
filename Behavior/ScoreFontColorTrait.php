<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Behavior;

trait ScoreFontColorTrait
{
    /** @var ?string */
    protected $scoreFontColor;

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setScoreFontColor($color)
    {
        $this->scoreFontColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getScoreFontColor()
    {
        return $this->scoreFontColor;
    }

    /** @return string */
    public function getScoreFontColorUrlParameterName()
    {
        return 'scoreFontColor';
    }
}
