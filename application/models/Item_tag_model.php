<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * The Item tag model
 * 
 * @author      Didier Viret
 * @link        https://github.com/OrifInformatique/stock
 * @copyright   Copyright (c) 2016, Orif <http://www.orif.ch>
 */

class Item_tag_model extends MY_Model
{
    /* MY_Model variables definition */
    protected $_table = 'item_tag';
    protected $primary_key = 'item_tag_id';
    protected $has_many = ['item_tag_links'];


    /**
    * Constructor
    */
    public function __construct()
    {
        parent::__construct();
    }
}