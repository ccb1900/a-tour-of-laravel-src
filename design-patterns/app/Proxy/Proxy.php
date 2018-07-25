<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/25
 * Time: 13:27
 */
interface Website {
    public function browse($a,$b);
}
class GoogleWebSite implements Website {
    public function browse($youtube,$facebook)
    {
        echo "我可以访问谷歌了";
        var_dump($youtube,$facebook);
    }
}
class SsProxy
{
    private $website;
    public function __construct(Website $website)
    {
        $this->website = $website;
    }

    public function action($action,...$args)
    {
        $this->website->$action(...$args);
    }
}
$google = new GoogleWebSite();
$proxy = new SsProxy($google);
$proxy->action("browse",1,2);
