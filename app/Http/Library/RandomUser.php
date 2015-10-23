<?php

namespace P3\Http\Library;

class RandomUser{
    protected $name;
    protected $birthdate;
    protected $profile;
    protected $foodImageURL;

    public function __construct(){
      $this->name = "";
      $this->birthdate = "";
      $this->profile = "";
      $this->foodImageURL = "";
    }

    public function createUser($birthdate_chkstatus, $profile_chkstatus, $food_chkstatus){
          $faker = \Faker\Factory::create();
          $this->name = $faker->name;
          //generate random birthdate only when needed
          $this->birthdate = ($birthdate_chkstatus == "checked")? $faker->dateTimeThisCentury->format("Y-M-d") : "";
          //generate random profile only when needed
          $this->profile = ($profile_chkstatus == "checked")? $faker->text : '';
          //generate food image url only when needed
          $this->foodImageURL = ($food_chkstatus == "checked")? $faker->imageUrl(100, 100, 'food') : "";
    }

    public function getName(){
      return $this->name;
    }

    public function getBirthdate(){
      return $this->birthdate;
    }

    public function getProfile(){
      return $this->profile;
    }

    public function getImageURL(){
      return $this->foodImageURL;
    }


  }

 ?>
