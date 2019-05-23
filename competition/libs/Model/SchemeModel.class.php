<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-05-01
 * Time: 15:51
 */
class SchemeModel{
    private $_table = '`scheme`';

    public function getSchemeId($team_id){
        $sql = 'select scheme_id from '.$this->_table.' where team_id='.$team_id;
        return Db::findResult($sql);
    }

    public function getSchemeInfo($schemeId){
        $sql = 'select * from '.$this->_table.' where scheme_id='.$schemeId;
        return Db::findOne($sql);
    }

    public function getTopFiveSchemeData(){
        $sql = 'select * from '.$this->_table.' order by scheme_score desc limit 5';
        return Db::findAll($sql);
    }

    public function getTopFiveScheme($len){
        $schemes = $this->getTopFiveSchemeData();
        foreach ($schemes as $k => $scheme){
            $schemes[$k]['scheme_content'] = $this->cut_string(strip_tags($this->strip_html_tags(array('img','br'),$schemes[$k]['scheme_content'])),$len);
        }
        return $schemes;
    }

/*    public function getTopFiveSchemeIntro(){
        $schemes = $this->getTopFiveSchemeData();
        foreach ($schemes as $k => $scheme){
            $schemes[$k]['scheme_content'] = $this->cut_string(strip_tags($schemes[$k]['scheme_content']),500);
        }
        return $schemes;
    }*/

    private function cut_string($str, $len){
        // 检查长度
        if (mb_strwidth($str, 'UTF-8') <= $len) {
            return $str;
        }

        // 截取
        $i = 0;
        $tlen = 0;
        $tstr = '';

        while ($tlen < $len) {
            $chr = mb_substr($str, $i, 1, 'UTF-8');
            $chrLen = ord($chr) > 127 ? 2 : 1;

            if ($tlen + $chrLen > $len) break;

            $tstr .= $chr;
            $tlen += $chrLen;
            $i++;
        }
        if ($tstr != $str) {
            $tstr .= '...';
        }
        return $tstr;
    }

    private function strip_html_tags($tags,$str){
        $html=array();
        foreach ($tags as $tag) {
            $html[]="/(<(?:\/".$tag."|".$tag.")[^>]*>)/i";
        }
    $data=preg_replace($html, '', $str);
        return $data;
    }

    public function addScheme($data,$team_id){
        extract($data);
        if (empty($scheme_name)) {
            return 0;
        }
        $scheme_id = $this -> getSchemeId($team_id);
        $scheme_name = daddslashes($scheme_name);
        $scheme_score = daddslashes($scheme_score);
        $team_id = daddslashes($team_id);
        $data = array(
            'scheme_name' => $scheme_name,
            'scheme_content' => $scheme_content,
            'team_id' => $team_id
        );
//        如果方案不存在则创建方案
        if (empty($scheme_id)){
            Db::insert($this->_table, $data);
            return 1;
        }else{
            // 方案存在，为编辑信息
            // 如果尚未评分，则允许编辑
            if ($scheme_score == 0 || empty($scheme_score)){
                Db::update($this -> _table, $data, 'scheme_id='.$scheme_id);
            }else{
                return 3;
            }
            return 2;
        }
    }
}
