<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity(repositoryClass="App\Repository\UserReviewRepository")
 */
class UserReview
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $e_mail;

    /**
     * @ORM\Column(type="string", length=255,)
     */
    private $user_homepage;

    /**
     * @ORM\Column(type="text", length=25500)
     * @Assert\NotBlank()
     */
    private $user_review;

    /**
     *
     * @ORM\Column(type="datetime", columnDefinition="TIMESTAMP DEFAULT CURRENT_TIMESTAMP")
     */
    private $pub_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_ip;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_browser;


    /**
     * @ORM\Column(type="string")
     * @Assert\File(mimeTypes={"image/jpeg","image/gif","image/png"})
     */
    private $brochure;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active = 0;

//    public function __construct()
//    {
//        $this->pub_date= new DateTime();
//
//    }
//

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEMail(): ?string
    {
        return $this->e_mail;
    }

    public function setEMail(string $e_mail): self
    {
        $this->e_mail = $e_mail;

        return $this;
    }

    public function getUserHomepage(): ?string
    {
        return $this->user_homepage;
    }

    public function setUserHomepage(?string $user_homepage): self
    {
        $this->user_homepage = $user_homepage;

        return $this;
    }

    public function getUserReview(): ?string
    {
        return $this->user_review;
    }

    public function setUserReview(string $user_review): self
    {
        $this->user_review = $user_review;

        return $this;
    }

    public function getPubDate(): ?\DateTimeInterface
    {
        return $this->pub_date;
    }

    public function setPubDate(\DateTimeInterface $pub_date): self
    {
        $this->pub_date = $pub_date;

        return $this;
    }
    public function getUserIp(): ?string
    {
        return $this->user_ip;
    }

    public function setUserIp(string $user_ip): self
    {
        $this->user_ip = $user_ip;

        return $this;
    }
    public function getUserBrowser(): ?string
    {
        return $this->user_browser;
    }

    public function setUserBrowser(string $user_browser): self
    {
        $this->user_browser = $user_browser;

        return $this;
    }

    public function getBrochure()
    {
        return $this->brochure;
    }

    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }


    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
