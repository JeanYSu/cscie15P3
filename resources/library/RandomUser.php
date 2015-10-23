<? php

namespace P3\library;


class RandomUser{
    protected $name;
    protected $birthdate;
    protected $profile;
    protected $imageURL;


    public function __construct($name, $birthdate, $profile, $imageURL){
      $this->name = $name;
      $this->birthdate = $birthdate;
      $this->profile = $profile;
      $this->imageURL = $imageURL;
    }

    public funciton getName(){
      return $this->name;
    }

    public function getBirthdate(){
      return $this->birthdate;
    }

    public function getProfile(){
      return $this->profile;
    }

    public function getImageURL(){
      return $this->imageURL;
    }
  }

 ?>
