<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Form\Type\ArrayTextType;

class SearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
				->add('keywords', ArrayTextType::class)
				->add('descriptionSearch')
				->add('listingType')
				->add('maxPrice', MoneyType::class, array(
					'divisor' => 100,
					'currency' => 'GBP',
					))
				->add('sortOrder', ChoiceType::class, array(
					'choices' => array(
					'End Time Soonest' => 'EndTimeSoonest',
					'Start Time Soonest' => 'StartTimeSoonest',
					),
					// *this line is important*
					'choices_as_values' => true,
				));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Search'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_search';
    }


}
