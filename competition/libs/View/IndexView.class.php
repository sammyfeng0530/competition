<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-04-28
 * Time: 21:26
 */

class IndexView{
    public function popPrompt($info, $url){
        echo
        "
       <script>
                $('.prompt-form p').html('$info');
                $('.mask').fadeToggle();
                $('.popup-form').fadeToggle();
                $('.confirm-button').click(function(){window.location.href='$url';});
        </script>
        ";

    }
}