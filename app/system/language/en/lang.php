<?php

return [
    'system_name' => 'TastyIgniter',
    'system_powered' => '<a target="_blank" href="http://tastyigniter.com">Powered by TastyIgniter</a>',
    'copyright' => 'Thank you for using <a target="_blank" href="http://tastyigniter.com">TastyIgniter</a>',
    'version' => '<b>Version:</b> %s',

    'no_database' => [
        'label' => 'Database Error Was Encountered',
        'help' => "A database connection is required. Check the database is properly configured and migrated before trying again.",
    ],
    'required' => [
        'config' => "Configuration used in %s must supply a value '%s'.",
    ],
    'not_found' => [
        'model' => "The model ':name' is not found.",
        'layout' => "The layout ':name' is not found.",
        'partial' => "The partial ':name' is not found.",
        'config' => 'Unable to find configuration file %s defined for %s.',
        'class' => "Unable to find '%s' in %s",
        'combiner' => "Unable to find assets '%s'",
    ],
    'missing' => [
        'config_key' => 'Missing required [%s] key in %s',
        'carte_key' => 'No carte key found, click the carte button below to enter one.',
    ],
    'error' => [
    ],

    'activities' => [
        'text_title' => 'Activities',
        'button_mark_as_read' => 'Mark all as read',
        'text_empty' => 'There are no activities available.',
        'activity_self' => 'You',
        'activity_master_logged_in' => ' <b>logged</b> in as <b>:subject.first_name :subject.last_name</b>.',
    ],

    'countries' => [
        'text_title' => 'Countries',
        'text_form_name' => 'Country',
        'text_filter_search' => 'Search name or code.',
        'text_filter_status' => 'View all status',
        'text_empty' => 'There are no countries available.',

        'column_name' => 'Name',
        'column_flag' => 'Flag',
        'column_iso_code2' => 'ISO Code 2',
        'column_iso_code3' => 'ISO Code 3',
        'column_status' => 'Status',

        'label_name' => 'Country',
        'label_priority' => 'Priority',
        'label_flag' => 'Flag',
        'label_format' => 'Format',
        'label_iso_code2' => 'ISO Code 2',
        'label_iso_code3' => 'ISO Code 3',

        'help_format' => 'Address 1 = {address_1}<br />Address 2 = {address_2}<br />City = {city}<br />Postcode = {postcode}<br />State = {state}<br />Country = {country}',
        'help_iso' => 'Learn more about <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO Alpha 2 & 3</a>',
    ],

    'currencies' => [
        'text_title' => 'Currencies',
        'text_form_name' => 'Currency',
        'text_filter_search' => 'Search name or code.',
        'text_filter_status' => 'View all status',
        'text_empty' => 'There are no currencies available.',
        'text_right' => 'Right',
        'text_left' => 'Left',

        'column_name' => 'Name',
        'column_code' => 'Code',
        'column_country' => 'Country',
        'column_symbol' => 'Symbol',
        'column_rate' => 'Rate',
        'column_status' => 'Status',

        'label_title' => 'Title',
        'label_code' => 'Code',
        'label_country' => 'Country',
        'label_symbol' => 'Symbol',
        'label_symbol_position' => 'Symbol Position',
        'label_rate' => 'Rate',
        'label_thousand_sign' => 'Thousand Sign',
        'label_decimal_sign' => 'Decimal Sign',
        'label_decimal_position' => 'Decimal Place',

        'help_iso' => 'Learn more about <a target="_blank" href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>',
    ],

    'error_logs' => [
        'text_title' => 'Error Logs',
        'text_heading' => 'Error Logs',
        'text_clear_logs' => 'Clear Logs',
    ],

    'extensions' => [
        'text_title' => 'Extensions',
        'text_add_title' => 'Extension: Upload',
        'text_delete_title' => 'Extension: Delete',
        'text_filter_search' => 'Search name.',
        'text_filter_status' => 'View all status',
        'text_empty' => 'There are no extensions available.',
        'text_installed' => 'Installed',
        'text_uninstalled' => 'Uninstalled',
        'text_upload_title' => 'Upload the extension .zip file and it will be installed automatically.',
        'text_browse_title' => 'Freshly baked from the oven...coming soon  <i class="fa fa-smile-o"></i>',
        'text_files' => 'files',
        'text_files_data' => 'files and data',
        'text_settings' => 'Settings',

        'button_new' => '<i class="fa fa-upload"></i>  Upload',
        'button_upload' => 'Upload & Install',
        'button_choose' => 'Choose',
        'button_browse' => '<i class="fa fa-globe"></i>  Browse more extensions',
        'button_check' => '<i class="fa fa-refresh"></i>  Updates',
        'button_change' => 'Change',
        'button_delete' => 'Delete',
        'button_payments' => 'Manage Payments',
        'button_settings' => 'Manage Settings',
        'button_yes_delete' => 'Yes, delete',
        'button_return_to_list' => 'No, return to list',

        'column_name' => 'Name',
        'column_icon' => 'Icon',
        'column_version' => 'Version',

        'label_delete_data' => 'Delete Data',

        'error_config_no_found' => 'An error occurred, extension registration file could not be found',
        'error_upload_type' => 'The filetype you are attempting to upload is not allowed.',
        'error_upload_name' => 'The extension name must not contain whitespace or spacing, use hyphens(-) instead..',
        'error_extension_exists' => 'the extension already exists',
        'error_php_upload' => 'PHP File Uploading Error No: %s',

        'alert_info_layouts' => '<b>Layout & Page component(s) registered</b>',
        'alert_warning_layouts' => 'To display the component for this extension on a page add it to a layout <a href="%s" class="alert-link">here!</a>',
        'alert_delete_warning' => 'You are about to delete the %s of extension <b>%s</b>',
        'alert_delete_confirm' => 'Are you sure you wish to delete these %s? This cannot be undone!',
        'alert_is_installed' => '. You must uninstall an extension before deleting.',
        'alert_setting_missing_id' => 'Extension setting code has not been specified.',
        'alert_setting_not_found' => 'Extension settings was not found.',
        'alert_setting_model_missing' => 'Missing settings model.',
        'alert_setting_model_not_found' => 'Extension settings model [%s] was not found.',
    ],

    'languages' => [
        'text_title' => 'Languages',
        'text_form_name' => 'Language',
        'text_tab_general' => 'Details',
        'text_tab_files' => 'Translations',
        'text_tab_edit_file' => 'Edit Translations',
        'text_filter_search' => 'Search name.',
        'text_filter_status' => 'View all status',
        'text_empty' => 'There are no languages available.',
        'text_files' => 'files',

        'column_name' => 'Name',
        'column_code' => 'Code',
        'column_status' => 'Status',
        'column_variable' => 'Variable',
        'column_language' => 'Translation',

        'label_name' => 'Name',
        'label_code' => 'Language Code',
        'label_image' => 'Icon',
        'label_idiom' => 'Idiom',
        'label_can_delete' => 'Can Delete',

        'button_new' => 'New Group',

        'help_idiom' => 'Language idiom, must be same as the language directory name.',
        'help_language' => 'Language url prefix',

        'alert_save_changes' => 'Your changes will be lost if you don\'t save them before editing another language file.',
    ],

    'mail_templates' => [
        'text_title' => 'Mail Layouts',
        'text_template_title' => 'Mail Templates',
        'text_new_template_title' => 'Mail Layout Template: New',
        'text_edit_template_title' => 'Mail Layout Template: Update',
        'text_preview_template_title' => 'Mail Layout Template: Preview',
        'text_form_name' => 'Mail Layout',
        'text_templates' => 'Templates',
        'text_layouts' => 'Layouts',
        'text_empty' => 'There are no mail templates available.',
        'text_variables' => 'Variables',
        'text_registration' => 'Registration email to customer',
        'text_password_reset_request' => 'Password reset request email to customer',
        'text_password_reset_request_alert' => 'Password reset request email to admin',
        'text_password_reset' => 'Password reset email to customer',
        'text_password_reset_alert' => 'Password reset email to admin',
        'text_order' => 'Order email to customer',
        'text_reservation' => 'Reservation email to customer',
        'text_internal' => 'Internal Message',
        'text_contact' => 'Contact email to admin',
        'text_registration_alert' => 'Registration alert email to admin',
        'text_order_alert' => 'Order alert email to admin',
        'text_reservation_alert' => 'Reservation alert to admin',
        'text_order_update' => 'Order status update email to customer',
        'text_reservation_update' => 'Reservation status update email to admin',

        'button_test_message' => 'Send test message',

        'column_name' => 'Name',
        'column_code' => 'Code',
        'column_title' => 'Title',
        'column_layout' => 'Layout',
        'column_date_added' => 'Date Added',
        'column_date_updated' => 'Date Updated',
        'column_status' => 'Status',

        'label_name' => 'Name',
        'label_description' => 'Description',
        'label_language' => 'Language',
        'label_code' => 'Code',
        'label_subject' => 'Subject',
        'label_layout' => 'Layout',
        'label_layout_css' => 'Layout CSS',
        'label_body' => 'HTML Body',
        'label_plain_body' => 'Body Plain Text',
        'label_plain_layout' => 'Plain Text',

        'alert_test_message_sent' => 'Test message successfully sent to %s',
    ],

    'messages' => [
        'text_title' => 'Messages',
        'text_create_title' => 'Message: Compose',
        'text_view_title' => 'Message: View',
        'text_draft_title' => 'Message: Draft',
        'text_form_name' => 'Message',
        'text_filter_search' => 'Search subject.',
        'text_filter_type' => 'View all send type',
        'text_filter_unread' => 'View unread messages',
        'text_empty' => 'No messages found in this folder.',
        'text_no_recipient' => 'No recipients found.',
        'text_email' => 'Email',
        'text_account' => 'Account',
        'text_inbox' => 'Inbox',
        'text_draft' => 'Draft',
        'text_sent' => 'Sent',
        'text_all' => 'All',
        'text_view' => 'View',
        'text_archive' => 'Archive',
        'text_all_newsletters' => 'All Newsletter Subscribers',
        'text_all_customers' => 'All Customers',
        'text_customer_group' => 'Customer Group',
        'text_customers' => 'Customers',
        'text_all_staff' => 'All Staff',
        'text_staff_group' => 'Staff Group',
        'text_staff' => 'Staff',
        'text_folders' => 'Folders',
        'text_labels' => 'Labels/Types',
        'text_move_to_inbox' => 'Restore',
        'text_move_to_archive' => 'Move to Archive',
        'text_move_to_trash' => 'Move to Trash',
        'text_refresh' => 'Refresh',
        'text_mark_as_read' => 'Mark as read',
        'text_mark_as_unread' => 'Mark as unread',
        'text_compose_message' => 'Compose New Message',
        'text_view_message' => 'View Message',
        'text_read' => 'Read',
        'text_unread' => 'Unread',

        'button_compose' => '+ Compose',
        'button_send' => 'Send',
        'button_save_draft' => 'Save as Draft',
        'button_respond' => '<i class="fa fa-reply"></i> Respond',
        'button_respond_close' => '<i class="fa fa-reply"></i> Respond & Close',

        'column_sent' => 'Sent',
        'column_read' => 'Read',
        'column_deleted' => 'Deleted',

        'label_to' => 'To',
        'label_from' => 'From',
        'label_date' => 'Date',
        'label_subject' => 'Subject',
        'label_body' => 'Body',
        'label_customer_group' => 'Customer Group',
        'label_staff_group' => 'Staff Group',
        'label_customers' => 'Customers',
        'label_staff' => 'Staff',
        'label_layout' => 'Use Mail Layout',
        'label_send_type' => 'Send Type',

        'alert_mark_as_unread' => 'has been marked as unread.',
        'alert_mark_as_read' => 'has been marked as read.',
        'alert_move_to_inbox' => 'has been restored.',
        'alert_move_to_archive' => 'has been moved to archive.',
        'alert_move_to_trash' => 'has been deleted.',
        'alert_saved_to_draft' => 'saved to draft',
        'alert_success_sent' => 'sent',
        'alert_warning_draft' => 'You can not open a sent message as draft',
        'alert_warning_confirm_undo' => 'Are you sure you want to do this? This can not be undone!',
    ],

    'permissions' => [
        'text_title' => 'Permissions',
        'text_form_name' => 'Permission',
        'text_empty' => 'There are no permissions available.',
        'text_filter_search' => 'Search permission name.',
        'text_filter_status' => 'View all status',
        'text_access' => 'Access',
        'text_manage' => 'Manage',
        'text_add' => 'Add',
        'text_delete' => 'Delete',

        'column_name' => 'Name',
        'column_actions' => 'Available Actions',
        'column_description' => 'Description',
        'column_status' => 'Status',
        'column_id' => 'ID',

        'label_name' => 'Name',
        'label_description' => 'Description',
        'label_action' => 'Action',

        'help_name' => 'Permissions name are made up of (Domain.Context):<br />Domain  - Typically the application domain name (e.g. Admin, Site, Extension, Module, Payment).<br />Context - The controller class name (e.g. Menus, Orders, Locations, or Settings).',
        'help_action' => 'The permitted action (Access, Manage, Add, Delete)',

        'error_invalid_name' => 'Invalid permission name, must match Domain.Context',
    ],

    'settings' => [
        'text_title' => 'Settings',
        'text_edit_title' => 'Settings: %s',
        'text_tab_general' => 'General',
        'text_tab_user' => 'User',
        'text_tab_restaurant' => 'Restaurant',
        'text_tab_setup' => 'Order & Reservation',
        'text_tab_media_manager' => 'Media',
        'text_tab_mail' => 'Mail',
        'text_tab_server' => 'Advanced',

        'text_tab_desc_general' => 'Change your restaurant name, email and url, default language, currency and date time formats, ...',
        'text_tab_desc_setup' => 'Manage order and reservation related settings',
        'text_tab_desc_user' => 'Manage registration email confirmation, default customer group, ...',
        'text_tab_desc_media_manager' => 'Manage media uploads, copy, rename settings.',
        'text_tab_desc_mail' => 'Settings for sending out emails',
        'text_tab_desc_server' => 'Manage advanced system settings such as enabling/disabling maintenance.',

        'text_tab_site' => 'Site',
        'text_tab_title_maps' => 'Geolocation',
        'text_tab_title_date_time' => 'Date/Time',
        'text_tab_title_currency' => 'Currency',
        'text_tab_title_language' => 'Language',
        'text_tab_title_reviews' => 'Reviews',
        'text_tab_title_taxation' => 'Taxation',
        'text_tab_title_invoice' => 'Invoicing',
        'text_tab_title_order' => 'Order',
        'text_tab_title_reservation' => 'Reservation',
        'text_tab_title_maintenance' => 'Maintenance',
        'text_tab_title_permalink' => 'Permalink',
        'text_tab_title_caching' => 'Caching',
        'text_single' => 'Single',
        'text_multiple' => 'Multiple',
        'text_24_hour' => '24 Hours',
        'text_3_days' => '3 Days',
        'text_5_days' => '5 Days',
        'text_1_week' => '1 Week',
        'text_auto' => 'Automatically',
        'text_manual' => 'Manually',
        'text_miles' => 'Miles',
        'text_kilometers' => 'Kilometers',
        'text_chain_geocoder' => 'Chain (Recommended)',
        'text_google_geocoder' => 'Google Geocoding',
        'text_nominatim' => 'OpenStreetMap\'s Nominatim',
        'text_plain' => 'Plain Text',
        'text_html' => 'HTML',
        'text_sendmail' => 'SENDMAIL',
        'text_smtp' => 'SMTP',
        'text_to_customer' => 'To customer',
        'text_to_admin' => 'To restaurant',
        'text_to_location' => 'To location',
        'text_send_test_email' => 'Sent Test Email',
        'text_internal_sequence_prefix' => 'Prefix plus Internal numbering sequence',
        'text_menu_price_include_tax' => 'Menu prices already include tax',
        'text_apply_tax_on_menu_price' => 'Apply tax on top of my menu price',

        'label_site_name' => 'Restaurant Name',
        'label_site_email' => 'Restaurant Email',
        'label_site_url' => 'Restaurant URL',
        'label_site_logo' => 'Restaurant Logo',
        'label_timezone' => 'Default Timezone',
        'label_date_format' => 'Date Format',
        'label_time_format' => 'Time Format',
        'label_site_currency' => 'Default Currency',
        'label_accepted_currency' => 'Accepted Currency',
        'label_detect_language' => 'Detect Browser Language',
        'label_site_language' => 'Default Language',
        'label_customer_group' => 'Customer Group',
        'label_meta_description' => 'Meta Description',
        'label_meta_keyword' => 'Meta Keywords',
        'label_site_location_mode' => 'Location Mode',
        'label_country' => 'Country',
        'label_maps_api_key' => 'Google Maps API Key',
        'label_distance_unit' => 'Distance Unit',
        'label_default_geocoder' => 'Default Geocoder',
        'label_tax_mode' => 'Tax Mode',
        'label_tax_title' => 'Tax Title',
        'label_tax_percentage' => 'Tax Percentage',
        'label_tax_menu_price' => 'Tax Menu Price',
        'label_tax_delivery_charge' => 'Tax Delivery Charge',
        'label_allow_reviews' => 'Allow Reviews',
        'label_approve_reviews' => 'Approve Reviews',
        'label_default_order_status' => 'Default Order Status',
        'label_processing_order_status' => 'Processing Order Status',
        'label_completed_order_status' => 'Completed Order Status',
        'label_canceled_order_status' => 'Cancellation Order Status',
        'label_guest_order' => 'Allow Guest Order',
        'label_location_order' => 'Require Location To Order',
        'label_future_order' => 'Accept Future Orders',
        'label_auto_invoicing' => 'Generate Invoice',
        'label_invoice_prefix' => 'Invoice Prefix',
        'label_default_reservation_status' => 'Default Reservation Status',
        'label_confirmed_reservation_status' => 'Confirmed Reservation Status',
        'label_canceled_reservation_status' => 'Canceled Reservation Status',
        'label_media_max_size' => 'Maximum File Size',
        'label_media_thumb_height' => 'Thumbnail Height',
        'label_media_thumb_width' => 'Thumbnail Width',
        'label_media_uploads' => 'Uploads',
        'label_media_new_folder' => 'New Folder',
        'label_media_copy' => 'Copy',
        'label_media_move' => 'Move',
        'label_media_rename' => 'Rename',
        'label_media_delete' => 'Delete',
        'label_media_transliteration' => 'Transliteration',
        'label_allow_registration' => 'Allow customer registration',
        'label_registration_email' => 'Send Registration Email',
        'label_order_email' => 'Send Order Confirmation/Alert Email',
        'label_reservation_email' => 'Send Reservation Confirmation/Alert Email',
        'label_sender_name' => 'Sender Name',
        'label_sender_email' => 'Sender Email',
        'label_protocol' => 'Mail Protocol',
        'label_smtp_host' => 'SMTP Host',
        'label_smtp_port' => 'SMTP Port',
        'label_smtp_user' => 'SMTP Username',
        'label_smtp_pass' => 'SMTP Password',
        'label_test_email' => 'Test Email',
        'label_permalink' => 'Permalink',
        'label_maintenance_mode' => 'Maintenance Mode',
        'label_maintenance_message' => 'Maintenance Message',
        'label_cache_mode' => 'Cache Mode',
        'label_cache_time' => 'Cache Time',

        'alert_email_sending' => 'Sending email...',
        'alert_email_sent' => 'Email sent to %s',
        'alert_settings_missing_model' => 'Missing defined model %s.',
        'alert_settings_not_found' => 'Settings %s not found.',
        'alert_settings_errors' => 'Click to fix the missing required setting items.',
        'alert_delete_setup_files' => '<b>SECURITY WARNING!</b> Delete the setup files to stop someone else from overwriting your site.',

        'help_timezone' => 'The default timezone. Choose a city in the same timezone as your restaurant.',
        'help_site_location_mode' => 'Set whether to enable support for single or multiple restaurant locations.',
        'help_detect_language' => 'Enable or disable user browser language detection. If enabled your site will be translated to the browser language.',
        'help_maps_api_key' => 'An API Key is required to use Google Maps and/or Geocoding. <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key">Where can I find my Google Maps API Key?</a>',
        'help_default_geocoder' => 'Tell the system which geocoder service to use when geocoding addresses. \'Chain\' is a special geocoder that runs both google and open street maps geocoder and stops once it gets a valid response.',
        'help_accepted_currency' => 'Select all currencies that you accept as payment as well as your default currency',
        'help_special_category' => 'Select which category to use automatically for special menus',
        'help_tax_mode' => 'Set whether to enable or disable calculating tax in storefront',
        'help_tax_title' => 'Enter the tax title as it should be displayed on storefront. Ex. VAT',
        'help_tax_percentage' => 'Enter the percentage to calculate taxes. Ex. 15',
        'help_tax_menu_price' => 'Set whether menu price already include taxes or taxes should be calculated on menu price',
        'help_tax_delivery_charge' => 'Set whether delivery charge is taxable',
        'help_allow_reviews' => 'Enable or disable new customer review entry and display of reviews on storefront',
        'help_approve_reviews' => 'Approve new review entry automatically or manually',
        'help_default_location' => 'Choose or add a new location to set as your main/default restaurant location.',
        'help_default_order_status' => 'Select the default order status when a new order is placed/received',
        'help_processing_order_status' => 'Select the order status an order must reach before the order starts stock reduction and coupon redemption',
        'help_completed_order_status' => 'Select the order status to mark an order as completed before the order invoice is created and a customer can leave review',
        'help_canceled_order_status' => 'Select the order status when an order is marked as canceled or suspected of fraudulent activity',
        'help_guest_order' => 'Allow customer to place an order without creating an account.',
        'help_location_order' => 'Set whether customer MUST enter their postcode/address before they can place a delivery order. If disabled, the customer will be allowed to order without entering their postcode/adddress.',
        'help_future_order' => 'Allow customer to place order for later when restaurant is closed for delivery or pick-up during opening hours. This setting affects all locations',
        'help_auto_invoicing' => 'Automatically generate invoice as soon as an order is marked as completed or manually by clicking the generate invoice button.',
        'help_invoice_prefix' => 'Set the invoice prefix (e.g. <b>INV-2015-00</b>1123). Leave blank to use no prefix. The following macros are available: {year} {month} {day} {hour} {minute} {second}',
        'help_default_reservation_status' => 'Select the default reservation status when new reservation received',
        'help_canceled_reservation_status' => 'Select the reservation status when a reservation is marked as canceled or suspected of fraudulent activity',
        'help_confirmed_reservation_status' => 'Select the reservation status to mark a reservation as confirmed before table is reserved',
        'help_delete_thumbs' => 'This will delete all created thumbs. Note thumbs are automatically created.',
        'help_media_max_size' => 'The maximum size (in kilobytes) limit for file when uploading.',
        'help_media_upload' => 'Enable or disable file uploading',
        'help_media_new_folder' => 'Enable or disable folder creation',
        'help_media_copy' => 'Enable or disable file/folder copy',
        'help_media_move' => 'Enable or disable moving file/folder',
        'help_media_rename' => 'Enable or disable file/folder rename',
        'help_media_delete' => 'Enable or disable deleting file/folder',
        'help_allow_registration' => 'If this is disabled customers can only be created by administrators.',
        'help_registration_email' => 'Send a confirmation mail to the customer and/or admin email after successfully account registration',
        'help_order_email' => 'Send a confirmation mail to the customer, admin and/or location email after a new order has been created',
        'help_reservation_email' => 'Send a confirmation mail to the customer, admin and/or location email when a new reservation is received',
        'help_maintenance' => 'Enable to prevent customers from viewing your store. The maintenance message will be displayed to customers except logged admin.',
        'help_permalink' => 'To use SEO URLs, apache module mod-rewrite must be installed.',
        'help_cache_mode' => 'Enable if you want to cache pages in order to achieve maximum performance.',
        'help_cache_time' => 'Set the number of minutes a page remain cached.',
    ],

    'themes' => [
        'text_title' => 'Themes',
        'text_edit_title' => 'Theme: Customize',
        'text_source_title' => 'Theme: Source',
        'text_add_title' => 'Theme: Upload',
        'text_delete_title' => 'Theme: Delete',
        'text_new_source_title' => 'Create Source',
        'text_rename_source_title' => 'Rename Source',
        'text_form_name' => 'Theme',
        'text_tab_customize' => 'Customize',
        'text_tab_markup' => 'Markup',
        'text_tab_php_section' => 'PHP Section',
        'text_tab_meta' => 'Meta',
        'text_tab_components' => 'Components',
        'text_filter_search' => 'Search theme name, description',
        'text_filter_status' => 'View all status',
        'text_upload_title' => 'Upload the theme .zip file.',
        'text_empty' => 'There are no themes available.',
        'text_select_file' => 'Select a page/layout/partial/content to edit',
        'text_is_default' => 'Activated',
        'text_set_default' => 'Activate',
        'text_author' => 'Author',
        'text_version' => 'Version',
        'text_theme_is_active' => '. You can not delete an active theme.',
        'text_files' => 'files',
        'text_files_data' => 'files and data',

        'column_name' => 'Name',

        'label_name' => 'Name',
        'label_code' => 'Code',
        'label_file' => 'Source',
        'label_title' => 'Title',
        'label_description' => 'Description',
        'label_layout' => 'Layout',
        'label_permalink' => 'Permalink',
        'label_component_alias' => 'Component Alias',
        'label_component_status' => 'Component Status',
        'label_delete_data' => 'Delete Data',
        'label_copy_data' => 'Copy Data',

        'button_new' => '<i class="fa fa-upload"></i>  Upload',
        'button_upload' => 'Upload & Install',
        'button_browse' => '<i class="fa fa-globe"></i>  Browse more Themes',
        'button_build' => '<i class="fa fa-gears"></i>  Build Assets Bundle',
        'button_source' => '<i class="fa fa-pencil"></i>  Edit Source',
        'button_customize' => '<i class="fa fa-paint-brush"></i>  Customize',
        'button_new_source' => 'New Source',
        'button_rename_source' => 'Rename Source',
        'button_choose' => 'Choose',
        'button_change' => 'Change',
        'button_delete' => 'Delete',
        'button_yes_delete' => 'Yes, delete',
        'button_yes_copy' => 'Yes, copy',
        'button_return_to_list' => 'No, return to list',

        'help_components' => 'Render the component on a layout or page by adding [<code>&#x3C;?= component(&#x27;componentAlias&#x27;); ?&#x3E;</code>] to the markup',

        'error_config_no_found' => 'An error occurred, theme registration file could not be found',
        'error_file_not_supported' => 'Selected file is not supported',
        'error_upload_name' => 'The theme name must not contain whitespace or spacing, use hyphens(-) instead..',
        'error_upload_type' => 'The filetype you are attempting to upload is not allowed.',
        'error_php_upload' => 'PHP File Uploading Error No: %s',
        'error_theme_exists' => 'the theme already exists',

        'alert_delete_warning' => 'You are about to delete the %s of theme <b>%s</b>',
        'alert_delete_confirm' => 'Are you sure you wish to delete these %s? This cannot be undone!',
        'alert_copy_warning' => 'You are about to create a copy of the following %s from theme <b>%s</b>',
        'alert_copy_confirm' => 'Are you sure you wish to copy these %s?',
        'alert_changes_confirm' => 'Conflicting versions, source file has changed. Save to overwrite or cancel to keep external changes',
    ],

    'updates' => [
        'text_title' => 'Updates',
        'text_browse_title' => 'Browse %s',

        'text_title_carte' => 'Your Carté',

        'text_tab_title_extensions' => 'Extensions',
        'text_tab_title_themes' => 'Themes',
        'text_ignore' => 'Ignore',
        'text_search' => 'Search the marketplace for %s to install',
        'text_popular_title' => 'Popular %s',
        'text_last_checked' => '<b>Last checked:</b> %s',

        'text_no_updates' => 'No updates available.',

        'text_update_found' => '%s update(s) found',
        'text_update_ignored' => '%s update(s) ignored',
        'text_item_update_summary' => 'Update from version %s to <b>%s</b>',

        'text_maintenance_mode' => 'While your site is being updated, maintenance mode will be enabled then disabled as soon as your updates are complete.',

        'progress_download' => '<i class="fa fa-cloud-download fa-fw"></i>&nbsp;&nbsp;&nbsp;Downloading %s&#8230;',
        'progress_extract' => '<i class="fa fa-file-archive-o fa-fw"></i>&nbsp;&nbsp;&nbsp;Extracting %s&#8230;',
        'progress_complete' => '<i class="fa fa-download fa-fw"></i>&nbsp;&nbsp;&nbsp;Finishing installation&#8230;',

        'label_meta_code' => 'Meta Code',
        'label_meta_type' => 'Meta Type',
        'label_meta_version' => 'Meta Version',
        'label_meta_hash' => 'Meta Hash',
        'label_meta_description' => 'Meta Description',
        'label_meta_step' => 'Meta Step',
        'label_meta_action' => 'Meta Action',
        'label_meta_items' => 'Meta Items',

        'progress_success' => '<i class="fa fa-check fa-fw"></i>&nbsp;&nbsp;&nbsp;Finished %s %s successfully.&#8230;',
        'progress_update' => '<strong id="progress-updating">Updating %s&#8230;</strong>',
        'progress_enable_maintenance' => 'Enabling Maintenance mode&#8230;',
        'progress_disable_maintenance' => 'Restoring/Disabling Maintenance mode&#8230;',

        'button_browse' => '<i class="fa fa-globe"></i> Browse %s',
        'button_carte' => '<i class="fa fa-key"></i> Carté',
        'button_check' => '<i class="fa fa-refresh"></i> Force Updates',
        'button_updates' => '<i class="fa fa-refresh"></i> Updates',
        'button_update' => '<i class="fa fa-check"></i> Update Available',

        'help_carte_key' => 'A Carte key is required to add/update item from the TastyIgniter Marketplace. Get one by creating a site from your <a href="%s" target="_blank">TastyIgniter Account</a>, if you haven\'t already.',
    ],
];