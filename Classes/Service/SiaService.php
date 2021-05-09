<?php
namespace iSeries\Sia\Service;

/*
 * This file is part of the iSeries.Sia package.
 */

use Neos\Flow\Http\Request;
use Neos\Flow\Http\Uri;
use Neos\Flow\Annotations as Flow;

/**
 * Sia Service
 * @package iSeries\Sia\Service
 * @Flow\Scope("singleton")
 */
class SiaService
{

    /**
     * @var array
     * @Flow\InjectConfiguration("settings")
     */
    protected $settings;

}