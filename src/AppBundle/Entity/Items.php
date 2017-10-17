<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemsRepository")
 */
class Items
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
     * @var int
     *
     * @ORM\Column(name="provider_id", type="integer")
     */
    private $providerId;

    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="string", length=20)
     */
    private $provider;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="viewItemUrl", type="string", length=255)
     */
    private $viewItemUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="galleryURL", type="string", length=255, nullable=true)
     */
    private $galleryURL;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryName", type="string", length=255)
     */
    private $categoryName;


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
     * Set providerId
     *
     * @param integer $providerId
     *
     * @return Items
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;

        return $this;
    }

    /**
     * Get providerId
     *
     * @return int
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Set provider
     *
     * @param string $provider
     *
     * @return Items
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Items
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set viewItemUrl
     *
     * @param string $viewItemUrl
     *
     * @return Items
     */
    public function setViewItemUrl($viewItemUrl)
    {
        $this->viewItemUrl = $viewItemUrl;

        return $this;
    }

    /**
     * Get viewItemUrl
     *
     * @return string
     */
    public function getViewItemUrl()
    {
        return $this->viewItemUrl;
    }

    /**
     * Set galleryURL
     *
     * @param string $galleryURL
     *
     * @return Items
     */
    public function setGalleryURL($galleryURL)
    {
        $this->galleryURL = $galleryURL;

        return $this;
    }

    /**
     * Get galleryURL
     *
     * @return string
     */
    public function getGalleryURL()
    {
        return $this->galleryURL;
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Items
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
}
