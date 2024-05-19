<?php

declare(strict_types=1);

namespace Falconbyte\FbYtLinks\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 */
class YouTubeLinksControllerTest extends UnitTestCase
{
    /**
     * @var \Falconbyte\FbYtLinks\Controller\YouTubeLinksController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Falconbyte\FbYtLinks\Controller\YouTubeLinksController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllYouTubeLinksFromRepositoryAndAssignsThemToView(): void
    {
        $allYouTubeLinks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $youTubeLinksRepository = $this->getMockBuilder(\Falconbyte\FbYtLinks\Domain\Repository\YouTubeLinksRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $youTubeLinksRepository->expects(self::once())->method('findAll')->will(self::returnValue($allYouTubeLinks));
        $this->subject->_set('youTubeLinksRepository', $youTubeLinksRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('youTubeLinks', $allYouTubeLinks);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenYouTubeLinksToView(): void
    {
        $youTubeLinks = new \Falconbyte\FbYtLinks\Domain\Model\YouTubeLinks();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('youTubeLinks', $youTubeLinks);

        $this->subject->showAction($youTubeLinks);
    }
}
