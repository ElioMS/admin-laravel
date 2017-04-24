<?php 
	
return[
	'menu' => [
   		[
            'type' => 'simple',
            'text' => 'Categories',
            'url'  => '',
            'ico'  => 'fa fa-image'
        ],

        [
            'type' => 'simple',
            'text' => 'Galleries',
            'url'  => '',
            'ico'  => 'fa fa-image'
        ],

        [
            'type' => 'simple',
            'text' => 'News',
            'url'  => '',
            'ico'  => 'fa fa-newspaper-o'
        ],

        [
            'type' => 'simple',
            'text' => 'Contact',
            'url'  => '',
            'ico'  => 'fa fa-envelope'
        ],

        [
         'type' => 'tree',
         'text' => 'Productos',
         'ico'  => 'fa fa-shopping-basket',
         'childs' => [
                [
                  'text' => 'Categories',
                  'url' => '',
                  'ico' => 'fa fa-groups'
                ],
                [
                  'text' => 'Subcategories',
                  'url' => '',
                  'ico' => 'fa fa-home'
                ],
                [
                  'text' => 'Products',
                  'url' => '',
                  'ico' => 'fa fa-envelope'
                ],
            ]
        ],
	]
]
?>