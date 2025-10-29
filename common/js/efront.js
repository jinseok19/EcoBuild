var old_menu = '';

function menuclick(submenu) {
    if (old_menu != submenu) {
        if (old_menu != '') {
            old_menu.style.display = 'none';
        }
        submenu.style.display = 'block';
        old_menu = submenu;
    } else {
        submenu.style.display = 'none';
        old_menu = '';
    }
}

function MM_swapImgRestore() { //v3.0
    var i, x, a = document.MM_sr;
    for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
}

function MM_preloadImages() { //v3.0
    var d = document;
    if (d.images) {
        if (!d.MM_p) d.MM_p = new Array();
        var i, j = d.MM_p.length,
            a = MM_preloadImages.arguments;
        for (i = 0; i < a.length; i++)
            if (a[i].indexOf("#") != 0) {
                d.MM_p[j] = new Image;
                d.MM_p[j++].src = a[i];
            }
    }
}

function MM_findObj(n, d) { //v4.0
    var p, i, x;
    if (!d) d = document;
    if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
        d = parent.frames[n.substring(p + 1)].document;
        n = n.substring(0, p);
    }
    if (!(x = d[n]) && d.all) x = d.all[n];
    for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
    for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
    if (!x && document.getElementById) x = document.getElementById(n);
    return x;
}

function MM_swapImage() { //v3.0
    var i, j = 0,
        x, a = MM_swapImage.arguments;
    document.MM_sr = new Array;
    for (i = 0; i < (a.length - 2); i += 3)
        if ((x = MM_findObj(a[i])) != null) {
            document.MM_sr[j++] = x;
            if (!x.oSrc) x.oSrc = x.src;
            x.src = a[i + 2];
        }
}

function MM_jumpMenu(targ, selObj, restore) { //v3.0
    eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
    if (restore) selObj.selectedIndex = 0;
}


function flash(s, w, h, type, wm, id, autostart) {
    var obj = new String;
    var parameter = new String;
    var embed = new String;
    var html = new String;
    var allParameter = new String;
    var clsid = new String;
    var codebase = new String;
    var pluginspage = new String;
    var embedType = new String;
    var src = new String;
    var width = new String;
    var height = new String;


    src = s;
    width = w;
    height = h;

    var typ = type ? type : "f";

    if (typ == "f") {
        clsid = "D27CDB6E-AE6D-11cf-96B8-444553540000";
        codebase = "http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0";
        pluginspage = "http://www.macromedia.com/go/getflashplayer";
        embedType = "application/x-shockwave-flash";
    } else if (typ == "m") { //? 
        clsid = "22D6F312-B0F6-11D0-94AB-0080C74C7E95";
        codebase = "http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701";
        embedType = "application/x-oleobject";
        parameter += "<param name='FileName' value='" + src + "'>\n";
        var auto = autostart ? "1" : "0";
        parameter += "<param name='AutoStart' value='" + auto + "'>\n";
    }
    parameter += "<param name='movie' value='" + src + "'>\n";
    parameter += "<param name='quality' value='high'>\n";

    parameter += "<param name='allowScriptAccess' value='always'>\n";
    if (wm) {
        parameter += "<param name='wmode' value='transparent'>\n";
    }
    if (clsid) {
        obj = "<object id='movs' name='movs' classid=\"clsid:" + clsid + "\" codebase=\"" + codebase + "\" width='" + width + "' height='" + height + "'>\n";
    }
    embed = "<embed src='" + src + "' pluginspage='" + pluginspage + "' type='" + embedType + "' width='" + width + "' height='" + height + "'" + allParameter + " allowScriptAccess='always' wmode='transparent'></embed>\n";

    if (obj) {
        embed += "</object>\n";
    }
    html = obj + parameter + embed;
    document.write(html);
}





function inact(imgName) {
    if (document.images && basic_img != imgName)
        document[imgName].src = eval(imgName + '.src')
}

function act(imgName) {
    if (document.images && basic_img != imgName)
        document[imgName].src = eval(imgName + 'a.src')
}

function go_url(ss) {
    //alert(ss);
    switch (ss) {

        // 硫붿씤�ㅻ퉬寃뚯씠�� 留곹겕
        case "01":
            location.replace('../association/association.php');
            break;
        case "01_1":
            location.replace('../association/association.php');
            break;
        case "01_2":
            location.replace('../association/business.php ');
            break;
        case "01_3":
            location.replace('../association/member.php ');
            break;
        case "01_4":
            location.replace('../association/map.php');
            break;

        case "02":
            location.replace('../info/info.php');
            break;
        case "02_1":
            location.replace('../info/info.php');
            break;
        case "02_2":
            location.replace('../info/medical.php');
            break;

        case "03":
            location.replace('../news/news.php');
            break;
        case "03_1":
            location.replace('../news/news.php');
            break;
        case "03_2":
            location.replace('../news/member_news.php');
            break;

        case "04":
            location.replace('../major/hospital.php');
            break;
        case "04_1":
            location.replace('../major/hospital.php');
            break;
        case "04_2":
            location.replace('../major/notice.php');
            break;
        case "04_3":
            location.replace('../major/train.php');
            break;
        case "04_4":
            location.replace('../major/refer.php');
            break;

        case "05":
            location.replace('../notice/notice_01.php');
            break;
        case "05_1":
            location.replace('../notice/notice_01.php');
            break;
        case "05_2":
            location.replace('../notice/calendar.php');
            break;

        case "06":
            location.replace('../job/people.php');
            break;
        case "06_1":
            location.replace('../job/people.php');
            break;
        case "06_2":
            location.replace('../job/employ.php');
            break;

        case "07":
            location.replace('../insurance/notice.php');
            break;
        case "07_1":
            location.replace('../insurance/notice.php');
            break;
        case "07_2":
            location.replace('../insurance/data.php');
            break;

        case "08":
            location.replace('../medicine/notice.php');
            break;
        case "08_1":
            location.replace('../medicine/notice.php');
            break;
        case "08_2":
            location.replace('../medicine/data.php');
            break;

        case "09":
            location.replace('../data/precedent.php');
            break;
        case "09_1":
            location.replace('../data/precedent.php');
            break;
        case "09_2":
            location.replace('../data/question.php');
            break;
        case "09_3":
            location.replace('../data/refer.php');
            break;
        case "09_4":
            location.replace('../data/law.php');
            break;

    }
}

var basic_img = "";

function lock_menu(Menu, cate) {
    if (Menu) {
        //var target_menu = eval("document.all."+Menu); 
        var target_menu = document.getElementById(Menu); //�뚯씠�댄룺�ㅼ뿉�� �쎄구湲�
        target_menu.src = (cate) ? "/" + cate + "/images/" + Menu + "_on.gif" : "images/" + Menu + "_on.gif";
        basic_img = Menu;
        //alert(target_menu.src);
    }
}

//硫붿씤 �앹뾽李� �꾩슦湲�
function popWindow(boName, wrId) {
    window.open("/tre/doctor.php?bo_table=" + boName + "&wr_id=" + wrId, "popUp", "width=650, height=700");
}

//硫붿씤 �� ��,�ㅽ봽
function boTab(id, more) {

    var moreLink = document.getElementById("more");

    for (i = 1; i <= 2; i++) {
        if (i == id) {
            if (document.getElementById('menu' + i).style.display == "none") {
                document.getElementById('menu' + i).style.display = "block";
                document.getElementById('img' + i).src = "/common/images/not0" + i + "_on.gif";
                moreLink.href = "/bbs/bbs/board.php?bo_table=" + more;
            } //end if

        } else {
            document.getElementById('menu' + i).style.display = "none";
            document.getElementById('img' + i).src = "/common/images/not0" + i + "_off.gif";
        } //end if ~ else

    } //end for

}

//�섎즺吏꾩냼媛� �앹뾽�� ��,�ㅽ봽
function popTab(id) {

    for (i = 1; i <= 5; i++) {
        if (i == id) {
            if (document.getElementById('tab' + i).style.display == "none") {
                document.getElementById('tab' + i).style.display = "block";
                document.getElementById('tabImg' + i).src = "/tre/images/tab0" + i + "_on.gif";
            } //end if

        } else {
            document.getElementById('tab' + i).style.display = "none";
            document.getElementById('tabImg' + i).src = "/tre/images/tab0" + i + ".gif";
        } //end if ~ else

    } //end for

}

function tab_menu() {

    if (!$('#tab_menu')) return;

    var $menu_content = $('#tab_menu div.menu_content'),
        $h2 = $('#tab_menu h2');

    $h2.filter(':first').addClass('clicked');
    $menu_conetnt.not(':first').addClass('none');

    $('#tab_menu h2').click(function() {
        $menu_conetnt.addClass('none');
        $h2.removeClass('clicked');
        $(this).addClass('clicked').next().removeClass('none');
    })
}


// 硫붿씤 ��찓�� �덉씠�� �ㅽ겕由�
function trans(id, after) {
    eval(id + '.filters.blendTrans.stop();');
    eval(id + '.filters.blendTrans.Apply();');
    eval(id + '.src="' + after + '";');
    eval(id + '.filters.blendTrans.Play();');
}

function Find_Obj(n, d) {
    var p, i, x;
    if (!d) d = document;
    if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
        d = parent.frames[n.substring(p + 1)].document;
        n = n.substring(0, p);
    }
    if (!(x = d[n]) && d.all) x = d.all[n];
    for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
    for (i = 0; !x && d.layers && i < d.layers.length; i++) x = Find_Obj(n, d.layers[i].document);
    if (!x && document.getElementById) x = document.getElementById(n);
    return x;
}

function Show_Hide() {
    var i, p, v, obj, args = Show_Hide.arguments;
    for (i = 0; i < (args.length - 2); i += 3)
        if ((obj = Find_Obj(args[i])) != null) {
            v = args[i + 2];
            if (obj.style) {
                obj = obj.style;
                v = (v == 'show') ? 'visible' : (v = 'hide') ? 'hidden' : v;
            }
            obj.visibility = v;
        }
}




function locat(val) {
    if (val == "latest1") {
        document.getElementById("latest1").style.display = "block";
        document.getElementById("latest2").style.display = "none";
        document.getElementById("latest3").style.display = "none";
        document.getElementById("la_img_1").src = "images/gj_bt01_off.gif";
        document.getElementById("la_img_2").src = "images/gj_bt02.gif";
        document.getElementById("la_img_3").src = "images/gj_bt03.gif";
    } else if (val == "latest2") {
        document.getElementById("latest1").style.display = "none";
        document.getElementById("latest2").style.display = "block";
        document.getElementById("latest3").style.display = "none";
        document.getElementById("la_img_1").src = "images/gj_bt01.gif";
        document.getElementById("la_img_2").src = "images/gj_bt02_off.gif";
        document.getElementById("la_img_3").src = "images/gj_bt03.gif";
    } else if (val == "latest3") {

        document.getElementById("latest1").style.display = "none";
        document.getElementById("latest2").style.display = "none";
        document.getElementById("latest3").style.display = "block";
        document.getElementById("la_img_1").src = "images/gj_bt01.gif";
        document.getElementById("la_img_2").src = "images/gj_bt02.gif";
        document.getElementById("la_img_3").src = "images/gj_bt03_off.gif";
    }
}




// 硫붿씤 �듬찓��
function initMoving(target, position, topLimit, btmLimit) {
    if (!target)
        return false;

    var obj = target;
    obj.initTop = position;
    obj.topLimit = topLimit;
    obj.bottomLimit = document.documentElement.scrollHeight - btmLimit;

    obj.style.position = "absolute";
    obj.top = obj.initTop;
    obj.left = obj.initLeft;

    if (typeof(window.pageYOffset) == "number") {
        obj.getTop = function() {
            return window.pageYOffset;
        }
    } else if (typeof(document.documentElement.scrollTop) == "number") {
        obj.getTop = function() {
            return document.documentElement.scrollTop;
        }
    } else {
        obj.getTop = function() {
            return 0;
        }
    }

    if (self.innerHeight) {
        obj.getHeight = function() {
            return self.innerHeight;
        }
    } else if (document.documentElement.clientHeight) {
        obj.getHeight = function() {
            return document.documentElement.clientHeight;
        }
    } else {
        obj.getHeight = function() {
            return 500;
        }
    }

    obj.move = setInterval(function() {
        if (obj.initTop > 0) {
            pos = obj.getTop() + obj.initTop;
        } else {
            pos = obj.getTop() + obj.getHeight() + obj.initTop;
            //pos = obj.getTop() + obj.getHeight() / 2 - 15;
        }

        if (pos > obj.bottomLimit)
            pos = obj.bottomLimit;
        if (pos < obj.topLimit)
            pos = obj.topLimit;

        interval = obj.top - pos;
        obj.top = obj.top - interval / 3;
        obj.style.top = obj.top + "px";
    }, 30)
}