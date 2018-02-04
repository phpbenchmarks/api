<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api\Behavior;

trait BackgroundColorTrait
{
    /** @var ?string */
    protected $backgroundColor;

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setBackgroundColor($color)
    {
        $this->backgroundColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /** @return string */
    public function getBackgroundColorParameterName()
    {
        return 'backgroundColor';
    }
}
