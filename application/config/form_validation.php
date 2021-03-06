<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Validation sets of rules for application forms
 * 
 * Use the controller "class/method" structure to give a name to the different
 * sets of rules
 *
 * @author      Didier Viret
 * @link        https://github.com/OrifInformatique/stock
 * @copyright   Copyright (c) 2016, Orif <http://www.orif.ch>
 */

$config ['auth/login'] =
    [
        [
            'field' => 'username',
            'label' => 'lang:field_username',
            'rules' => 'trim|required|min_length[3]|max_length[45]'
        ],
        [
            'field' => 'password',
            'label' => 'lang:field_password',
            'rules' => 'trim|required|min_length[6]|max_length[72]'
        ]
    ];