<?php

namespace OpcacheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OpcacheBundle\Entity\Opcache;

class OpcacheController extends Controller
{
	
	public function __construct()
	{
	}
	/**
	 * @Route("/op", name="op")
	 */
	public function indexAction()
	{
		
	
	$cfg = opcache_get_status();
	$entity = new Opcache();
	
	$entity->setUsedMemory(round($cfg["memory_usage"]["used_memory"] /1000/1000, 2));
	$entity->setFreeMemory(round($cfg["memory_usage"]["free_memory"]/1000/1000, 2));
	$entity->setWastedMemory(round($cfg["memory_usage"]["wasted_memory"]/1000/1000, 2));
	$entity->setHits(round($cfg["opcache_statistics"]["hits"]/1000/1000, 2));
	$entity->setLastRestartTime ($cfg["opcache_statistics"]["last_restart_time"]);
	$entity->setManualRestarts($cfg["opcache_statistics"]["manual_restarts"]);
	$entity->setMaxCachedKeys($cfg["opcache_statistics"]["max_cached_keys"]);
	$entity->setNumCachedKeys($cfg["opcache_statistics"]["num_cached_keys"]);
	$entity->setMisses($cfg["opcache_statistics"]["misses"]);
	$entity->setNumCachedScripts($cfg["opcache_statistics"]["num_cached_scripts"]);
	
	
	$total1 = $entity->getUsedMemory() + $entity->getFreeMemory();

	
	$percentUsedM = $entity->getUsedMemory() / $total1 *100;
	
	$percentFreeM = $entity->getFreeMemory() / $total1 *100;
	
	$percentWastedM = $entity->getWastedMemory() / $total1 *100;
	
	
	$total2 = $entity->getMaxCachedKeys();
	
	$percentusedK = $entity->getNumCachedKeys() / $total2 *100;
	
	$percentfreeK = ($entity->getMaxCachedKeys() - $entity->getNumCachedKeys()) / $total2*100;
	
	
	$total3 = $entity->getHits() + $entity->getMisses();

	$percentHits = $entity->getHits() / $total3*100;
	
	$percentMiss = $entity->getMisses() / $total3*100;
	
	$degreeFreeM = round($percentFreeM, 2) * 3.6;
	
// 	var_dump(round($percentFreeM, 2));
// 	var_dump($degreeFreeM);
	


// 	exit;
// 	$degreeFreeM = round($percentFreeM, 2) *;
	
		return $this->render(
				'@OpcacheBundle/Resources/views/Default/index.html.twig', [
						
						"entity"=> $entity,
						"freepercentm" => round($percentFreeM, 2),
						"freepercentk" => round($percentfreeK, 2),
						"freedegreem" => $degreeFreeM,
						"usedpercentm" => round($percentUsedM, 2),
						"usedpercentk" => round($percentusedK, 2),
						"wastedpercentm" => round($percentWastedM, 2),
						"percenthits" => round($percentHits, 2),
						"percentmiss" => round($percentMiss, 2),
						"total1" => round($total1),
						"total2" => round($total2),
						"total3" => round($total3),
						"freekeys" => round($total2 - $cfg["opcache_statistics"]["num_cached_keys"], 2),
					
						
				]);
		
		
	}

	
	
}
