<?php


use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\OneToMany;


/**
 * @Entity @Table(name="gestionnaire")
**/
    class Gestionnaire{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $nom;
        /** @Column(type="string")  */
        private $tel;
        /**
         * One Gestionnaire have one User. This is the owning side.
         * @OneToOne(targetEntity="User")
         * @JoinColumn(name="user_id", referencedColumnName="id")
         */
        private $user;
        /**
         * Many Gestionnaires have Many Roles.
         * @ManyToMany(targetEntity="Roles", mappedBy="gestionnaires")
         */
        private $roles;
        /**
         * One gestionnaire has many villages. This is the inverse side.
         * @OneToMany(targetEntity="Village", mappedBy="gestionnaire")
         */
        private $village;
        /**
         * One gestionnaire has many abonnements. This is the inverse side.
         * @OneToMany(targetEntity="Abonnement", mappedBy="gestionnaire")
         */
        private $abonnement;
        /**
         * One gestionnaire has many compteurs. This is the inverse side.
         * @OneToMany(targetEntity="Compteur", mappedBy="gestionnaire")
         */
        private $compteur;
        /**
         * One gestionnaire has many factures. This is the inverse side.
         * @OneToMany(targetEntity="Facture", mappedBy="gestionnaire")
         */
        private $facture;
        /**
         * One gestionnaire has many habitants. This is the inverse side.
         * @OneToMany(targetEntity="Habitant", mappedBy="gestionnaire")
         */
        private $habitant;
        /**
         * One gestionnaire has many reglements. This is the inverse side.
         * @OneToMany(targetEntity="Reglement", mappedBy="gestionnaire")
         */
        private $reglements;

        

        public function __construct()
        {
            $this->roles = new ArrayCollection();
        }
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                //return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                //return $this;
        }

        
        

        /**
         * Get the value of tel
         */ 
        public function getTel()
        {
                return $this->tel;
        }

        /**
         * Set the value of tel
         *
         * @return  self
         */ 
        public function setTel($tel)
        {
                $this->tel = $tel;

                return $this;
        }

        /**
         * Get many Gestionnaires have one user. This is the owning side.
         */ 
        public function getUser()
        {
                return $this->user;
        }

        /**
         * Set many Gestionnaires have one user. This is the owning side.
         *
         * @return  self
         */ 
        public function setUser($user)
        {
                $this->user = $user;

                return $this;
        }

        /**
         * Get many Gestionnaires have Many Roles.
         */ 
        public function getRoles()
        {
                return $this->roles;
        }

        /**
         * Set many Gestionnaires have Many Roles.
         *
         * @return  self
         */ 
        public function setRoles($roles)
        {
                $this->roles = $roles;

                return $this;
        }

        /**
         * Get one Gestionnaire has many villages. This is the owning side.
         */ 
        public function getVillage()
        {
                return $this->village;
        }

        /**
         * Set one Gestionnaire has many villages. This is the owning side.
         *
         * @return  self
         */ 
        public function setVillage($village)
        {
                $this->village = $village;

                return $this;
        }

        /**
         * Get one Gestionnaire has many AbonnementS. This is the owning side.
         */ 
        public function getAbonnement()
        {
                return $this->abonnement;
        }

        /**
         * Set one Gestionnaire has many AbonnementS. This is the owning side.
         *
         * @return  self
         */ 
        public function setAbonnement($abonnement)
        {
                $this->abonnement = $abonnement;

                return $this;
        }

        /**
         * Get one Gestionnaire has many Compteur. This is the owning side.
         */ 
        public function getCompteur()
        {
                return $this->compteur;
        }

        /**
         * Set one Gestionnaire has many Compteur. This is the owning side.
         *
         * @return  self
         */ 
        public function setCompteur($compteur)
        {
                $this->compteur = $compteur;

                return $this;
        }

        /**
         * Get one Gestionnaire has many Facture. This is the owning side.
         */ 
        public function getFacture()
        {
                return $this->facture;
        }

        /**
         * Set one Gestionnaire has many Facture. This is the owning side.
         *
         * @return  self
         */ 
        public function setFacture($facture)
        {
                $this->facture = $facture;

                return $this;
        }

        /**
         * Get one Gestionnaire has many Habitant. This is the owning side.
         */ 
        public function getHabitant()
        {
                return $this->habitant;
        }

        /**
         * Set one Gestionnaire has many Habitant. This is the owning side.
         *
         * @return  self
         */ 
        public function setHabitant($habitant)
        {
                $this->habitant = $habitant;

                return $this;
        }

        /**
         * Get one Gestionnaire has many Reglement. This is the owning side.
         */ 
        public function getReglement()
        {
                return $this->reglement;
        }

        /**
         * Set one Gestionnaire has many Reglement. This is the owning side.
         *
         * @return  self
         */ 
        public function setReglement($reglement)
        {
                $this->reglement = $reglement;

                return $this;
        }

        /**
         * Get one gestionnaire has many reglements. This is the inverse side.
         */ 
        public function getReglements()
        {
                return $this->reglements;
        }

        /**
         * Set one gestionnaire has many reglements. This is the inverse side.
         *
         * @return  self
         */ 
        public function setReglements($reglements)
        {
                $this->reglements = $reglements;

                return $this;
        }
    }
?>