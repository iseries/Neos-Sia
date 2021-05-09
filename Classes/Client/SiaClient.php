<?php
namespace iSeries\Sia\Client;

/*
 * This file is part of the iSeries.Sia package.
 */

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\ResponseInterface;
use Neos\Flow\Http\Request;

use Neos\Flow\Annotations as Flow;

/**
 * Class AddressApiHelper
 * @package iSeries\Sia\Client
 * @Flow\Scope("singleton")
 */
class SiaClient
{

    /**
     * @var array
     * @Flow\InjectConfiguration("skynet")
     */
    protected $siaSettings;

    /**
     * Get setting option
     * @param string
     * @return string
     */
    public function getOption($option)
    {
        return $this->siaSettings[$option];
    }

    /**
     * Get file
     * @param string $skylink
     * @return ResponseInterface
     * @throws SiaException
     */
    public function getFile(string $skylink): ResponseInterface
    {
        $uri = new Uri('https://' . $this->getOption('appName') . '.' . $this->getOption('hnsDomain').'/'.$skylink);
        $client = new Client($this->getOption('apiClientOptions'));
        try {
            return $client->request('GET', $uri);
        } catch (GuzzleException $e) {
            # TODO: Create SiaException
            # throw new SiaException('Retrieving file failed: ' . $e->getMessage(), 1542808207);
        }
    }

    /**
     * Send file
     * @param resource $resource
     * @param string $filename
     * @return string
     * @throws SiaException
     */
    public function sendFile($resource, $filename)
    {
        $uri = new Uri('https://' . $this->getOption('enpoint') . $this->getOption('endpointSendPath') . '/');
        $client = new Client($this->getOption('apiClientOptions'));
        $options = [
            'headers' => [
                'Accept' => $this->getOption('urlHeadersAccept'),
                'User-Agent' => $this->getOption('urlHeadersUserAgent')
            ],
            'multipart' => [
                [
                    'name'     => 'file',
                    'contents' => $resource,
                    'filename' => $filename
                ]
            ],
        ];

        try {
            $response = $client->request('POST', $uri, $options);
            return $response->getBody()->getContents();
        } catch (GuzzleException $e) {
            # TODO: Create SiaException
            # throw new SiaException('Sending file failed: ' . $e->getMessage(), 20825428067);
        }
    }
}