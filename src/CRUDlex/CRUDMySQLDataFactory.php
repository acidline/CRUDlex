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

use CRUDlex\CRUDDataFactoryInterface;
use CRUDlex\CRUDMySQLData;

class CRUDMySQLDataFactory implements CRUDDataFactoryInterface {

    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createData(CRUDEntityDefinition $definition, CRUDFileProcessorInterface $fileProcessor) {
        return new CRUDMySQLData($definition, $fileProcessor, $this->db);
    }

}
