<?php

defined('IN_PHPCMS') or exit('No permission resources.');
//模型缓存路径
define('CACHE_MODEL_PATH', CACHE_PATH . 'caches_model' . DIRECTORY_SEPARATOR . 'caches_data' . DIRECTORY_SEPARATOR);
pc_base::load_app_func('util', 'content');

class MY_index extends index {

    public function __construct() {
        parent::__construct();
    }

    public function lists() {

        //开始构造get（将get全部转换为变量）
        if ((isset($_GET) && is_array($_GET)) || (isset($_POST) && is_array($_POST))) {
            $pull_data = $_POST && is_array($_POST) ? $_POST : $_GET;
            foreach ($pull_data as $name => $value) {
                if (!in_array($name, array('c', 'm', 'a'))) {
                    $$name =addslashes($value);//转义特殊字符
                }
            }
        }

        $catid = $_GET['catid'] = intval($_GET['catid']);
        $_priv_data = $this->_category_priv($catid);
        if ($_priv_data == '-1') {
            $forward = urlencode(get_url());
            showmessage(L('login_website'), APP_PATH . 'index.php?m=member&c=index&a=login&forward=' . $forward);
        } elseif ($_priv_data == '-2') {
            showmessage(L('no_priv'));
        }
        $_userid = $this->_userid;
        $_username = $this->_username;
        $_groupid = $this->_groupid;

        if (!$catid)
            showmessage(L('category_not_exists'), 'blank');
        $siteids = getcache('category_content', 'commons');
        $siteid = $siteids[$catid];
        $CATEGORYS = getcache('category_content_' . $siteid, 'commons');
        if (!isset($CATEGORYS[$catid]))
            showmessage(L('category_not_exists'), 'blank');
        $CAT = $CATEGORYS[$catid];
        $siteid = $GLOBALS['siteid'] = $CAT['siteid'];
        extract($CAT);
        $setting = string2array($setting);
        //SEO
        if (!$setting['meta_title'])
            $setting['meta_title'] = $catname;
        $SEO = seo($siteid, '', $setting['meta_title'], $setting['meta_description'], $setting['meta_keywords']);
        define('STYLE', $setting['template_list']);
        $page = intval($_GET['page']);

        $template = $setting['category_template'] ? $setting['category_template'] : 'category';
        $template_list = $setting['list_template'] ? $setting['list_template'] : 'list';

        if ($type == 0) {
            $template = $child ? $template : $template_list;
            $arrparentid = explode(',', $arrparentid);
            $top_parentid = $arrparentid[1] ? $arrparentid[1] : $catid;
            $array_child = array();
            $self_array = explode(',', $arrchildid);
            //获取一级栏目ids
            foreach ($self_array as $arr) {
                if ($arr != $catid && $CATEGORYS[$arr][parentid] == $catid) {
                    $array_child[] = $arr;
                }
            }
            $arrchildid = implode(',', $array_child);
            //URL规则
            $urlrules = getcache('urlrules', 'commons');
            $urlrules = str_replace('|', '~', $urlrules[$category_ruleid]);
            $tmp_urls = explode('~', $urlrules);
            $tmp_urls = isset($tmp_urls[1]) ? $tmp_urls[1] : $tmp_urls[0];
            preg_match_all('/{\$([a-z0-9_]+)}/i', $tmp_urls, $_urls);
            if (!empty($_urls[1])) {
                foreach ($_urls[1] as $_v) {
                    $GLOBALS['URL_ARRAY'][$_v] = $_GET[$_v];
                }
            }
            define('URLRULE', $urlrules);
            $GLOBALS['URL_ARRAY']['categorydir'] = $categorydir;
            $GLOBALS['URL_ARRAY']['catdir'] = $catdir;
            $GLOBALS['URL_ARRAY']['catid'] = $catid;
            include template('content', $template);
        } else {
            //单网页
            $this->page_db = pc_base::load_model('page_model');
            $r = $this->page_db->get_one(array('catid' => $catid));
            if ($r)
                extract($r);
            $template = $setting['page_template'] ? $setting['page_template'] : 'page';
            $arrchild_arr = $CATEGORYS[$parentid]['arrchildid'];
            if ($arrchild_arr == '')
                $arrchild_arr = $CATEGORYS[$catid]['arrchildid'];
            $arrchild_arr = explode(',', $arrchild_arr);
            array_shift($arrchild_arr);
            $keywords = $keywords ? $keywords : $setting['meta_keywords'];
            $SEO = seo($siteid, 0, $title, $setting['meta_description'], $keywords);
            include template('content', $template);
        }
    }

}

?>