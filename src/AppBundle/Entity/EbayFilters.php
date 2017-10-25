<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EbayFilters
 *
 * @ORM\Table(name="ebay_filters")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EbayFiltersRepository")
 */
class EbayFilters
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
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="ebayFilters")
     */
    protected $user;
	
    /**
     * @var string
     *
     * @ORM\Column(name="fltName", type="string", length=50)
     */
    private $fltName;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltAuthorizedSellerOnly", type="boolean")
     */
    private $fltAuthorizedSellerOnly;

    /**
     * @var string
     *
     * @ORM\Column(name="fltAvailableTo", type="string", length=2, nullable=true)
     */
    private $fltAvailableTo;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltBestOfferOnly", type="boolean")
     */
    private $fltBestOfferOnly;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltCharityOnly", type="boolean")
     */
    private $fltCharityOnly;

    /**
     * @var array
     *
     * @ORM\Column(name="fltCondition", type="array", nullable=true)
     */
    private $fltCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="fltCurrency", type="string", length=3, nullable=true)
     */
    private $fltCurrency;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fltEndTimeFrom", type="datetime", nullable=true)
     */
    private $fltEndTimeFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fltEndTimeTo", type="datetime", nullable=true)
     */
    private $fltEndTimeTo;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltExcludeAutoPay", type="boolean")
     */
    private $fltExcludeAutoPay;

    /**
     * @var array
     *
     * @ORM\Column(name="FldExcludeCategory", type="array", nullable=true)
     */
    private $fldExcludeCategory;

    /**
     * @var array
     *
     * @ORM\Column(name="fltExcludeSeller", type="array", nullable=true)
     */
    private $fltExcludeSeller;

    /**
     * @var array
     *
     * @ORM\Column(name="fltExpeditedShippingType", type="array", nullable=true)
     */
    private $fltExpeditedShippingType;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltFeaturedOnly", type="boolean")
     */
    private $fltFeaturedOnly;

    /**
     * @var int
     *
     * @ORM\Column(name="fltFeedbackScoreMax", type="integer", nullable=true)
     */
    private $fltFeedbackScoreMax;

    /**
     * @var int
     *
     * @ORM\Column(name="fltFeedbackScoreMin", type="integer", nullable=true)
     */
    private $fltFeedbackScoreMin;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltFreeShippingOnly", type="boolean")
     */
    private $fltFreeShippingOnly;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltGetItFastOnly", type="boolean")
     */
    private $fltGetItFastOnly;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltHideDuplicateItems", type="boolean")
     */
    private $fltHideDuplicateItems;

    /**
     * @var string
     *
     * @ORM\Column(name="fltListedIn", type="string", length=10, nullable=true)
     */
    private $fltListedIn;

    /**
     * @var array
     *
     * @ORM\Column(name="fltListingType", type="array", nullable=true)
     */
    private $fltListingType;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltLocalPickupOnly", type="boolean")
     */
    private $fltLocalPickupOnly;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltLocalSearchOnly", type="boolean")
     */
    private $fltLocalSearchOnly;

    /**
     * @var string
     *
     * @ORM\Column(name="fltLocatedIn", type="string", length=2, nullable=true)
     */
    private $fltLocatedIn;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltLotsOnly", type="boolean")
     */
    private $fltLotsOnly;

    /**
     * @var int
     *
     * @ORM\Column(name="fltMaxBids", type="integer", nullable=true)
     */
    private $fltMaxBids;

    /**
     * @var int
     *
     * @ORM\Column(name="fltMaxDistance", type="integer", nullable=true)
     */
    private $fltMaxDistance;

    /**
     * @var int
     *
     * @ORM\Column(name="fltMaxHandlingTime", type="integer", nullable=true)
     */
    private $fltMaxHandlingTime;

    /**
     * @var string
     *
     * @ORM\Column(name="fltMaxPrice", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $fltMaxPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="fltMaxQuantity", type="integer", nullable=true)
     */
    private $fltMaxQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="fltMinBids", type="integer", nullable=true)
     */
    private $fltMinBids;

    /**
     * @var string
     *
     * @ORM\Column(name="fltMinPrice", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $fltMinPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="fltMinQuantity", type="integer", nullable=true)
     */
    private $fltMinQuantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fltModTimeFrom", type="datetime", nullable=true)
     */
    private $fltModTimeFrom;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltOutletSellerOnly", type="boolean")
     */
    private $fltOutletSellerOnly;

    /**
     * @var string
     *
     * @ORM\Column(name="fltPaymentMethod", type="string", length=255, nullable=true)
     */
    private $fltPaymentMethod;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltReturnsAcceptedOnly", type="boolean")
     */
    private $fltReturnsAcceptedOnly;

    /**
     * @var array
     *
     * @ORM\Column(name="fltSeller", type="array", nullable=true)
     */
    private $fltSeller;

    /**
     * @var string
     *
     * @ORM\Column(name="fltSellerBusinessType", type="string", length=15, nullable=true)
     */
    private $fltSellerBusinessType;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltSoldItemsOnly", type="boolean")
     */
    private $fltSoldItemsOnly;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fltStartTimeFrom", type="datetime", nullable=true)
     */
    private $fltStartTimeFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fltStartTimeTo", type="datetime", nullable=true)
     */
    private $fltStartTimeTo;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltTopRatedSellerOnly", type="boolean")
     */
    private $fltTopRatedSellerOnly;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltValueBoxInventory", type="boolean")
     */
    private $fltValueBoxInventory;

    /**
     * @var bool
     *
     * @ORM\Column(name="fltWorldOfGoodOnly", type="boolean")
     */
    private $fltWorldOfGoodOnly;


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
     * Set fltName
     *
     * @param string $fltName
     *
     * @return EbayFilters
     */
    public function setFltName($fltName)
    {
        $this->fltName = $fltName;

        return $this;
    }

    /**
     * Get fltName
     *
     * @return string
     */
    public function getFltName()
    {
        return $this->fltName;
    }

    /**
     * Set fltAuthorizedSellerOnly
     *
     * @param boolean $fltAuthorizedSellerOnly
     *
     * @return EbayFilters
     */
    public function setFltAuthorizedSellerOnly($fltAuthorizedSellerOnly)
    {
        $this->fltAuthorizedSellerOnly = $fltAuthorizedSellerOnly;

        return $this;
    }

    /**
     * Get fltAuthorizedSellerOnly
     *
     * @return bool
     */
    public function getFltAuthorizedSellerOnly()
    {
        return $this->fltAuthorizedSellerOnly;
    }

    /**
     * Set fltAvailableTo
     *
     * @param string $fltAvailableTo
     *
     * @return EbayFilters
     */
    public function setFltAvailableTo($fltAvailableTo)
    {
        $this->fltAvailableTo = $fltAvailableTo;

        return $this;
    }

    /**
     * Get fltAvailableTo
     *
     * @return string
     */
    public function getFltAvailableTo()
    {
        return $this->fltAvailableTo;
    }

    /**
     * Set fltBestOfferOnly
     *
     * @param boolean $fltBestOfferOnly
     *
     * @return EbayFilters
     */
    public function setFltBestOfferOnly($fltBestOfferOnly)
    {
        $this->fltBestOfferOnly = $fltBestOfferOnly;

        return $this;
    }

    /**
     * Get fltBestOfferOnly
     *
     * @return bool
     */
    public function getFltBestOfferOnly()
    {
        return $this->fltBestOfferOnly;
    }

    /**
     * Set fltCharityOnly
     *
     * @param boolean $fltCharityOnly
     *
     * @return EbayFilters
     */
    public function setFltCharityOnly($fltCharityOnly)
    {
        $this->fltCharityOnly = $fltCharityOnly;

        return $this;
    }

    /**
     * Get fltCharityOnly
     *
     * @return bool
     */
    public function getFltCharityOnly()
    {
        return $this->fltCharityOnly;
    }

    /**
     * Set fltCondition
     *
     * @param array $fltCondition
     *
     * @return EbayFilters
     */
    public function setFltCondition($fltCondition)
    {
        $this->fltCondition = $fltCondition;

        return $this;
    }

    /**
     * Get fltCondition
     *
     * @return array
     */
    public function getFltCondition()
    {
        return $this->fltCondition;
    }

    /**
     * Set fltCurrency
     *
     * @param string $fltCurrency
     *
     * @return EbayFilters
     */
    public function setFltCurrency($fltCurrency)
    {
        $this->fltCurrency = $fltCurrency;

        return $this;
    }

    /**
     * Get fltCurrency
     *
     * @return string
     */
    public function getFltCurrency()
    {
        return $this->fltCurrency;
    }

    /**
     * Set fltEndTimeFrom
     *
     * @param \DateTime $fltEndTimeFrom
     *
     * @return EbayFilters
     */
    public function setFltEndTimeFrom($fltEndTimeFrom)
    {
        $this->fltEndTimeFrom = $fltEndTimeFrom;

        return $this;
    }

    /**
     * Get fltEndTimeFrom
     *
     * @return \DateTime
     */
    public function getFltEndTimeFrom()
    {
        return $this->fltEndTimeFrom;
    }

    /**
     * Set fltEndTimeTo
     *
     * @param \DateTime $fltEndTimeTo
     *
     * @return EbayFilters
     */
    public function setFltEndTimeTo($fltEndTimeTo)
    {
        $this->fltEndTimeTo = $fltEndTimeTo;

        return $this;
    }

    /**
     * Get fltEndTimeTo
     *
     * @return \DateTime
     */
    public function getFltEndTimeTo()
    {
        return $this->fltEndTimeTo;
    }

    /**
     * Set fltExcludeAutoPay
     *
     * @param boolean $fltExcludeAutoPay
     *
     * @return EbayFilters
     */
    public function setFltExcludeAutoPay($fltExcludeAutoPay)
    {
        $this->fltExcludeAutoPay = $fltExcludeAutoPay;

        return $this;
    }

    /**
     * Get fltExcludeAutoPay
     *
     * @return bool
     */
    public function getFltExcludeAutoPay()
    {
        return $this->fltExcludeAutoPay;
    }

    /**
     * Set fldExcludeCategory
     *
     * @param array $fldExcludeCategory
     *
     * @return EbayFilters
     */
    public function setFldExcludeCategory($fldExcludeCategory)
    {
        $this->fldExcludeCategory = $fldExcludeCategory;

        return $this;
    }

    /**
     * Get fldExcludeCategory
     *
     * @return array
     */
    public function getFldExcludeCategory()
    {
        return $this->fldExcludeCategory;
    }

    /**
     * Set fltExcludeSeller
     *
     * @param array $fltExcludeSeller
     *
     * @return EbayFilters
     */
    public function setFltExcludeSeller($fltExcludeSeller)
    {
        $this->fltExcludeSeller = $fltExcludeSeller;

        return $this;
    }

    /**
     * Get fltExcludeSeller
     *
     * @return array
     */
    public function getFltExcludeSeller()
    {
        return $this->fltExcludeSeller;
    }

    /**
     * Set fltExpeditedShippingType
     *
     * @param array $fltExpeditedShippingType
     *
     * @return EbayFilters
     */
    public function setFltExpeditedShippingType($fltExpeditedShippingType)
    {
        $this->fltExpeditedShippingType = $fltExpeditedShippingType;

        return $this;
    }

    /**
     * Get fltExpeditedShippingType
     *
     * @return array
     */
    public function getFltExpeditedShippingType()
    {
        return $this->fltExpeditedShippingType;
    }

    /**
     * Set fltFeaturedOnly
     *
     * @param boolean $fltFeaturedOnly
     *
     * @return EbayFilters
     */
    public function setFltFeaturedOnly($fltFeaturedOnly)
    {
        $this->fltFeaturedOnly = $fltFeaturedOnly;

        return $this;
    }

    /**
     * Get fltFeaturedOnly
     *
     * @return bool
     */
    public function getFltFeaturedOnly()
    {
        return $this->fltFeaturedOnly;
    }

    /**
     * Set fltFeedbackScoreMax
     *
     * @param integer $fltFeedbackScoreMax
     *
     * @return EbayFilters
     */
    public function setFltFeedbackScoreMax($fltFeedbackScoreMax)
    {
        $this->fltFeedbackScoreMax = $fltFeedbackScoreMax;

        return $this;
    }

    /**
     * Get fltFeedbackScoreMax
     *
     * @return int
     */
    public function getFltFeedbackScoreMax()
    {
        return $this->fltFeedbackScoreMax;
    }

    /**
     * Set fltFeedbackScoreMin
     *
     * @param integer $fltFeedbackScoreMin
     *
     * @return EbayFilters
     */
    public function setFltFeedbackScoreMin($fltFeedbackScoreMin)
    {
        $this->fltFeedbackScoreMin = $fltFeedbackScoreMin;

        return $this;
    }

    /**
     * Get fltFeedbackScoreMin
     *
     * @return int
     */
    public function getFltFeedbackScoreMin()
    {
        return $this->fltFeedbackScoreMin;
    }

    /**
     * Set fltFreeShippingOnly
     *
     * @param boolean $fltFreeShippingOnly
     *
     * @return EbayFilters
     */
    public function setFltFreeShippingOnly($fltFreeShippingOnly)
    {
        $this->fltFreeShippingOnly = $fltFreeShippingOnly;

        return $this;
    }

    /**
     * Get fltFreeShippingOnly
     *
     * @return bool
     */
    public function getFltFreeShippingOnly()
    {
        return $this->fltFreeShippingOnly;
    }

    /**
     * Set fltGetItFastOnly
     *
     * @param boolean $fltGetItFastOnly
     *
     * @return EbayFilters
     */
    public function setFltGetItFastOnly($fltGetItFastOnly)
    {
        $this->fltGetItFastOnly = $fltGetItFastOnly;

        return $this;
    }

    /**
     * Get fltGetItFastOnly
     *
     * @return bool
     */
    public function getFltGetItFastOnly()
    {
        return $this->fltGetItFastOnly;
    }

    /**
     * Set fltHideDuplicateItems
     *
     * @param boolean $fltHideDuplicateItems
     *
     * @return EbayFilters
     */
    public function setFltHideDuplicateItems($fltHideDuplicateItems)
    {
        $this->fltHideDuplicateItems = $fltHideDuplicateItems;

        return $this;
    }

    /**
     * Get fltHideDuplicateItems
     *
     * @return bool
     */
    public function getFltHideDuplicateItems()
    {
        return $this->fltHideDuplicateItems;
    }

    /**
     * Set fltListedIn
     *
     * @param string $fltListedIn
     *
     * @return EbayFilters
     */
    public function setFltListedIn($fltListedIn)
    {
        $this->fltListedIn = $fltListedIn;

        return $this;
    }

    /**
     * Get fltListedIn
     *
     * @return string
     */
    public function getFltListedIn()
    {
        return $this->fltListedIn;
    }

    /**
     * Set fltListingType
     *
     * @param array $fltListingType
     *
     * @return EbayFilters
     */
    public function setFltListingType($fltListingType)
    {
        $this->fltListingType = $fltListingType;

        return $this;
    }

    /**
     * Get fltListingType
     *
     * @return array
     */
    public function getFltListingType()
    {
        return $this->fltListingType;
    }

    /**
     * Set fltLocalPickupOnly
     *
     * @param boolean $fltLocalPickupOnly
     *
     * @return EbayFilters
     */
    public function setFltLocalPickupOnly($fltLocalPickupOnly)
    {
        $this->fltLocalPickupOnly = $fltLocalPickupOnly;

        return $this;
    }

    /**
     * Get fltLocalPickupOnly
     *
     * @return bool
     */
    public function getFltLocalPickupOnly()
    {
        return $this->fltLocalPickupOnly;
    }

    /**
     * Set fltLocalSearchOnly
     *
     * @param boolean $fltLocalSearchOnly
     *
     * @return EbayFilters
     */
    public function setFltLocalSearchOnly($fltLocalSearchOnly)
    {
        $this->fltLocalSearchOnly = $fltLocalSearchOnly;

        return $this;
    }

    /**
     * Get fltLocalSearchOnly
     *
     * @return bool
     */
    public function getFltLocalSearchOnly()
    {
        return $this->fltLocalSearchOnly;
    }

    /**
     * Set fltLocatedIn
     *
     * @param string $fltLocatedIn
     *
     * @return EbayFilters
     */
    public function setFltLocatedIn($fltLocatedIn)
    {
        $this->fltLocatedIn = $fltLocatedIn;

        return $this;
    }

    /**
     * Get fltLocatedIn
     *
     * @return string
     */
    public function getFltLocatedIn()
    {
        return $this->fltLocatedIn;
    }

    /**
     * Set fltLotsOnly
     *
     * @param boolean $fltLotsOnly
     *
     * @return EbayFilters
     */
    public function setFltLotsOnly($fltLotsOnly)
    {
        $this->fltLotsOnly = $fltLotsOnly;

        return $this;
    }

    /**
     * Get fltLotsOnly
     *
     * @return bool
     */
    public function getFltLotsOnly()
    {
        return $this->fltLotsOnly;
    }

    /**
     * Set fltMaxBids
     *
     * @param integer $fltMaxBids
     *
     * @return EbayFilters
     */
    public function setFltMaxBids($fltMaxBids)
    {
        $this->fltMaxBids = $fltMaxBids;

        return $this;
    }

    /**
     * Get fltMaxBids
     *
     * @return int
     */
    public function getFltMaxBids()
    {
        return $this->fltMaxBids;
    }

    /**
     * Set fltMaxDistance
     *
     * @param integer $fltMaxDistance
     *
     * @return EbayFilters
     */
    public function setFltMaxDistance($fltMaxDistance)
    {
        $this->fltMaxDistance = $fltMaxDistance;

        return $this;
    }

    /**
     * Get fltMaxDistance
     *
     * @return int
     */
    public function getFltMaxDistance()
    {
        return $this->fltMaxDistance;
    }

    /**
     * Set fltMaxHandlingTime
     *
     * @param integer $fltMaxHandlingTime
     *
     * @return EbayFilters
     */
    public function setFltMaxHandlingTime($fltMaxHandlingTime)
    {
        $this->fltMaxHandlingTime = $fltMaxHandlingTime;

        return $this;
    }

    /**
     * Get fltMaxHandlingTime
     *
     * @return int
     */
    public function getFltMaxHandlingTime()
    {
        return $this->fltMaxHandlingTime;
    }

    /**
     * Set fltMaxPrice
     *
     * @param string $fltMaxPrice
     *
     * @return EbayFilters
     */
    public function setFltMaxPrice($fltMaxPrice)
    {
        $this->fltMaxPrice = $fltMaxPrice;

        return $this;
    }

    /**
     * Get fltMaxPrice
     *
     * @return string
     */
    public function getFltMaxPrice()
    {
        return $this->fltMaxPrice;
    }

    /**
     * Set fltMaxQuantity
     *
     * @param integer $fltMaxQuantity
     *
     * @return EbayFilters
     */
    public function setFltMaxQuantity($fltMaxQuantity)
    {
        $this->fltMaxQuantity = $fltMaxQuantity;

        return $this;
    }

    /**
     * Get fltMaxQuantity
     *
     * @return int
     */
    public function getFltMaxQuantity()
    {
        return $this->fltMaxQuantity;
    }

    /**
     * Set fltMinBids
     *
     * @param integer $fltMinBids
     *
     * @return EbayFilters
     */
    public function setFltMinBids($fltMinBids)
    {
        $this->fltMinBids = $fltMinBids;

        return $this;
    }

    /**
     * Get fltMinBids
     *
     * @return int
     */
    public function getFltMinBids()
    {
        return $this->fltMinBids;
    }

    /**
     * Set fltMinPrice
     *
     * @param string $fltMinPrice
     *
     * @return EbayFilters
     */
    public function setFltMinPrice($fltMinPrice)
    {
        $this->fltMinPrice = $fltMinPrice;

        return $this;
    }

    /**
     * Get fltMinPrice
     *
     * @return string
     */
    public function getFltMinPrice()
    {
        return $this->fltMinPrice;
    }

    /**
     * Set fltMinQuantity
     *
     * @param integer $fltMinQuantity
     *
     * @return EbayFilters
     */
    public function setFltMinQuantity($fltMinQuantity)
    {
        $this->fltMinQuantity = $fltMinQuantity;

        return $this;
    }

    /**
     * Get fltMinQuantity
     *
     * @return int
     */
    public function getFltMinQuantity()
    {
        return $this->fltMinQuantity;
    }

    /**
     * Set fltModTimeFrom
     *
     * @param \DateTime $fltModTimeFrom
     *
     * @return EbayFilters
     */
    public function setFltModTimeFrom($fltModTimeFrom)
    {
        $this->fltModTimeFrom = $fltModTimeFrom;

        return $this;
    }

    /**
     * Get fltModTimeFrom
     *
     * @return \DateTime
     */
    public function getFltModTimeFrom()
    {
        return $this->fltModTimeFrom;
    }

    /**
     * Set fltOutletSellerOnly
     *
     * @param boolean $fltOutletSellerOnly
     *
     * @return EbayFilters
     */
    public function setFltOutletSellerOnly($fltOutletSellerOnly)
    {
        $this->fltOutletSellerOnly = $fltOutletSellerOnly;

        return $this;
    }

    /**
     * Get fltOutletSellerOnly
     *
     * @return bool
     */
    public function getFltOutletSellerOnly()
    {
        return $this->fltOutletSellerOnly;
    }

    /**
     * Set fltPaymentMethod
     *
     * @param string $fltPaymentMethod
     *
     * @return EbayFilters
     */
    public function setFltPaymentMethod($fltPaymentMethod)
    {
        $this->fltPaymentMethod = $fltPaymentMethod;

        return $this;
    }

    /**
     * Get fltPaymentMethod
     *
     * @return string
     */
    public function getFltPaymentMethod()
    {
        return $this->fltPaymentMethod;
    }

    /**
     * Set fltReturnsAcceptedOnly
     *
     * @param boolean $fltReturnsAcceptedOnly
     *
     * @return EbayFilters
     */
    public function setFltReturnsAcceptedOnly($fltReturnsAcceptedOnly)
    {
        $this->fltReturnsAcceptedOnly = $fltReturnsAcceptedOnly;

        return $this;
    }

    /**
     * Get fltReturnsAcceptedOnly
     *
     * @return bool
     */
    public function getFltReturnsAcceptedOnly()
    {
        return $this->fltReturnsAcceptedOnly;
    }

    /**
     * Set fltSeller
     *
     * @param array $fltSeller
     *
     * @return EbayFilters
     */
    public function setFltSeller($fltSeller)
    {
        $this->fltSeller = $fltSeller;

        return $this;
    }

    /**
     * Get fltSeller
     *
     * @return array
     */
    public function getFltSeller()
    {
        return $this->fltSeller;
    }

    /**
     * Set fltSellerBusinessType
     *
     * @param string $fltSellerBusinessType
     *
     * @return EbayFilters
     */
    public function setFltSellerBusinessType($fltSellerBusinessType)
    {
        $this->fltSellerBusinessType = $fltSellerBusinessType;

        return $this;
    }

    /**
     * Get fltSellerBusinessType
     *
     * @return string
     */
    public function getFltSellerBusinessType()
    {
        return $this->fltSellerBusinessType;
    }

    /**
     * Set fltSoldItemsOnly
     *
     * @param boolean $fltSoldItemsOnly
     *
     * @return EbayFilters
     */
    public function setFltSoldItemsOnly($fltSoldItemsOnly)
    {
        $this->fltSoldItemsOnly = $fltSoldItemsOnly;

        return $this;
    }

    /**
     * Get fltSoldItemsOnly
     *
     * @return bool
     */
    public function getFltSoldItemsOnly()
    {
        return $this->fltSoldItemsOnly;
    }

    /**
     * Set fltStartTimeFrom
     *
     * @param \DateTime $fltStartTimeFrom
     *
     * @return EbayFilters
     */
    public function setFltStartTimeFrom($fltStartTimeFrom)
    {
        $this->fltStartTimeFrom = $fltStartTimeFrom;

        return $this;
    }

    /**
     * Get fltStartTimeFrom
     *
     * @return \DateTime
     */
    public function getFltStartTimeFrom()
    {
        return $this->fltStartTimeFrom;
    }

    /**
     * Set fltStartTimeTo
     *
     * @param \DateTime $fltStartTimeTo
     *
     * @return EbayFilters
     */
    public function setFltStartTimeTo($fltStartTimeTo)
    {
        $this->fltStartTimeTo = $fltStartTimeTo;

        return $this;
    }

    /**
     * Get fltStartTimeTo
     *
     * @return \DateTime
     */
    public function getFltStartTimeTo()
    {
        return $this->fltStartTimeTo;
    }

    /**
     * Set fltTopRatedSellerOnly
     *
     * @param boolean $fltTopRatedSellerOnly
     *
     * @return EbayFilters
     */
    public function setFltTopRatedSellerOnly($fltTopRatedSellerOnly)
    {
        $this->fltTopRatedSellerOnly = $fltTopRatedSellerOnly;

        return $this;
    }

    /**
     * Get fltTopRatedSellerOnly
     *
     * @return bool
     */
    public function getFltTopRatedSellerOnly()
    {
        return $this->fltTopRatedSellerOnly;
    }

    /**
     * Set fltValueBoxInventory
     *
     * @param boolean $fltValueBoxInventory
     *
     * @return EbayFilters
     */
    public function setFltValueBoxInventory($fltValueBoxInventory)
    {
        $this->fltValueBoxInventory = $fltValueBoxInventory;

        return $this;
    }

    /**
     * Get fltValueBoxInventory
     *
     * @return bool
     */
    public function getFltValueBoxInventory()
    {
        return $this->fltValueBoxInventory;
    }

    /**
     * Set fltWorldOfGoodOnly
     *
     * @param boolean $fltWorldOfGoodOnly
     *
     * @return EbayFilters
     */
    public function setFltWorldOfGoodOnly($fltWorldOfGoodOnly)
    {
        $this->fltWorldOfGoodOnly = $fltWorldOfGoodOnly;

        return $this;
    }

    /**
     * Get fltWorldOfGoodOnly
     *
     * @return bool
     */
    public function getFltWorldOfGoodOnly()
    {
        return $this->fltWorldOfGoodOnly;
    }
	
    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return EbayFilters
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }	
}

