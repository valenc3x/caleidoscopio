<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$config = array(
    'speakers' => array(
        array(
            'field'   => 'name',
            'label'   => 'Nombre',
            'rules'   => 'required'
        ),
        array(
            'field'   => 'last_name',
            'label'   => 'Apellido',
            'rules'   => 'required'
        ),
        array(
            'field'   => 'email',
            'label'   => 'Email',
            'rules'   => 'required|valid_email'
        ),
        array(
            'field'   => 'university',
            'label'   => 'Universidad',
            'rules'   => 'required'
        ),
        array(
            'field'   => 'speakers[]',
            'label'   => 'Ponencias',
            'rules'   => 'required'
        )
    ),
    'workshops' => array(
        array(
            'field'   => 'name',
            'label'   => 'Nombre',
            'rules'   => 'required'
        ),
        array(
            'field'   => 'last_name',
            'label'   => 'Apellido',
            'rules'   => 'required'
        ),
        array(
            'field'   => 'email',
            'label'   => 'Email',
            'rules'   => 'required|valid_email'
        ),
        array(
            'field'   => 'telephone',
            'label'   => 'Telefono',
            'rules'   => 'required|is_numeric|min_length[10]|max_length[15]'
        ),
        array(
            'field'   => 'university',
            'label'   => 'Universidad',
            'rules'   => 'required'
        ),
        array(
            'field'   => 'workshops[]',
            'label'   => 'Mesas de Trabajo',
            'rules'   => 'required'
        )
    ),
);

