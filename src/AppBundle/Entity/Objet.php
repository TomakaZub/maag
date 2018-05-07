<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objet
 *
 * @ORM\Table(name="objet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObjetRepository")
 */
class Objet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="Type", mappedBy="id", cascade={"persist"})
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="provenance", type="string", length=255, nullable=true)
     */
    private $provenance;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     * @ORM\ManyToMany(targetEntity="Etat", mappedBy="objets", cascade={"persist"})
     */
    private $etats; 

    /**
     * @var float
     *
     * @ORM\Column(name="hauteur", type="float", nullable=true)
     */
    private $hauteur;

    /**
     * @var float
     *
     * @ORM\Column(name="largeur", type="float", nullable=true)
     */
    private $largeur;

    /**
     * @var float
     *
     * @ORM\Column(name="profondeur", type="float", nullable=true)
     */
    private $profondeur;

    /**
     * @var string
     *
     * @ORM\Column(name="matiere", type="string", nullable=true)
     */
    private $matieres;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", nullable=true)
     */
    private $poids;
    
    /**
     * @var int
     * @ORM\OneToOne(targetEntity="Image", mappedBy="id", cascade={"persist"})
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive", type="boolean")
     */
    private $archive;

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
     * Set type
     *
     * @param integer $type
     *
     * @return Objet
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set provenance
     *
     * @param string $provenance
     *
     * @return Objet
     */
    public function setProvenance($provenance)
    {
        $this->provenance = $provenance;

        return $this;
    }

    /**
     * Get provenance
     *
     * @return string
     */
    public function getProvenance()
    {
        return $this->provenance;
    }
    
        /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Objet
     */
    public function setNom($nom)
    {
        $this->provenance = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Objet
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
     * Set etats
     *
     * @param int $etats
     *
     * @return Objet
     */
    public function setEtats($etats)
    {
        $this->etats = $etats;

        return $this;
    }

    /**
     * Get etats
     *
     * @return int
     */
    public function getEtats()
    {
        return $this->etats;
    }
	
	/**
	 * Add etat
	 *
	 * @param \AppBundle\Entity\Etat $etat
	 *
	 * @return Objet
	 */
	public function addEtat($etat)
	{
		$this->etats[] = $etat;
		
		return $this;
	}
	
	/**
	 * Remove etat
	 *
	 * @param \AppBundle\Entity\Etat $etat
	 */
	public function removeEtat($etat)
	{
		$this->etats->removeElement($etat);
	}

    /**
     * Set hauteur
     *
     * @param float $hauteur
     *
     * @return Objet
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return float
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set largeur
     *
     * @param float $largeur
     *
     * @return Objet
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return float
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set profondeur
     *
     * @param float $profondeur
     *
     * @return Objet
     */
    public function setProfondeur($profondeur)
    {
        $this->profondeur = $profondeur;

        return $this;
    }

    /**
     * Get profondeur
     *
     * @return float
     */
    public function getProfondeur()
    {
        return $this->profondeur;
    }

    /**
     * Set matieres
     *
     * @param integer $matieres
     *
     * @return Objet
     */
    public function setMatieres($matieres)
    {
        $this->matieres = $matieres;

        return $this;
    }

    /**
     * Get matieres
     *
     * @return int
     */
    public function getMatieres()
    {
        return $this->matieres;
    }

    /**
     * Set poids
     *
     * @param float $poids
     *
     * @return Objet
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }
    
        /**
     * Set image
     *
     * @param float $image
     *
     * @return Objet
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return int
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Set archive
     *
     * @param boolean $archive
     *
     * @return Objet
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return boolean
     */
    public function getArchive()
    {
        return $this->archive;
    }
}

