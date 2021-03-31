/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
*/

// DO NOT EDIT THIS GENERATED OUTPUT DIRECTLY!
// This file should be overwritten as part of your build process.
// If you need to extend the behavior of the generated service worker, the best approach is to write
// additional code and include it using the importScripts option:
//   https://github.com/GoogleChrome/sw-precache#importscripts-arraystring
//
// Alternatively, it's possible to make changes to the underlying template file and then use that as the
// new base for generating output, via the templateFilePath option:
//   https://github.com/GoogleChrome/sw-precache#templatefilepath-string
//
// If you go that route, make sure that whenever you update your sw-precache dependency, you reconcile any
// changes made to this original template file with your modified copy.

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren, quotes, comma-spacing */
'use strict';

var precacheConfig = [["README.md","be6fb8e630689c39c094e9d34f0cd482"],["controllers/BDConnect.php","a8cdf8f86a38580b92605be9df8e9dba"],["controllers/SiteController.php","2a50ba577376a9f5eee36e173747faa4"],["controllers/addoffre.php","b612c8e3421f2d753bc7e0be58b4b03f"],["controllers/administratifgestion.php","154c4c1ac34e8f833104f3bd9dd7bfdb"],["controllers/delfavori.php","dbf2c456ced4c57e7a54cb2475f3741a"],["controllers/disconnect.php","275bef6c1a595b9875c1a6243fcb9e45"],["controllers/favori.php","3796d0fa020378b4b693cac3c59898d7"],["controllers/gestion.php","962995e0fcbec5f76ff5076a1e61a8ba"],["controllers/index.php","89205440ede3210331ba0d00524a367b"],["controllers/login.php","ec39b4d88cbb2ad90364566853e0e5bc"],["controllers/noteetudiant.php","ba73b76a07ed0ef501285aa722021619"],["controllers/notepilote.php","7a8a50c4cb368f3bbb5d24ece97210a9"],["controllers/parametre.php","1e6f0b9b029ed9150168a947fde87115"],["controllers/recherche.php","167b74b4c756d31463faadd08fcca380"],["controllers/signin.php","df4b8038567c6c24666f7b350fe989b9"],["controllers/updategestion.php","e3f256985c848bfdee9b8b48bb622738"],["controllers/updateoffre.php","3fd65aba95212d2fc2d9fa56c5edcf4e"],["core/css/connexion.css","39c11df35a28b37d307b50de8b7211f6"],["core/css/footer.css","b92515fb3f8e6c2c4e280b67e318c092"],["core/css/gestion.css","e63ce25fd463ff343eedc0ee1bf2dc05"],["core/css/header.css","b13f5c85582d8df24e4c4958e41d9d24"],["core/css/home.css","bba3b6a91082927f427c4b2d45acc6d7"],["core/css/inscription.css","2ad6f36ca184ea80f0e9c40963f7a192"],["core/css/offre.css","df5f9b3a1a8c82065dd7ba89633f1064"],["core/css/parametre.css","6c01357d6a777548ad6ffaab660f1093"],["core/css/profil.css","63c36f50c3a5fdf2618e40d93dd39b7b"],["core/css/recherche.css","a84496fffd4f313dadc18486a0483249"],["core/image/background-header.png","1b2a6a8f8dc8354f981894ad8c82c593"],["core/image/entreprise/thales.jpg","f2425975b5f7a7bebaa823cbc68f8667"],["core/image/entreprise/total.png","b4c730575b9db8a0998947bec654aff4"],["core/image/pwa/logo128.png","102f7d9fe3201343d3885b2cd1b99569"],["core/image/pwa/logo256.png","f3ba7d344a0be38cd6e98e24e29fdc7c"],["core/image/pwa/logo64.png","3e03e57b30878fcc10040c309ccf2521"],["core/image/secteur/Energy.jpg","7d89fcec56321a6b8e86d8b68c8680ce"],["core/image/secteur/Industry.jpg","b60eb843dc62511be5a692eb2f285640"],["core/image/secteur/Mechanics.jpg","3ce7968b34c8a9479b395ea3a8eeb034"],["core/image/secteur/Networks.jpeg","adc25f0dff8b626e83630cd5ae4fc017"],["core/image/secteur/Software.jpg","19069cf64c7b85e80fdac5c4e24c316c"],["core/image/secteur/Web.jpg","afdb6fcd69e9f1f627709f9d540220ab"],["core/js/footer.js","aad5958a622c02bd0cd397710cc433c1"],["core/js/inscription.js","ef30b0c83232f70395d5d050d8e90b1f"],["core/js/modal.js","a2aaa11650b85dca59dfd237d7194039"],["core/js/navbar.js","75a06c77a8b3788790faf3ab5afe687e"],["libs/Autoloader.php","65355011d67bf9b88bbfbec61a321ba0"],["libs/Smarty.class.php","b649859795c28b503cd19e662c1eac3c"],["libs/SmartyBC.class.php","1be79cc12d86e68440fb983263ce8aa8"],["libs/bootstrap.php","7b919efc90cbbdba2857d6d70d38ca5d"],["libs/debug.tpl","e96d5f00cadfda14f94f1d084320c612"],["libs/plugins/block.textformat.php","f0c9d89378c381b127bc63de0152a04e"],["libs/plugins/function.counter.php","5fb1e399544af914bfdec2abb6d4f1f4"],["libs/plugins/function.cycle.php","107289a7a4eecf4b2cc066eab3a49138"],["libs/plugins/function.fetch.php","1546e0118e9d25ea4265a3ec69c82f5e"],["libs/plugins/function.html_checkboxes.php","4b5b377f84f11ad969d9f7862094656a"],["libs/plugins/function.html_image.php","423aa01a2e6f357068b492819e8d34e9"],["libs/plugins/function.html_options.php","c73f781c88553ba71c6c3c28ab633c09"],["libs/plugins/function.html_radios.php","4e5461af15546f68021cc9c4a85ff677"],["libs/plugins/function.html_select_date.php","b601c9707ea86bfaecfec3adf4eb1b43"],["libs/plugins/function.html_select_time.php","3d2959b431dcb36f879848ef19698e56"],["libs/plugins/function.html_table.php","283df9aa10525eb6856889c56959e30a"],["libs/plugins/function.mailto.php","0aa5995e04f17f8dcecf16f304134041"],["libs/plugins/function.math.php","3ab4b7583ee0981a456dbdcb9f1c89b4"],["libs/plugins/modifier.capitalize.php","a6df63e55571c59cdfd812b07760f542"],["libs/plugins/modifier.date_format.php","66b42555ba5374ccf9a16115f4e8fa62"],["libs/plugins/modifier.debug_print_var.php","8981a094d200662ee5698347a58da75e"],["libs/plugins/modifier.escape.php","9d4c8633670d838b2ecf8091854cfc27"],["libs/plugins/modifier.mb_wordwrap.php","93ee3ab8958c5e10b79b019ee4a42d8b"],["libs/plugins/modifier.regex_replace.php","415b24edd3c742b4393e60aedc9ef13a"],["libs/plugins/modifier.replace.php","73603e29693750c57dc705fc3ce5b01a"],["libs/plugins/modifier.spacify.php","c0a26450640d311c3700001ee0e7ac95"],["libs/plugins/modifier.truncate.php","0d85851271871cf9fa63b0d665df1650"],["libs/plugins/modifiercompiler.cat.php","383bfa09394cd74088d832dde2d04777"],["libs/plugins/modifiercompiler.count_characters.php","5b04dae9dcd95fe7e84603ce40326a65"],["libs/plugins/modifiercompiler.count_paragraphs.php","d9dd09f4c5e36f89545c0c2af3a0ce52"],["libs/plugins/modifiercompiler.count_sentences.php","9d9aef8a50eb46e36813c303b67c34e0"],["libs/plugins/modifiercompiler.count_words.php","d2ff808a858977ca58d4900ea462680b"],["libs/plugins/modifiercompiler.default.php","1895ccd629f315b85f2ae6c88331cf36"],["libs/plugins/modifiercompiler.escape.php","150848d269595e8072210529ad22a7a6"],["libs/plugins/modifiercompiler.from_charset.php","b0847684dcecad1fb96507d6c73d25e3"],["libs/plugins/modifiercompiler.indent.php","a9d565fdf9025876a0b0eb0ff060bab0"],["libs/plugins/modifiercompiler.lower.php","6ec823d6f56bb8cb9a0c8642a3efc88e"],["libs/plugins/modifiercompiler.noprint.php","a3dbc6a412cb91998b9499f7971e08ce"],["libs/plugins/modifiercompiler.string_format.php","9e219e7789796c39f9e8e08da0a72a73"],["libs/plugins/modifiercompiler.strip.php","763b2f247c9d5a424a1fce2144c25c9a"],["libs/plugins/modifiercompiler.strip_tags.php","cec6073eb3d334882a56146b10d590de"],["libs/plugins/modifiercompiler.to_charset.php","3790703006e4010a04964b804f4d9bed"],["libs/plugins/modifiercompiler.unescape.php","6e5330472284b0382622b5656ecbc603"],["libs/plugins/modifiercompiler.upper.php","29a88c5fa86d9559ee828262c83f19f2"],["libs/plugins/modifiercompiler.wordwrap.php","1f42b2e1a0fa410141020fbed9cbd0d3"],["libs/plugins/outputfilter.trimwhitespace.php","332415c6b04ae784fcfcfec66768b968"],["libs/plugins/shared.escape_special_chars.php","20960f13ca4b80e73241f7fea5607276"],["libs/plugins/shared.literal_compiler_param.php","409d2965cb282245bb5291e85603c75d"],["libs/plugins/shared.make_timestamp.php","019f7875610fdd49eacfe3f7ccdc09b0"],["libs/plugins/shared.mb_str_replace.php","1065e3512ad7369e131e2c1cd0b4b861"],["libs/plugins/shared.mb_unicode.php","71ea54e274802d5217eaabc6b60ac1cd"],["libs/plugins/variablefilter.htmlspecialchars.php","a1af9edb826a634b570b5e0877b030ec"],["libs/sysplugins/smarty_cacheresource.php","e3d0cae4156db8b126a39399d812dfec"],["libs/sysplugins/smarty_cacheresource_custom.php","936babb086bc5955f420d78111e9422d"],["libs/sysplugins/smarty_cacheresource_keyvaluestore.php","687f76701eb5e3712994842b3207d088"],["libs/sysplugins/smarty_data.php","73cfd8a9edd17de9737c56bac89ed4da"],["libs/sysplugins/smarty_internal_block.php","48d8f8b387dc9990734822c4fa85ffeb"],["libs/sysplugins/smarty_internal_cacheresource_file.php","00c1ae5884bab6a2526f37cc24b26f02"],["libs/sysplugins/smarty_internal_compile_append.php","9c83ec0e23fd6d2ce5630c716e658055"],["libs/sysplugins/smarty_internal_compile_assign.php","5d2e481d9be6bfa7eb20914d68a2e50e"],["libs/sysplugins/smarty_internal_compile_block.php","e6445eadd82b792c8996d94d7b535c06"],["libs/sysplugins/smarty_internal_compile_block_child.php","b17c5e34840a6c628f26ab5600624457"],["libs/sysplugins/smarty_internal_compile_block_parent.php","56bd6380ed04196d7db00043ddf1f138"],["libs/sysplugins/smarty_internal_compile_break.php","bfcc7d8d4a546e899552dacb78716354"],["libs/sysplugins/smarty_internal_compile_call.php","70f41931fe82ffeb75251d520d224635"],["libs/sysplugins/smarty_internal_compile_capture.php","d4d233b98cf80b425f2ca4d50a312ace"],["libs/sysplugins/smarty_internal_compile_child.php","b236522deb39059119f24ce3e9b81efb"],["libs/sysplugins/smarty_internal_compile_config_load.php","66008086306e6bbbd3136b52ceac03df"],["libs/sysplugins/smarty_internal_compile_continue.php","52ed89f218f6047059f45eaa4ccdd301"],["libs/sysplugins/smarty_internal_compile_debug.php","bc2f70c1825e3b00b469192613d740bc"],["libs/sysplugins/smarty_internal_compile_eval.php","b48a30eb0397b90fcd06971774e425a2"],["libs/sysplugins/smarty_internal_compile_extends.php","6936159bc4a11f7bad49f703e4ffb8ec"],["libs/sysplugins/smarty_internal_compile_for.php","6ae1689c206913f1d18be35268a48b52"],["libs/sysplugins/smarty_internal_compile_foreach.php","efa7342f16b8f396fa812126e07d1b02"],["libs/sysplugins/smarty_internal_compile_function.php","8bdfbe53be85a69a07412916210a6225"],["libs/sysplugins/smarty_internal_compile_if.php","00ace5b46b8b9a51f8d090403658b442"],["libs/sysplugins/smarty_internal_compile_include.php","674b386538c5f8817a621ed2b48c897b"],["libs/sysplugins/smarty_internal_compile_include_php.php","cdcb29fc98cee074f72531d9c144bcd5"],["libs/sysplugins/smarty_internal_compile_insert.php","117140269e4c81ff752047b612a982c1"],["libs/sysplugins/smarty_internal_compile_ldelim.php","ff4be79157a11b2c496350e62dac53e3"],["libs/sysplugins/smarty_internal_compile_make_nocache.php","538c7f447f0769b8e07543f2ccaf2b92"],["libs/sysplugins/smarty_internal_compile_nocache.php","da43533c01029ef8ab58398f5da6bde0"],["libs/sysplugins/smarty_internal_compile_parent.php","ca8b9444db31f92109c942ae8bc84974"],["libs/sysplugins/smarty_internal_compile_private_block_plugin.php","725441256d5609045c64a0c3e307c794"],["libs/sysplugins/smarty_internal_compile_private_foreachsection.php","5e8f4c055626969e0fe5aa38b1be22bc"],["libs/sysplugins/smarty_internal_compile_private_function_plugin.php","c97ad260cc0066924dac776e1066f8dc"],["libs/sysplugins/smarty_internal_compile_private_modifier.php","2337f5649f3add3561c336ece702ea82"],["libs/sysplugins/smarty_internal_compile_private_object_block_function.php","cfb34b29321ae9a765e615a19a67dc45"],["libs/sysplugins/smarty_internal_compile_private_object_function.php","92a51b67c0485f20016f8e9bb2e06424"],["libs/sysplugins/smarty_internal_compile_private_php.php","d75166fdeb5922e2bda2ffc9d94be5ef"],["libs/sysplugins/smarty_internal_compile_private_print_expression.php","9947521bc401451e9d5cfc3e0223d917"],["libs/sysplugins/smarty_internal_compile_private_registered_block.php","2d203d6909e8b42de93d1bf9d47e3f31"],["libs/sysplugins/smarty_internal_compile_private_registered_function.php","d94ca46c5b3dd2c26d075676400b781f"],["libs/sysplugins/smarty_internal_compile_private_special_variable.php","1447bafe945875db95f5d9c93c793915"],["libs/sysplugins/smarty_internal_compile_rdelim.php","d66b6752147adb2372106e3e03b123d7"],["libs/sysplugins/smarty_internal_compile_section.php","242b3989995b64a04fc4d82a50879073"],["libs/sysplugins/smarty_internal_compile_setfilter.php","3c83f417fa5a0daac64bd241b3a74dbc"],["libs/sysplugins/smarty_internal_compile_shared_inheritance.php","4022662a6c3d5873762e1b5de7a8fb86"],["libs/sysplugins/smarty_internal_compile_while.php","60f28b20ae7a0955cb65606a9b8c90c3"],["libs/sysplugins/smarty_internal_compilebase.php","f300e7f86d24934e28d6b6f0b7de75f6"],["libs/sysplugins/smarty_internal_config_file_compiler.php","d80954a21029423d3ef6c6eba64acc82"],["libs/sysplugins/smarty_internal_configfilelexer.php","84e28bf45d87e1235d3305c2b5699c26"],["libs/sysplugins/smarty_internal_configfileparser.php","1b397909d8e8526b400f6c5c196c2de5"],["libs/sysplugins/smarty_internal_data.php","bc3b6dc0b4bfdf9fa374322b73aec43e"],["libs/sysplugins/smarty_internal_debug.php","d4c0726ab4dea72eea6c2ffeecbe31d1"],["libs/sysplugins/smarty_internal_errorhandler.php","ed789f86113a9b4ea04438fd2f8e8b07"],["libs/sysplugins/smarty_internal_extension_handler.php","1339ad9dc5108ea8b7d1fa6473f91034"],["libs/sysplugins/smarty_internal_method_addautoloadfilters.php","e37d8fab42b7a6309615575381f3d1d4"],["libs/sysplugins/smarty_internal_method_adddefaultmodifiers.php","6c234a76e950a3cd5419866cfc41c3aa"],["libs/sysplugins/smarty_internal_method_append.php","9bb441b592881e6c779428e770ea79a3"],["libs/sysplugins/smarty_internal_method_appendbyref.php","0300b1fd726a9bd1526eee572b36ae19"],["libs/sysplugins/smarty_internal_method_assignbyref.php","8684d8525afa165ddf05276144cd93f5"],["libs/sysplugins/smarty_internal_method_assignglobal.php","c5415eb293d69206060841a0bd97e805"],["libs/sysplugins/smarty_internal_method_clearallassign.php","30d2c5d9987b27286ebcfbd198437bc8"],["libs/sysplugins/smarty_internal_method_clearallcache.php","0d28a80c5cef8ce7716651858a273a9f"],["libs/sysplugins/smarty_internal_method_clearassign.php","9a0898e3e476be817adfe2c46431586c"],["libs/sysplugins/smarty_internal_method_clearcache.php","e1d7905f2f6095ca3d3ac9d410c282df"],["libs/sysplugins/smarty_internal_method_clearcompiledtemplate.php","bcca24d313045532e72f2c27435a5e17"],["libs/sysplugins/smarty_internal_method_clearconfig.php","ce4af6dbc134cb438777fdbd533be78b"],["libs/sysplugins/smarty_internal_method_compileallconfig.php","3266500828430905e30b28c282c1746e"],["libs/sysplugins/smarty_internal_method_compilealltemplates.php","a7679f7da5c2dccea61a3a42ac9fb307"],["libs/sysplugins/smarty_internal_method_configload.php","123eba85cabef825e1a1b1a0d640cf1f"],["libs/sysplugins/smarty_internal_method_createdata.php","7d529a31955178b21ac911fa5b040dcb"],["libs/sysplugins/smarty_internal_method_getautoloadfilters.php","0e5597efc2dd1ea2a1b74b35da363f51"],["libs/sysplugins/smarty_internal_method_getconfigvariable.php","42813480c8a701fbb27f2d7bcad182c3"],["libs/sysplugins/smarty_internal_method_getconfigvars.php","2aead548e9fd18b108d977ee0d0ac57a"],["libs/sysplugins/smarty_internal_method_getdebugtemplate.php","99382111c2fd13697b098e6311ef4aca"],["libs/sysplugins/smarty_internal_method_getdefaultmodifiers.php","a5f316cb1d874f07774df06cb6c61343"],["libs/sysplugins/smarty_internal_method_getglobal.php","bf1235f067266f4df28bd34a33786e44"],["libs/sysplugins/smarty_internal_method_getregisteredobject.php","728c3db1a922082906b29dbe0967392d"],["libs/sysplugins/smarty_internal_method_getstreamvariable.php","346e81169bca9daff75fce9c09be96f0"],["libs/sysplugins/smarty_internal_method_gettags.php","3fc9b697d50eca73695436aa4003bc92"],["libs/sysplugins/smarty_internal_method_gettemplatevars.php","fe10132b635b989a569159c762b98381"],["libs/sysplugins/smarty_internal_method_literals.php","938e9ce470ce8ee48d2d77536271412e"],["libs/sysplugins/smarty_internal_method_loadfilter.php","22a3ee2c29612f557ff9820a1065834f"],["libs/sysplugins/smarty_internal_method_loadplugin.php","101a8bfaa9d70f3d5ead43ad94168895"],["libs/sysplugins/smarty_internal_method_mustcompile.php","98755c9b27a4692e88f37905d1628129"],["libs/sysplugins/smarty_internal_method_registercacheresource.php","1cece1d531f46dcc2a60df51d2d11967"],["libs/sysplugins/smarty_internal_method_registerclass.php","d59f7428b6dbd9331c75ecc614df180a"],["libs/sysplugins/smarty_internal_method_registerdefaultconfighandler.php","fd6fcb2f6ad0845c1ee30211fb5733ab"],["libs/sysplugins/smarty_internal_method_registerdefaultpluginhandler.php","101938609153f03139ac14a2d1a43a68"],["libs/sysplugins/smarty_internal_method_registerdefaulttemplatehandler.php","9fa314da71bc1b6ed1bf5fadb20eb59e"],["libs/sysplugins/smarty_internal_method_registerfilter.php","7ccdd556006043adfd5b98026d6bd43d"],["libs/sysplugins/smarty_internal_method_registerobject.php","d9f699d270e70ed67b8d802b48c2c0ee"],["libs/sysplugins/smarty_internal_method_registerplugin.php","ff92cd6cca29b3dbabfe79fde56370de"],["libs/sysplugins/smarty_internal_method_registerresource.php","159992857f60e1213b532a44d4b5484c"],["libs/sysplugins/smarty_internal_method_setautoloadfilters.php","35974ea251fa9655bbeeb23cac06158b"],["libs/sysplugins/smarty_internal_method_setdebugtemplate.php","9965a2d77c12e5bdb3f9d7ac37e0ba45"],["libs/sysplugins/smarty_internal_method_setdefaultmodifiers.php","c5bdc1f0d195c0100078c0c87194f682"],["libs/sysplugins/smarty_internal_method_unloadfilter.php","9a765841f5c9a83cc9375e3ec9e12065"],["libs/sysplugins/smarty_internal_method_unregistercacheresource.php","241ff4b9524554ba4ffa0311d5402730"],["libs/sysplugins/smarty_internal_method_unregisterfilter.php","186a2763b9fd27cef156342f0a22d412"],["libs/sysplugins/smarty_internal_method_unregisterobject.php","c8ad85242235ce5889992635b341602e"],["libs/sysplugins/smarty_internal_method_unregisterplugin.php","9eb1ddef39f731208ef6386776cb32b5"],["libs/sysplugins/smarty_internal_method_unregisterresource.php","5f12a18f928f4f8fe975e15091c653bd"],["libs/sysplugins/smarty_internal_nocache_insert.php","0c77121c5f88b7e0a70d04a9d570e4de"],["libs/sysplugins/smarty_internal_parsetree.php","88724054a84db614c213ac1ca933d197"],["libs/sysplugins/smarty_internal_parsetree_code.php","f505ce7973b3689ef0191f63d7a3321a"],["libs/sysplugins/smarty_internal_parsetree_dq.php","d6de497e2a604fb7ad94ea8d8272b7b0"],["libs/sysplugins/smarty_internal_parsetree_dqcontent.php","23f6c13e0dad6d3fd418d643996fe6e3"],["libs/sysplugins/smarty_internal_parsetree_tag.php","5026801ed7f515d8e0fe539622e872d3"],["libs/sysplugins/smarty_internal_parsetree_template.php","28afff6e8d3449c56eb1309f3a2fd6ab"],["libs/sysplugins/smarty_internal_parsetree_text.php","862601db699b9718b15fe408c5eb7e73"],["libs/sysplugins/smarty_internal_resource_eval.php","5fedadfa02cb0acb410897ec92094991"],["libs/sysplugins/smarty_internal_resource_extends.php","4764b7857154f3cbe0d0f947a7328146"],["libs/sysplugins/smarty_internal_resource_file.php","681f404d515648712e1e05a1e1095dee"],["libs/sysplugins/smarty_internal_resource_php.php","d3cd4c9bc7ee31fe4d4ebe7ba912a5d3"],["libs/sysplugins/smarty_internal_resource_registered.php","5ce5c15db28989fa8476ff53af9c8844"],["libs/sysplugins/smarty_internal_resource_stream.php","de403b7d41b78049dfa89546bb7c3a5b"],["libs/sysplugins/smarty_internal_resource_string.php","8c6ed37d10284fa9c9977f12e4a8e883"],["libs/sysplugins/smarty_internal_runtime_cachemodify.php","6cec45a4b81a836c2689d37dd2631039"],["libs/sysplugins/smarty_internal_runtime_cacheresourcefile.php","35a563e79935b9e53fbdf74a9a3573a1"],["libs/sysplugins/smarty_internal_runtime_capture.php","502ff18cbc0b152780badfca9cb77912"],["libs/sysplugins/smarty_internal_runtime_codeframe.php","e8a7a0d686697b77caf53a57f9165b9d"],["libs/sysplugins/smarty_internal_runtime_filterhandler.php","3b3184ddadb26c1475ec058fc920aa50"],["libs/sysplugins/smarty_internal_runtime_foreach.php","d771d43babf76d4f247b5641109545da"],["libs/sysplugins/smarty_internal_runtime_getincludepath.php","ac967a9678ba3fbd43ecac2153e7b313"],["libs/sysplugins/smarty_internal_runtime_inheritance.php","972c13ae749a4c79022f7e6f3fed88b0"],["libs/sysplugins/smarty_internal_runtime_make_nocache.php","f2f1e8e5efec6a4c0ed8486387a21c04"],["libs/sysplugins/smarty_internal_runtime_tplfunction.php","a539c89230fbb52e7f265f2e67011028"],["libs/sysplugins/smarty_internal_runtime_updatecache.php","e53f992003734a6ffc06d7e8149231df"],["libs/sysplugins/smarty_internal_runtime_updatescope.php","792559653ec02a8d90fe9801c731163e"],["libs/sysplugins/smarty_internal_runtime_writefile.php","62f9f3aa4d092a77f2f1088e0cf294dd"],["libs/sysplugins/smarty_internal_smartytemplatecompiler.php","7e976b94c6607388d6f9fb39ea20c998"],["libs/sysplugins/smarty_internal_template.php","37b24decc7c22af3e283dc4798ea6d3d"],["libs/sysplugins/smarty_internal_templatebase.php","870766d5cd69d5cc7283b08c918a4de3"],["libs/sysplugins/smarty_internal_templatecompilerbase.php","f65edf118c158749ed179d93c672b9f9"],["libs/sysplugins/smarty_internal_templatelexer.php","2db800ec1577670513545993fd9c33e4"],["libs/sysplugins/smarty_internal_templateparser.php","11f47a178f20ef244ed02c8088b8bbc2"],["libs/sysplugins/smarty_internal_testinstall.php","21be3192704a679a6b51eb5ec0db27a2"],["libs/sysplugins/smarty_internal_undefined.php","962c17b1ff68ef8f90fd98555245670a"],["libs/sysplugins/smarty_resource.php","3b1805b6cdd875ff8f63ac6f44c1dd65"],["libs/sysplugins/smarty_resource_custom.php","8f7cfb1e684fcc2c5a1070518a330a21"],["libs/sysplugins/smarty_resource_recompiled.php","4c7ed109a66878024099310fe316ec14"],["libs/sysplugins/smarty_resource_uncompiled.php","a6c5f9ce6079dfce46304787803a788c"],["libs/sysplugins/smarty_security.php","4277a79f5e518c2c9abe6addf3945570"],["libs/sysplugins/smarty_template_cached.php","fc0f54e0b6a9ba499608d93a5d6119d6"],["libs/sysplugins/smarty_template_compiled.php","a4dba326e506d84f9d39e342f6254b45"],["libs/sysplugins/smarty_template_config.php","ff5dc04e0d146d3a83415d8790d01197"],["libs/sysplugins/smarty_template_resource_base.php","b8ec3de88e21d3b4b52950cd90269140"],["libs/sysplugins/smarty_template_source.php","12f1215857ee730c2f0bad5d624f86ac"],["libs/sysplugins/smarty_undefined_variable.php","243bc6627ad06455d495a317ffc313bd"],["libs/sysplugins/smarty_variable.php","fd11d898f10122b2b5f86bf20f015e01"],["libs/sysplugins/smartycompilerexception.php","77c0183562161e8dad5968945c271efc"],["libs/sysplugins/smartyexception.php","b0b72c6841aeb406475e4e962039acc7"],["manifest.json","691a989f60fc6b227d3322b92d2b0d0d"],["tpl/config/config_init.php","2c859b4c1fe11a1f1831ff208939bfe0"],["tpl/config/defines.inc.php","79720c0208b105288ca5fde094ff35a5"],["tpl/footer.tpl","344c32a05034cf0651d00b5d2f13973f"],["tpl/header.tpl","987f01467440954e039e4d116fee3cd1"],["tpl/header_other.tpl","3509056a0e10b8230a9f67e9949b76e8"],["tpl/index.php","a363867fcf95c52b46c996c0cfd6db81"],["tpl/pages/connexion.tpl","eb178121e460ba4d64a9b6f8abda8bd1"],["tpl/pages/gestion.tpl","2d4ba3e52c5256fe65d16f30b8c70be1"],["tpl/pages/home.tpl","7baa612f10b26c8744c995661b46aaab"],["tpl/pages/inscription.tpl","db413027224f94dc9a9d5f8fe300aeff"],["tpl/pages/offre.tpl","bf15f51bdb7ed2773b4ac79a7f1712a5"],["tpl/pages/parametre.tpl","b22be3df6daf640e6fb80ff9b6906355"],["tpl/pages/profil.tpl","0bc78e617dc024fce0fe3c331dbc678e"],["tpl/pages/recherche.tpl","03c53042760510ec2272c6a53cbbc708"],["tpl/templates_c/0a83aa4f5b43a425754308162ab9fde4449f2119_0.file.parametre.tpl.php","7ea51fad08e2ea906ab4c4564b0f65cd"],["tpl/templates_c/129a27cb96d5050c08564bd36065ad42108daddf_0.file.footer.tpl.php","864365e13c5f8cc42003a2931152b496"],["tpl/templates_c/228f366aa84b9198a153a1ddabfd7137747d2ed6_0.extends.index.tpl.php","86d3cdc94ff081bf68c1c8843d8bfd3c"],["tpl/templates_c/228f366aa84b9198a153a1ddabfd7137747d2ed6_0.file.index.tpl.php","a73cf539417afc03d8bdcc77aee2699a"],["tpl/templates_c/359cd61de1ea29c7a6e2b2a795d813c31fbcd091_0.file.connexion.tpl.php","b64ec14f60337f3a2bb778b717c085df"],["tpl/templates_c/36685c14136cd582e84a868abeb33a7bcda27352_0.file.footer.tpl.php","a31bc50fee5b68995512f6ba028c467e"],["tpl/templates_c/3ca0e88c0a0b6dc279069879d8691c6e18ab9a51_0.file.header.tpl.php","d95d9a8f9e0a0a172c4996362eb2a11e"],["tpl/templates_c/3db364bd2c65c42ed229c42f60bf68242fd5bf9b_0.file.contact.tpl.php","a5a26131e29ad8723bb15b57bed4f144"],["tpl/templates_c/43a37fcc6e9996d604d2c9f9e7bca7bc039de86c_0.file.header.tpl.php","bf916da7e1a30d23fd6c6a5262c42582"],["tpl/templates_c/4d3b9c7cfaefaffb2ea5a829aaabdb4d2d32ab82_0.file.recherche.tpl.php","9ee16f602ae67653180820dd177196a0"],["tpl/templates_c/50a216061d637394053c5af4c080c27e00ddd49b_0.extends.index.tpl.php","41b5deb8c7e0139be5acb6b91a2f1d4a"],["tpl/templates_c/50a216061d637394053c5af4c080c27e00ddd49b_0.file.index.tpl.php","0cafbe1761385a61012ac2bcf6b3a1ca"],["tpl/templates_c/53dbe8f7b024456143f268dd887868a3abca5a38_0.file.gestion.tpl.php","9b4c28183b187f34a38117a73b4a4441"],["tpl/templates_c/5d38a5b0e939fb25739bdc5849f11dde3849b0e4_0.file.home.tpl.php","89ef53e0ae7990f712aa965781071976"],["tpl/templates_c/792c85d0b16ead61acd37e86a714ce203094f236_0.file.header.tpl.php","2d1434d7b001321018dcdf113b3f0b79"],["tpl/templates_c/87f5e015d28ec718d849b67885522f2ad9689794_0.file.home.tpl.php","b3a4c8d66b255a431e0063a92cb7b090"],["tpl/templates_c/880351dcfb887566f4a0e1b250d52b90bac49e9a_0.file.header.tpl.php","974ed822d86b1a17bf11f303918ca2c5"],["tpl/templates_c/94287f738ccdbc01557f81108fdf315b7d35841e_0.file.gestion.tpl.php","1653d91bba1c9850eef5801d6448a9ed"],["tpl/templates_c/9612ee9ae717e776dceff9de29e91951bba03354_0.file.header_other.tpl.php","b322b532b6071d1a8ea0793bf676bab3"],["tpl/templates_c/97dc7755e611c09ca20f3e2fc52341bcb614c316_0.file.footer.tpl.php","a95995203bf7bb7902bfcdd5b0dd0a65"],["tpl/templates_c/99388be6c8cacaee2cc87995ade82dd6d975e6d3_0.file.footer.tpl.php","f35daceac8be2a44b855583450b4b9f2"],["tpl/templates_c/a81b3c7924f405b94e0784c0c99e2952ad318a53_0.file.connexion.tpl.php","3b7881fd4bcdd8c0f2f324160ac51bed"],["tpl/templates_c/ad133f29e3ac22170397fbd21c057673ebccc1d3_0.file.home.tpl.php","247098d5bb8c19e65dc08534d68723a0"],["tpl/templates_c/ae323fe5a4d9d151b01b1aaab40502a9c2e80572_0.file.profil.tpl.php","864d5ef15e586b077dc07e4ba88af802"],["tpl/templates_c/b5b06bc8635beb172ae0bbbdf9fa64f84a0bee9d_0.file.inscription.tpl.php","d4943ebd7a15476094d5bef5d39975aa"],["tpl/templates_c/b98efeaba885092d0c2aa2399fe6d46c1bbf380a_0.file.HomeSite.tpl.php","8e220e36d550342fbb4512d226eccff7"],["tpl/templates_c/bb336e1d7c9ca6aaf56f7c32ca8ac7e0561c5889_0.file.home.tpl.php","bc9d0fcb06f371c0f52d78f76d38bcf9"],["tpl/templates_c/bb7f3e74fe3885576d668de28c0d26fdeee9100c_0.file.header.tpl.php","8258c797126b837ef39a3ebb8373b50d"],["tpl/templates_c/bbcc772e05901989785d2d2bc1e1161a343a1c0e_0.file.footer.tpl.php","6068bff77685bff8de7da06cbb4c7474"],["tpl/templates_c/cf46749fef3ed758b87374d5bd03a7248c0aa2ef_0.file.offre.tpl.php","250819f6709a499ed330fac778b2afec"],["tpl/templates_c/d9398173ea6592d41c15da1c4bfc5a2ea27e86be_0.file.header_other.tpl.php","439bb211f87577a5117c8efc6e42c299"],["tpl/templates_c/e87f2d652c7293b191c68a370e4b6958bc9b5b0e_0.file.footer.tpl.php","27cc6b0776edd63f903b5b95f24a8a9c"],["tpl/templates_c/f1f9c707a840f040d6c84f147406e1dfe735c4bc_0.file.header.tpl.php","208f8972196a8f4fbd19a9bf94411768"],["tpl/templates_c/fb31e7cfeecb0169dfc85986f6012a8f6f9ff69b_0.extends.index.tpl.php","9d50b6c8d81de21be3ddd585c2ecc43b"],["tpl/templates_c/fb31e7cfeecb0169dfc85986f6012a8f6f9ff69b_0.file.index.tpl.php","c54e8390017936d72b4e82777ccd089c"]];
var cacheName = 'sw-precache-v3-sw-precache-' + (self.registration ? self.registration.scope : '');


var ignoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function(originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var cleanResponse = function(originalResponse) {
    // If this is not a redirected response, then we don't have to do anything.
    if (!originalResponse.redirected) {
      return Promise.resolve(originalResponse);
    }

    // Firefox 50 and below doesn't support the Response.body stream, so we may
    // need to read the entire body to memory as a Blob.
    var bodyPromise = 'body' in originalResponse ?
      Promise.resolve(originalResponse.body) :
      originalResponse.blob();

    return bodyPromise.then(function(body) {
      // new Response() is happy when passed either a stream or a Blob.
      return new Response(body, {
        headers: originalResponse.headers,
        status: originalResponse.status,
        statusText: originalResponse.statusText
      });
    });
  };

var createCacheKey = function(originalUrl, paramName, paramValue,
                           dontCacheBustUrlsMatching) {
    // Create a new URL object to avoid modifying originalUrl.
    var url = new URL(originalUrl);

    // If dontCacheBustUrlsMatching is not set, or if we don't have a match,
    // then add in the extra cache-busting URL parameter.
    if (!dontCacheBustUrlsMatching ||
        !(url.pathname.match(dontCacheBustUrlsMatching))) {
      url.search += (url.search ? '&' : '') +
        encodeURIComponent(paramName) + '=' + encodeURIComponent(paramValue);
    }

    return url.toString();
  };

var isPathWhitelisted = function(whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var stripIgnoredUrlParameters = function(originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);
    // Remove the hash; see https://github.com/GoogleChrome/sw-precache/issues/290
    url.hash = '';

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var hashParamName = '_sw-precache';
var urlsToCacheKeys = new Map(
  precacheConfig.map(function(item) {
    var relativeUrl = item[0];
    var hash = item[1];
    var absoluteUrl = new URL(relativeUrl, self.location);
    var cacheKey = createCacheKey(absoluteUrl, hashParamName, hash, false);
    return [absoluteUrl.toString(), cacheKey];
  })
);

function setOfCachedUrls(cache) {
  return cache.keys().then(function(requests) {
    return requests.map(function(request) {
      return request.url;
    });
  }).then(function(urls) {
    return new Set(urls);
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return setOfCachedUrls(cache).then(function(cachedUrls) {
        return Promise.all(
          Array.from(urlsToCacheKeys.values()).map(function(cacheKey) {
            // If we don't have a key matching url in the cache already, add it.
            if (!cachedUrls.has(cacheKey)) {
              var request = new Request(cacheKey, {credentials: 'same-origin'});
              return fetch(request).then(function(response) {
                // Bail out of installation unless we get back a 200 OK for
                // every request.
                if (!response.ok) {
                  throw new Error('Request for ' + cacheKey + ' returned a ' +
                    'response with status ' + response.status);
                }

                return cleanResponse(response).then(function(responseToCache) {
                  return cache.put(cacheKey, responseToCache);
                });
              });
            }
          })
        );
      });
    }).then(function() {
      
      // Force the SW to transition from installing -> active state
      return self.skipWaiting();
      
    })
  );
});

self.addEventListener('activate', function(event) {
  var setOfExpectedUrls = new Set(urlsToCacheKeys.values());

  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.keys().then(function(existingRequests) {
        return Promise.all(
          existingRequests.map(function(existingRequest) {
            if (!setOfExpectedUrls.has(existingRequest.url)) {
              return cache.delete(existingRequest);
            }
          })
        );
      });
    }).then(function() {
      
      return self.clients.claim();
      
    })
  );
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    // Should we call event.respondWith() inside this fetch event handler?
    // This needs to be determined synchronously, which will give other fetch
    // handlers a chance to handle the request if need be.
    var shouldRespond;

    // First, remove all the ignored parameters and hash fragment, and see if we
    // have that URL in our cache. If so, great! shouldRespond will be true.
    var url = stripIgnoredUrlParameters(event.request.url, ignoreUrlParametersMatching);
    shouldRespond = urlsToCacheKeys.has(url);

    // If shouldRespond is false, check again, this time with 'index.html'
    // (or whatever the directoryIndex option is set to) at the end.
    var directoryIndex = 'index.html';
    if (!shouldRespond && directoryIndex) {
      url = addDirectoryIndex(url, directoryIndex);
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond is still false, check to see if this is a navigation
    // request, and if so, whether the URL matches navigateFallbackWhitelist.
    var navigateFallback = '';
    if (!shouldRespond &&
        navigateFallback &&
        (event.request.mode === 'navigate') &&
        isPathWhitelisted([], event.request.url)) {
      url = new URL(navigateFallback, self.location).toString();
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond was set to true at any point, then call
    // event.respondWith(), using the appropriate cache key.
    if (shouldRespond) {
      event.respondWith(
        caches.open(cacheName).then(function(cache) {
          return cache.match(urlsToCacheKeys.get(url)).then(function(response) {
            if (response) {
              return response;
            }
            throw Error('The cached response that was expected is missing.');
          });
        }).catch(function(e) {
          // Fall back to just fetch()ing the request if some unexpected error
          // prevented the cached response from being valid.
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});







