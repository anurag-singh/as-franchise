<?php
/*
Title: Franchise Details
Post Type: franchise
*/

piklist('field', array(
    'type' => 'group'
    #,'field' => 'franchise_general_details'
    ,'label' => 'Franchise General Details'
    ,'list' => false
    #,'description' => 'A grouped field. Data is not searchable, since it is saved in an array.'
    ,'fields' => array(
      array(
        'type' => 'text'
        ,'field' => 'contact_person'
        ,'label' => 'Contact Person'
        ,'columns' => 12
      )
      ,array(
        'type' => 'text'
        ,'field' => 'franchise_code'
        ,'label' => 'Branch Code'
        ,'columns' => 6
      )

      ,array(
        'type' => 'text'
        ,'field' => 'franchise_address'
        ,'label' => 'Branch Address'
        ,'columns' => 12
      )

      ,array(
        'type' => 'text'
        ,'field' => 'franchise_postal_code'
        ,'label' => 'Postal Code'
        ,'columns' => 5
      )
      ,array(
        'type' => 'text'
        ,'field' => 'franchise_email'
        ,'label' => 'Email'
        #,'template' => 'post_meta'
        ,'columns' => 6
      )
      ,array(
        'type' => 'text'
        ,'field' => 'franchise_phone'
        ,'label' => 'Phone'
        #,'template' => 'post_meta'
        ,'columns' => 6
      )

    )
  ));



piklist('field', array(
    'type' => 'checkbox'
    ,'scope' => 'taxonomy'
    ,'field' => 'segments'
    ,'label' => 'Segments'
    ,'columns' => 12
    ,'choices' => array(
        #'' => 'Choose Segments'
      )
      + piklist(get_terms('segments', array(
        'hide_empty' => false
      ))
      ,array(
        'term_id'
        ,'name'
      )
    )
  ));

piklist('field', array(
    'type' => 'group'
    #,'field' => 'franchise_ex__regis_no'
    #,'add_more' => true
    ,'label' => 'Franchise Exchange Wise Registration No.'
    ,'list' => false
    #,'description' => 'Use'
    ,'fields' => array(
      array(
        'type' => 'text'
        ,'field' => 'nse_cash'
        ,'label' => 'NSE Cash'
        ,'columns' => 3
      )
      ,array(
        'type' => 'text'
        ,'field' => 'bse_cash'
        ,'label' => 'BSE Cash'
        ,'columns' => 3
      )
      ,array(
        'type' => 'text'
        ,'field' => 'nse_cds'
        ,'label' => 'NSE CDS'
        ,'columns' => 3
      )
      ,array(
        'type' => 'text'
        ,'field' => 'mcx'
        ,'label' => 'MCX'
        ,'columns' => 3
      )
      ,array(
        'type' => 'text'
        ,'field' => 'nse_fo'
        ,'label' => 'NSE FO'
        ,'columns' => 3
      )
      ,array(
        'type' => 'text'
        ,'field' => 'bse_fo'
        ,'label' => 'BSE FO'
        ,'columns' => 3
      )
      ,array(
        'type' => 'text'
        ,'field' => 'mcx_sx'
        ,'label' => 'MCX SX'
        ,'columns' => 3
      )
      ,array(
        'type' => 'text'
        ,'field' => 'ncd_ex'
        ,'label' => 'NCDEX'
        ,'columns' => 3
      )

    )
    ,'on_post_status' => array(
        'value' => 'lock'
      )
  )
);

piklist('field', array(
    'type' => 'group'
    #,'field' => 'franchise_other_memb_&_regis'
    #,'add_more' => true
    ,'label' => 'Other Memberships & Registrations'
    ,'list' => false
    #,'description' => 'Use'
    ,'fields' => array(
      array(
        'type' => 'text'
        ,'field' => 'nrn_insu'
        ,'label' => 'NRN, Insurance Agency'
        ,'columns' => 6
      )
      ,array(
        'type' => 'text'
        ,'field' => 'code_ncfm'
        ,'label' => 'Code, NCFM, NISM'
        ,'columns' => 6
      )

    )
    ,'on_post_status' => array(
        'value' => 'lock'
      )
  )
);

piklist('field', array(
    'type' => 'textarea'
    ,'field' => 'franchise_office_permises_details'
    ,'label' => 'Office Permises Details'
    ,'description' => 'Add some general information about the office premises'
    #,'value' => 'Add some general information about the office premises'
    ,'attributes' => array(
      'rows' => 10
      ,'cols' => 50
      ,'class' => 'large-text code'
    )
  ));

piklist('field', array(
    'type' => 'file'
    ,'field' => 'franchise_office_permises_images'
    ,'label' => __('Add Office Permises Image(s)','piklist-demo')
    #,'description' => 'No more than one file is allowed'
    ,'options' => array(
      'modal_title' => __('Add File(s)','piklist-demo')
      ,'button' => __('Add','piklist-demo')
    )
    ,'attributes' => array(
      'class' => 'large-text'
    )
    ,'validate' => array(
      array(
        'type' => 'limit'
        ,'options' => array(
          'min' => 0
          ,'max' => 5
        )
      )
    )
  ));
