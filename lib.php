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
    $this->data[$field] = $value;
  }

  function submit() {
    if( $curl = curl_init() ) {
      curl_setopt($curl, CURLOPT_URL, $this->url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($this->data));
      $this->result = curl_exec($curl);
      curl_close($curl);
    }
  }

  function should_see($content) {
    if (preg_match("/".$content."/", $this->result) === 0)
      die("Текст \"{$content}\" не найден на странице \"{$this->url}\"");
  }

}

$t = new Tester();
