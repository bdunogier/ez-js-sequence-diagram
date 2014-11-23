<?php
/**
 * Template autoload definition for eZ Online Editor
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 *
 */

$eZTemplateOperatorArray = array();

$eZTemplateOperatorArray[] = array(
    'script' => 'extension/ezjssequencediagram/autoloads/ezjssequencediagram_utils.php',
    'class' => 'eZJsSequenceDiagramUtils',
    'operator_names' => array( 'ezjssd_cleanup' )
);
