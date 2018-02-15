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
    
    /**
     * Sanitize URL, returning an empty string if not a valid URL
     *
     * @param string $url The URL
     * @return string Empty string on invalid URL
     */
    final public static function Sanitize( string $url )
    {
        $url = filter_var( $url, FILTER_SANITIZE_URL );
        if ( !self::IsValid( $url )) {
            $url = '';
        }
        return $url;
    }
}
