<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatureRepository::class)
 */
class Candidature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Candidat::class , cascade={"persist"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $candidat;

    /**
     * @ORM\ManyToOne(targetEntity=JobOffer::class , cascade={"persist"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $job_offer;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_postulate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidat(): ?Candidat
    {
        return $this->candidat;
    }

    public function setCandidat(?Candidat $candidat): self
    {
        $this->candidat = $candidat;

        return $this;
    }

    public function getJobOffer(): ?JobOffer
    {
        return $this->job_offer;
    }

    public function setJobOffer(?JobOffer $job_offer): self
    {
        $this->job_offer = $job_offer;

        return $this;
    }

    public function getDatePostulate(): ?\DateTimeInterface
    {
        return $this->Date_postulate;
    }

    public function setDatePostulate(\DateTimeInterface $Date_postulate): self
    {
        $this->Date_postulate = $Date_postulate;

        return $this;
    }
    
}
