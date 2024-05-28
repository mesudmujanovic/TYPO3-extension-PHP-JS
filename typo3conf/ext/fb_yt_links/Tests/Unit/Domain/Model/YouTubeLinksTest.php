<?php

declare(strict_types=1);

namespace Falconbyte\FbYtLinks\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author mesud mujanovic <mesud9494@gmail.com>
 */
class YouTubeLinksTest extends UnitTestCase
{
    /**
     * @var \Falconbyte\FbYtLinks\Domain\Model\YouTubeLinks|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Falconbyte\FbYtLinks\Domain\Model\YouTubeLinks::class,
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
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getBerschreibungReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getBerschreibung()
        );
    }

    /**
     * @test
     */
    public function setBerschreibungForStringSetsBerschreibung(): void
    {
        $this->subject->setBerschreibung('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('berschreibung'));
    }

    /**
     * @test
     */
    public function getUrlReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getUrl()
        );
    }

    /**
     * @test
     */
    public function setUrlForStringSetsUrl(): void
    {
        $this->subject->setUrl('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('url'));
    }
}
