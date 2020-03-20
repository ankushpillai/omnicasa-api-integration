<?php 
		$fields = '';
		$login = "'CustomerName':'demo','CustomerPassword':'demo2013',";
		//$not_sold = 'MarqueeIDs':'1,2';
		$limit  = ""; // for all properties send this empty

		//$limit  = "'IDs':'3818',"; //for single property 
		//$limit  = "'Limit1':0, 'Limit2':50,"; //linit from 0 to 50 
		$param = "{". $limit . $login . $fields ."'LanguageId':1,'DescriptionLanguageId':1}";
		
		$param = urlencode($param);
		$data = json_decode( file_get_contents( 'http://newapi.omnicasa.com/1.8/OmnicasaService.svc/'.'GetPropertyListJson?json='.$param ) );



		
