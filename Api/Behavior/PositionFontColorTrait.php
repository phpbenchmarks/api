<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait PositionFontColorTrait
{
    /** @var ?string */
    protected $positionFontColor;

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setPositionFontColor($color)
    {
        $this->positionFontColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getPositionFontColor()
    {
        return $this->positionFontColor;
    }

    /** @return string */
    public function getPositionFontColorUrlParameterName()
    {
        return 'positionFontColor';
    }
}
