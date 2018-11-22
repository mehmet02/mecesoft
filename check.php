<?
$versioncode = "4.0"; //Güncel version kodumuz. Eğer güncelleme yapacaksak bu değeri yükseltmemiz gerek. Zaten csharp projemizdeki versionkodu 1 olduğu için güncelleme başlayacaktır.
if($_GET["v"])
{
 $currentversion = $_GET["v"];
 if($versioncode > $currentversion){
    echo "UPDATE"; //Dönen veri update ise güncelleme başlayacak.
  }
   else{
    echo "OK"; //Dönen veri OK ise güncelleme başlamayacak.
   }
}
?>