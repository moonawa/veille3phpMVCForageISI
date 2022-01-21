<?php


use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\OneToMany;





/**
 * @Entity @Table(name="abonnement")
**/
    class Abonnement{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="date")  */
        private $date;
        /** @Column(type="string")  */
        private $num;
        /** @Column(type="string")  */
        private $description;
        /**
         * One Abonnement have one Habitant. This is the owning side.
         * @OneToOne(targetEntity="Habitant")
         * @JoinColumn(name="habitant_id", referencedColumnName="id")
         */
        private $habitant;
        /**
         * One Abonnement have one Compteur. This is the owning side.
         * @OneToOne(targetEntity="Compteur")
         * @JoinColumn(name="compteur_id", referencedColumnName="id")
         */
        private $compteur;
     

        /**
         * Many Abonnement have one gestionnaire. This is the owning side.
         * @ManyToOne(targetEntity="Gestionnaire", inversedBy="abonnements")
         * @JoinColumn(name="gestionnaire_id", referencedColumnName="id")
         */
        private $gestionnaire;
        

        public function __construct()
        {
            
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
         * Get one Habitant have one chef de village. This is the owning side.
         */ 
        public function getHabitant()
        {
                return $this->habitant;
        }

        /**
         * Set one Habitant have one chef de village. This is the owning side.
         *
         * @return  self
         */ 
        public function setHabitant($habitant)
        {
                $this->habitant = $habitant;

                return $this;
        }

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        /**
         * Get the value of num
         */ 
        public function getNum()
        {
                return $this->num;
        }

        /**
         * Set the value of num
         *
         * @return  self
         */ 
        public function setNum($num)
        {
                $this->num = $num;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        

        /**
         * Get one Abonnement have one Compteur. This is the owning side.
         */ 
        public function getCompteur()
        {
                return $this->compteur;
        }

        /**
         * Set one Abonnement have one Compteur. This is the owning side.
         *
         * @return  self
         */ 
        public function setCompteur($compteur)
        {
                $this->compteur = $compteur;

                return $this;
        }

        /**
         * Get one Abonnement have One Gestionnaire. This is the owning side.
         */ 
        public function getGestionnaire()
        {
                return $this->gestionnaire;
        }

        /**
         * Set one Abonnement have One Gestionnaire. This is the owning side.
         *
         * @return  self
         */ 
        public function setGestionnaire($gestionnaire)
        {
                $this->gestionnaire = $gestionnaire;

                return $this;
        }
    }
?>