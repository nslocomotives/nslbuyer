<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Model\UserNotificationInterface;


/**
 * @ORM\Entity
 * @ORM\Table(name="nslbuyer_user")
 */
class User extends BaseUser implements UserNotificationInterface
{

	// link to notifications
    /**
     * @var Notification
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Notification", mappedBy="user", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $notifications;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
    public function __construct()
    {
        parent::__construct();
        // your own logic
		$this->notifications = new ArrayCollection();
    }
	
	// method implementation for UserNotificationInterface

    /**
     * {@inheritdoc}
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * {@inheritdoc}
     */
    public function addNotification($notification)
    {
        if (!$this->notifications->contains($notification)) {
            $this->notifications[] = $notification;
            $notification->setUser($this);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeNotification($notification)
    {
        if ($this->notifications->contains($notification)) {
            $this->notifications->removeElement($notification);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentifier()
    {
        $this->getId();
    }
}