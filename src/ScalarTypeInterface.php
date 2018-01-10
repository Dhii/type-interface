<?php

namespace Dhii\Type;

/**
 * Represents a scalar type.
 *
 * @since [*next-version*]
 */
interface ScalarTypeInterface extends TypeInterface
{
    /**
     * A boolean.
     *
     * Something that can be either `true` or `false`; a binary value.
     *
     * @since [*next-version*]
     */
    const T_BOOL = 'bool';

    /**
     * An integer.
     *
     * Something that can hold a whole number.
     *
     * @since [*next-version*]
     */
    const T_INT = 'int';

    /**
     * A float.
     *
     * A.k.a. "double"; a floating point value.
     *
     * @since [*next-version*]
     */
    const T_FLOAT = 'float';

    /**
     * A string.
     *
     * An ordered list of characters.
     *
     * @since [*next-version*]
     */
    const T_STRING = 'string';
}
