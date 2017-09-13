<?php
	function zamanHesapla($veri = "", $saniyelikKelime = 2)
	{
		$kelimeSayisi = round(count(explode(" ", $veri))); //Veri Değişkenindeki İçeriğin Kelime Sayısını Bulup Tutar.
		$okumaZamani = ceil(++$kelimeSayisi / $saniyelikKelime); //Okuma Süresini Hesaplayıp Tutar.
		
		//Eğer $readingTime 60 Saniyeden Az İse (Yani 1 Dakikadan Az İse) Süreyi Saniye Cinsinden Bastırır.
		if ($okumaZamani < 60)
		{
			$saniye = $okumaZamani;
			echo "$saniye Saniyede Okuyabilirsiniz.";
		}
		
		//Eğer 3600'den Az İse (Yani 1 Saatten Az İse) Süreyi Dakika Cinsinden Bastırır.
		else if ($okumaZamani < 3600)
		{
			$dakika = ceil($okumaZamani / 60);
			echo "$dakika Dakikada Okuyabilirsiniz";
		}
		
		//Eğer 3600 ve üzeriyse Süreyi Saat Cinsinden Bastırır
		else
		{
			$saat = floor($okumaZamani / 3600);
			echo "$saat Saatte Okuyabilirsiniz";
		}
	}
?>
