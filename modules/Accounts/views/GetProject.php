<?php
class Accounts_GetProject_View extends Vtiger_IndexAjax_View {
	public function process(Vtiger_Request $request)
	{
		$qId = $request->get('q');
		$sql = "select c1.name
				from vtiger_projects c1
				inner join vtiger_projectscf c2 ON c1.projectsid = c2.projectsid
				where c2.cf_925=?
				";
		$db = PearDatabase::getInstance();
		$result = $db->pquery($sql, array($qId));
		//$activeStatus = $db->fetchByAssoc($result);
		$data = array();
		while($row = $db->fetch_array($result)){
			$data[]=$row['name'];
		}
		//echo '<pre>';var_dump($data);
		$viewer = $this->getViewer($request);
		$viewer->assign('data', $data);
		$moduleName = $request->getModule();
		echo $viewer->view('GetProject.tpl', $moduleName, true);
		//exit();
	}
}