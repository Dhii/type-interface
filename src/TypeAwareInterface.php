<?php

namespace Dhii\Type;

/**
 * Something that can have a type retrieved from it.
 *
 * @since [*next-version*]
 */
interface TypeAwareInterface
{
    /**
     * Retrieves the type associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return TypeInterface The type.
     */
    public function getType();
}
