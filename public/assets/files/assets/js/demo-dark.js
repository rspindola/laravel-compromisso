$(document).ready(function(){$("#pcoded").pcodedmenu({themelayout:'vertical',verticalMenuplacement:'left',verticalMenulayout:'wide',MenuTrigger:'click',SubMenuTrigger:'click',activeMenuClass:'active',ThemeBackgroundPattern:'pattern4',HeaderBackground:'theme5',LHeaderBackground:'theme5',NavbarBackground:'theme1',ActiveItemBackground:'theme4',SubItemBackground:'theme2',ActiveItemStyle:'style0',ItemBorder:true,ItemBorderStyle:'none',SubItemBorder:true,DropDownIconStyle:'style1',menutype:'st5',freamtype:"theme1",layouttype:'dark',FixedNavbarPosition:true,FixedHeaderPosition:true,collapseVerticalLeftHeader:true,VerticalSubMenuItemIconStyle:'style6',VerticalNavigationView:'view1',verticalMenueffect:{desktop:"shrink",tablet:"overlay",phone:"overlay",},defaultVerticalMenu:{desktop:"expanded",tablet:"offcanvas",phone:"offcanvas",},onToggleVerticalMenu:{desktop:"offcanvas",tablet:"expanded",phone:"expanded",},});function freamtype(){$('.theme-color > a.fream-type').on("click",function(){var value=$(this).attr("fream-type");$('.pcoded').attr('fream-type',value);$('.pcoded-header').attr("header-theme","themelight"+value);$('.pcoded-navbar').attr("navbar-theme","theme"+ value);$('.navbar-logo').attr("logo-theme","theme"+ value);});};freamtype();function handlelayouttheme(){$('.theme-color > a.Layout-type').on("click",function(){var layout=$(this).attr("layout-type");$('.pcoded').attr("layout-type",layout);if(layout=='dark'){$('.pcoded-header').attr("header-theme","theme6");$('.pcoded-navbar').attr("navbar-theme","theme1");$('.navbar-logo').attr("logo-theme","theme6");$('body').addClass('dark');}
if(layout=='light'){$('.pcoded-header').attr("header-theme","theme1");$('.pcoded-navbar').attr("navbar-theme","themelight1");$('.navbar-logo').attr("logo-theme","theme1");$('body').removeClass('dark');}});};handlelayouttheme();function handleogortheme(){$('.theme-color > a.logo-theme').on("click",function(){var logotheme=$(this).attr("logo-theme");$('.navbar-logo').attr("logo-theme",logotheme);});};handleogortheme();function handleleftheadertheme(){$('.theme-color > a.leftheader-theme').on("click",function(){var lheadertheme=$(this).attr("lheader-theme");$('.pcoded-navigatio-lavel').attr("menu-title-theme",lheadertheme);});};handleleftheadertheme();function handleheadertheme(){$('.theme-color > a.header-theme').on("click",function(){var headertheme=$(this).attr("header-theme");$('.pcoded-header').attr("header-theme",headertheme);$('.navbar-logo').attr("logo-theme",headertheme);});};handleheadertheme();function handlenavbartheme(){$('.theme-color > a.navbar-theme').on("click",function(){var navbartheme=$(this).attr("navbar-theme");$('.pcoded-navbar').attr("navbar-theme",navbartheme);});};handlenavbartheme();function handleactiveitemtheme(){$('.theme-color > a.active-item-theme').on("click",function(){var activeitemtheme=$(this).attr("active-item-theme");$('.pcoded-navbar').attr("active-item-theme",activeitemtheme);});};handleactiveitemtheme();function handlesubitemtheme(){$('.theme-color > a.sub-item-theme').on("click",function(){var subitemtheme=$(this).attr("sub-item-theme");$('.pcoded-navbar').attr("sub-item-theme",subitemtheme);});};handlesubitemtheme();function handlethemebgpattern(){$('.theme-color > a.themebg-pattern').on("click",function(){var themebgpattern=$(this).attr("themebg-pattern");$('body').attr("themebg-pattern",themebgpattern);});};handlethemebgpattern();function handleVerticalNavigationViewChange(){$('#navigation-view').val('view1').on('change',function(get_value){get_value=$(this).val();$('.pcoded').attr('vnavigation-view',get_value);});};handleVerticalNavigationViewChange();function handlethemeverticallayout(){$('#theme-layout').change(function(){if($(this).is(":checked")){$('.pcoded').attr('vertical-layout',"box");$('#bg-pattern-visiblity').removeClass('d-none');}else{$('.pcoded').attr('vertical-layout',"wide");$('#bg-pattern-visiblity').addClass('d-none');}});};handlethemeverticallayout();function handleverticalMenueffect(){$('#vertical-menu-effect').val('shrink').on('change',function(get_value){get_value=$(this).val();$('.pcoded').attr('vertical-effect',get_value);});};handleverticalMenueffect();function handleverticalMenuplacement(){$('#vertical-navbar-placement').val('left').on('change',function(get_value){get_value=$(this).val();$('.pcoded').attr('vertical-placement',get_value);$('.pcoded-navbar').attr("pcoded-navbar-position",'absolute');$('.pcoded-header .pcoded-left-header').attr("pcoded-lheader-position",'relative');});};handleverticalMenuplacement();function handleverticalActiveItemStyle(){$('#vertical-activeitem-style').val('style1').on('change',function(get_value){get_value=$(this).val();$('.pcoded-navbar').attr('active-item-style',get_value);});};handleverticalActiveItemStyle();function handleVerticalIItemBorder(){$('#vertical-item-border').change(function(){if($(this).is(":checked")){$('.pcoded-navbar .pcoded-item').attr('item-border','false');}else{$('.pcoded-navbar .pcoded-item').attr('item-border','true');}});};handleVerticalIItemBorder();function handleVerticalSubIItemBorder(){$('#vertical-subitem-border').change(function(){if($(this).is(":checked")){$('.pcoded-navbar .pcoded-item').attr('subitem-border','false');}else{$('.pcoded-navbar .pcoded-item').attr('subitem-border','true');}});};handleVerticalSubIItemBorder();function handleverticalboderstyle(){$('#vertical-border-style').val('solid').on('change',function(get_value){get_value=$(this).val();$('.pcoded-navbar .pcoded-item').attr('item-border-style',get_value);});};handleverticalboderstyle();function handleVerticalDropDownIconStyle(){$('#vertical-dropdown-icon').val('style1').on('change',function(get_value){get_value=$(this).val();$('.pcoded-navbar .pcoded-hasmenu').attr('dropdown-icon',get_value);});};handleVerticalDropDownIconStyle();function handleVerticalSubMenuItemIconStyle(){$('#vertical-subitem-icon').val('style5').on('change',function(get_value){get_value=$(this).val();$('.pcoded-navbar .pcoded-hasmenu').attr('subitem-icon',get_value);});};handleVerticalSubMenuItemIconStyle();function handlesidebarposition(){$('#sidebar-position').change(function(){if($(this).is(":checked")){$('.pcoded-navbar').attr("pcoded-navbar-position",'fixed');$('.pcoded-header .pcoded-left-header').attr("pcoded-lheader-position",'fixed');}else{$('.pcoded-navbar').attr("pcoded-navbar-position",'absolute');$('.pcoded-header .pcoded-left-header').attr("pcoded-lheader-position",'relative');}});};handlesidebarposition();function handleheaderposition(){$('#header-position').change(function(){if($(this).is(":checked")){$('.pcoded-header').attr("pcoded-header-position",'fixed');$('.pcoded-navbar').attr("pcoded-header-position",'fixed');$('.pcoded-main-container').css('margin-top',$(".pcoded-header").outerHeight());}else{$('.pcoded-header').attr("pcoded-header-position",'relative');$('.pcoded-navbar').attr("pcoded-header-position",'relative');$('.pcoded-main-container').css('margin-top','0px');}});};handleheaderposition();function handlecollapseLeftHeader(){$('#collapse-left-header').change(function(){if($(this).is(":checked")){$('.pcoded-header, .pcoded ').removeClass('iscollapsed');$('.pcoded-header, .pcoded').addClass('nocollapsed');}else{$('.pcoded-header, .pcoded').addClass('iscollapsed');$('.pcoded-header, .pcoded').removeClass('nocollapsed');}});};handlecollapseLeftHeader();});function handlemenutype(get_value){$('.pcoded').attr('nav-type',get_value);};handlemenutype("st2");