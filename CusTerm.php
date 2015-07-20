<?php
#!/usr/bin/php
/***********************************/
/*  _                           _  */
/* (_)_ __  ___  __ _ _   _  __| | */
/* | | '_ \/ __|/ _` | | | |/ _` | */
/* | | | | \__ \ (_| | |_| | (_| | */
/* |_|_| |_|___/\__,_|\__, |\__,_| */
/*                    |___/        */
/***********************************/
/**Coded By Insayd (c) 2015**/
/**CusTerm**/
/*
    {yazılımın adını ve ne yaptığını anlatan bir satır.}

    Copyright (C) 2015 insayd

    This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this library; if not, write to the Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA


###############################################################
//NICK MODE SETTINGS
$ne="custom"; #OPTIONS <custom> or <standard>
$customnick="CusTerm";// If you had custom mod, it will be your nick. If you had standard mod, it wont be work.

//FUNNY SETTINGS
$figlet='figlet -f slant ';//toilet -f mono12  Linux 
$boxes='|boxes -d santa'; //boxes -d <boxid>
$cusfuncshell='echo "Your Message here"|boxes'; //justom function what you want. JUST TERMINAL CODES like echo "some think" or "cd /somedir" etc.

###############################################################
$cusfunc="  ".$cusfuncshell;
###############################################################
//PocketControl
$control1= shell_exec("dpkg -s figlet");
if(strstr($control1,"install ok installed")){
$control2= shell_exec("dpkg -s boxes");
if(strstr($control2,"install ok installed")){
//Bashrc Control
$dosya_ici=fOpen("/root/.bashrc","r");
$dosya_oku=fRead($dosya_ici,fileSize("/root/.bashrc"));
fClose($dosya_ici);
//somecommands
$whoami= shell_exec("whoami");
$say=  count($_SERVER['argv'])  ;
$argum=$_SERVER['argv'];
if(strstr($dosya_oku, "php CusTerm.php", true))
{


###############################################################
if(@$argum[1]=="--help")
{
echo "yardım mı lazımdır?"; 
exit;
}
if($ne=="standard")
{
$nick=exec("whoami");
echo $figlet = shell_exec($figlet." ".$nick.$boxes);
echo $customch= shell_exec($cusfunc);
echo"CusTerm v1.0.0\n";

}
elseif($ne=="custom")
{
$nick=$customnick; 
echo $figlet = shell_exec($figlet." ".$nick.$boxes);
echo $customch= shell_exec($cusfunc);
echo"CusTerm v1.0.0\n";


}
else
{
echo $figlet = shell_exec($figlet."  error ".$boxes);
echo" you have got type error. 
please go to edit CusTerm.php 
and find <$ne>, 
than take it <custom> or <standard>\n\n\n";
exit;
}
echo"php CusTerm.php --help\n";


}
else
{
	$dosya_adi = "/root/.bashrc";
$dosya = fopen ($dosya_adi , 'w') or die ("Dosya
açılamadı!");
$metin = "php CusTerm.php";
fwrite ( $dosya , $dosya_oku."\n".$metin ) ;
fclose ($dosya);
echo"CusTerm correctly installed. Please re-open terminal 
and check your CusTerm,God using!\n";
}
}
else{
echo "\n\n\n\nYour boxes packet is not found, we should download and install it. Please write to terminal 'apt-get install boxes\n' ";
}


}else{
echo "\n\n\n\nYour figlet packet is not found, we should download and install it. Please write to terminal 'apt-get install figlet\n' ";

}




?>
