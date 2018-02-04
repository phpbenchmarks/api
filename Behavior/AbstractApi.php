<?php

declare(strict_types=1);

namespace PhpBenchmarksApi\Behavior;

use PhpBenchmarksApi\Service\BenchmarkToolService;
use PhpBenchmarksApi\Service\PhpVersionService;

abstract class AbstractApi implements ApiInterface
{
    const ERROR_HTTP_CODE = 1;
    const ERROR_INVALID_RETURN = 2;

    /** @var string */
    protected $token;

    /** @var ?string */
    protected $url;

    /** @var bool */
    protected $dev = false;

    /** @var string[] */
    protected $errors = [];

    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /** @return string */
    public function getToken()
    {
        return $this->token;
    }

    /** @return string */
    public function getUrl()
    {
        return $this->url;
    }

    /** @return bool */
    public function hasErrors()
    {
        return count($this->errors) > 0;
    }

    /** @return string[] */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param string $url
     * @return $this
     */
    protected function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param bool $dev
     * @return $this
     */
    public function setDev($dev)
    {
        $this->dev = boolval($dev);

        return $this;
    }

    /** @return bool */
    public function isDev()
    {
        return $this->dev;
    }

    /**
     * @param array $parameters
     * @return $this
     */
    protected function appendParametersToUrl(array $parameters)
    {
        $queryParameters = [];
        foreach ($parameters as $name => $value) {
            if (is_null($value) === false) {
                $queryParameters[$name] = $value;
            }
        }
        $queryParametersString = http_build_query($queryParameters);
        if ($queryParametersString !== '') {
            $this->setUrl($this->getUrl() . '?' . $queryParametersString);
        }

        return $this;
    }

    /**
     * @param ?string $benchmarkTool
     * @param ?string $phpVersion
     * @return array
     */
    protected function createUrlParameters($benchmarkTool, $phpVersion)
    {
        $return = [];

        if ($benchmarkTool !== BenchmarkToolService::getDefault()) {
            $return[BenchmarkToolService::getUrlParameterName()] = $benchmarkTool;
        }

        if ($phpVersion !== PhpVersionService::getDefault()) {
            $return[PhpVersionService::getUrlParameterName()] = $phpVersion;
        }

        return $return;
    }

    /** @return ?string */
    protected function call()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->getUrl());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = ['X-PhpBenchmarks-Api-Token' => $this->getToken()];
        if ($this->isDev()) {
            $headers['X-PhpBenchmarks-Api-Dev'] = true;
        }
        curl_setopt($curl, CURLOPT_HEADER, $headers);
        $return = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($httpCode !== 200) {
            $this->addError(static::ERROR_HTTP_CODE, 'Invalid HTTP code: ' . $httpCode . '.');
        } elseif ($return === false) {
            $this->addError(static::ERROR_INVALID_RETURN, 'Internal server error.');
        }

        return is_string($return) ? $return : null;
    }

    /**
     * @param int $code
     * @param string $error
     * @return $this
     */
    protected function addError($code, $error)
    {
        $this->errors[$code] = $error;

        return $this;
    }
}
