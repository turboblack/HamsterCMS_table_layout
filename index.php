<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<HEAD>
<TITLE>My COOL ASCII PAGE<?php
        if(isset($_GET['p'])){
            $_GET['p'] = $_GET['p'];
        } else {
            $_GET['p'] = 'index.txt';
        }
        echo preg_replace('#([^/][а-Я]+)\.txt$#', '$1', $_GET['p']);
        ?></TITLE>
<META NAME="description" CONTENT="This is my COOL Description">
<meta http-equiv="content-type" content="text/html; charset=UTF8">
<BASE TARGET="_top">
<STYLE TYPE="text/css">BODY {margin-left:0; margin-right:0; margin-top:0;}
  .empty-cell {
    width: 1px;
    height: 1px;
    border: 0;
    margin: 0;
    padding: 0;
  }
</STYLE>
</HEAD>

<BODY SCROLL="auto" BGCOLOR="#000000" LINK="#008080" VLINK="#008080" TEXT="#008040" TOPMARGIN=0 LEFTMARGIN=0>

<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH=100%><TR><TD ALIGN=center>

<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH=867>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=1><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=1 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=95 COLSPAN=6 ALIGN="left"><FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">.~**@@@<BR></FONT></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=18><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=18 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=180 COLSPAN=5 ALIGN="left"><FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">______________LI_~-._<BR></FONT></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=18><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=18 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=205 ROWSPAN=2 COLSPAN=8 ALIGN="left"><FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">/_/_/_/_/_/_/_/_/_/_/_/___\\<BR></FONT></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=3><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=3 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=450 ROWSPAN=2 COLSPAN=2 ALIGN="left"><FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">Wellcome to new ASCII THEME<BR></FONT></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=15><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=15 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD WIDTH=20 ROWSPAN=5 COLSPAN=3 ALIGN="left">

<FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">/ /<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR>
*<BR></FONT>

</TD>
<TD class="empty-cell"></TD>
<TD WIDTH=146 ROWSPAN=2 COLSPAN=2 ALIGN="left"><FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">____[&nbsp; MENU&nbsp; ]____<BR><BR></FONT></TD>
<TD WIDTH=20 ROWSPAN=6 ALIGN="left">

<FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">/ /<BR>
|<BR>
|<BR>
|<BR>
|<BR>
|<BR>
|<BR>
|<BR>
|<BR>
|<BR>
|<BR>
|<BR>
|<BR>
*<BR>
*<BR>
*
<BR></FONT>

</TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=6><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=6 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=624 ROWSPAN=2 COLSPAN=4 ALIGN="left"><FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">____________________________________________________________________<BR></FONT></TD>
<TD WIDTH=1 HEIGHT=14><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=14 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD WIDTH=165 ROWSPAN=3 COLSPAN=3 ALIGN="left"><FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">    <?php
    $nav = glob('*.txt');
    usort($nav, function($a, $b) {
        return filemtime($b) - filemtime($a);
    });

    foreach ($nav as $filename) {
        $linkfile = preg_replace('#([^/]+)\.txt$#', '$1', $filename);
        echo("<li><a href=\"index.php?p=$filename\">$linkfile</a></li>");
    }
    ?><BR>
&nbsp;&nbsp;_________________
<BR>	&nbsp;&nbsp;____[&nbsp; LINKS&nbsp; ]_____<BR>
	<br>
  <a class="ws14" href="https://envs.net/~downgrade/">About Author</a>
<br>
  <a class="ws14" href="https://midnight.pub/">MidnightPub</a>
<br>
  <a class="ws14" href="http://dgmag.in/">DOWNGRADE Magazine</a>
<br>
  <a class="ws14" href="http://sannata.org">Iron Ghosts of the Past</a>
<br>
  <a class="ws14" href="http://downgrade.me.eu.org">Author Page</a>
	
<BR><BR>	L==================*<BR>
	</FONT></TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=5><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=5 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=15 ROWSPAN=7 COLSPAN=2 ALIGN="left">

<FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">/<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>

|<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>

|<BR>
|<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR></FONT>

</TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=15 ROWSPAN=7 ALIGN="left">

<FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">/<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>

|<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR>

|<BR>
|<BR>
 |<BR>
 |<BR>
 |<BR>
 |<BR></FONT>

</TD>
<TD WIDTH=1 HEIGHT=10><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=10 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD WIDTH=25>&nbsp;</TD>
<TD class="empty-cell"></TD>
<TD WIDTH=600 ROWSPAN=6 COLSPAN=2 ALIGN="left">
    <FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">
        <?php
            $nothere = array("/", "\\");
            $_GET['p'] = str_replace($nothere, "", $_GET['p']);
            if(file_exists($_GET['p'])){
                echo('<div style="max-height: 450px; overflow-y: auto;">');
                echo(file_get_contents($_GET['p']));
                echo('</div>');
            } else {
                echo("ERROR 404 - Page Not Found");
                header("Status: 404 Not Found");
            }
        ?><BR>
    </FONT>
	<FONT STYLE="font-size:12pt" SIZE=3 FACE="Arial, sans-serif">&nbsp; ._ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
_ _ _ _ _ _ _ _ _ .<BR></FONT>
</TD>

<TD WIDTH=1 HEIGHT=187><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=187 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>

<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=13><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=13 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD class="empty-cell"></TD>
<TD WIDTH=20 ROWSPAN=4 ALIGN="left">

</TD>
<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=10><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=10 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD WIDTH=25>&nbsp;</TD>
<TD WIDTH=20 ROWSPAN=2 COLSPAN=3 ALIGN="left">

</TD>
<TD WIDTH=10>&nbsp;</TD>

<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=20><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=20 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD WIDTH=25>&nbsp;</TD>

<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=200><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=200 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD WIDTH=25>&nbsp;</TD>

<TD class="empty-cell"></TD>
<TD WIDTH=1 HEIGHT=31><IMG SRC="t.gif" ALT="" WIDTH=1 HEIGHT=31 BORDER=0></TD>
</TR>
<TR VALIGN="top" ALIGN="left">
<TD WIDTH=25>&nbsp;</TD>
<TD class="empty-cell"></TD>
<TD class="empty-cell"></TD>
<TD WIDTH=10>&nbsp;</TD>
<TD WIDTH=10>&nbsp;</TD>
<TD WIDTH=112>&nbsp;</TD>
<TD WIDTH=43>&nbsp;</TD>
<TD WIDTH=20>&nbsp;</TD>


</TABLE>

</TD></TR></TABLE>



</BODY>
</HTML>