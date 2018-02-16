<?php
namespace PHP;

/**
 * Defines helper for the system stack trace
 */
class StackTrace
{
    
    /**
     * Retrieves the current system stack trace
     *
     * @return array
     */
    final public static function Get()
    {
        return debug_backtrace();
    }
}
