<?php 

namespace AppBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('app');

        $rootNode
            ->children()
                ->arrayNode('ebay_sandbox')
                    ->children()
						->arrayNode('credentials')
							->children()
								->scalarNode('devId')->end()
								->scalarNode('appId')->end()
								->scalarNode('certId')->end()
							->end()
						->end() //credentials
						->scalarNode('authToken')->end()
						->scalarNode('oauthUserToken')->end()
						->scalarNode('ruName')->end()
                    ->end()
                ->end() // ebay_sandbox
				->arrayNode('ebay_production')
                    ->children()
						->arrayNode('credentials')
							->children()
								->scalarNode('devId')->end()
								->scalarNode('appId')->end()
								->scalarNode('certId')->end()
							->end()
						->end() //credentials
						->scalarNode('authToken')->end()
						->scalarNode('oauthUserToken')->end()
						->scalarNode('ruName')->end()
                    ->end()
                ->end() // ebay_production
            ->end()
        ;

        return $treeBuilder;
    }
}