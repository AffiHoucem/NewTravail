<?php


namespace UtilisateurBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 *Class User
 * @package UtilisateurBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     *
     * @ORM\Column(name="prenom", type="string", length=255 , nullable=true)
     */
    private $prenom;

    /**
     *
     * @ORM\Column(name="nom_boutique", type="string", length=255 , nullable=true)
     */
    private $boutique;

    /**
     *
     * @ORM\Column(name="categorie_boutique", type="string", length=255, nullable=true)
     */
    private $categorie;
    /**
     * UserAdmin constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getBoutique()
    {
        return $this->boutique;
    }

    /**
     * @param mixed $boutique
     */
    public function setBoutique($boutique)
    {
        $this->boutique = $boutique;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }


}