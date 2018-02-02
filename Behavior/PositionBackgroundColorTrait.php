<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Behavior;

trait PositionBackgroundColorTrait
{
    /** @var ?string */
    protected $positionBackgroundColor;

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setPositionBackgroundColor($color)
    {
        $this->positionBackgroundColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getPositionBackgroundColor()
    {
        return $this->positionBackgroundColor;
    }

    /** @return string */
    public function getPositionBackgroundColorUrlParameterName()
    {
        return 'positionBackgroundColor';
    }
}
