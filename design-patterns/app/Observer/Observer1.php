<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/24
 * Time: 21:01
 */
namespace App\Observer;
use SplSubject;

class Observer1 implements \SplObserver
{

    /**
     * Receive update from subject
     *
     * @link  http://php.net/manual/en/splobserver.update.php
     *
     * @param SplSubject $subject <p>
     *                            The <b>SplSubject</b> notifying the observer of an update.
     *                            </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        print_r($subject);
}}
