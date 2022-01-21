<?php

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToOne;




/**
 * @Entity @Table(name="village")
**/
    class Village{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $nom;
        /**
         * One Village has many habitants. This is the inverse side.
         * @OneToMany(targetEntity="Habitant", mappedBy="village")
         */
        private $habitants;        
        /**
         * One Village have one chef. This is the owning side.
         * @OneToOne(targetEntity="Habitant")
         * @JoinColumn(name="habitant_id", referencedColumnName="id")
         */
        private $habitant;
        /**
         * Many Village have one gestionnaire. This is the owning side.
         * @ManyToOne(targetEntity="Gestionnaire", inversedBy="villages")
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
         * Get one Village has many habitants. This is the inverse side.
         */ 
        public function getHabitants()
        {
                return $this->habitants;
        }

        /**
         * Set one Village has many habitants. This is the inverse side.
         *
         * @return  self
         */ 
        public function setHabitants($habitants)
        {
                $this->habitants = $habitants;

                return $this;
        }

        /**
         * Get one Village have one chef. This is the owning side.
         */ 
        public function getHabitant()
        {
                return $this->habitant;
        }

        /**
         * Set one Village have one chef. This is the owning side.
         *
         * @return  self
         */ 
        public function setHabitant($habitant)
        {
                $this->habitant = $habitant;

                return $this;
        }

        /**
         * Get one Village have One Gestionnaire. This is the owning side.
         */ 
        public function getGestionnaire()
        {
                return $this->gestionnaire;
        }

        /**
         * Set one Village have One Gestionnaire. This is the owning side.
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