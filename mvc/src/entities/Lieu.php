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


/**
 * @Entity @Table(name="lieu")
**/
    class Lieu{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $nom;
        /** @Column(type="decimal")  */
        private $latitude;
        /** @Column(type="decimal")  */
        private $longitude;
        /**
         * One lieu has many formations. This is the inverse side.
         * @OneToMany(targetEntity="Formation", mappedBy="lieu")
         */
        private $formations;
        /**
         * Many Lieux have one user. This is the owning side.
         * @ManyToOne(targetEntity="Lieu", inversedBy="lieux")
         * @JoinColumn(name="user_id", referencedColumnName="id")
         */
        private $user;
        

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
         * Get the value of latitude
         */ 
        public function getLatitude()
        {
                return $this->latitude;
        }

        /**
         * Set the value of latitude
         *
         * @return  self
         */ 
        public function setLatitude($latitude)
        {
                $this->latitude = $latitude;

                //return $this;
        }

        /**
         * Get the value of longitude
         */ 
        public function getLongitude()
        {
                return $this->longitude;
        }

        /**
         * Set the value of longitude
         *
         * @return  self
         */ 
        public function setLongitude($longitude)
        {
                $this->longitude = $longitude;

                //return $this;
        }

       

        /**
         * Get the value of formations
         */ 
        public function getFormations()
        {
                return $this->formations;
        }

        /**
         * Set the value of formations
         *
         * @return  self
         */ 
        public function setFormations($formations)
        {
                $this->formations = $formations;

                //return $this;
        }

        /**
         * Get the value of user
         */ 
        public function getUser()
        {
                return $this->user;
        }

        /**
         * Set the value of user
         *
         * @return  self
         */ 
        public function setUser($user)
        {
                $this->user = $user;

                //return $this;
        }
    }
?>