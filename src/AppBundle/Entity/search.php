<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * search
 *
 * @ORM\Table(name="search")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\searchRepository")
 */
class search
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var array
     *
     * @ORM\Column(name="keywords", type="simple_array")
     */
    private $keywords;

    /**
     * @var bool
     *
     * @ORM\Column(name="descriptionSearch", type="boolean")
     */
    private $descriptionSearch;

    /**
     * @var string
     *
     * @ORM\Column(name="sortOrder", type="string", length=255)
     */
    private $sortOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="MaxPrice", type="integer")
     */
    private $maxPrice;

    /**
     * @var array
     *
     * @ORM\Column(name="ListingType", type="simple_array")
     */
    private $listingType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return search
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set keywords
     *
     * @param array $keywords
     *
     * @return search
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return array
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set descriptionSearch
     *
     * @param boolean $descriptionSearch
     *
     * @return search
     */
    public function setDescriptionSearch($descriptionSearch)
    {
        $this->descriptionSearch = $descriptionSearch;

        return $this;
    }

    /**
     * Get descriptionSearch
     *
     * @return bool
     */
    public function getDescriptionSearch()
    {
        return $this->descriptionSearch;
    }

    /**
     * Set sortOrder
     *
     * @param string $sortOrder
     *
     * @return search
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set maxPrice
     *
     * @param integer $maxPrice
     *
     * @return search
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get maxPrice
     *
     * @return int
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Set listingType
     *
     * @param array $listingType
     *
     * @return search
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;

        return $this;
    }

    /**
     * Get listingType
     *
     * @return array
     */
    public function getListingType()
    {
        return $this->listingType;
    }
}

