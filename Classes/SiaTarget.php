<?php
namespace iSeries\Cia;

/*
 * This file is part of the iSeries.Cia package.
 */

use iSeries\Sia\Client\SiaClient;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Log\Utility\LogEnvironment;
use Neos\Flow\ResourceManagement\CollectionInterface;
use Neos\Flow\ResourceManagement\Exception;
use Neos\Flow\ResourceManagement\Publishing\MessageCollector;
use Neos\Flow\ResourceManagement\PersistentResource;
use Neos\Flow\ResourceManagement\ResourceManager;
use Neos\Flow\ResourceManagement\ResourceMetaDataInterface;
use Neos\Flow\ResourceManagement\Target\TargetInterface;
use Psr\Log\LoggerInterface;

/**
 * A resource publishing target based on Cia
 */
class SiaTarget implements TargetInterface
{

    /**
     * Name which identifies this resource target
     *
     * @var string
     */
    protected $name;

    /**
     * @var SiaClient
     */
    protected $siaClient;

    /**
     * Returns the name of this target instance
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Constructor
     *
     * @param string $name Name of this target instance
     * @throws Exception
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Initialize the Sia Client
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->siaClient = new SiaClient();
    }

    /**
     * Publishes the whole collection to this target
     *
     * @param CollectionInterface $collection The collection to publish
     * @return void
     */
    public function publishCollection(CollectionInterface $collection) {

    }

    /**
     * Publishes the given persistent resource from the given storage
     *
     * @param PersistentResource $resource The resource to publish
     * @param CollectionInterface $collection The collection the given resource belongs to
     * @return void
     * @throws Exception
     */
    public function publishResource(PersistentResource $resource, CollectionInterface $collection) {

    }

    /**
     * Unpublishes the given persistent resource
     *
     * @param PersistentResource $resource The resource to unpublish
     * @return void
     */
    public function unpublishResource(PersistentResource $resource) {

    }

    /**
     * Returns the web accessible URI pointing to the given static resource
     *
     * @param string $relativePathAndFilename Relative path and filename of the static resource
     * @return string The URI
     */
    public function getPublicStaticResourceUri($relativePathAndFilename) {

    }

    /**
     * Returns the web accessible URI pointing to the specified persistent resource
     *
     * @param PersistentResource $resource PersistentResource object
     * @return string The URI
     * @throws Exception
     */
    public function getPublicPersistentResourceUri(PersistentResource $resource) {

    }
}