<?php
    class Movie {

        public $titolo;
        public $genre;
        public $vote;
        public $country;
        public $annoProduzione;


        public function __construct($_titolo, $_genre, $_annoProduzione)
        {
            $this->setTitolo($_titolo);
            $this->setGenre($_genre);
            $this->setAnnoProduzione($_annoProduzione);

        }

        /**
         * Get the value of titolo
         */ 
        public function getTitolo()
        {
                return $this->titolo;
        }

        /**
         * Set the value of titolo
         *
         * @return  self
         */ 
        public function setTitolo($titolo)
        {
                $this->titolo = $titolo;

                return $this;
        }

        /**
         * Get the value of genre
         */ 
        public function getGenre()
        {
                return $this->genre;
        }

        /**
         * Set the value of genre
         *
         * @return  self
         */ 
        public function setGenre($genre)
        {
                $this->genre = $genre;

                return $this;
        }

        /**
         * Get the value of vote
         */ 
        public function getVote()
        {
                return $this->vote;
        }

        /**
         * Set the value of vote
         *
         * @return  self
         */ 
        public function setVote($vote)
        {
                $this->vote = $vote;

                return $this;
        }

        /**
         * Get the value of country
         */ 
        public function getCountry()
        {
                return $this->country;
        }

        /**
         * Set the value of country
         *
         * @return  self
         */ 
        public function setCountry($country)
        {
                $this->country = $country;

                return $this;
        }

        /**
         * Get the value of annoProduzione
         */ 
        public function getAnnoProduzione()
        {
                return $this->annoProduzione;
        }

        /**
         * Set the value of annoProduzione
         *
         * @return  self
         */ 
        public function setAnnoProduzione($annoProduzione)
        {
                $this->annoProduzione = $annoProduzione;

                return $this;
        }

        public function getAnniFilm(){
            return $this->anniFilm;
        }

        public function setAnniFilm(){
            $currYear = date("Y");

            if (!$this->annoProduzione) {
                return "";
            }

            return $currYear - $this->annoProduzione;
        }


        public function printFilm(){
            $titolo = $this->getTitolo();
            $genre = $this->getGenre();
            $anniFilm = $this->setAnniFilm();
            $vote= $this->getVote();
            $annoProduzione = $this->getAnnoProduzione();

            echo "
            <h2>Titolo Film : $titolo</h2>
            <h3>Genere Film : $genre</h3>
            <h4>il film ha : $anniFilm anni</h4>
            <h4>voto : $vote/5</h4>
            <h4>anno produzione: $annoProduzione</h4>
            
            ";
        }
    }
?>