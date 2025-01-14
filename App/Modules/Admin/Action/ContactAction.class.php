<?php

/**
 * 	topos经销商后台
 */
class ContactAction extends CommonAction {

    public function _initialize()
    {
        parent::_initialize();
    }

   
    public function index() {
        $lang_change = $this->lang==1?0:1;
        $this->lang_url = U('Contact/index',array('lang'=>$lang_change));

        $this->contact_pic = M('company')->where('status = 100')->find();
        $this->contact_pic_aboard = M('company')->where('status = 101')->find();
        $contact_recruitment = M('company')->where('status = 102')->find();
        $this->contact_recruitment = html_entity_decode($contact_recruitment['content']);
        $this->contact_recruitment_en = html_entity_decode($contact_recruitment['content_en']);
        $this->contact_pic_qrcode = M('company')->where('status = 103')->find();
        $this->row1 = M('company')->where('status = 104')->find();
        $this->row2 = M('company')->where('status = 105')->find();

        $row3 = M('company')->where('status = 107')->find();
        $row4 = M('company')->where('status = 108')->find();

        $this->contact_cn1 = html_entity_decode($row3['content']);
        $this->contact_cn2 = html_entity_decode($row3['content_en']);
        $this->contact_en1 = html_entity_decode($row4['content']);
        $this->contact_en2 = html_entity_decode($row4['content_en']);

        $this->row3 = $row3;
        $this->row4 = $row4;
        $this->display();
    }
}
?>