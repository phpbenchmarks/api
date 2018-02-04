<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api;

use PhpBenchmarksApi\Api\Behavior;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\PhpVersionService;

class TableApi extends AbstractApi
{
    use Behavior\BenchmarkToolTrait;
    use Behavior\PhpVersionTrait;
    use Behavior\ComponentVersionTrait;
    use Behavior\BenchmarkTrait;
    use Behavior\BackgroundColorTrait;
    use Behavior\FontColorTrait;
    use Behavior\ShowScoreTrait;
    use Behavior\ScoreBackgroundColorTrait;
    use Behavior\ScoreFontColorTrait;
    use Behavior\ShowPositionTrait;
    use Behavior\PositionBackgroundColorTrait;
    use Behavior\PositionFontColorTrait;
    use Behavior\BorderTypeTrait;

    /** @var string */
    protected $tableBorderColor = '#e1e1e4';

    /** @var string */
    protected $tableHeaderBackgroundColor = '#d2d2d2';

    /** @var string */
    protected $tableHeaderBorderColor = '#e1e1e4';

    /** @var string */
    protected $tableHeaderFontColor = '#000000';

    /** @var string */
    protected $tableLineBackgroundColor = '#ffffff';

    /** @var string */
    protected $tableLineFontColor = '#000000';

    /** @var string */
    protected $tableLineAlternateBackgroundColor = '#eaf3f7';

    /** @var string */
    protected $tableLineAlternateFontColor = '#000000';

    /** @var string */
    protected $legendFontColor = '#646464';

    /** @param string $token */
    public function __construct($token)
    {
        $this
            ->setToken($token)
            ->setBenchmarkTool(BenchmarkToolService::getDefault())
            ->setPhpVersion(PhpVersionService::getDefault());
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setTableBorderColor($color)
    {
        $this->tableBorderColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getTableBorderColor()
    {
        return $this->tableBorderColor;
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setTableHeaderBackgroundColor($color)
    {
        $this->tableHeaderBackgroundColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getTableHeaderBackgroundColor()
    {
        return $this->tableHeaderBackgroundColor;
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setTableHeaderBorderColor($color)
    {
        $this->tableHeaderBorderColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getTableHeaderBorderColor()
    {
        return $this->tableHeaderBorderColor;
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setTableHeaderFontColor($color)
    {
        $this->tableHeaderFontColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getTableHeaderFontColor()
    {
        return $this->tableHeaderFontColor;
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setTableLineBackgroundColor($color)
    {
        $this->tableLineBackgroundColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getTableLineBackgroundColor()
    {
        return $this->tableLineBackgroundColor;
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setTableLineFontColor($color)
    {
        $this->tableLineFontColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getTableLineFontColor()
    {
        return $this->tableLineFontColor;
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setTableLineAlternateBackgroundColor($color)
    {
        $this->tableLineAlternateBackgroundColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getTableLineAlternateBackgroundColor()
    {
        return $this->tableLineAlternateBackgroundColor;
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setTableLineAlternateFontColor($color)
    {
        $this->tableLineAlternateFontColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getTableLineAlternateFontColor()
    {
        return $this->tableLineAlternateFontColor;
    }

    /**
     * @param ?string $color HEX color, without #. Example : ffaabb
     * @return $this
     */
    public function setLegendFontColor($color)
    {
        $this->legendFontColor = $color;

        return $this;
    }

    /** @return ?string */
    public function getLegendFontColor()
    {
        return $this->legendFontColor;
    }

    /** @return ?string */
    public function getData()
    {
        $parameters = $this->createUrlParameters($this->getBenchmarkTool(), $this->getPhpVersion());
        $parameters[$this->getBenchmarkUrlParameterName()] = $this->getBenchmark();
        $parameters[$this->getBackgroundColorParameterName()] = $this->getBackgroundColor();
        $parameters[$this->getFontColorParameterName()] = $this->getFontColor();
        $parameters[$this->getShowScoreUrlParameterName()] = $this->isShowScore();
        $parameters[$this->getScoreBackgroundColorUrlParameterName()] = $this->getScoreBackgroundColor();
        $parameters[$this->getScoreFontColorUrlParameterName()] = $this->getScoreFontColor();
        $parameters[$this->getShowPositionUrlParameterName()] = $this->isShowPosition();
        $parameters[$this->getPositionBackgroundColorUrlParameterName()] = $this->getPositionBackgroundColor();
        $parameters[$this->getPositionFontColorUrlParameterName()] = $this->getPositionFontColor();
        $parameters[$this->getBorderTypeUrlParameterName()] = $this->getBorderType();
        $parameters['tableBorderColor'] = $this->getTableBorderColor();
        $parameters['tableHeaderBackgroundColor'] = $this->getTableHeaderBackgroundColor();
        $parameters['tableHeaderBorderColor'] = $this->getTableHeaderBorderColor();
        $parameters['tableHeaderFontColor'] = $this->getTableHeaderFontColor();
        $parameters['tableLineBackgroundColor'] = $this->getTableLineBackgroundColor();
        $parameters['tableLineFontColor'] = $this->getTableLineFontColor();
        $parameters['tableLineAlternateBackgroundColor'] = $this->getTableLineAlternateBackgroundColor();
        $parameters['tableLineAlternateFontColor'] = $this->getTableLineAlternateFontColor();
        $parameters['legendFontColor'] = $this->getLegendFontColor();

        return $this
            ->setUrl(
                'http://api.phpbenchmarks.com/benchmark/badge/'
                . ($this->getComponentVersion() !== null ? $this->getComponentVersion() : $this->getPhpVersion())
            )
            ->appendParametersToUrl($parameters)
            ->call();
    }
}
