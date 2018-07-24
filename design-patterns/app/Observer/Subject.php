<?php
/**
 * Created by PhpStorm.
 * User: ccb
 * Date: 2018/7/24
 * Time: 21:02
 */

namespace App\Observer;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class Subject implements SplSubject
{
    private $observers;

    public function getAllObservers()
    {
        $this->notify();
        return $this->observers;
    }
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }
    /**
     * Attach an SplObserver
     *
     * @link  http://php.net/manual/en/splsubject.attach.php
     *
     * @param SplObserver $observer <p>
     *                              The <b>SplObserver</b> to attach.
     *                              </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
        $this->notify();
        $this->observers->attach($observer);
    }

    /**
     * Detach an observer
     *
     * @link  http://php.net/manual/en/splsubject.detach.php
     *
     * @param SplObserver $observer <p>
     *                              The <b>SplObserver</b> to detach.
     *                              </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $this->notify();
        $this->observers->detach($observer);
    }

    /**
     * Notify an observer
     *
     * @link  http://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */public function notify () {
         // TODO: Implement notify() method.
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
     }
}
