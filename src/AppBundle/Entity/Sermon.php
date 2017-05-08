<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sermon
 *
 * @ORM\Table(name="az_sermons", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Sermon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="series_id", type="integer", nullable=true)
     */
    private $seriesId;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true)
     */
    private $categoryId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="friday_sermon", type="boolean", nullable=true)
     */
    private $fridaySermon;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sermon_date", type="datetime", nullable=true)
     */
    private $sermonDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hijri_date", type="date", nullable=true)
     */
    private $hijriDate;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="elements", type="text", length=65535, nullable=true)
     */
    private $elements;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="string", length=255, nullable=true)
     */
    private $imagePath;

    /**
     * @var string
     *
     * @ORM\Column(name="image_alt", type="string", length=255, nullable=true)
     */
    private $imageAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="rm_path", type="string", length=255, nullable=true)
     */
    private $rmPath;

    /**
     * @var string
     *
     * @ORM\Column(name="ram_path", type="string", length=255, nullable=true)
     */
    private $ramPath;

    /**
     * @var string
     *
     * @ORM\Column(name="mp3_path", type="string", length=255, nullable=true)
     */
    private $mp3Path;

    /**
     * @var string
     *
     * @ORM\Column(name="video_path", type="string", length=255, nullable=true)
     */
    private $videoPath;

    /**
     * @var string
     *
     * @ORM\Column(name="amr_path", type="string", length=255, nullable=true)
     */
    private $amrPath;

    /**
     * @var string
     *
     * @ORM\Column(name="3gp_path", type="string", length=255, nullable=true)
     */
    private $file3gpPath;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube_url", type="string", length=255, nullable=true)
     */
    private $youtubeUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="sermon_status", type="string", nullable=true)
     */
    private $sermonStatus;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Sermon
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set fridaySermon
     *
     * @param boolean $fridaySermon
     *
     * @return Sermon
     */
    public function setFridaySermon($fridaySermon)
    {
        $this->fridaySermon = $fridaySermon;

        return $this;
    }

    /**
     * Get fridaySermon
     *
     * @return boolean
     */
    public function getFridaySermon()
    {
        return $this->fridaySermon;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Sermon
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Sermon
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set sermonDate
     *
     * @param \DateTime $sermonDate
     *
     * @return Sermon
     */
    public function setSermonDate($sermonDate)
    {
        $this->sermonDate = $sermonDate;

        return $this;
    }

    /**
     * Get sermonDate
     *
     * @return \DateTime
     */
    public function getSermonDate()
    {
        return $this->sermonDate;
    }

    /**
     * Set hijriDate
     *
     * @param \DateTime $hijriDate
     *
     * @return Sermon
     */
    public function setHijriDate($hijriDate)
    {
        $this->hijriDate = $hijriDate;

        return $this;
    }

    /**
     * Get hijriDate
     *
     * @return \DateTime
     */
    public function getHijriDate()
    {
        return $this->hijriDate;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Sermon
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set elements
     *
     * @param string $elements
     *
     * @return Sermon
     */
    public function setElements($elements)
    {
        $this->elements = $elements;

        return $this;
    }

    /**
     * Get elements
     *
     * @return string
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * Set imagePath
     *
     * @param string $imagePath
     *
     * @return Sermon
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * Set imageAlt
     *
     * @param string $imageAlt
     *
     * @return Sermon
     */
    public function setImageAlt($imageAlt)
    {
        $this->imageAlt = $imageAlt;

        return $this;
    }

    /**
     * Get imageAlt
     *
     * @return string
     */
    public function getImageAlt()
    {
        return $this->imageAlt;
    }

    /**
     * Set rmPath
     *
     * @param string $rmPath
     *
     * @return Sermon
     */
    public function setRmPath($rmPath)
    {
        $this->rmPath = $rmPath;

        return $this;
    }

    /**
     * Get rmPath
     *
     * @return string
     */
    public function getRmPath()
    {
        return $this->rmPath;
    }

    /**
     * Set ramPath
     *
     * @param string $ramPath
     *
     * @return Sermon
     */
    public function setRamPath($ramPath)
    {
        $this->ramPath = $ramPath;

        return $this;
    }

    /**
     * Get ramPath
     *
     * @return string
     */
    public function getRamPath()
    {
        return $this->ramPath;
    }

    /**
     * Set mp3Path
     *
     * @param string $mp3Path
     *
     * @return Sermon
     */
    public function setMp3Path($mp3Path)
    {
        $this->mp3Path = $mp3Path;

        return $this;
    }

    /**
     * Get mp3Path
     *
     * @return string
     */
    public function getMp3Path()
    {
        return $this->mp3Path;
    }

    /**
     * Set videoPath
     *
     * @param string $videoPath
     *
     * @return Sermon
     */
    public function setVideoPath($videoPath)
    {
        $this->videoPath = $videoPath;

        return $this;
    }

    /**
     * Get videoPath
     *
     * @return string
     */
    public function getVideoPath()
    {
        return $this->videoPath;
    }

    /**
     * Set amrPath
     *
     * @param string $amrPath
     *
     * @return Sermon
     */
    public function setAmrPath($amrPath)
    {
        $this->amrPath = $amrPath;

        return $this;
    }

    /**
     * Get amrPath
     *
     * @return string
     */
    public function getAmrPath()
    {
        return $this->amrPath;
    }

    /**
     * Set file3gpPath
     *
     * @param string $file3gpPath
     *
     * @return Sermon
     */
    public function setFile3gpPath($file3gpPath)
    {
        $this->file3gpPath = $file3gpPath;

        return $this;
    }

    /**
     * Get file3gpPath
     *
     * @return string
     */
    public function getFile3gpPath()
    {
        return $this->file3gpPath;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Sermon
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Sermon
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set sermonStatus
     *
     * @param string $sermonStatus
     *
     * @return Sermon
     */
    public function setSermonStatus($sermonStatus)
    {
        $this->sermonStatus = $sermonStatus;

        return $this;
    }

    /**
     * Get sermonStatus
     *
     * @return string
     */
    public function getSermonStatus()
    {
        return $this->sermonStatus;
    }

    /**
     * Set seriesId
     *
     * @param integer $seriesId
     *
     * @return Sermon
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;

        return $this;
    }

    /**
     * Get seriesId
     *
     * @return integer
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * Set youtubeUrl
     *
     * @param string $youtubeUrl
     *
     * @return Sermon
     */
    public function setYoutubeUrl($youtubeUrl)
    {
        $this->youtubeUrl = $youtubeUrl;

        return $this;
    }

    /**
     * Get youtubeUrl
     *
     * @return string
     */
    public function getYoutubeUrl()
    {
        return $this->youtubeUrl;
    }
}
