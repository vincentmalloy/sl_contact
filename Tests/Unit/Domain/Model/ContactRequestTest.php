<?php
declare(strict_types=1);

namespace SimonLundius\SlContact\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Simon Lundius <simon.lundius@protonmail.com>
 */
class ContactRequestTest extends UnitTestCase
{
    /**
     * @var \SimonLundius\SlContact\Domain\Model\ContactRequest|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \SimonLundius\SlContact\Domain\Model\ContactRequest::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail(): void
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('email'));
    }

    /**
     * @test
     */
    public function getMessageReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getMessage()
        );
    }

    /**
     * @test
     */
    public function setMessageForStringSetsMessage(): void
    {
        $this->subject->setMessage('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('message'));
    }

    /**
     * @test
     */
    public function getConsentGivenReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getConsentGiven());
    }

    /**
     * @test
     */
    public function setConsentGivenForBoolSetsConsentGiven(): void
    {
        $this->subject->setConsentGiven(true);

        self::assertEquals(true, $this->subject->_get('consentGiven'));
    }
}
