<?php

/**
 * 	topos经销商后台
 */
class TestAction extends CommonAction {

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index() {
    	$Project_model = $this->project_model;
    	$tmp_nlist = $Project_model->select();

    	var_dump($tmp_nlist);
    	exit();
    	$keyword = I('word','');
    	$keyword = urldecode($keyword);
    	if(empty($keyword)) $this->redirect('Index/index',array('lang'=>$this->lang));
    	$Project_model = $this->project_model;
    	$News_model = $this->news_model;
    	$like_word = "%".$keyword."%";
    	if($this->lang){
    		$where['title'] = array('like',$like_word);
			$where['content'] = array('like',$like_word);
			$where['detail_title'] = array('like',$like_word);
			$where['detail'] = array('like',$like_word);
    		$where['title_en'] = array('like',$like_word);
			$where['content_en'] = array('like',$like_word);
			$where['detail_title_en'] = array('like',$like_word);
			$where['detail_en'] = array('like',$like_word);
    		$type = array('project'=>"Project",'news'=>'News');
    	}else{
    		$where['title'] = array('like',$like_word);
			$where['content'] = array('like',$like_word);
			$where['detail_title'] = array('like',$like_word);
			$where['detail'] = array('like',$like_word);
    		$where['title_en'] = array('like',$like_word);
			$where['content_en'] = array('like',$like_word);
			$where['detail_title_en'] = array('like',$like_word);
			$where['detail_en'] = array('like',$like_word);
    		$type = array('project'=>"项目",'news'=>'新闻');
    	}
    	$where['_logic'] = 'or';
		$map['_complex'] = $where;
		$map['isopen'] = 1;
		$tmp_plist = $Project_model->where($map)->field('id,cat2,cat1,image,title,title_en')->select();
		$tmp_nlist = $News_model->where($map)->field('id,cat2,cat1,image,title,title_en')->select();
		$plist = $nlist = array();
		$pcount = $ncount = 0;
		if(!empty($tmp_plist)){
			foreach ($tmp_plist as $kp => $vp) {
				$tmp = array();
				$tmp['title'] = $this->lang?$vp['title_en']:$vp['title'];
				$tmp['id'] = $vp['id'];
				$tmp['image'] = $vp['image'];
				$tmp['cat2'] = $vp['cat2'];
				$tmp['cat1'] = $vp['cat1'];
				$plist[] = $tmp;
			}
			$pcount = count($plist);
		}
		if(!empty($tmp_nlist)){
			foreach ($tmp_nlist as $kn => $vn) {
				$tmp = array();
				$tmp['title'] = $this->lang?$vn['title_en']:$vn['title'];
				$tmp['id'] = $vn['id'];
				$tmp['image'] = $vn['image'];
				$tmp['cat2'] = $vn['cat2'];
				$tmp['cat1'] = $vn['cat1'];
				$nlist[] = $tmp;
			}
			$ncount = count($nlist);
		}
        $lang_change = $this->lang==1?0:1;
        $this->lang_url = U('Search/index',array('lang'=>$lang_change,'word'=>$keyword));
        $this->search_word = $this->lang==1?'Search keyword':'搜索关键词';
        $this->pcount = $pcount;
        $this->ncount = $ncount;
        $this->plist = $plist;
        $this->nlist = $nlist;
        $this->keyword = $keyword;
        $this->type = $type;
        $this->display();
    }
}
?>