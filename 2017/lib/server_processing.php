<?php


/*
* DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
// DB table to use
$table = <<<EOT
 (
 SELECT p.paper_id, p.paper_title, p.DOI, p.paper_authors, p.PI_name, 
	p.paper_abstract, 
	p.keywords, 
	p.published_in, 
	p.received_date, 
	p.published_date, 
	p.paper_location,
	p.download_path,
CAST(GROUP_CONCAT(f.figure_caption SEPARATOR ',') AS CHAR) as figure_caption,
CAST(GROUP_CONCAT(t.table_caption SEPARATOR ',') AS CHAR) as table_caption,
CAST(GROUP_CONCAT(DISTINCT CONCAT(COALESCE(f.analysis_tools, ''),',', COALESCE(t.analysis_tools, '')) SEPARATOR ',') AS CHAR) as analysis_tools,
CAST(GROUP_CONCAT(DISTINCT CONCAT(COALESCE(f.LCO_parameter, ''),',', COALESCE(t.LCO_parameter, '')) SEPARATOR ',') AS CHAR) as LCO_parameter,  
CAST(GROUP_CONCAT(DISTINCT CONCAT(COALESCE(f.properties, ''),',', COALESCE(t.properties, '')) SEPARATOR ',') AS CHAR) as properties,
CAST(GROUP_CONCAT(DISTINCT(sd.material) SEPARATOR ',') AS CHAR) as material,  
CAST(GROUP_CONCAT(DISTINCT(sd.simulation_granularity) SEPARATOR ',') AS CHAR) as simulation_granularity,
CAST(GROUP_CONCAT(DISTINCT(if(sd.liquid_cool = 1, 'liquid cooling', '')) SEPARATOR ',') AS CHAR) as liquid_cool,
CAST(GROUP_CONCAT(DISTINCT(if(sd.PVD = 1, 'pvd', '')) SEPARATOR ',') AS CHAR) as PVD,
CAST(GROUP_CONCAT(DISTINCT(sd.CoolingRate) SEPARATOR ',') AS CHAR) as CoolingRate,  
CAST(GROUP_CONCAT(DISTINCT(sd.CRUnit) SEPARATOR ',') AS CHAR) as CRUnit,
CAST(GROUP_CONCAT(DISTINCT(sd.DepositionRate) SEPARATOR ',') AS CHAR) as DepositionRate,  
CAST(GROUP_CONCAT(DISTINCT(sd.DRUnit) SEPARATOR ',') AS CHAR) as DRUnit,
CAST(GROUP_CONCAT(DISTINCT(sd.SubstrateTemp) SEPARATOR ',') AS CHAR) as SubstrateTemp,  
CAST(GROUP_CONCAT(DISTINCT(sd.STUnit) SEPARATOR ',') AS CHAR) as STUnit,
CAST(GROUP_CONCAT(DISTINCT(EquilibrationTemp) SEPARATOR ',') AS CHAR) as EquilibrationTemp,
CAST(GROUP_CONCAT(DISTINCT(sd.storage_location) SEPARATOR ',') AS CHAR) as storage_location
FROM tbl_papers p
LEFT JOIN tbl_paper_figure_map pfm ON pfm.paper_id = p.paper_id
LEFT JOIN tbl_figures f ON f.figure_id = pfm.figure_id
LEFT JOIN tbl_figure_simulationdata_map fsdm ON fsdm.figure_id = f.figure_id

LEFT JOIN tbl_paper_table_map ptm ON ptm.paper_id = p.paper_id
LEFT JOIN tbl_tables t ON t.table_id = ptm.table_id
LEFT JOIN tbl_table_simulationdata_map tsdm ON tsdm.table_id = t.table_id

LEFT JOIN tbl_simulationdata sd ON (sd.simulationdata_id = fsdm.simulationdata_id  OR sd.simulationdata_id = tsdm.simulationdata_id)

GROUP BY (p.paper_id)
 ) temp
EOT;

// Table's primary key
$primaryKey = 'paper_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array( 'db' => 'paper_id', 'dt' => 0, 'field' => 'paper_id' ),
	array( 'db' => 'DOI',   'dt' => 1, 'field' => 'DOI'),
	array( 'db' => 'download_path',   'dt' => 2, 'field' => 'download_path'),
	array( 'db' => 'paper_title',  'dt' => 3, 'field' => 'paper_title' ),
	array( 'db' => 'paper_authors',     'dt' => 4, 'field' => 'paper_authors'),
	array( 'db' => 'PI_name', 'dt' => 5, 'field' => 'PI_name' ),
	array( 'db' => 'paper_abstract',  'dt' => 6, 'field' => 'paper_abstract' ),
	array( 'db' => 'keywords',   'dt' => 7, 'field' => 'keywords'),
	array( 'db' => 'published_in',     'dt' => 8, 'field' => 'published_in'),
	array( 'db' => 'received_date', 'dt' => 9, 'field' => 'received_date' ),
	array( 'db' => 'published_date',  'dt' => 10, 'field' => 'published_date'),
	//, 'formatter' => function( $d, $row ) {return date( 'jS M y', strtotime($d)); } 
	array( 'db' => 'paper_location',   'dt' => 11, 'field' => 'paper_location'),
	array( 'db' => 'figure_caption',     'dt' => 12, 'field' => 'figure_caption'),
	array( 'db' => 'table_caption', 'dt' => 13, 'field' => 'table_caption' ),
	array( 'db' => 'analysis_tools',  'dt' => 14, 'field' => 'analysis_tools' ),	
	array( 'db' => 'LCO_parameter', 'dt' => 15, 'field' => 'LCO_parameter' ),
	array( 'db' => 'properties',  'dt' => 16, 'field' => 'properties' ),
	array( 'db' => 'material',   'dt' => 17, 'field' => 'material'),
	array( 'db' => 'simulation_granularity',     'dt' => 18, 'field' => 'simulation_granularity'),
	array( 'db' => 'liquid_cool', 'dt' => 19, 'field' => 'liquid_cool' ),
	array( 'db' => 'PVD',  'dt' => 20, 'field' => 'PVD' ),
	array( 'db' => 'CoolingRate',   'dt' => 21, 'field' => 'CoolingRate'),
	array( 'db' => 'CRUnit',     'dt' => 22, 'field' => 'CRUnit'),
	array( 'db' => 'DepositionRate', 'dt' => 23, 'field' => 'DepositionRate' ),
	array( 'db' => 'DRUnit',  'dt' => 24, 'field' => 'DRUnit' ),
	array( 'db' => 'SubstrateTemp',   'dt' => 25, 'field' => 'SubstrateTemp'),
	array( 'db' => 'STUnit',     'dt' => 26, 'field' => 'STUnit'),
	array( 'db' => 'EquilibrationTemp',     'dt' => 27, 'field' => 'EquilibrationTemp')	
);

// SQL server connection information
require('config.php');
$sql_details = array(
	'user' => $db_username,
	'pass' => $db_password,
	'db'   => $db_name,
	'host' => $db_host
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );
// require('ssp.customized.class.php' );

// Set variables initial values
$ddsettings = array ();

function debug_to_console($data) {
	if (is_array ( $data ))
			$output = "<script>console.log( 'Debug Objects: " . implode ( ',', $data ) . "' );</script>";
	else
			$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
	echo $output;
}

// Wait for POST event *** SEARCH ***
//array_filter($_GET ['extra_search'], 'mysqli_real_escape_string')
$ddsettings = (isset ( $_GET ['extra_search'] ) ?  $_GET ['extra_search'] : null);
//print_r($ddsettings);

//$ddsettings = explode(',', $ddsettings, -1);
$ddsetcount = count ( $ddsettings );

// *** Display all control data returned ***
	$saga_sql_crit = "";
	if ($ddsetcount > 0) {
		// escape against SQL injection
		//trim
		//$search = array_filter($ddsettings, 'mysqli_real_escape_string');
		//array_map('trim',$ddsettings);
		//$search = array_map($ddsettings, 'real_escape_string');
		//$search = array_map('mysqli_real_escape_string', $ddsettings);
		//$search = array_filter($_GET ['extra_search'] , 'mysqli_real_escape_string');
		// build SQL
		
		$and_parts = array();
		foreach ($ddsettings as $field => $value) {
			if ($value) {
				$or_parts = array();
				foreach ($value as $key => $val) {
					if ($val) {
						$or_parts[] = control_to_field ($field) ." LIKE '%$val%'";
					}
				}
				$and_parts[] = implode(' OR ', $or_parts);
			}
		}
		foreach($and_parts as $i => &$id) {
			$id = "({$id})";
		}
		$saga_sql_crit = implode(' AND ', $and_parts);				
	}

$extraWhere = $saga_sql_crit;

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $extraWhere )
	// SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere )
);
	
// TODO: Come up with Control_to_field to the Temporary Table Column that is UNION of both PIs datas.
// We need to bind the datatables grid but can hide some unimportant fields 
// These hidden fields are important for left naviagation search criteria


function control_to_field($ctrl) {
	switch ($ctrl) {
		case "pi" :
			return "PI_name";
			break;		
		case "pubname" :
			return "published_in";
			break;	
		case "doi":
			return "DOI";
			break;	
		case "title":
			return "paper_title";
			break;	
		default :
			break;
	}
}
