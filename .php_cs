<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
                                         ->exclude(['bower_components', 'node_modules', 'storage', 'vendor'])
                                         ->in(__DIR__);

return Symfony\CS\Config\Config::create()
                               ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
                               ->fixers(['trailing_spaces', 'encoding'])
                               ->finder($finder);