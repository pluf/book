<?php
return array(
        'Book_Page' => array(
                'relate_to' => array(
                        'Book_Book',
                        'User'
                ),
                'relate_to_many' => array()
        ),
        'Book_Book' => array(
                'relate_to' => array(
                        'User'
                ),
                'relate_to_many' => array()
        )
);
