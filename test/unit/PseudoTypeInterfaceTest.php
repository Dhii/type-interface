<?php

namespace Dhii\Type\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Type\PseudoTypeInterface}.
 *
 * @since [*next-version*]
 */
class PseudoTypeInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Type\PseudoTypeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Type\PseudoTypeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->validate()
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

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created'
        );
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'T_SCALAR')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'T_ITERABLE')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'T_NUMBER')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'T_NUMERIC')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'T_CALLABLE')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'T_NULL')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'T_EMPTY')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'T_RESOURCE')));
    }
}
