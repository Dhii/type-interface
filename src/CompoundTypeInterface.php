<?php

namespace Dhii\Type;

/**
 * Represents a compound type.
 *
 * @since [*next-version*]
 */
interface CompoundTypeInterface extends TypeInterface
{
    /**
     * An array.
     *
     * @since [*next-version*]
     */
    const ARR = 'array';

    /**
     * An object.
     *
     * @since [*next-version*]
     */
    const OBJ = 'object';
}
