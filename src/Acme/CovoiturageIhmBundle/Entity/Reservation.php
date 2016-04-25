<?php

namespace Acme\CovoiturageIhmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="FK_reservation_1", columns={"id_annonce"}), @ORM\Index(name="FK_reservation_2", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_place", type="integer", nullable=true)
     */
    private $nbrPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_res", type="string", length=45, nullable=true)
     */
    private $commentaireRes;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

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
     * @var \Acme\CovoiturageIhmBundle\Entity\Annonce
     *
     * @ORM\ManyToOne(targetEntity="Acme\CovoiturageIhmBundle\Entity\Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_annonce", referencedColumnName="id")
     * })
     */
    private $idAnnonce;



    /**
     * Set nbrPlace
     *
     * @param integer $nbrPlace
     * @return Reservation
     */
    public function setNbrPlace($nbrPlace)
    {
        $this->nbrPlace = $nbrPlace;

        return $this;
    }

    /**
     * Get nbrPlace
     *
     * @return integer 
     */
    public function getNbrPlace()
    {
        return $this->nbrPlace;
    }

    /**
     * Set commentaireRes
     *
     * @param string $commentaireRes
     * @return Reservation
     */
    public function setCommentaireRes($commentaireRes)
    {
        $this->commentaireRes = $commentaireRes;

        return $this;
    }

    /**
     * Get commentaireRes
     *
     * @return string 
     */
    public function getCommentaireRes()
    {
        return $this->commentaireRes;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Reservation
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
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
     * @return Reservation
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

    /**
     * Set idAnnonce
     *
     * @param \Acme\CovoiturageIhmBundle\Entity\Annonce $idAnnonce
     * @return Reservation
     */
    public function setIdAnnonce(\Acme\CovoiturageIhmBundle\Entity\Annonce $idAnnonce = null)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return \Acme\CovoiturageIhmBundle\Entity\Annonce 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }
}
