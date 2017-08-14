<?php

namespace Dhii\Type;

/**
 * Represents a pseudo type.
 * 
 * A pseudo type is not a real data type, but usually represents an aggregate
 * of two or more types.
 *
 * @since [*next-version*]
 */
interface PseudoTypeInterface extends TypeInterface
{
    /**
     * One of the scalable types.
     *
     * Typically, the below types are considered to be scalable:
     * `bool`, `int`, `string`, `float`.
     *
     * @since [*next-version*]
     */
    const T_SCALABLE = 'scalable';

    /**
     * One of the iterable types.
     *
     * Something that can be iterated over.
     *
     * @since [*next-version*]
     */
    const T_ITERABLE = 'iterable';

    /**
     * A number.
     *
     * Typically, an integer or a float.
     *
     * @since [*next-version*]
     */
    const T_NUMBER = 'number';

    /**
     * A number or a string representing a number. Includes `NUM`.
     *
     * @since [*next-version*]
     */
    const T_NUMERIC = 'numeric';

    /**
     * A callable.
     *
     * Something that can be invoked, i.e. "called".
     *
     * @since [*next-version*]
     */
    const T_CALLABLE = 'callable';

    /**
     * A null.
     *
     * An absence of a value.
     *
     * @since [*next-version*]
     */
    const T_NULL = 'null';

    /**
     * An empty value.
     *
     * A value that is considered by the system to be empty.
     *
     * @since [*next-version*]
     */
    const T_EMPTY = 'empty';

    /**
     * A resource.
     *
     * A value that indicates a pointer to a system resource.
     *
     * @since [*next-version*]
     */
    const T_RESOURCE = 'resource';
}
