<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_debug' shared service.

$this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), 'D:\\symfony/translations', 'D:\\symfony/templates', [0 => 'D:\\symfony\\vendor\\symfony\\validator/Resources/translations', 1 => 'D:\\symfony\\vendor\\symfony\\form/Resources/translations', 2 => 'D:\\symfony\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'D:\\symfony\\vendor\\symfony\\twig-bridge/Resources/views/Form', 1 => 'D:\\symfony\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 2 => 'D:\\symfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 3 => 'D:\\symfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 4 => 'D:\\symfony\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 5 => 'D:\\symfony\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 6 => 'D:\\symfony\\vendor\\symfony\\validator\\Util\\LegacyTranslatorProxy.php', 7 => 'D:\\symfony\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 8 => 'D:\\symfony\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php', 9 => 'D:\\symfony\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php']);

$instance->setName('debug:translation');

return $instance;
