<?php
$top_folder_list = array(
		"_idefiles",
		"Code - ���",
		"View - ���",
	);
$design_foler_list = array(
	'Design - ������',
	'Images - ��������'
);
$code_foler_list = array(
	'_backup',
	'Layout - �������',
	'Scripts - ��������� �������',
	'SQL-�����'
);

// $project_name = "StreetAdventure\\����� ����";
// $project_name = "Todobox\\��������";
// $project_name = "PetersburgFreeTour";
// $project_name = "Study\\Land Loc Laravel First";
// d:\Projects\Todobox\TodoboxClub\
$project_name = "Todobox\\TodoboxClub";

foreach ($top_folder_list as $key=>$folder_name) {
	// $folder_name = cp1251_to_utf8($folder_name);
	// $folder_name = iconv('CP1251','UTF-8',$folder_name);
	// $folder_name = mb_convert_encoding($folder_name, 'utf-8', mb_detect_encoding($folder_name));
	mkdir("d:\Projects\\".$project_name."\\".$folder_name);

	switch ($key) {
		case 0:
			# code...
			break;
		case 1:
			foreach ($code_foler_list as $des) {
				mkdir("d:\Projects\\".$project_name."\\".$folder_name."\\".$des);
			}
			break;
		case 2:
			foreach ($design_foler_list as $des) {
				mkdir("d:\Projects\\".$project_name."\\".$folder_name."\\".$des);
			}
			break;
		
		default:
			# code...
			break;
	}
}