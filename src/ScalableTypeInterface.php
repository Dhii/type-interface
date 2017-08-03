<?php

namespace Dhii\Type;

/**
 * Represents a scalable type.
 *
 * @since [*next-version*]
 */
interface ScalableTypeInterface extends TypeInterface
{
    /**
     * A boolean.
     *
     * Something that can be either `true` or `false`; a binary value.
     *
     * @since [*next-version*]
     */
    const BOOL = 'bool';

    /**
     * An integer.
     *
     * Something that can hold a whole number.
     *
     * @since [*next-version*]
     */
    const INT = 'int';

    /**
     * A float.
     *
     * A.k.a. "double"; a floating point value.
     *
     * @since [*next-version*]
     */
    const FLOAT = 'float';

    /**
     * A string.
     *
     * An ordered list of characters.
     *
     * @since [*next-version*]
     */
    const STRING = 'string';
}
