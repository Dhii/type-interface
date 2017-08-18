<?php

namespace Dhii\Type;

use Dhii\Data\KeyAwareInterface;

/**
 * Represents a data type that is aware of its type key.
 *
 * @since [*next-version*]
 */
interface KeyAwareTypeInterface extends
        TypeInterface,
        KeyAwareInterface
{
}
