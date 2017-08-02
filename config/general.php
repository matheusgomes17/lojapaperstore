<?php

return [

	/**
	 * 
	 */
	'sliders_table' => 'sliders',

	/**
	 * 
	 */
	'contacts_table' => 'contacts',

    /*
     * Contact model used by General to create correct relations.
     * Update the product if it is in a different namespace.
    */
    'contact' => Snaketec\Models\General\Contact\Contact::class,

	/**
	 * 
	 */
	'contacts_answers_table' => 'contacts_answers',

    /*
     * Ansewr model used by General to create correct relations.
     * Update the product if it is in a different namespace.
    */
    'answer' => Snaketec\Models\General\Contact\Answer::class,

	/**
	 * 
	 */
	'images_table' => 'attacher_images',
];