html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Aquincum - premium admin template by Eugene Kopyov</title>

<link href="../../assets/css/panel_css/styles.css" rel="stylesheet" type="text/css" />
<!--[if IE]> <link href="css/ie.css" rel="stylesheet" type="text/css"> <![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/plugins/tables/jquery.sortable.js"></script>
<script type="text/javascript" src="js/plugins/tables/jquery.resizable.js"></script>

<script type="text/javascript" src="js/plugins/forms/jquery.autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.uniform.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.autotab.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.ibutton.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"></script>

<script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="js/plugins/wizards/jquery.form.wizard.js"></script>
<script type="text/javascript" src="js/plugins/wizards/jquery.validate.js"></script>
<script type="text/javascript" src="js/plugins/wizards/jquery.form.js"></script>

<script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.fileTree.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="js/plugins/others/jquery.fullcalendar.js"></script>
<script type="text/javascript" src="js/plugins/others/jquery.elfinder.js"></script>

<script type="text/javascript" src="js/plugins/forms/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="js/files/bootstrap.js"></script>
<script type="text/javascript" src="js/files/functions.js"></script>

<script type="text/javascript" src="js/charts/hBar_side.js"></script>  


</head>
<body>
<!-- Sidebar begins -->
<div id="sidebar" style="background-color: black;">
    <div class="mainNav">
        <div class="user">
            <a title="" class="leftUserDrop"><img src="../../images/user.png" alt="" widht="30px"/><span><strong>3</strong></span></a><span><a href="register" />register</span>
            <ul class="leftUser">
                <li><a href="#" title="" class="sProfile">My profile</a></li>
                <li><a href="#" title="" class="sMessages">Messages</a></li>
                <li><a href="#" title="" class="sSettings">Settings</a></li>
                <li><a href="#" title="" class="sLogout">Logout</a></li>
            </ul>
        </div>
        
        <!-- Responsive nav -->
        <div class="altNav">
            <div class="userSearch">
                <form action="">
                    <input type="text" placeholder="search..." name="userSearch" />
                    <input type="submit" value="" />
                </form>
            </div>
            
            <!-- User nav -->
            <ul class="userNav">
                <li><a href="#" title="" class="profile"></a></li>
                <li><a href="#" title="" class="messages"></a></li>
                <li><a href="#" title="" class="settings"></a></li>
                <li><a href="#" title="" class="logout"></a></li>
            </ul>
        </div>
        
        <!-- Main nav -->
        <ul class="nav">
            <li><a href="../../index.html" title=""><img src="../../images/icons/mainnav/dashboard.png" alt="" /><span>Dashboard</span></a></li>
            <li><a href="../../ui.html" title="" class="active"><img src="../../images/icons/mainnav/ui.png" alt="" /><span>UI elements</span></a>
                <ul>
                    <li><a href="ui.html" title=""><span class="icol-fullscreen"></span>General elements</a></li>
                    <li><a href="ui_icons.html" title=""><span class="icol-images2"></span>Icons</a></li>
                    <li><a href="ui_buttons.html" title=""><span class="icol-coverflow"></span>Button sets</a></li>
                    <li><a href="ui_grid.html" title=""><span class="icol-view"></span>Grid</a></li>
                    <li><a href="ui_custom.html" title=""><span class="icol-cog2"></span>Custom elements</a></li>
                </ul>
            </li>
            <li><a href="../../forms.html" title=""><img src="../../images/icons/mainnav/forms.png" alt="" /><span>Forms stuff</span></a>
                <ul>
                    <li><a href="forms.html" title=""><span class="icol-list"></span>Inputs &amp; elements</a></li>
                    <li><a href="form_validation.html" title=""><span class="icol-alert"></span>Validation</a></li>
                    <li><a href="form_editor.html" title=""><span class="icol-pencil"></span>File uploader &amp; WYSIWYG</a></li>
                    <li><a href="form_wizards.html" title=""><span class="icol-signpost"></span>Form wizards</a></li>
                </ul>
            </li>
            <li><a href="../../messages.html" title=""><img src="../../images/icons/mainnav/messages.png" alt="" /><span>Messages</span></a></li>
            <li><a href="statistics.html" title=""><img src="../../images/icons/mainnav/statistics.png" alt="" /><span>Statistics</span></a></li>
            <li><a href="tables.html" title=""><img src="../../images/icons/mainnav/tables.png" alt="" /><span>Tables</span></a>
                <ul>
                    <li><a href="../../tables.html" title=""><span class="icol-frames"></span>Standard tables</a></li>
                    <li><a href="tables_dynamic.html" title=""><span class="icol-refresh"></span>Dynamic table</a></li>
                    <li><a href="tables_control.html" title=""><span class="icol-bullseye"></span>Tables with control</a></li>
                    <li><a href="tables_sortable.html" title=""><span class="icol-transfer"></span>Sortable and resizable</a></li>
                </ul>
            </li>
            <li><a href="../../other_calendar.html" title=""><img src="../../images/icons/mainnav/other.png" alt="" /><span>Other pages</span></a>
                <ul>
                    <li><a href="other_calendar.html" title=""><span class="icol-dcalendar"></span>Calendar</a></li>
                    <li><a href="other_gallery.html" title=""><span class="icol-images2"></span>Images gallery</a></li>
                    <li><a href="other_file_manager.html" title=""><span class="icol-files"></span>File manager</a></li>
                    <li><a href="#" title="" class="exp"><span class="icol-alert"></span>Error pages <span class="dataNumRed">6</span></a>
                        <ul>
                            <li><a href="other_403.html" title="">403 error</a></li>
                            <li><a href="other_404.html" title="">404 error</a></li>
                            <li><a href="other_405.html" title="">405 error</a></li>
                            <li><a href="other_500.html" title="">500 error</a></li>
                            <li><a href="other_503.html" title="">503 error</a></li>
                            <li><a href="other_offline.html" title="">Website is offline error</a></li>
                        </ul>
                    </li>
                    <li><a href="other_typography.html" title=""><span class="icol-create"></span>Typography</a></li>
                    <li><a href="other_invoice.html" title=""><span class="icol-money2"></span>Invoice template</a></li>
                </ul>
            </li>
        </ul>
    </div>
    
    
<!-- Sidebar ends -->
	
</body>




</html>