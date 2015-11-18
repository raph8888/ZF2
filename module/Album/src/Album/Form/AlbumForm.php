<?php
namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
  public function __construct($name = null)
  {
    parent::__construct('album');

    $this->add(array(
        'name' => 'id',
        'type' => 'Hidden',
    ));
    $this->add(array(
        'name' => 'title',
        'options' => array(
            'label' => 'Title',
        ),
        'attributes' => array(
            'type' => 'text',
            'class' => 'form-control',//changed line
        )
    ));
    $this->add(array(
        'name' => 'artist',
        'options' => array(
            'label' => 'Artist',
        ),
        'attributes' => array(
            'type' => 'text',
             'class' => 'form-control',//add form-control class
        )
    ));
    $this->add(array(
        'name' => 'submit',
        'attributes' => array(
            'type' => 'submit',
            'value' => 'Go',
            'id' => 'submitbutton',
             'class' => 'btn btn-default'//add btn class
        ),
    ));
}
}