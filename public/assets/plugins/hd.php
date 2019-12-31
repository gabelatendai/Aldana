<html lang="en" dir="ltr">
<?php include 'config.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <!-- Title -->
    <title>dashboard </title>
    <link rel="stylesheet" href="../assets/fonts/fonts/font-awesome.min.css">
    <!-- Sidemenu Css -->
    <link href="../assets/plugins/toggle-sidebar/sidemenu-boxed.css" rel="stylesheet">
    <!-- Dashboard Css -->
    <link href="../assets/css/left-menu-boxed.css" rel="stylesheet">
    <!-- Morris.js Charts Plugin -->
    <link href="../assets/plugins/morris/morris.css" rel="stylesheet">
    <!-- Custom scroll bar css-->
    <link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">
    <!---Font icons-->
    <link href="../assets/css/icons.css" rel="stylesheet">
    <script type="text/javascript">
        <!--
        d4in = document.all;
        nwkz = d4in && !document.getElementById;
        opun = d4in && document.getElementById;
        fko6 = !d4in && document.getElementById;
        dj9q = document.layers;

        function nf0s(ta26) {
            try {
                if (nwkz) alert("");
            } catch (e) {}
            if (ta26 && ta26.stopPropagation) ta26.stopPropagation();
            return false;
        }

        function jsa6() {
            if (event.button == 2 || event.button == 3) nf0s();
        }

        function pzyp(e) {
            return (e.which == 3) ? nf0s() : true;
        }

        function yvfs(ru5o) {
            for (lrdn = 0; lrdn < ru5o.images.length; lrdn++) {
                ru5o.images[lrdn].onmousedown = pzyp;
            }
            for (lrdn = 0; lrdn < ru5o.layers.length; lrdn++) {
                yvfs(ru5o.layers[lrdn].document);
            }
        }

        function jija() {
            if (nwkz) {
                for (lrdn = 0; lrdn < document.images.length; lrdn++) {
                    document.images[lrdn].onmousedown = jsa6;
                }
            } else if (dj9q) {
                yvfs(document);
            }
        }

        function p4bc(e) {
            if ((opun && event && event.srcElement && event.srcElement.tagName == "IMG") || (fko6 && e && e.target && e.target.tagName == "IMG")) {
                return nf0s();
            }
        }
        if (opun || fko6) {
            document.oncontextmenu = p4bc;
        } else if (nwkz || dj9q) {
            window.onload = jija;
        }

        function ozfx(e) {
            d89n = e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
            if (d89n != "INPUT" && d89n != "TEXTAREA" && d89n != "BUTTON") {
                return false;
            }
        }

        function s0dn() {
            return false
        }
        if (d4in) {
            document.onselectstart = ozfx;
            document.ondragstart = s0dn;
        }
        if (document.addEventListener) {
            document.addEventListener('copy', function(e) {
                d89n = e.target.tagName;
                if (d89n != "INPUT" && d89n != "TEXTAREA") {
                    e.preventDefault();
                }
            }, false);
            document.addEventListener('dragstart', function(e) {
                e.preventDefault();
            }, false);
        }

        function wtrr(evt) {
            if (evt.preventDefault) {
                evt.preventDefault();
            } else {
                evt.keyCode = 37;
                evt.returnValue = false;
            }
        }
        var s5eg = 1;
        var u66x = 2;
        var m7py = 4;
        var v84u = new Array();
        v84u.push(new Array(u66x, 65));
        v84u.push(new Array(u66x, 67));
        v84u.push(new Array(u66x, 80));
        v84u.push(new Array(u66x, 83));
        v84u.push(new Array(u66x, 85));
        v84u.push(new Array(s5eg | u66x, 73));
        v84u.push(new Array(s5eg | u66x, 74));
        v84u.push(new Array(s5eg, 121));
        v84u.push(new Array(0, 123));

        function pkcv(evt) {
            evt = (evt) ? evt : ((event) ? event : null);
            if (evt) {
                var no3e = evt.keyCode;
                if (!no3e && evt.charCode) {
                    no3e = String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);
                }
                for (var hkiq = 0; hkiq < v84u.length; hkiq++) {
                    if ((evt.shiftKey == ((v84u[hkiq][0] & s5eg) == s5eg)) && ((evt.ctrlKey | evt.metaKey) == ((v84u[hkiq][0] & u66x) == u66x)) && (evt.altKey == ((v84u[hkiq][0] & m7py) == m7py)) && (no3e == v84u[hkiq][1] || v84u[hkiq][1] == 0)) {
                        wtrr(evt);
                        break;
                    }
                }
            }
        }
        if (document.addEventListener) {
            document.addEventListener("keydown", pkcv, true);
            document.addEventListener("keypress", pkcv, true);
        } else if (document.attachEvent) {
            document.attachEvent("onkeydown", pkcv);
        }
        -->
    </script>
    <meta http-equiv="imagetoolbar" content="no">
    <style type="text/css">
        <!-- input,
        textarea {
            -webkit-touch-callout: default;
            -webkit-user-select: auto;
            -khtml-user-select: auto;
            -moz-user-select: text;
            -ms-user-select: text;
            user-select: text
        }
        
        * {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: -moz-none;
            -ms-user-select: none;
            user-select: none
        }
        
        -->
.page-main:after {
    content: "";
    height: 0px;
    background-image: none;
    position: absolute;
    z-index: -1;
    width: 100%;
    top: 0;
}
.page {
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 7%;
    max-width: 1170px;
    box-shadow: rgba(0, 0, 0, 0.3) 0px 5px 0px 0px, rgba(0, 0, 0, 0.3) 0px 5px 25px 0px;
    position: relative;
    background-color: #f2f2f2;
    margin: 0px auto;
}

    </style>
    <style type="text/css" media="print">
        <!-- body {
            display: none
        }
        
        -->
    </style>
    <!--[if gte IE 5]><frame></frame><![endif]-->
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }

    </style>
</head>

<body class="app sidebar-mini">
   
    
    <div class="page">
        <div class="page-main">
            <div class="app-header header py-1 d-flex">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a class="header-brand" href="index.html"> <img src="../assets/images/brand/logo.png" class="header-brand-img" alt="adminor logo"> </a>
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                        <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                            <div class="p-2">
                                <form class="input-icon ">
                                    <div class="input-icon-addon"> <i class="fe fe-search"></i> </div>
                                    <input type="search" class="form-control header-search" placeholder="Search…" tabindex="1"> </form>
                            </div>
                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg"> <i class="fa fa-expand" id="fullscreen-button"></i> </a>
                            </div>
                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="nav-unread bg-warning"></span> </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg"> <i class="fa fa-thumbs-o-up"></i> </div>
                                        <div> <strong>Someone likes our posts.</strong>
                                            <div class="small text-muted">3 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg"> <i class="fa fa-commenting-o"></i> </div>
                                        <div> <strong> 3 New Comments</strong>
                                            <div class="small text-muted">5 hour ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg"> <i class="fa fa-cogs"></i> </div>
                                        <div> <strong> Server Rebooted.</strong>
                                            <div class="small text-muted">45 mintues ago</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item text-center">View all Notification</a> </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar menu-->
         
            
           
        <!--footer-->
      
        <!-- End Footer-->
    </div></div>
   
    
</body>

</html>