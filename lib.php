<?php

class Tester {

  function follow($url) {
    $this->url = $url;
    if( $curl = curl_init() ) {
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
      $this->page = curl_exec($curl);
      curl_close($curl);
    }
  }

  function fill($field, $value) {
    if (preg_match("/".$field."/", $this->page) === 0)
      die("Элемент с именем \"{$field}\" не найден на странице \"{$this->url}\"");
  }

  function click($button) {

  }

  function should_see($content) {

  }

}

$t = new Tester();
