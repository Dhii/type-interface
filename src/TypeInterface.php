<?php

namespace Dhii\Type;

use Dhii\Validation\ValidatorInterface;

/**
 * Represents a data type.
 *
 * @since [*next-version*]
 */
interface TypeInterface extends ValidatorInterface
{
    /**
     * Asserts that a value is of the type represented by this instance.
     *
     * @since [*next-version*]
     *
     * @param bool $strict Whether or not comparison will be done in strict mode.
     *                     In this mode, the value type must match exactly. Otherwise, validation
     *                     will determine if the variable can be cast to this type.
     */
    public function validate($value, $strict = true);
}
