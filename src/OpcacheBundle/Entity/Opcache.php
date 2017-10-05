<?php

namespace OpcacheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opcache
 *
 * @ORM\Table(name="opcache")
 * @ORM\Entity
 */
class Opcache
{
    /**
     * @var integer
     *
     * @ORM\Column(name="used_memory", type="bigint", nullable=false)
     */
    private $usedMemory;

    /**
     * @var integer
     *
     * @ORM\Column(name="free_memory", type="bigint", nullable=false)
     */
    private $freeMemory;

    /**
     * @var integer
     *
     * @ORM\Column(name="wasted_memory", type="bigint", nullable=false)
     */
    private $wastedMemory;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_cached_scripts", type="integer", nullable=false)
     */
    private $numCachedScripts;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_cached_keys", type="integer", nullable=false)
     */
    private $numCachedKeys;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_cached_keys", type="integer", nullable=false)
     */
    private $maxCachedKeys;

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_restart_time", type="integer", nullable=false)
     */
    private $lastRestartTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="manual_restarts", type="integer", nullable=false)
     */
    private $manualRestarts;

    /**
     * @var integer
     *
     * @ORM\Column(name="misses", type="integer", nullable=false)
     */
    private $misses;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $date;



    /**
     * Set usedMemory
     *
     * @param integer $usedMemory
     *
     * @return Opcache
     */
    public function setUsedMemory($usedMemory)
    {
        $this->usedMemory = $usedMemory;

        return $this;
    }

    /**
     * Get usedMemory
     *
     * @return integer
     */
    public function getUsedMemory()
    {
        return $this->usedMemory;
    }

    /**
     * Set freeMemory
     *
     * @param integer $freeMemory
     *
     * @return Opcache
     */
    public function setFreeMemory($freeMemory)
    {
        $this->freeMemory = $freeMemory;

        return $this;
    }

    /**
     * Get freeMemory
     *
     * @return integer
     */
    public function getFreeMemory()
    {
        return $this->freeMemory;
    }

    /**
     * Set wastedMemory
     *
     * @param integer $wastedMemory
     *
     * @return Opcache
     */
    public function setWastedMemory($wastedMemory)
    {
        $this->wastedMemory = $wastedMemory;

        return $this;
    }

    /**
     * Get wastedMemory
     *
     * @return integer
     */
    public function getWastedMemory()
    {
        return $this->wastedMemory;
    }

    /**
     * Set numCachedScripts
     *
     * @param integer $numCachedScripts
     *
     * @return Opcache
     */
    public function setNumCachedScripts($numCachedScripts)
    {
        $this->numCachedScripts = $numCachedScripts;

        return $this;
    }

    /**
     * Get numCachedScripts
     *
     * @return integer
     */
    public function getNumCachedScripts()
    {
        return $this->numCachedScripts;
    }

    /**
     * Set numCachedKeys
     *
     * @param integer $numCachedKeys
     *
     * @return Opcache
     */
    public function setNumCachedKeys($numCachedKeys)
    {
        $this->numCachedKeys = $numCachedKeys;

        return $this;
    }

    /**
     * Get numCachedKeys
     *
     * @return integer
     */
    public function getNumCachedKeys()
    {
        return $this->numCachedKeys;
    }

    /**
     * Set maxCachedKeys
     *
     * @param integer $maxCachedKeys
     *
     * @return Opcache
     */
    public function setMaxCachedKeys($maxCachedKeys)
    {
        $this->maxCachedKeys = $maxCachedKeys;

        return $this;
    }

    /**
     * Get maxCachedKeys
     *
     * @return integer
     */
    public function getMaxCachedKeys()
    {
        return $this->maxCachedKeys;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     *
     * @return Opcache
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set lastRestartTime
     *
     * @param integer $lastRestartTime
     *
     * @return Opcache
     */
    public function setLastRestartTime($lastRestartTime)
    {
        $this->lastRestartTime = $lastRestartTime;

        return $this;
    }

    /**
     * Get lastRestartTime
     *
     * @return integer
     */
    public function getLastRestartTime()
    {
        return $this->lastRestartTime;
    }

    /**
     * Set manualRestarts
     *
     * @param integer $manualRestarts
     *
     * @return Opcache
     */
    public function setManualRestarts($manualRestarts)
    {
        $this->manualRestarts = $manualRestarts;

        return $this;
    }

    /**
     * Get manualRestarts
     *
     * @return integer
     */
    public function getManualRestarts()
    {
        return $this->manualRestarts;
    }

    /**
     * Set misses
     *
     * @param integer $misses
     *
     * @return Opcache
     */
    public function setMisses($misses)
    {
        $this->misses = $misses;

        return $this;
    }

    /**
     * Get misses
     *
     * @return integer
     */
    public function getMisses()
    {
        return $this->misses;
    }

    /**
     * Get date
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }
}
