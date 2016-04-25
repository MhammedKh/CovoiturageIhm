<?php

namespace Acme\CovoiturageIhmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="FK_utilisateur", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="marque_voiture", type="string", length=45, nullable=true)
     */
    private $marqueVoiture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_place", type="integer", nullable=true)
     */
    private $nombrePlace;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_place", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixPlace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dep", type="date", nullable=true)
     */
    private $dateDep;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_dep", type="string", length=45, nullable=true)
     */
    private $heureDep;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_dep", type="string", length=45, nullable=true)
     */
    private $villeDep;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_arr", type="string", length=45, nullable=true)
     */
    private $villeArr;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_dep", type="string", length=45, nullable=true)
     */
    private $lieuDep;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=45, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ins", type="date", nullable=true)
     */
    private $dateIns;

    /**
     * @var integer
     *
     * @ORM\Column(name="fumeur", type="integer", nullable=true)
     */
    private $fumeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="musique", type="integer", nullable=true)
     */
    private $musique;

    /**
     * @var integer
     *
     * @ORM\Column(name="discussion", type="integer", nullable=true)
     */
    private $discussion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\CovoiturageIhmBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageIhmBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;



    /**
     * Set marqueVoiture
     *
     * @param string $marqueVoiture
     * @return Annonce
     */
    public function setMarqueVoiture($marqueVoiture)
    {
        $this->marqueVoiture = $marqueVoiture;

        return $this;
    }

    /**
     * Get marqueVoiture
     *
     * @return string 
     */
    public function getMarqueVoiture()
    {
        return $this->marqueVoiture;
    }

    /**
     * Set nombrePlace
     *
     * @param integer $nombrePlace
     * @return Annonce
     */
    public function setNombrePlace($nombrePlace)
    {
        $this->nombrePlace = $nombrePlace;

        return $this;
    }

    /**
     * Get nombrePlace
     *
     * @return integer 
     */
    public function getNombrePlace()
    {
        return $this->nombrePlace;
    }

    /**
     * Set prixPlace
     *
     * @param float $prixPlace
     * @return Annonce
     */
    public function setPrixPlace($prixPlace)
    {
        $this->prixPlace = $prixPlace;

        return $this;
    }

    /**
     * Get prixPlace
     *
     * @return float 
     */
    public function getPrixPlace()
    {
        return $this->prixPlace;
    }

    /**
     * Set dateDep
     *
     * @param \DateTime $dateDep
     * @return Annonce
     */
    public function setDateDep($dateDep)
    {
        $this->dateDep = $dateDep;

        return $this;
    }

    /**
     * Get dateDep
     *
     * @return \DateTime 
     */
    public function getDateDep()
    {
        return $this->dateDep;
    }

    /**
     * Set heureDep
     *
     * @param string $heureDep
     * @return Annonce
     */
    public function setHeureDep($heureDep)
    {
        $this->heureDep = $heureDep;

        return $this;
    }

    /**
     * Get heureDep
     *
     * @return string 
     */
    public function getHeureDep()
    {
        return $this->heureDep;
    }

    /**
     * Set villeDep
     *
     * @param string $villeDep
     * @return Annonce
     */
    public function setVilleDep($villeDep)
    {
        $this->villeDep = $villeDep;

        return $this;
    }

    /**
     * Get villeDep
     *
     * @return string 
     */
    public function getVilleDep()
    {
        return $this->villeDep;
    }

    /**
     * Set villeArr
     *
     * @param string $villeArr
     * @return Annonce
     */
    public function setVilleArr($villeArr)
    {
        $this->villeArr = $villeArr;

        return $this;
    }

    /**
     * Get villeArr
     *
     * @return string 
     */
    public function getVilleArr()
    {
        return $this->villeArr;
    }

    /**
     * Set lieuDep
     *
     * @param string $lieuDep
     * @return Annonce
     */
    public function setLieuDep($lieuDep)
    {
        $this->lieuDep = $lieuDep;

        return $this;
    }

    /**
     * Get lieuDep
     *
     * @return string 
     */
    public function getLieuDep()
    {
        return $this->lieuDep;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Annonce
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Annonce
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateIns
     *
     * @param \DateTime $dateIns
     * @return Annonce
     */
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }

    /**
     * Get dateIns
     *
     * @return \DateTime 
     */
    public function getDateIns()
    {
        return $this->dateIns;
    }

    /**
     * Set fumeur
     *
     * @param integer $fumeur
     * @return Annonce
     */
    public function setFumeur($fumeur)
    {
        $this->fumeur = $fumeur;

        return $this;
    }

    /**
     * Get fumeur
     *
     * @return integer 
     */
    public function getFumeur()
    {
        return $this->fumeur;
    }

    /**
     * Set musique
     *
     * @param integer $musique
     * @return Annonce
     */
    public function setMusique($musique)
    {
        $this->musique = $musique;

        return $this;
    }

    /**
     * Get musique
     *
     * @return integer 
     */
    public function getMusique()
    {
        return $this->musique;
    }

    /**
     * Set discussion
     *
     * @param integer $discussion
     * @return Annonce
     */
    public function setDiscussion($discussion)
    {
        $this->discussion = $discussion;

        return $this;
    }

    /**
     * Get discussion
     *
     * @return integer 
     */
    public function getDiscussion()
    {
        return $this->discussion;
    }

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
     * Set idUtilisateur
     *
     * @param \Acme\CovoiturageIhmBundle\Entity\Utilisateur $idUtilisateur
     * @return Annonce
     */
    public function setIdUtilisateur(\Acme\CovoiturageIhmBundle\Entity\Utilisateur $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \Acme\CovoiturageIhmBundle\Entity\Utilisateur 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
}
