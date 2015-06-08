<?php /*windu.org model*/
Class nextPrevController extends widgetMainController
{		
	public function run() {
		$pagesDB = new pagesDB();
		$urlKey = generate::clean($this->request->getVariable('urlKey'));
		$page = $pagesDB->getPageByUrlKeySmart($urlKey);

		return array("pagesDB" => $pagesDB, "page" => $page);
	}
}
?>