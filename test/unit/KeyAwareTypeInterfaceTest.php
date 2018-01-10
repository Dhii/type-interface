<?php

namespace Dhii\Type\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Type\KeyAwareTypeInterface}.
 *
 * @since [*next-version*]
 */
class KeyAwareTypeInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Type\KeyAwareTypeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Type\KeyAwareTypeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->validate()
                ->getKey()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\Type\TypeInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Data\KeyAwareInterface', $subject, 'Subject does not implement required interface');
    }
}
