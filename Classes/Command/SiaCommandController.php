<?php
namespace iSeries\Sia\Command;

/*
 * This file is part of the iSeries.Sia package.
 */

use iSeries\Sia\Service\SiaService;
use Neos\Flow\Package\PackageManager;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Cli\CommandController;
use Neos\Flow\Cli\ConsoleOutput;
use Neos\Flow\Cli\Request;
use Neos\Flow\Cli\Response;

/**
 * Sia Command Controller
 */
class SiaCommandController extends CommandController {

    /**
     * @Flow\Inject
     * @var ConsoleOutput
     */
    protected $consoleOutput;

    /**
     * @Flow\Inject
     * @var SiaService
     */
    protected $siaService;

    /**
     * test command
     */
    public function testCommand()
    {
        $this->outputLine('Test');
    }
}