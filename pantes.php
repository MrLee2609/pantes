<?php
// gausah ganti copyright kalo mau di hargai
// four's army hacktivist
// Author By : Mr.lee
// bug report : mrlee@programmer.net
function disable_ob(){
	ini_set('output_buffering','off');
	ini_set('zlib.output_compression',false); ini_set('implicit_flush',true); ob_implicit_flush(true);
	while(ob_get_level()>0){
		$level = ob_get_level();
		ob_end_clean();
		if(ob_get_level()== $level);
	}
	if(function_exists('apache_setenv')){
		apache_setenv('no-gzip','1'); apache_setenv('dont-vary','1');
	}
}
@system("clear");
$blue="\033[0;34";
$cyan="\033[0;36m";
$green="\033[0;34m";
$okegreen="\033[92m";
$lightgreen="\033[1;32m";
$white="\033[1;37m";
$red="\033[1;31m";
$yellow="\033[1;33m";
print "$red
    =======================================================================================
    ||      ██████╗ ███████╗███╗   ██╗████████╗███████╗███████╗████████╗███████╗██████╗   ||
    ||      ██╔══██╗██╔════╝████╗  ██║╚══██╔══╝██╔════╝██╔════╝╚══██╔══╝██╔════╝██╔══██╗  ||
    ||      ██████╔╝█████╗  ██╔██╗ ██║   ██║   █████╗  ███████╗   ██║   █████╗  ██████╔╝  ||
    ||      ██╔═══╝ ██╔══╝  ██║╚██╗██║   ██║   ██╔══╝  ╚════██║   ██║   ██╔══╝  ██╔══██╗  ||
    ||      ██║     ███████╗██║ ╚████║   ██║   ███████╗███████║   ██║   ███████╗██║  ██║  ||
    ||      ╚═╝     ╚══════╝╚═╝  ╚═══╝   ╚═╝   ╚══════╝╚══════╝   ╚═╝   ╚══════╝╚═╝  ╚═╝  ||
    ||                                                                                    ||\n";
print "$red        [ =========================================================================== ]\n";
print "$red                   TOOLS PENTESTER V2.3\n";
print "$red                   based : php-cli\n";
print "$red                   Coded by Mr. lee\n";
print "$white                   blog : http://aliXploit.blogspot.com\n";
print "$white                   contact : mrlee@programmer.net\n";
print "$white                   usage: php namafile.php \n";
print "$white                   Thanks To :  Four's army hacktivist\n";
print "$white        [ ===========================================================================]\n\n
  [$red 1 $white] Whois Lookup
  [$red 2 $white] Traceroute
  [$red 3 $white] DNS Lookup
  [$red 4 $white] Reverse DNS Lookup
  [$red 5 $white] GeoIP Lookup
  [$red 6 $white] Port Scan
  [$red 7 $white] Reverse IP Lookup
  [$red 8 $white] ping
  [$red 9 $white] http headers check
  [$red 10 $white] zone transfer
  [$red 11 $white] md5 generate
  [$red 12 $white] md5 Decrypter
  [$red 13 $white] auto deface v1.2
  [$red 14 $white] base64 encode
  [$red 15 $white] base64 decode
  [$red 16 $white] FindMyHash SH1
  [$red 17 $white] FindMyHash MD4
  [$red 18 $white] Admin Finder
  [$red 19 $white] LALIN
  [$red 20 $white] Garuda Security Hacker tools
  [$red 21 $white] dirsearch
  [$red 22 $white] pentester installer v2.1
  [$red 23 $white] defacer.id mass notifier
  [$red 99 $white] exit\n";
echo "pilihan => "; $lee=trim(fgets(STDIN));
if($lee=="1"){
	echo "masukan ip or domain : "; $whois=trim(fgets(STDIN));
	@system("curl http://api.hackertarget.com/whois/?q=$whois");
	echo "done\n";
}
elseif($lee=="2"){
		echo "masukan ip or domain : "; $traceroute=trim(fgets(STDIN));
			@system("curl https://api.hackertarget.com/mtr/?q=$traceroute");
			echo "done\n";
}
elseif($lee=="3"){
		echo "masukan ip or domain : "; $dns=trim(fgets(STDIN));
         @system("curl http://api.hackertarget.com/dnslookup/?q=$dns");
		 echo "done\n";
}
elseif($lee=="4"){
		echo "masukan ip or domain : "; $rev=trim(fgets(STDIN));
      @system("curl https://api.hackertarget.com/reversedns/?q=$rev");
	   echo "done\n";
}
elseif($lee=="5"){
		echo "masukan ip or domain : "; $geo=trim(fgets(STDIN));
		@system("curl http://api.hackertarget.com/geoip/?q=$geo");
		echo "done\n";
}
elseif($lee=="6"){
	echo "masukan ip or domain : "; $port=trim(fgets(STDIN));
	@system("curl http://api.hackertarget.com/nmap/?q=$port");
	echo "done\n";
}
elseif($lee=="7"){
	echo "masukan ip or domain : "; $revip=trim(fgets(STDIN));
	@system("wget http://api.hackertarget.com/reverseiplookup/?q=$revip ; clear ; curl http://api.hackertarget.com/reverseiplookup/?q=$revip");
	echo "\nfile saved gan ";
	@system("pwd")
;
	echo "\nFile : index.html?q=$revip";
}
elseif($lee=="8"){
 echo "masukan ip : "; $ping=trim(fgets(STDIN));
@system("curl https://api.hackertarget.com/nping/?q=$ping");
echo "\ndone\n";
}
elseif($lee=="9"){
 echo "masukan ip or domain : "; $header=trim(fgets(STDIN));
@system("curl https://api.hackertarget.com/httpheaders/?q=$header");
 echo "done\n";
}
elseif($lee=="10"){
 echo "masukan ip or domain : ";
$zone=trim(fgets(STDIN));
@system("curl https://api.hackertarget.com/zonetransfer/?q=$zone");
echo "done\n";
}
elseif ($lee=="11"){
print  "\n$yellow masukan text :";
$kontol = trim(fgets(STDIN, 1024));
echo "\n$lightgreen Sukses -> ", md5($kontol), "\n";
}
 elseif($lee=="12"){
print "\n$cyan masukan hash => ";
$mD5 = trim(fgets(STDIN, 1024));
echo "$cyan
======================\n
Please wait Mastah 
Sedang mencari hash   \n
======================\n";
@system("python2 modules/findmyhash.py MD5 -h $mD5");
}
 elseif($lee=="13"){
echo "$cyan 
==============================================\n
exploiter pack : foxcontact/lokomedia/elfinder/com_fabrik\n
==============================================\n";
echo "masukan list target => ";
$target = trim(fgets(STDIN));
echo "$cyan 
=+=+=+=+=+=+=+=+=+=+=+=+=+=+=\n
mencoba exploit Sql lokomedia\n
=+=+=+=+=+=+=+=+=+=+=+=+=+=+=\n";
@system("php modules/xploit/lokomed.php $target ; sleep 2 ");
echo "$cyan 
==============================\n
mencoba exploit com_foxcontact\n
==============================\n";
@system("php modules/xploit/foxcontact.php $target ; sleep 2");
echo "$cyan
=============================\n
mencoba exploit com_fabrik\n
=============================\n";
@system("php modules/xploit/fabrik.php $target ; sleep 2");
echo "\n$cyan Masukan site ex : www.google.com => ";
$elfinder = trim(fgets(STDIN));
echo "$red 
========================\n
mencoba xploit elfinder\n
========================\n";
@system("php modules/xploit/elfinder.php $elfinder");
}
elseif($lee=="14"){
echo "$red masukan text nya mastah => ";
$kontol = trim(fgets(STDIN, 1024));
@system("echo $kontol | base64 ; echo '\nDone Mastah'");
}
 elseif($lee=="15"){
echo "$red Masukan text nya mastah => ";
$decode = trim(fgets(STDIN, 1024));
@system("echo $decode | base64 -d ; echo '\nDone mastah'");
}
 elseif($lee=="16"){
echo "masukan hash => ";
$SH1hash = trim(fgets(STDIN, 1024));
echo "$cyan
======================\n
Please wait Mastah 
Sedang mencari hash   \n
======================\n";
@system("python2 modules/findmyhash.py SHA1 -h $SHA1hash");
}
 elseif($lee=="17"){
echo "masukan hash => ";
$md4 = trim(fgets(STDIN, 1024));
echo "$cyan
======================\n
Please wait Mastah 
Sedang mencari hash   \n
======================\n";
@system("python2 modules/findmyhash.py MD4 -h $md4");
}
 elseif($lee=="18"){
echo "masukan url => ";
$adfin = trim(fgets(STDIN, 1024));
echo "$cyan
======================\n
Please wait Mastah    \n
======================\n";
@system("sleep 2 ; php modules/adfin.php $adfin start");
}
 elseif($lee=="19"){
echo "Please wait Mastah :) ";
@system("cd modules/LALIN ; sudo bash Lalin.sh ");
}
 elseif($lee=="20"){
@system("cd modules/gsh ; sudo bash gshtool.sh");
}
 elseif($lee=="21"){
echo "masukan url => ";
$dirsearch = trim(fgets(STDIN, 1024));
@system("python3 modules/dirsearch/dirsearch.py -u http://$dirsearch/ -e php");
echo "
[ ========================= ]\n
        DONE MASTAH\n
[ ========================= ]\n";
}
 elseif($lee=="22"){
echo "
=======================\n
  Please Wait Mastah   \n
=======================\n";
system("sleep 2 ; bash tools");
}
 elseif($lee=="23"){
echo "
======================================
$yellow WARNING !!                            
$red Tools ini Tergantung dari koneksi kamu
dan koneksi server defacer.id
tunggu 1-10 menit apabila blank dan tidak ada
tanda2 nya silahkan check mirror mu
di : https://defacer.id
biasanya no notif langsung masuk ke mirror mu
ok sekian dan terima kasih
Semoga hari mu menyenangkan           
Author tools mass notifier : p4kl0nc4t
$white======================================\n";
echo "masukan list situs kamu => ";
$site = trim(fgets(STDIN));
echo "masukan nick kamu => ";
$nick = trim(fgets(STDIN));
echo "masukan team team => ";
$team = trim(fgets(STDIN));
echo "$yellow
==========================================\n
     PLEASE WAIT MASTAH SEDANG BERJALAN!   \n
==========================================\n";
@disable_ob();
system("defid_notifier $site $nick '$team'");
echo "$yellow
=================================================\n
     Done Mastah Silahkan check           \n
attacker : https://defacer.id/archive/attacker/$nick \n
team : https://defacer.id/archive/team/$team     \n
======================================================\n";
}
 elseif($lee=="99"){
echo "terima kasih mastah udah makai tools saya :) \n";
@system("sleep 4");
echo "\ncontact : mr.lee@programmer.net\n";
echo "fb : http://facebook.com/LeeGans.1\n";
}else{
echo "kamu belom milih tools Mastah :(\n";
}
?>