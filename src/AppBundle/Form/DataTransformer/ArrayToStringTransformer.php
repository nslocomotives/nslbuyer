<?php

namespace AppBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Collections\ArrayCollection;

class ArrayToStringTransformer implements DataTransformerInterface
{
    public function transform($array)
    {
        if (null === $array) {
            $array = array();
        } else {
			$array = $array->toArray();
		}

        if (!is_array($array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        return implode(',', $array);
    }

    public function reverseTransform($string)
    {
        if (!is_string($string)) {
            throw new TransformationFailedException('Expected a string.');
        }

		$strings = new ArrayCollection();
		$stringArray = explode(',', $string);

		if (count($stringArray) > 0) {
			$strings = new ArrayCollection($stringArray);
		}

    return $strings;
    }
}