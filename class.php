<?php 

interface MailGonder{

public function yolla($kime,$konu,$mesaj,$baslik);

//public function Git();


}


class Mail implements MailGonder{
    public $basarili = "Mail başarılı";
public function yolla($kime,$konu,$mesaj,$baslik){



    $kime="korgpabaha@gmail.com";
    $konu= $_POST['subject'];
    $mesaj= "<h1>".$_POST['yazi']."</h1>";
    
    $baslik= "From:"."<".$_POST['email'].">\r\n";
    $baslik.="Reply-to: korgpabaha@gmail.com\r\n";
    $baslik.="Content-type: text/html; charset=UTF-8\r\n";
    if(mail($kime,$konu,$mesaj,$baslik)){


       echo  $this->basarili;
        
        
        }
        else{
        
        echo   "mailiniz maalesef gönderilemedi";
        
        }    


}


}



?>