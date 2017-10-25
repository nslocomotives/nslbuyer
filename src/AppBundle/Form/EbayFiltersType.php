<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class EbayFiltersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fltName', TextType::class, array( 'label' => 'Name' ))
				->add('fltAuthorizedSellerOnly')
				->add('fltAvailableTo', ChoiceType::class, array(
					'choices' => array(
						'United Kingdom' => 'GB',
						'None' => null,
					),
					'choices_as_values' => true,
				))
				->add('fltBestOfferOnly')
				->add('fltCharityOnly')
				->add('fltCondition')
				->add('fltCurrency')
				->add('fltEndTimeFrom')
				->add('fltEndTimeTo')
				->add('fltExcludeAutoPay')
				->add('fldExcludeCategory')
				->add('fltExcludeSeller')
				->add('fltExpeditedShippingType')
				->add('fltFeaturedOnly')
				->add('fltFeedbackScoreMax')
				->add('fltFeedbackScoreMin')
				->add('fltFreeShippingOnly')
				->add('fltGetItFastOnly')
				->add('fltHideDuplicateItems')
				->add('fltListedIn')
				->add('fltListingType')
				->add('fltLocalPickupOnly')
				->add('fltLocalSearchOnly')
				->add('fltLocatedIn', ChoiceType::class, array(
					'choices' => array(
						'United Kingdom' => 'GB',
						'None' => null,
					),
					'choices_as_values' => true,
				))
				->add('fltLotsOnly')
				->add('fltMaxBids')
				->add('fltMaxDistance')
				->add('fltMaxHandlingTime')
				->add('fltMaxPrice', MoneyType::class, array(
					'currency' => 'GBP',
					))
				->add('fltMaxQuantity')
				->add('fltMinBids')
				->add('fltMinPrice', MoneyType::class, array(
					'currency' => 'GBP',
					))
				->add('fltMinQuantity')
				->add('fltModTimeFrom')
				->add('fltOutletSellerOnly')
				->add('fltPaymentMethod')
				->add('fltReturnsAcceptedOnly')
				->add('fltSeller')
				->add('fltSellerBusinessType')
				->add('fltSoldItemsOnly')
				->add('fltStartTimeFrom')
				->add('fltStartTimeTo')
				->add('fltTopRatedSellerOnly')
				->add('fltValueBoxInventory')
				->add('fltWorldOfGoodOnly');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\EbayFilters'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_ebayfilters';
    }


}
