<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtatRepository")
 */
class Etat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\ManyToMany(targetEntity="Objet", mappedBy="etats", cascade={"persist"})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Objet", inversedBy="etats",cascade={"persist"})
     * @ORM\Column(name="objet", type="integer")
     */
    private $objet;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Vendeur", inversedBy="etats",cascade={"persist"})
     * @ORM\Column(name="vendeur", type="integer")
     */
    private $vendeur;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="LibelleEtat", inversedBy="id",cascade={"persist"})
     * @ORM\Column(name="libelle", type="integer")
     */
    private $libelle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set objet
     *
     * @param integer $objet
     *
     * @return Etat
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return int
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set vendeur
     *
     * @param integer $vendeur
     *
     * @return Etat
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return int
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set libelle
     *
     * @param int $libelle
     *
     * @return Etat
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return int
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}

