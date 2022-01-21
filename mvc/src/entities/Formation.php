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



/**
 * @Entity @Table(name="formation")
**/
    class Formation{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $nom;
        /** @Column(type="string")  */
        private $date;
        /** @Column(type="integer")  */
        private $duree;
        /**
         * Many formations have one lieu. This is the owning side.
         * @ManyToOne(targetEntity="Lieu", inversedBy="formations")
         * @JoinColumn(name="lieu_id", referencedColumnName="id")
         */
        private $lieu;
        

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

                //return $this;
        }

        /**
         * Get the value of duree
         */ 
        public function getDuree()
        {
                return $this->duree;
        }

        /**
         * Set the value of duree
         *
         * @return  self
         */ 
        public function setDuree($duree)
        {
                $this->duree = $duree;

                //return $this;
        }

        /**
         * Get the value of lieu
         */ 
        public function getLieu()
        {
                return $this->lieu;
        }

        /**
         * Set the value of lieu
         *
         * @return  self
         */ 
        public function setLieu($lieu)
        {
                $this->lieu = $lieu;

                //return $this;
        }
    }
?>