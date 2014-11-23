<?php
class eZJsSequenceDiagramUtils
{
    function operatorList()
    {
        return array( 'ezjssd_cleanup' );
    }

    function namedParameterPerOperator()
    {
        return false;
    }

    function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters )
    {
        if ( $operatorName == 'ezjssd_cleanup' )
        {
            $operatorValue = str_replace( array( '<p>', '</p>' ), '', $operatorValue );
            $operatorValue = str_replace( array( '<br />' ), "\n", $operatorValue );
            eZDebug::writeDebug( $operatorValue, __METHOD__ );
        }
    }
}
