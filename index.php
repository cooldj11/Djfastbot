<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
-=Pak Girl Dj=-

</title><link rel="stylesheet" type="text/css" href="http://kinghelp.heck.in/files/new-style.css" media="all,handheld"/><link rel="shortcut icon" href="">
<script type="text/javascript" src="http://wapllar.com/ad/pops/?id=a28e6fl34q"></script>


<?php
session_start();
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by  khadija15 ',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("Your self comment has been successfully Saved")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("Congrats Your Bot is on ")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like or Comment';
}else{
        $satu='off';
        $ak='Like only';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='on';
        $ek='Powered on';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Self Comment';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Dj bot Use by '.$nm.'</a></h3>
<ul>
<font color="yellow">Welcome Back 👉💁 </font>: <font color="skyblue">'.$nm.'</font></li>
<li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:110px; height:110px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like or Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Self Comment</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Text Your Comment
<br>
<input type="text" name="text" style="height:60px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<center>
<div id="header">
<h3 align="center">
<a href="h"><img src="http://dl2.glitter-graphics.net/pub/1599/1599772tdznowdr4o.gif" width=77 height=100 border=0></a>
<a href="h"><img src="http://www.desicomments.com/i/19/p.gif" border=0 ><img src="http://www.desicomments.com/i/19/a.gif" border=0 ><img src="http://www.desicomments.com/i/19/k.gif" border=0 ><img src="http://www.desicomments.com/i/0.gif" border=0 ><img src="http://www.desicomments.com/i/19/g.gif" border=0 ><img src="http://www.desicomments.com/i/19/i.gif" border=0 ><img src="http://www.desicomments.com/i/19/r.gif" border=0 ><img src="http://www.desicomments.com/i/19/l.gif" border=0 ><img src="http://www.desicomments.com/i/0.gif" border=0 ><img src="http://www.desicomments.com/i/19/d.gif" border=0 ><img src="http://www.desicomments.com/i/19/j.gif" border=0>
<a href=""><img src="http://dl4.glitter-graphics.net/pub/986/986314it2wipppuo.gif" width=90 height=90 border=0></a>
</h1>
<h2 class="description">
'.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<br>
'.$jam.'</h2></div></center>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
<li>
Administrator Websites By        
</li>
</h2>
<br>
<li>
<span class="mfss fcg">
<b><marquee behavior="alternate"  direction="right to left left to right"  alternateamount="15"> <a href="h"><img src="http://www.desicomments.com/i/8/b.gif" border=0 ><img src="http://www.desicomments.com/i/8/o.gif" border=0 ><img src="http://www.desicomments.com/i/8/t.gif" border=0 ><img src="http://www.desicomments.com/i/0.gif" border=0 ><img src="http://www.desicomments.com/i/8/m.gif" border=0 ><img src="http://www.desicomments.com/i/8/a.gif" border=0 ><img src="http://www.desicomments.com/i/8/s.gif" border=0 ><img src="http://www.desicomments.com/i/8/t.gif" border=0 ><img src="http://www.desicomments.com/i/8/e.gif" border=0 ><img src="http://www.desicomments.com/i/8/r.gif" border=0 ></a>
</marquee></font>
<a href="h"><img src="http://www.desicomments.com/i/17/k.gif" border=0 ><img src="http://www.desicomments.com/i/17/u.gif" border=0 ><img src="http://www.desicomments.com/i/17/m.gif" border=0 ><img src="http://www.desicomments.com/i/17/a.gif" border=0 ><img src="http://www.desicomments.com/i/17/r.gif" border=0 ></a>
</h2></div></li>
<div class="post-content">
<table><tbody><tr> <td
class="apm" valign="top"> <a href="http://facebook.com/100005900251854">
<img src="https://graph.facebook.com/100005900251854/picture" style="border: 3px solid #000; padding: 3px;
margin: 2px; width:5px; height:40px; float: left;" alt="jatt" class="thumbnail"/> </a></td><td class="l" valign="top">
<span><img src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/yr/r/kkE5oR4elmj.png" width="10"
height="7" class="img">
<font color="Pink"><b>💙Khadija Umar💙;</b></font> <img src="https://m-static.ak.fbcdn.net/rsrc.php/v2/yU/r/gATt-jY8pG8.png" width="8" height="7" class="presence_icon
presenceIcon img"><br> <img src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/yp/r/--soLpMIbaJ.png" width="10" height="10" class="img"> </span> <span class="fcg"><font color="brown"> - </font> <a class="sec" href="http://facebook.com/100005900251854"><b>Cool Dj</b></a></span><br><img
src="http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/ggoudhN5vIO.png" width="9" height="9" class="feedAudienceIcon
img"><font color="silver"></font> <a
class="aps fcs" href="http://fb.me/khadija15"><b>Follow me on Facebook</b></a></td></tr></table>
</div> 
<br>
<center><a href="http://www.fb.me/khadija15"><img src="http://dl9.glitter-graphics.net/pub/152/152179h4qroi8q2b.gif" width=4500 height=40 border=0></a><br><a href="http://www.fb.me/khadija15" target=_blank></a></center>
<script language="javascript" src="http://start-wap.xtgem.com/Koleksi_Effect/baloon.js"></script>
<script type="text/javascript" src="http://wapar.com/ad/pops/?id=l477i6p5s2"></script></div><div class="iblock"></a>


<div class="post-meta2">

</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
			<!-- Nav -->
					<nav id="nav">
						<ul>
							<li> 
							 <a href="h"><img src="http://dl4.glitter-graphics.net/pub/1169/1169884c6c9oajyvh.gif" width=88 height=120 border=0></a>
</a></li>
<br>
<li>
							<a href="https://facebook.com/mister.sherry"><center><a href="https://goo.gl/oD1m8B" target="blank">• ALLOW PERMISSION •</a></center></a></li>
							<br>
							<li><a href="https://goo.gl/EwUiuu">• Click here to GET Your TOKEN •</a></li>
							<br>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:40px;" name="token"><input class="inp-btn" type="submit" style="height:50px;" value=" 🌘Sυвмιт✔ "></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Robot Users : <font color="Burgundy">'.count($user).'</font>
<br>
Script & Bot &copy; 2016<br>
<font color="maroon">Powered By</font> <a href="http://facebook.com/khadija15"><font color="purple">Cool Dj;</font></h3><br>
Script By <a href="https://www.Facebook.com/khadija15"><font color="teal">Khadija Umar</font></h3><br>
<a href="h"><img src="http://dl4.glitter-graphics.net/pub/1291/1291264qm643andhf.gif" width=450 height=450 border=0></a><br><a href="http://www.fb.me/khadija15" target=_blank></a></h3>
</div>';
} 

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid Get new token")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>