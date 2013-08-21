<?php

namespace Stc\ScraperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScrapeContent
 */
class ScrapeContent
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $headers;

    /**
     * @var string
     */
    private $data;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set headers
     *
     * @param string $headers
     * @return ScrapeContent
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    
        return $this;
    }

    /**
     * Get headers
     *
     * @return string 
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return ScrapeContent
     */
    public function setData($data)
    {
        if (is_array($data)) {
            $data = serialize($data);
        }
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        if (is_array($this->data)) {
            $this->data = unserialize($this->data);
        }

        return $this->data;
    }
}