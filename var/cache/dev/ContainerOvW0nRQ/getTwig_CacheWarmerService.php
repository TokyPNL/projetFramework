<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.lSIKWsr'] ?? $this->load('get_ServiceLocator_LSIKWsrService.php'))->withContext('twig.cache_warmer', $this), NULL, ['D:\\symfony\\vendor\\symfony\\twig-bridge/Resources/views/Form' => NULL]);
