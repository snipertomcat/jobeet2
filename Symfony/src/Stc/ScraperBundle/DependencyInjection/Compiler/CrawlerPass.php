<?php

namespace Stc\ScraperBundle\DependencyInjection\Compiler;

use Alert\NativeReactor;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Alert\Reactor;
use Artax\AsyncClient;

class CrawlerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        //collect all tagged services in the project:
        $taggedServiceIds = $container->findTaggedServiceIds('crawler');

        $parallelCrawlerDefinition = $container->getDefinition('stc_scraper.parallel_crawler');

        foreach ($taggedServiceIds as $serviceId=>$tags) {
            foreach ($tags as $tagAttributes) {
                $parallelCrawlerDefinition->addMethodCall('addReactor', array(
                    $reactor = (new NativeReactor())
                ));
                $parallelCrawlerDefinition->addMethodCall('addClient', array(
                    new AsyncClient($reactor)
                ));
            }
        }
    }
}