<?php

declare(strict_types=1);

namespace Falconbyte\FbYtLinks\Domain\Model;


/**
 * This file is part of the "Youtube links" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */

/**
 * YouTubeLinks
 */
class YouTubeLinks extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title;

    /**
     * berschreibung
     *
     * @var string
     */
    protected $berschreibung;

    /**
     * url
     *
     * @var string
     */
    protected $url;

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the berschreibung
     *
     * @return string
     */
    public function getBerschreibung()
    {
        return $this->berschreibung;
    }

    /**
     * Sets the berschreibung
     *
     * @param string $berschreibung
     * @return void
     */
    public function setBerschreibung(string $berschreibung)
    {
        $this->berschreibung = $berschreibung;
    }

    /**
     * Returns the url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the url
     *
     * @param string $url
     * @return void
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }
}
