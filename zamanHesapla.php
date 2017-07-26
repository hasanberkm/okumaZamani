<?php
	function zamanHesapla($veri = "", $saniyelikKelime = 2)
	{
		$kelimeSayısı = round(count(explode(" ", $veri))); //Content Değişkenindeki İçeriğin Kelime Sayısını Bulup Tutar.
		$okumaZamanı = ceil($kelimeSayısı++ / $saniyelikKelime); //Okuma Süresini Hesaplayıp Tutar.
		
		//Eğer $readingTime 60 Saniyeden Az İse (Yani 1 Dakikadan Az İse) Süreyi Saniye Cinsinden Bastırır.
		if ($okumaZamanı < 60)
		{
			$saniye = $okumaZamanı;
			echo "$saniye Saniyede Okuyabilirsiniz.";
		}
		
		//Eğer 3600'den Az İse (Yani 1 Saatten Az İse) Süreyi Dakika Cinsinden Bastırır.
		else if ($okumaZamanı < 3600)
		{
			$dakika = ceil($okumaZamanı / 60);
			echo "$dakika Dakikada Okuyabilirsiniz";
		}
		
		//Eğer 3600 ve üzeriyse Süreyi Saat Cinsinden Bastırır
		else
		{
			$saat = floor($okumaZamanı / 3600);
			echo "$saat Saatte Okuyabilirsiniz";
		}
	}
?>