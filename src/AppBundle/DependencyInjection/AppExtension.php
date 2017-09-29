<?php

namespace AppBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;


class AppExtension extends Extension {


	public function load(array $configs, ContainerBuilder $container)
	{
		$configuration = new Configuration();

		$config = $this->processConfiguration($configuration, $configs);
		
		foreach ($config as $k => $v) {
            $container->setParameter($k, $v);
        }

		
	}
}
	