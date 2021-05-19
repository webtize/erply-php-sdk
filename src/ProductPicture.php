<?php


namespace Webtize\ErplySDK;


class ProductPicture
{

    private $productPictureID = null;
    private $productID = null;
    private $name = null;
    private $thumbURL = null;
    private $smallURL = null;
    private $largeURL = null;
    private $fullURL = null;
    private $external = null;
    private $hostingProvider = null;
    private $added = null;
    private $lastModified = null;
    private $hash = null;
    private $tenant = null;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "productPictureID")) {
                $this->productPictureID = $record->productPictureID;
            }
            if (property_exists($record, "productID")) {
                $this->productID = $record->productID;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "thumbURL")) {
                $this->thumbURL = $record->thumbURL;
            }
            if (property_exists($record, "smallURL")) {
                $this->smallURL = $record->smallURL;
            }
            if (property_exists($record, "largeURL")) {
                $this->largeURL = $record->largeURL;
            }
            if (property_exists($record, "fullURL")) {
                $this->fullURL = $record->fullURL;
            }
            if (property_exists($record, "external")) {
                $this->external = $record->external;
            }
            if (property_exists($record, "hostingProvider")) {
                $this->hostingProvider = $record->hostingProvider;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "hash")) {
                $this->hash = $record->hash;
            }
            if (property_exists($record, "tenant")) {
                $this->tenant = $record->tenant;
            }
        }
    }


    /**
     * @return null
     */
    public function getProductPictureID()
    {
        return $this->productPictureID;
    }

    /**
     * @return null
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null
     */
    public function getThumbURL()
    {
        return $this->thumbURL;
    }

    /**
     * @return null
     */
    public function getSmallURL()
    {
        return $this->smallURL;
    }

    /**
     * @return null
     */
    public function getLargeURL()
    {
        return $this->largeURL;
    }

    /**
     * @return null
     */
    public function getFullURL()
    {
        return $this->fullURL;
    }

    /**
     * @return null
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * @return null
     */
    public function getHostingProvider()
    {
        return $this->hostingProvider;
    }

    /**
     * @return null
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @return null
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @return null
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @return null
     */
    public function getTenant()
    {
        return $this->tenant;
    }


}