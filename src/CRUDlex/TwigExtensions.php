<?php

/*
 * This file is part of the CRUDlex package.
 *
 * (c) Philip Lehmann-Böhm <philip@philiplb.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CRUDlex;

use Pimple\Container;

/**
 * Provides and setups the Twig extensions like filters.
 */
class TwigExtensions {

    /**
     * Registers all extensions.
     *
     * @param Container $app
     * the current application
     */
    public function registerTwigExtensions(Container $app) {
        $self = $this;
        $app->extend('twig', function($twig, $app) use ($self) {
            $twig->addFilter(new \Twig_SimpleFilter('arrayColumn', [$self, 'arrayColumn']));
            return $twig;
        });
    }
    /**
     * To have array_column available as Twig filter.
     *
     * @param $array
     * the array
     * @param $key
     * the key
     *
     * @return array
     * the resulting array
     */
    public function arrayColumn($array, $key) {
        return array_column($array, $key);
    }

}