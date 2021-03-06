<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Api;

use PhpBenchmarksApi\Api\Behavior;
use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\PhpVersionService;

class SummaryApi extends AbstractApi
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

    /** @param string $token */
    public function __construct($token)
    {
        $this
            ->setToken($token)
            ->setBenchmarkTool(BenchmarkToolService::getDefault())
            ->setPhpVersion(PhpVersionService::getDefault());
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

        return $this
            ->setUrl(
                'http://api.phpbenchmarks.com/benchmark/summary/'
                . ($this->getComponentVersion() !== null ? $this->getComponentVersion() : $this->getPhpVersion())
            )
            ->appendParametersToUrl($parameters)
            ->call();
    }
}
