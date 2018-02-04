<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait FontColorTrait
{
    /** @var ?string */
    protected $fontColor;

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setFontColor($color)
    {
        $this->fontColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /** @return string */
    public function getFontColorParameterName()
    {
        return 'fontColor';
    }
}
