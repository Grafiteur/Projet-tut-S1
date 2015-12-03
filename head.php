    <head>
        <meta charset="utf-8"/>
        <title>Notre site</title>
        <meta name="description" content="Les bases de données à travers oracle"/>
        <meta name="keywords" content="data, base de données, bdd, oracle, dataque"/>
        <link rel="stylesheet" type= "text/css" href="style.css"/>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script language="javascript">function popupGS() {window.open('http://www.google.fr','gs','Width=550,height=535,scrollbars=yes,resizable=yes');}</script>
        <script language="javascript"> // a mettre dans menu_principal.js quand ça fonctionnera
        sfHover = function() {
            var sfEls = document.getElementById("nav").getElementsByTagName("LI");
            for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                    this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                    this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
            }
        }
        if (window.attachEvent) window.attachEvent("onload", sfHover);
        </script>
    </head>
