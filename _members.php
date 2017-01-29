<?php 

// MEMBERS 
  add_theme_support( 'after_setup_theme', 'setup_data_structures' );{
    if(! class_exists('Super_Custom_Post_Type'))
      return;
        
        $member = new Super_Custom_Post_Type( 'member' );
        $member->set_icon('group');

         $member->add_meta_box( array(
        'id'      => 'Member Info',
        'context' => 'side',
          'fields'  => array(
            'name'=> array(),
            'title'=> array(),
            'phone'=> array(),
            'email'=> array(),
            
            'department'=> array( 'type' => 'select',   'options' => array( 1 => 'Clinical', 2 => 'Reception', 3 => 'Accounts' ),'multiple' => 'multiple' ),
            'office'=> array( 'type' => 'select',   'options' => array( 1 => 'So. Burlington', 2 => 'Shelburne' ),'multiple' => 'multiple' ),
            )
      ) );

  }

?>