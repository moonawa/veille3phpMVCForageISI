<?php

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToOne;



/**
 * @Entity @Table(name="roles")
**/
    class Roles{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $nom;
        /**
         * Many Roles have Many Gestionnaires.
         * @ManyToMany(targetEntity="Gestionnaire", mappedBy="roles")
         */
        private $gestionnaires;
        

        public function __construct()
        {
            $this->gestionnaires = new ArrayCollection();
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
         * Get many Roles have Many Gestionnaires.
         */ 
        public function getGestionnaires()
        {
                return $this->gestionnaires;
        }

        /**
         * Set many Roles have Many Gestionnaires.
         *
         * @return  self
         */ 
        public function setGestionnaires($gestionnaires)
        {
                $this->gestionnaires = $gestionnaires;

                return $this;
        }
    }
?>