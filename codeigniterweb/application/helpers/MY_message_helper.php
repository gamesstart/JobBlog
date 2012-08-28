<?php
/**
 * demo:<?= @flash_message() ?>
 * @return string
 */

function flash_message()  
{   
    // get flash message from CI instance   
    $ci =& get_instance();   
    $flashmsg = $ci->session->flashdata('message');   
 
    $html = '';   
    if (is_array($flashmsg))   
    {   
        $html = '<div id="flashmessage" class="'.$flashmsg[type].'">   
            <img style="float: right; cursor: pointer" id="closemessage" src="'.site_url().'public/images/cross.png" />   
            <strong>'.$flashmsg['title'].'</strong>   
            <p>'.$flashmsg['content'].'</p>   
            </div>';
        $css = '<style type="text/css">.message,.error{border:1px solid #CCCCCC;width:255px;border:1px solid #c93;background:#ffc;padding:5px;color:#333333;position: absolute;top:0px;left:0px;}.error{color:#f00;}</style>';
        $jq_script = '<script type="text/javascript">$(function(){$("#closemessage").click(function(){$("#flashmessage").hide();});$("#flashmessage").animate({top: "10px"}, 1000 ).show(\'fast\').fadeIn(200).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);})</script>';   
    }   
    return $html.$css.$jq_script;   
}