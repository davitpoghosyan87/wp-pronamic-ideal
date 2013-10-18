<?php

/**
 * Title: iDEAL directory request XML message
 * Description: 
 * Copyright: Copyright (c) 2005 - 2011
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0
 */
class Pronamic_Gateways_PayDutch_XML_RetrieveBankListRequestMessage extends Pronamic_Gateways_PayDutch_XML_RequestMessage {
	const TYPE = 'retrievebanklist';	
	
	//////////////////////////////////////////////////

	/**
	 * Constructs and initialize a directory request message
	 */
	public function __construct() {
		parent::__construct( self::TYPE );
	}

	//////////////////////////////////////////////////

	/**
	 * Get document
	 * 
	 * @see Pronamic_Gateways_IDealAdvanced_XML_RequestMessage::getDocument()
	 */
	public function get_document() {
		$document = parent::get_document();

		// Retrieve Bank List
		$element = self::add_element( $document, $document->documentElement, 'retrievebanklist' );
		self::add_elements( $document, $element, array(
			'methodcode' => Pronamic_Gateways_PayDutch_Methods::WEDEAL,
			'test'       => Pronamic_WordPress_Util::to_string_boolean( true )
		) );

		// Return
		return $document;
	}
}
