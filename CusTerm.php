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
This work is licensed under the Creative Commons Attribution 4.0 International License. To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.*/






###############################################################
//NICK MODE SETTINGS
$ne="custom"; #OPTIONS <custom> or <standard>
$customnick="CusTerm";// If you had custom mod, it will be your nick. If you had standard mod, it wont be work.

//FUNNY SETTINGS
$figlet="figlet -f slant ";
$boxes="|boxes";
$cusfunc=""; //justom func what you want. if you dont know well do not touch
$cusfuncshell=""; //justom func what you want. if you dont know well do not touch

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

if(strstr($dosya_oku, "php CusTerm.php", true))
{


###############################################################

if($ne=="standard")
{
$nick=exec("whoami");
echo $figlet = shell_exec($figlet." ".$nick.$boxes.$cusfunc);
echo"CusTerm v1.0.0\n";
}
elseif($ne=="custom")
{
$nick=$customnick; 
echo $figlet = shell_exec($figlet." ".$nick.$boxes.$cusfunc);
echo"CusTerm v1.0.0\n";


}
else
{
echo $figlet = shell_exec($figlet."  error ".$boxes.$cusfunc);
echo" you have got type error. 
please go to edit CusTerm.php 
and find <$ne>, 
than take it <custom> or <standard>\n\n\n";
exit;
}


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
