function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"//bits.wikimedia.org/commons.wikimedia.org/load.php","apiScript":"/w/api.php"}});mw.loader.register([["site","1347046078",[],"site"],["noscript","1293840000",[],"noscript"],["startup","1347982514",[],"startup"],["filepage","1343078480"],["user.groups","1293840000",[],"user"],["user","1293840000",[],"user"],["user.cssprefs","1347982514",["mediawiki.user"],"private"],["user.options","1347982514",[],"private"],["user.tokens","1293840000",[],"private"],["mediawiki.language.data","1347982511",["mediawiki.language.init"]],["skins.chick","1346684015"],["skins.cologneblue","1346684015"],["skins.modern","1346684015"],["skins.monobook","1346684015"],["skins.nostalgia","1346684015"],["skins.simple","1346684015"],["skins.standard","1346684015"],[
"skins.vector","1346684015"],["jquery","1347472621"],["jquery.appear","1346684015"],["jquery.arrowSteps","1346684015"],["jquery.async","1346684015"],["jquery.autoEllipsis","1346684015",["jquery.highlightText"]],["jquery.badge","1346684015"],["jquery.byteLength","1346684015"],["jquery.byteLimit","1346684015",["jquery.byteLength"]],["jquery.checkboxShiftClick","1346684015"],["jquery.client","1346684015"],["jquery.collapsibleTabs","1346684015"],["jquery.color","1346684015",["jquery.colorUtil"]],["jquery.colorUtil","1346684015"],["jquery.cookie","1346684015"],["jquery.delayedBind","1346684015"],["jquery.expandableField","1346684015",["jquery.delayedBind"]],["jquery.farbtastic","1346684015",["jquery.colorUtil"]],["jquery.footHovzer","1346684015"],["jquery.form","1346684015"],["jquery.getAttrs","1346684015"],["jquery.highlightText","1346684015"],["jquery.hoverIntent","1346684015"],["jquery.json","1346684015"],["jquery.localize","1346684015"],["jquery.makeCollapsible","1347936144"],[
"jquery.mockjax","1346684015"],["jquery.mw-jump","1346684015"],["jquery.mwExtension","1346684015"],["jquery.placeholder","1347472621"],["jquery.qunit","1346684015"],["jquery.qunit.completenessTest","1346684015",["jquery.qunit"]],["jquery.spinner","1346684015"],["jquery.jStorage","1346684015",["jquery.json"]],["jquery.suggestions","1346684015",["jquery.autoEllipsis"]],["jquery.tabIndex","1346684015"],["jquery.tablesorter","1347936470"],["jquery.textSelection","1346684015",["jquery.client"]],["jquery.validate","1346684015"],["jquery.xmldom","1346684015"],["jquery.tipsy","1346684015"],["jquery.ui.core","1346684015",["jquery"],"jquery.ui"],["jquery.ui.widget","1346684015",[],"jquery.ui"],["jquery.ui.mouse","1346684015",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1346684015",[],"jquery.ui"],["jquery.ui.draggable","1346684015",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1346684015",["jquery.ui.core","jquery.ui.mouse",
"jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1346684015",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1346684015",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1346684015",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1346684015",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1346684015",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1346684015",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1346684015",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1346684015",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1346684015",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],[
"jquery.ui.slider","1346684015",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1346684015",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1346684015",["jquery"],"jquery.ui"],["jquery.effects.blind","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1346684015",["jquery.effects.core"],"jquery.ui"],[
"jquery.effects.shake","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1346684015",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1346684015",["jquery.effects.core"],"jquery.ui"],["mediawiki","1346684015"],["mediawiki.api","1346684015",["mediawiki.util"]],["mediawiki.api.category","1346684015",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1346684015",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1346684015",["mediawiki.api"]],["mediawiki.api.titleblacklist","1346684015",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.watch","1346684015",["mediawiki.api","user.tokens"]],["mediawiki.debug","1346684015",["jquery.footHovzer"]],["mediawiki.debug.init","1346684015",["mediawiki.debug"]],["mediawiki.feedback","1347936144",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.htmlform","1347472621"],["mediawiki.notification","1346684015",["mediawiki.page.startup"]],[
"mediawiki.notify","1346684015"],["mediawiki.Title","1346684015",["mediawiki.util"]],["mediawiki.Uri","1346684015"],["mediawiki.user","1346684015",["jquery.cookie","mediawiki.api"]],["mediawiki.util","1347936231",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1346684015",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.history","1346684015",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1346684015",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1346684015",["mediawiki.util"]],["mediawiki.action.view.metadata","1347936154"],["mediawiki.action.view.rightClickEdit","1347472621"],["mediawiki.action.watch.ajax","1293840000",["mediawiki.page.watch.ajax"]],["mediawiki.language","1346684015",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1346684015",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1346684015"],["mediawiki.language.init",
"1346684015"],["mediawiki.jqueryMsg","1346684015",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1346684015"],["mediawiki.page.ready","1346684015",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1346684015",["jquery.client","mediawiki.util"]],["mediawiki.page.watch.ajax","1347936144",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify"]],["mediawiki.special","1346684015"],["mediawiki.special.block","1346684015",["mediawiki.util"]],["mediawiki.special.changeemail","1347942223",["mediawiki.util"]],["mediawiki.special.changeslist","1346684015",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1346684015",["jquery.byteLimit"]],["mediawiki.special.preferences","1346684015"],["mediawiki.special.recentchanges","1346684015",["mediawiki.special"]],["mediawiki.special.search","1347936190"],["mediawiki.special.undelete","1346684015"],[
"mediawiki.special.upload","1347936216",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.javaScriptTest","1346684015",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1346684015",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1346684015",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1346684015"],["mediawiki.legacy.config","1347472621",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1346684015",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.mwsuggest","1347936144",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.preview","1346684015",["mediawiki.legacy.wikibits","jquery.form"]],["mediawiki.legacy.protect","1346684015",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1347495270"],["mediawiki.legacy.oldshared","1346684015"],["mediawiki.legacy.upload","1346684015",["mediawiki.legacy.wikibits","mediawiki.util"]],[
"mediawiki.legacy.wikibits","1346684015",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1346684015"],["ext.gadget.Gallerypreview","1330614415",["mediawiki.util"]],["ext.gadget.Slideshow","1347626049",["jquery.cookie","jquery.ui.button","mediawiki.util"]],["ext.gadget.ZoomViewer","1343681188",["mediawiki.util"]],["ext.gadget.popups","1317575642"],["ext.gadget.edittop","1333820382",["mediawiki.util"]],["ext.gadget.addsection-plus","1297948485"],["ext.gadget.QPreview","1347229676"],["ext.gadget.OldEdittools","1321105640"],["ext.gadget.UploadWizard","1341641203",["mediawiki.util"]],["ext.gadget.OldUploadForm","1325521998"],["ext.gadget.ImprovedUploadForm","1332714507"],["ext.gadget.MyUploads","1346878771",["mediawiki.user","mediawiki.util","ext.gadget.libUtil"]],["ext.gadget.Watchlist-wo-uploads","1293840000"],["ext.gadget.VIAFDataImporter","1339164774",["mediawiki.util"]],["ext.gadget.QInominator","1331581914"],["ext.gadget.DisableImageAnnotator","1326496515"],[
"ext.gadget.RotateLink","1346091079",["mediawiki.user"]],["ext.gadget.RenameLink","1345032262",["mediawiki.user","mediawiki.util","ext.gadget.AjaxQuickDelete"]],["ext.gadget.CategoryAboveAll","1326544978"],["ext.gadget.CategoryAboveBelowImage","1327613684"],["ext.gadget.Long-Image-Names-in-Categories","1335991969",["mediawiki.util"]],["ext.gadget.Stockphoto","1347201539",["mediawiki.util","jquery.ui.dialog","mediawiki.legacy.wikibits","mediawiki.user","jquery.client"]],["ext.gadget.UTCLiveClock","1329883515"],["ext.gadget.DropdownToTabbar","1309904992"],["ext.gadget.diffGreenBlue","1306958646"],["ext.gadget.DiffOldStyle","1346149142"],["ext.gadget.PrettyLog","1326911306",["mediawiki.util"]],["ext.gadget.ExtraTabs2","1341691461",["mediawiki.util","mediawiki.legacy.wikibits"]],["ext.gadget.rightsfilter","1314356624",["mediawiki.util"]],["ext.gadget.GalleryFilterExtension","1323719703"],["ext.gadget.WikiMiniAtlas","1330548671"],["ext.gadget.ThumbnailPurger","1325041452",[
"ext.gadget.ExtraTabs2"]],["ext.gadget.purgetab","1312299260",["mediawiki.util"]],["ext.gadget.AddInformation","1338472329",["mediawiki.util"]],["ext.gadget.WhatIsThat","1327065539",["mediawiki.util"]],["ext.gadget.AjaxQuickDelete","1347529395",["mediawiki.util","mediawiki.user","jquery.ui.dialog","ext.gadget.libCommons","ext.gadget.libJQuery","ext.gadget.libUtil"]],["ext.gadget.QuickDelete","1341692552",["ext.gadget.AjaxQuickDelete"]],["ext.gadget.UserMessages","1331033142"],["ext.gadget.Tineye","1318865151",["mediawiki.util"]],["ext.gadget.GoogleImages","1327066163",["mediawiki.util"]],["ext.gadget.RegexMenuFramework","1327066989",["mediawiki.util"]],["ext.gadget.Cat-a-lot","1333183946",["jquery.ui.dialog","jquery.ui.autocomplete"]],["ext.gadget.HotCat","1346148853"],["ext.gadget.Glamorous","1345639167",["mediawiki.util"]],["ext.gadget.Searchnotincat","1326544738",["mediawiki.util"]],["ext.gadget.Sum-it-up","1326545885",["mediawiki.util"]],["ext.gadget.CatScan2-link","1326546073",[
"mediawiki.util"]],["ext.gadget.CC","1326546465",["mediawiki.util"]],["ext.gadget.Europeana-search","1326547370",["mediawiki.util"]],["ext.gadget.Geotoolbox","1326547758",["mediawiki.util"]],["ext.gadget.Geocodecattodo","1326547958",["mediawiki.util"]],["ext.gadget.Gmaps","1326548175",["mediawiki.util"]],["ext.gadget.BiDiEditing","1326553733"],["ext.gadget.ShortLink","1345640279"],["ext.gadget.EoMagicalConversion","1326554399"],["ext.gadget.MyLangNotify","1326555647"],["ext.gadget.DisableLanguageSelect","1326555792"],["ext.gadget.DelReqHandler","1343165113",["ext.gadget.jquery.blockUI","mediawiki.util"]],["ext.gadget.instantDelete","1325031821",["mediawiki.util"]],["ext.gadget.autodel","1342084420",["jquery.cookie","mediawiki.util","mediawiki.user","ext.gadget.jquery.blockUI","ext.gadget.AjaxQuickDelete","ext.gadget.jquery.in-view"]],["ext.gadget.CleanDeleteReasons","1327068010"],["ext.gadget.PermissionOTRS","1328047565",["mediawiki.util"]],["ext.gadget.RTRC","1325550792",[
"mediawiki.util"]],["ext.gadget.modrollback","1317674899",["mediawiki.util"]],["ext.gadget.GlobalUsage","1345121703",["mediawiki.api"]],["ext.gadget.SettingsManager","1344817512",["jquery.json","mediawiki.user","user.options","user.tokens","mediawiki.api"]],["ext.gadget.libAPI","1346972032",["mediawiki.util","mediawiki.user"]],["ext.gadget.libUtil","1343415466",["mediawiki.util"]],["ext.gadget.libCommons","1342131148"],["ext.gadget.libJQuery","1343955277"],["ext.gadget.editDropdown","1334423289",["mediawiki.util","jquery.client"]],["ext.gadget.jquery.blockUI","1343862887"],["ext.gadget.jquery.in-view","1341439854"],["ext.gadget.jQueryMousewheel","1332604819"],["ext.gadget.ImageStack","1332607475",["ext.gadget.jQueryMousewheel"]],["ext.uploadWizard","1347936377",["jquery.arrowSteps","jquery.autoEllipsis","jquery.client","jquery.ui.core","jquery.ui.dialog","jquery.ui.datepicker","jquery.ui.progressbar","jquery.spinner","jquery.suggestions","jquery.tipsy","jquery.ui.widget",
"jquery.validate","mediawiki.language","mediawiki.Uri","mediawiki.util","mediawiki.libs.jpegmeta","mediawiki.jqueryMsg","mediawiki.api","mediawiki.api.edit","mediawiki.api.category","mediawiki.api.parse","mediawiki.api.titleblacklist","mediawiki.Title","mediawiki.feedback"],"ext.uploadWizard"],["ext.uploadWizard.tests","1346684272"],["ext.uploadWizard.campaigns","1347957788"],["mobile.device.default","1346684175"],["mobile.device.webkit","1346684175"],["mobile.device.android","1346684175"],["mobile.device.iphone","1346684175"],["mobile.device.iphone2","1346684175"],["mobile.device.palm_pre","1346684175"],["mobile.device.kindle","1346684175"],["mobile.device.blackberry","1346684175"],["mobile.device.simple","1346684175"],["mobile.device.psp","1346684175"],["mobile.device.wii","1346684175"],["mobile.device.operamini","1346684175"],["mobile.device.operamobile","1346684175"],["mobile.device.nokia","1346684175"],["ext.wikihiero","1346684341"],["ext.wikihiero.Special","1346684341",[
"jquery.spinner"]],["ext.cite","1346684071",["jquery.tooltip"]],["jquery.tooltip","1346684071"],["ext.specialcite","1346684071"],["ext.geshi.local","1293840000"],["ext.categoryTree","1347936153"],["ext.categoryTree.css","1346684051"],["ext.nuke","1346684183"],["ext.centralauth","1347948904"],["ext.centralauth.noflash","1346684062"],["ext.centralauth.globalusers","1346684062"],["ext.centralNotice.interface","1346684065"],["ext.centralNotice.bannerStats","1346684065"],["ext.centralNotice.bannerController","1346684065"],["ext.abuseFilter","1346684026"],["ext.abuseFilter.edit","1347949355",["jquery.textSelection","jquery.spinner"]],["ext.abuseFilter.tools","1346684026",["jquery.spinner"]],["ext.abuseFilter.examine","1346684026"],["ext.vector.collapsibleNav","1347936231",["mediawiki.util","jquery.client","jquery.cookie","jquery.tabIndex"],"ext.vector"],["ext.vector.collapsibleTabs","1346684276",["jquery.collapsibleTabs","jquery.delayedBind"],"ext.vector"],["ext.vector.editWarning",
"1347936231",[],"ext.vector"],["ext.vector.expandableSearch","1346684276",["jquery.client","jquery.expandableField","jquery.delayedBind"],"ext.vector"],["ext.vector.footerCleanup","1347495337",["mediawiki.jqueryMsg","jquery.cookie"],"ext.vector"],["ext.vector.sectionEditLinks","1346684276",["jquery.cookie","jquery.clickTracking"],"ext.vector"],["ext.vector.simpleSearch","1347936231",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions","mediawiki.legacy.mwsuggest"],"ext.vector"],["contentCollector","1346684312",[],"ext.wikiEditor"],["jquery.wikiEditor","1347936217",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1346684312",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1346684312",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],[
"jquery.wikiEditor.dialogs.config","1347936258",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1346684312",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1346684312",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1346684312",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1346684312",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1346684312",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1346684312",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1346684312",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable",
"jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1346684312",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1346684312",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1293840000",[],"ext.wikiEditor"],["ext.wikiEditor","1346684312",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1346684312",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1346684312",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1346684312",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1346684312",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],[
"ext.wikiEditor.publish","1346684312",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1346684312",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1346684312",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1346684312",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1346684312",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1346684312",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1346684312",[],"ext.wikiEditor"],["ext.narayam","1347472641",["ext.narayam.core"]],["ext.narayam.core","1347472641",["mediawiki.util","jquery.textSelection","jquery.cookie","ext.narayam.core.contenteditable"]],[
"ext.narayam.core.contenteditable","1347472641"],["ext.narayam.osk","1347472641",["jquery.keyboard","ext.narayam.core"]],["jquery.keyboard","1346684180",["jquery.ui.core","jquery.ui.position"]],["ext.narayam.rules.ahr","1346684180",["ext.narayam.rules.mr"]],["ext.narayam.rules.ahr-inscript","1346684180",["ext.narayam.rules.mr-inscript"]],["ext.narayam.rules.am","1346684180",["ext.narayam.core"]],["ext.narayam.rules.as","1346684180",["ext.narayam.core"]],["ext.narayam.rules.as-avro","1346684180",["ext.narayam.core"]],["ext.narayam.rules.as-bornona","1346684180",["ext.narayam.core"]],["ext.narayam.rules.as-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ber-tfng","1347472641",["ext.narayam.core"]],["ext.narayam.rules.bho","1346684180",["ext.narayam.rules.hi"]],["ext.narayam.rules.bho-inscript","1346684180",["ext.narayam.rules.hi-inscript"]],["ext.narayam.rules.bn-avro","1346684180",["ext.narayam.core"]],["ext.narayam.rules.bn-inscript","1346684180",["ext.narayam.core"]],
["ext.narayam.rules.bn-nkb","1346684180",["ext.narayam.core"]],["ext.narayam.rules.cyrl-palochka","1346684180",["ext.narayam.core"]],["ext.narayam.rules.de","1346684180",["ext.narayam.core"]],["ext.narayam.rules.brx-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.eo","1346684180",["ext.narayam.core"]],["ext.narayam.rules.he-standard-2011-extonly","1346684180",["ext.narayam.core"]],["ext.narayam.rules.he-standard-2011","1346684180",["ext.narayam.core"]],["ext.narayam.rules.hi","1346684180",["ext.narayam.core"]],["ext.narayam.rules.hi-bolnagri","1346684180",["ext.narayam.core"]],["ext.narayam.rules.hi-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ka","1347472641",["ext.narayam.core"]],["ext.narayam.rules.kn","1346684180",["ext.narayam.core"]],["ext.narayam.rules.kn-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ml","1346684180",["ext.narayam.core"]],["ext.narayam.rules.mr","1346684180",["ext.narayam.core"]],[
"ext.narayam.rules.mr-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ml-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ne","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ne-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.new","1346684180",["ext.narayam.rules.sa"]],["ext.narayam.rules.new-inscript","1346684180",["ext.narayam.rules.sa-inscript"]],["ext.narayam.rules.or","1346684180",["ext.narayam.core"]],["ext.narayam.rules.or-lekhani","1346684180",["ext.narayam.core"]],["ext.narayam.rules.or-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.pa","1346684180",["ext.narayam.core"]],["ext.narayam.rules.pa-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.pa-phonetic","1346684180",["ext.narayam.core"]],["ext.narayam.rules.pa-mybest","1346684180",["ext.narayam.core"]],["ext.narayam.rules.sa","1346684180",["ext.narayam.core"]],["ext.narayam.rules.sa-inscript","1346684180",["ext.narayam.core"]],[
"ext.narayam.rules.si-singlish","1346684180",["ext.narayam.core"]],["ext.narayam.rules.si-wijesekara","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ta","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ta-99","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ta-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ta-bamini","1346684180",["ext.narayam.core"]],["ext.narayam.rules.te","1346684180",["ext.narayam.core"]],["ext.narayam.rules.te-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ur","1346684180",["ext.narayam.core"]],["ext.narayam.rules.gu","1346684180",["ext.narayam.core"]],["ext.narayam.rules.gu-inscript","1346684180",["ext.narayam.core"]],["ext.narayam.rules.ru-standard","1347472641",["ext.narayam.core"]],["ext.narayam.rules.sah-standard","1346684180",["ext.narayam.core"]],["ext.narayam.rules.hne-inscript","1346684180",["ext.narayam.rules.hi-inscript"]],["ext.narayam.rules.gom-deva","1346684180",["ext.narayam.rules.hi"]],[
"ext.narayam.rules.gom-deva-inscript","1346684180",["ext.narayam.rules.hi-inscript"]],["ext.narayam.rules.mai-inscript","1346684180",["ext.narayam.rules.hi-inscript"]],["ext.narayam.rules.tcy","1346684180",["ext.narayam.rules.kn"]],["ext.wikiLove.icon","1346684314"],["ext.wikiLove.defaultOptions","1347936237"],["ext.wikiLove.startup","1347936237",["ext.wikiLove.defaultOptions","jquery.ui.dialog","jquery.ui.button","jquery.localize","jquery.elastic"]],["ext.wikiLove.local","1347936237"],["ext.wikiLove.init","1346684314",["ext.wikiLove.startup"]],["jquery.elastic","1346684314"],["mobile","1347555589"],["mobile.beta","1347555589"],["mobile.filePage","1346684175"],["mobile.references","1346684175"],["ext.math.mathjax","1346684167",[],"ext.math.mathjax"],["ext.math.mathjax.enabler","1346684167"],["ext.babel","1346684049"],["ext.apiSandbox","1346684031",["mediawiki.util","jquery.ui.button"]],["ext.interwiki.specialpage","1346684150",["jquery.makeCollapsible"]],["ext.checkUser","1346684069",[
"mediawiki.util"]]]);mw.config.set({"wgLoadScript":"//bits.wikimedia.org/commons.wikimedia.org/load.php","debug":false,"skin":"vector","stylepath":"//bits.wikimedia.org/static-1.20wmf11/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/w","wgScriptExtension":".php","wgScript":"/w/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"//commons.wikimedia.org","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.20wmf11","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Commons","5":"Commons talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk",
"14":"Category","15":"Category talk","100":"Creator","101":"Creator talk","102":"TimedText","103":"TimedText talk","104":"Sequence","105":"Sequence talk","106":"Institution","107":"Institution talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"commons":4,"commons_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"creator":100,"creator_talk":101,"timedtext":102,"timedtext_talk":103,"sequence":104,"sequence_talk":105,"institution":106,"institution_talk":107,"museum":106,"museum_talk":107,"com":4,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Wikimedia Commons","wgFileExtensions":["png","gif","jpg","jpeg","xcf","pdf","mid","ogg","ogv","svg","djvu","tiff","tif","oga"],"wgDBname":"commonswiki","wgFileCanRotate":true,"wgAvailableSkins":{"chick":"Chick","cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","myskin":
"MySkin","nostalgia":"Nostalgia","simple":"Simple","standard":"Standard","vector":"Vector"},"wgExtensionAssetsPath":"//bits.wikimedia.org/static-1.20wmf11/extensions","wgCookiePrefix":"commonswiki","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgMWSuggestTemplate":"//commons.wikimedia.org/w/api.php?action=opensearch\x26search={searchTerms}\x26namespace={namespaces}\x26suggest","wgCollapsibleNavBucketTest":false,"wgCollapsibleNavForceNewVersion":false,"wgWikiEditorToolbarClickTracking":false,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"},"wgNarayamEnabledByDefault":false,"wgNarayamRecentItemsLength":3,"wgNarayamHelpPage":"//www.mediawiki.org/wiki/Special:MyLanguage/Help:Extension:Narayam","wgNoticeFundraisingUrl":"https://donate.wikimedia.org/wiki/Special:LandingCheck","wgCentralPagePath":
"//meta.wikimedia.org/w/index.php","wgNoticeBannerListLoader":"Special:BannerListLoader"});};if(isCompatible()){document.write("\x3cscript src=\"//bits.wikimedia.org/commons.wikimedia.org/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=vector\x26amp;version=20120912T175701Z\"\x3e\x3c/script\x3e");}delete isCompatible;;

/* cache key: commonswiki:resourceloader:filter:minify-js:7:de7c4924ea69d68cec8399a1c0f58091 */