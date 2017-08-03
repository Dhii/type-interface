<?php

namespace Dhii\Type\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Type\CompoundTypeInterface}.
 *
 * @since [*next-version*]
 */
class CompoundTypeInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Type\\CompoundTypeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Type\CompoundTypeInterface
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
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'ARR')));
        $this->assertTrue(defined(sprintf('%1$s::%2$s', static::TEST_SUBJECT_CLASSNAME, 'OBJ')));
    }
}
