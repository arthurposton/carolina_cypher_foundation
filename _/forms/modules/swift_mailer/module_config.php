<?php



$STRUCTURE = array();

$STRUCTURE["tables"] = array();

$STRUCTURE["tables"]["module_swift_mailer_email_template_fields"] = array(

  array(

    "Field"   => "email_template_id",

    "Type"    => "mediumint(9)",

    "Null"    => "NO",

    "Key"     => "PRI",

    "Default" => ""

  ),

  array(

    "Field"   => "return_path",

    "Type"    => "varchar(255)",

    "Null"    => "NO",

    "Key"     => "",

    "Default" => ""

  )

);



$HOOKS = array(

  array(

    "hook_type"       => "template",

    "action_location" => "edit_template_tab2",

    "function_name"   => "",

    "hook_function"   => "swift_display_extra_fields_tab2",

    "priority"        => "50"

  ),

  array(

    "hook_type"       => "code",

    "action_location" => "end",

    "function_name"   => "ft_create_blank_email_template",

    "hook_function"   => "swift_map_email_template_field",

    "priority"        => "50"

  ),

  array(

    "hook_type"       => "code",

    "action_location" => "end",

    "function_name"   => "ft_delete_email_template",

    "hook_function"   => "swift_delete_email_template_field",

    "priority"        => "50"

  ),

  array(

    "hook_type"       => "code",

    "action_location" => "end",

    "function_name"   => "ft_update_email_template",

    "hook_function"   => "swift_update_email_template_append_extra_fields",

    "priority"        => "50"

  ),

  array(

    "hook_type"       => "code",

    "action_location" => "end",

    "function_name"   => "ft_get_email_template",

    "hook_function"   => "swift_get_email_template_append_extra_fields",

    "priority"        => "50"

  )

);



$FILES = array(

  "actions.php",

  "database_integrity.php",

  "help.php",

  "images/",

  "images/icon_swift_mailer.gif",

  "index.php",

  "lang/",

  "lang/en_us.php",

  "library.php",

  "module.php",

  "module_config.php",

  "php4/",

  "php4/EasySwift.php",

  "php4/Swift/",

  "php4/Swift/Address.php",

  "php4/Swift/AddressContainer.php",

  "php4/Swift/Authenticator/",

  "php4/Swift/Authenticator/@PopB4Smtp.php",

  "php4/Swift/Authenticator/CRAMMD5.php",

  "php4/Swift/Authenticator/LOGIN.php",

  "php4/Swift/Authenticator/PLAIN.php",

  "php4/Swift/Authenticator/PopB4Smtp/",

  "php4/Swift/Authenticator/PopB4Smtp/Pop3Connection.php",

  "php4/Swift/Authenticator.php",

  "php4/Swift/BadResponseException.php",

  "php4/Swift/BatchMailer.php",

  "php4/Swift/Cache/",

  "php4/Swift/Cache/Disk.php",

  "php4/Swift/Cache/JointOutputStream.php",

  "php4/Swift/Cache/Memory.php",

  "php4/Swift/Cache/OutputStream.php",

  "php4/Swift/Cache.php",

  "php4/Swift/CacheFactory.php",

  "php4/Swift/ClassLoader.php",

  "php4/Swift/Connection/",

  "php4/Swift/Connection/Multi.php",

  "php4/Swift/Connection/NativeMail.php",

  "php4/Swift/Connection/Rotator.php",

  "php4/Swift/Connection/SMTP.php",

  "php4/Swift/Connection/Sendmail.php",

  "php4/Swift/Connection.php",

  "php4/Swift/ConnectionBase.php",

  "php4/Swift/ConnectionException.php",

  "php4/Swift/Errors.php",

  "php4/Swift/Events/",

  "php4/Swift/Events/CommandEvent.php",

  "php4/Swift/Events/ConnectEvent.php",

  "php4/Swift/Events/DisconnectEvent.php",

  "php4/Swift/Events/Listener.php",

  "php4/Swift/Events/ListenerMapper.php",

  "php4/Swift/Events/ResponseEvent.php",

  "php4/Swift/Events/SendEvent.php",

  "php4/Swift/Events.php",

  "php4/Swift/Exception.php",

  "php4/Swift/File.php",

  "php4/Swift/FileException.php",

  "php4/Swift/Iterator/",

  "php4/Swift/Iterator/Array.php",

  "php4/Swift/Iterator/MySQLResult.php",

  "php4/Swift/Log/",

  "php4/Swift/Log/DefaultLog.php",

  "php4/Swift/Log.php",

  "php4/Swift/LogContainer.php",

  "php4/Swift/Message/",

  "php4/Swift/Message/Attachment.php",

  "php4/Swift/Message/EmbeddedFile.php",

  "php4/Swift/Message/Encoder.php",

  "php4/Swift/Message/Headers.php",

  "php4/Swift/Message/Image.php",

  "php4/Swift/Message/Mime.php",

  "php4/Swift/Message/MimeException.php",

  "php4/Swift/Message/Part.php",

  "php4/Swift/Message.php",

  "php4/Swift/Plugin/",

  "php4/Swift/Plugin/AntiFlood.php",

  "php4/Swift/Plugin/BandwidthMonitor.php",

  "php4/Swift/Plugin/ConnectionRotator.php",

  "php4/Swift/Plugin/Decorator/",

  "php4/Swift/Plugin/Decorator/Replacements.php",

  "php4/Swift/Plugin/Decorator.php",

  "php4/Swift/Plugin/EasySwiftResponseTracker.php",

  "php4/Swift/Plugin/FileEmbedder.php",

  "php4/Swift/Plugin/MailSend.php",

  "php4/Swift/Plugin/Throttler.php",

  "php4/Swift/Plugin/VerboseSending/",

  "php4/Swift/Plugin/VerboseSending/AbstractView.php",

  "php4/Swift/Plugin/VerboseSending/DefaultView.php",

  "php4/Swift/Plugin/VerboseSending.php",

  "php4/Swift/RecipientList.php",

  "php4/Swift.php",

  "php4/ft_library.php",

  "php5/",

  "php5/EasySwift.php",

  "php5/Swift/",

  "php5/Swift/Address.php",

  "php5/Swift/AddressContainer.php",

  "php5/Swift/Authenticator/",

  "php5/Swift/Authenticator/@PopB4Smtp.php",

  "php5/Swift/Authenticator/CRAMMD5.php",

  "php5/Swift/Authenticator/LOGIN.php",

  "php5/Swift/Authenticator/PLAIN.php",

  "php5/Swift/Authenticator/PopB4Smtp/",

  "php5/Swift/Authenticator/PopB4Smtp/Pop3Connection.php",

  "php5/Swift/Authenticator.php",

  "php5/Swift/BadResponseException.php",

  "php5/Swift/BatchMailer.php",

  "php5/Swift/Cache/",

  "php5/Swift/Cache/Disk.php",

  "php5/Swift/Cache/JointOutputStream.php",

  "php5/Swift/Cache/Memory.php",

  "php5/Swift/Cache/OutputStream.php",

  "php5/Swift/Cache.php",

  "php5/Swift/CacheFactory.php",

  "php5/Swift/ClassLoader.php",

  "php5/Swift/Connection/",

  "php5/Swift/Connection/Multi.php",

  "php5/Swift/Connection/NativeMail.php",

  "php5/Swift/Connection/Rotator.php",

  "php5/Swift/Connection/SMTP.php",

  "php5/Swift/Connection/Sendmail.php",

  "php5/Swift/Connection.php",

  "php5/Swift/ConnectionBase.php",

  "php5/Swift/ConnectionException.php",

  "php5/Swift/Events/",

  "php5/Swift/Events/BeforeCommandListener.php",

  "php5/Swift/Events/BeforeSendListener.php",

  "php5/Swift/Events/CommandEvent.php",

  "php5/Swift/Events/CommandListener.php",

  "php5/Swift/Events/ConnectEvent.php",

  "php5/Swift/Events/ConnectListener.php",

  "php5/Swift/Events/DisconnectEvent.php",

  "php5/Swift/Events/DisconnectListener.php",

  "php5/Swift/Events/Listener.php",

  "php5/Swift/Events/ListenerMapper.php",

  "php5/Swift/Events/ResponseEvent.php",

  "php5/Swift/Events/ResponseListener.php",

  "php5/Swift/Events/SendEvent.php",

  "php5/Swift/Events/SendListener.php",

  "php5/Swift/Events.php",

  "php5/Swift/Exception.php",

  "php5/Swift/File.php",

  "php5/Swift/FileException.php",

  "php5/Swift/Iterator/",

  "php5/Swift/Iterator/Array.php",

  "php5/Swift/Iterator/MySQLResult.php",

  "php5/Swift/Iterator.php",

  "php5/Swift/Log/",

  "php5/Swift/Log/DefaultLog.php",

  "php5/Swift/Log.php",

  "php5/Swift/LogContainer.php",

  "php5/Swift/Message/",

  "php5/Swift/Message/Attachment.php",

  "php5/Swift/Message/EmbeddedFile.php",

  "php5/Swift/Message/Encoder.php",

  "php5/Swift/Message/Headers.php",

  "php5/Swift/Message/Image.php",

  "php5/Swift/Message/Mime.php",

  "php5/Swift/Message/MimeException.php",

  "php5/Swift/Message/Part.php",

  "php5/Swift/Message.php",

  "php5/Swift/Plugin/",

  "php5/Swift/Plugin/AntiFlood.php",

  "php5/Swift/Plugin/BandwidthMonitor.php",

  "php5/Swift/Plugin/ConnectionRotator.php",

  "php5/Swift/Plugin/Decorator/",

  "php5/Swift/Plugin/Decorator/Replacements.php",

  "php5/Swift/Plugin/Decorator.php",

  "php5/Swift/Plugin/EasySwiftResponseTracker.php",

  "php5/Swift/Plugin/FileEmbedder.php",

  "php5/Swift/Plugin/MailSend.php",

  "php5/Swift/Plugin/Throttler.php",

  "php5/Swift/Plugin/VerboseSending/",

  "php5/Swift/Plugin/VerboseSending/AbstractView.php",

  "php5/Swift/Plugin/VerboseSending/DefaultView.php",

  "php5/Swift/Plugin/VerboseSending.php",

  "php5/Swift/RecipientList.php",

  "php5/Swift.php",

  "php5/ft_library.php",

  "tab_settings.php",

  "tab_test.php",

  "templates/",

  "templates/help.tpl",

  "templates/index.tpl",

  "templates/tab_settings.tpl",

  "templates/tab_test.tpl"

);