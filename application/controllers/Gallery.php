<?php

class Gallery extends Application {
  public function index() {
    //$this->load->view('gallery');
    $this->data['pagebody'] = 'gallery';
    $this->render();
  }
}
