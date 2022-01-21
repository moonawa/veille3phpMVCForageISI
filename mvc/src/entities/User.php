<?php

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;




/**
 * @Entity @Table(name="user")
**/
    class User{
        /** @ID @Column(type="integer") @GeneratedValue */
        private $id;
        /** @Column(type="string")  */
        private $nom;
        /** @Column(type="string")  */
        private $prenom;
        /** @Column(type="string")  */
        private $email;
        /** @Column(type="string")  */
        private $password;
        /**
         * One user has many lieux. This is the inverse side.
         * @OneToMany(targetEntity="Lieu", mappedBy="user")
         */
        private $lieux;
        /**
         * Many Users have Many Roles.
         * @ManyToMany(targetEntity="Roles", inversedBy="users")
         * @JoinTable(name="users_roles")
         */
        private $roles;
        

        public function __construct()
        {
            $this->lieux = new ArrayCollection();
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
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                //return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                //return $this;
        }

       

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                //return $this;
        }

        /**
         * Get the value of lieux
         */ 
        public function getLieux()
        {
                return $this->lieux;
        }

        /**
         * Set the value of lieux
         *
         * @return  self
         */ 
        public function setLieux($lieux)
        {
                $this->lieux = $lieux;

                //return $this;
        }

        /**
         * Get the value of roles
         */ 
        public function getRoles()
        {
                return $this->roles;
        }

        /**
         * Set the value of roles
         *
         * @return  self
         */ 
        public function setRoles($roles)
        {
                $this->roles = $roles;

                //return $this;
        }
    }
?>