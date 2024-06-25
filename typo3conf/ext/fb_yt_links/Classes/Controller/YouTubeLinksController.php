<?php

declare(strict_types=1);

namespace Falconbyte\FbYtLinks\Controller;

class YouTubeLinksController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * youTubeLinksRepository
     *
     * @var \Falconbyte\FbYtLinks\Domain\Repository\YouTubeLinksRepository
     */
    protected $youTubeLinksRepository;

    /**
     * @param \Falconbyte\FbYtLinks\Domain\Repository\YouTubeLinksRepository $youTubeLinksRepository
     */
    public function injectYouTubeLinksRepository(\Falconbyte\FbYtLinks\Domain\Repository\YouTubeLinksRepository $youTubeLinksRepository)
    {
        $this->youTubeLinksRepository = $youTubeLinksRepository;
    }

    /**
     * action list
     *
     * @return
     */
    public function listAction()
    {
        $youTubeLinks = $this->youTubeLinksRepository->findAll();
        $this->view->assign('youTubeLinks', $youTubeLinks);
    }

    /**
     * action show
     *
     * @param \Falconbyte\FbYtLinks\Domain\Model\YouTubeLinks $youTubeLinks
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Falconbyte\FbYtLinks\Domain\Model\YouTubeLinks $youTubeLinks)
    {
        $this->view->assign('youTubeLinks', $youTubeLinks);
    }
}
