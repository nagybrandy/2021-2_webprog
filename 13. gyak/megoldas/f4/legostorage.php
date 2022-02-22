<?php
include('storage.php');

class LegoStorage extends Storage {
  public function __construct() {
    parent::__construct(new JsonIO('sets.json'));
  }
}