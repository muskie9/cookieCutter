<?php

	class CookieCutout extends DataObject{
		
		static $db = array(
			'Name' => 'Varchar',
			'Value' => 'Text',//check if this should be different
			'Expiration' => 'SS_Datetime'
		);
		
		static $has_one = array();
		
		static $has_many = array();
		
		static $many_many = array();
		
		public function getCMSFields() {
		
			// has_many GridField - Projects
		    $gridFieldConfig = GridFieldConfig_RelationEditor::create()->addComponents(
		    	//new GridFieldSortableRows('SortOrder')
		    );

			$fields = new FieldList(
				$rootTab = new TabSet('Root',
					$tabClient = new Tab('CookieCutout',
						new TextField('Name'),
						new TextField('Value'),
						new DateTimeField('Expiration')
					)
				)
				
			);
					
			return $fields;
		}
		
		function canCreate($member=null) {return true;} 
		function canEdit($member=null) {return true;} 
		function canDelete($member=null) {return true;}
		
	}