<?php
namespace Falconbyte\CustomExtension\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Falconbyte\CustomExtension\Domain\Repository\CustomRepository;

class CustomController extends ActionController
{
    /**
     * @var CustomRepository
     */
    protected $customRepository;

    /**
     * @param CustomRepository $customRepository
     */
    public function injectCustomRepository(CustomRepository $customRepository): void
    {
        $this->customRepository = $customRepository;
    }


    public function listAction(): void
    {
        $customs = $this->customRepository->findAll();
        $this->view->assign('customs', $customs);
    }

    /**
     * @param \Falconbyte\CustomExtension\Domain\Model\Custom $custom
     */
    public function showAction(\Falconbyte\CustomExtension\Domain\Model\Custom $custom): void
    {
        $this->view->assign('custom', $custom);
    }
}
