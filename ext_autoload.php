<?php
$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('crawler');
return array(
	'tx_crawler_lib' => $extensionPath . 'class.tx_crawler_lib.php',
	'tx_crawler_cli_flush' => $extensionPath . 'cli/class.tx_crawler_cli_flush.php',
	'tx_crawler_cli' => $extensionPath . 'cli/class.tx_crawler_cli.php',
	'tx_crawler_cli_im' => $extensionPath . 'cli/class.tx_crawler_cli_im.php',
	'tx_crawler_domain_events_dispatcher' => $extensionPath . 'domain/events/class.tx_crawler_domain_events_dispatcher.php',
	'tx_crawler_domain_events_observer' => $extensionPath . 'domain/events/interface.tx_crawler_domain_events_observer.php',
	'tx_crawler_domain_lib_abstract_dbobject' => $extensionPath . 'domain/lib/class.tx_crawler_domain_lib_abstract_dbobject.php',
	'tx_crawler_domain_process_manager' => $extensionPath . 'domain/process/class.tx_crawler_domain_process_manager.php',
	'tx_crawler_domain_process' => $extensionPath . 'domain/process/class.tx_crawler_domain_process.php',
	'tx_crawler_domain_process_collection' => $extensionPath . 'domain/process/class.tx_crawler_domain_process_collection.php',
	'tx_crawler_domain_process_repository' => $extensionPath . 'domain/process/class.tx_crawler_domain_process_repository.php',
	'tx_crawler_domain_queue_entry' => $extensionPath . 'domain/queue/class.tx_crawler_domain_queue_entry.php',
	'tx_crawler_domain_queue_repository' => $extensionPath . 'domain/queue/class.tx_crawler_domain_queue_repository.php',
	'tx_crawler_domain_reason' => $extensionPath . 'domain/reason/class.tx_crawler_domain_reason.php',
	'tx_crawler_hooks_tsfe' => $extensionPath . 'hooks/class.tx_crawler_hooks_tsfe.php',
	'tx_crawler_hooks_staticFileCacheCreateUri' => $extensionPath . 'hooks/class.tx_crawler_hooks_staticFileCacheCreateUri.php',
	'tx_crawler_hooks_processCleanUp' => $extensionPath . 'hooks/class.tx_crawler_hooks_processCleanUp.php',
	'tx_crawler_modfunc1' => $extensionPath . 'modfunc1/class.tx_crawler_modfunc1.php',
	'tx_crawler_view_pagination' => $extensionPath . 'view/class.tx_crawler_view_pagination.php',
	'tx_crawler_view_process_list' => $extensionPath . 'view/process/class.tx_crawler_view_process_list.php',
);
