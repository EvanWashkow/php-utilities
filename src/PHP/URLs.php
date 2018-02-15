<?php
namespace PHP;

/**
 * Defines a helper utility for URLs
 */
class URLs
{
    
    /**
     * Is the URL valid?
     *
     * @param string $url The URL to check
     * @return bool
     */
    final public static function IsValid( string $url )
    {
        $url = filter_var( $url, FILTER_VALIDATE_URL );
        return ( false !== $url );
    }
}
