<?php 
ob_start();
session_start();
include 'baglan.php';

if (isset($_POST['loggin'])) {


	$kullanici_ad=$_POST['kullanici_ad'];
	$kullanici_password=md5($_POST['kullanici_password']);
	
	
	if ($kullanici_ad && $kullanici_password) {


		$kullanicisor=$db->prepare("SELECT * from kullanici where kullanici_ad=:ad and kullanici_password=:password");
		$kullanicisor->execute(array(
			'ad' => $kullanici_ad,
			'password' => $kullanici_password
		));

		$say=$kullanicisor->rowCount();

		if ($say>0) {

			$_SESSION['kullanici_ad'] = $kullanici_ad;


			header('Location:../production/index.php');


		} else {

			header('Location:../production/login.php?durum=no');


		}
	}


	

}





if (isset($_POST['genelayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_siteurl=:siteurl,
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords,
		ayar_author=:author
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'siteurl' => $_POST['ayar_siteurl'],
		'title' => $_POST['ayar_title'],
		'description' => $_POST['ayar_description'],
		'keywords' => $_POST['ayar_keywords'],
		'author' => $_POST['ayar_author']
	));

	if ($update) {

		Header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		Header("Location:../production/genel-ayar.php?durum=no");
	}

}


if (isset($_POST['iletisimayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:tel,
		ayar_gsm=:gsm,
		ayar_faks=:faks,
		ayar_mail=:mail,
		ayar_adres=:adres,
		ayar_ilce=:ilce,
		ayar_il=:il,
		ayar_mesai=:mesai
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'tel' => $_POST['ayar_tel'],
		'gsm' => $_POST['ayar_gsm'],
		'faks' => $_POST['ayar_faks'],
		'mail' => $_POST['ayar_mail'],
		'adres' => $_POST['ayar_adres'],
		'ilce' => $_POST['ayar_ilce'],
		'il' => $_POST['ayar_il'],
		'mesai' => $_POST['ayar_mesai']
	));

	if ($update) {

		Header("Location:../production/iletisim-ayar.php?durum=ok");

	} else {

		Header("Location:../production/iletisim-ayar.php?durum=no");
	}

}

if (isset($_POST['apiayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_recapctha=:recapctha,
		ayar_goooglemap=:goooglemap,
		ayar_zopim=:zopim,
		ayar_analystic=:analystic
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'recapctha' => $_POST['ayar_recapctha'],
		'goooglemap' => $_POST['ayar_goooglemap'],
		'zopim' => $_POST['ayar_zopim'],
		'analystic' => $_POST['ayar_analystic']
	));

	if ($update) {

		Header("Location:../production/api-ayar.php?durum=ok");

	} else {

		Header("Location:../production/api-ayar.php?durum=no");
	}

}

if (isset($_POST['sosyalayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_facebook=:facebook,
		ayar_twitter=:twitter,
		ayar_google=:google,
		ayar_youtube=:youtube
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'facebook' => $_POST['ayar_facebook'],
		'twitter' => $_POST['ayar_twitter'],
		'google' => $_POST['ayar_google'],
		'youtube' => $_POST['ayar_youtube']
	));

	if ($update) {

		Header("Location:../production/sosyal-ayar.php?durum=ok");

	} else {

		Header("Location:../production/sosyal-ayar.php?durum=no");
	}

}


if (isset($_POST['mailayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'smtphost' => $_POST['ayar_smtphost'],
		'smtpuser' => $_POST['ayar_smtpuser'],
		'smtppassword' => $_POST['ayar_smtppassword'],
		'smtpport' => $_POST['ayar_smtpport']
	));

	if ($update) {

		Header("Location:../production/mail-ayar.php?durum=ok");

	} else {

		Header("Location:../production/mail-ayar.php?durum=no");
	}

}


if (isset($_POST['hakkimizdakaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:baslik,
		hakkimizda_icerik=:icerik,
		hakkimizda_video=:video,
		hakkimizda_vizyon=:vizyon,
		hakkimizda_misyon=:misyon
		WHERE hakkimizda_id=0");
	$update=$ayarkaydet->execute(array(
		'baslik' => $_POST['hakkimizda_baslik'],
		'icerik' => $_POST['hakkimizda_icerik'],
		'video' => $_POST['hakkimizda_video'],
		'vizyon' => $_POST['hakkimizda_vizyon'],
		'misyon' => $_POST['hakkimizda_misyon']
	));

	if ($update) {

		Header("Location:../production/hakkimizda.php?durum=ok");

	} else {

		Header("Location:../production/hakkimizda.php?durum=no");
	}

}

if (isset($_POST['sliderbilgikaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE slider_bilgi SET
		slider_title=:title,
		slider_baslik=:baslik,
		slider_alt_title=:alt_title,

		WHERE slider_bilgi_id=0");
	$update=$ayarkaydet->execute(array(
		'title' => $_POST['slider_title'],
		'baslik' => $_POST['slider_baslik'],
		'alt_title' => $_POST['slider_alt_title'],
		
	));

	if ($update) {

		Header("Location:../production/slider-bilgi.php?durum=ok");

	} else {

		Header("Location:../production/slider-bilgi.php?durum=no");
	}

}


if (isset($_POST['sliderkaydet'])) {


	$uploads_dir = '../../dimg/slider';
	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:ad,
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum,
		slider_baslik=:baslik,
		slider_title=:title,
		slider_atitle=:atitle,
		slider_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['slider_ad'],
		'link' => $_POST['slider_link'],
		'sira' => $_POST['slider_sira'],
		'durum' => $_POST['slider_durum'],
		'atitle' => $_POST['slider_atitle'],
		'title' => $_POST['slider_title'],
		'baslik' => $_POST['slider_baslik'],
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../production/slider.php?durum=ok");

	} else {

		Header("Location:../production/slider.php?durum=no");
	}

}


if ($_GET['slidersil']=="ok") {
	
	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id' => $_GET['slider_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['slider_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/slider.php?durum=ok");

	} else {

		Header("Location:../production/slider.php?durum=no");
	}

}


if (isset($_POST['sliderduzenle'])) {

	
	if($_FILES['slider_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../dimg/slider';
		@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
		@$name = $_FILES['slider_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_baslik=:baslik,
			slider_title=:title,
			slider_atitle=:atitle,
			slider_resimyol=:resimyol	
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum'],
			'atitle' => $_POST['slider_atitle'],
			'title' => $_POST['slider_title'],
			'baslik' => $_POST['slider_baslik'],

			'resimyol' => $refimgyol,
		));
		

		$slider_id=$_POST['slider_id'];

		if ($update) {

			$resimsilunlink=$_POST['slider_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../production/slider-duzenle.php?durum=no");
		}



	} else {

		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_baslik=:baslik,
			slider_title=:title,
			slider_atitle=:atitle,
			slider_durum=:durum		
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'atitle' => $_POST['slider_atitle'],
			'title' => $_POST['slider_title'],
			'baslik' => $_POST['slider_baslik'],
			'durum' => $_POST['slider_durum']
		));

		$slider_id=$_POST['slider_id'];

		if ($update) {

			Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../production/slider-duzenle.php?durum=no");
		}
	}

}

#İçerik İşlemleri

if (isset($_POST['icerikkaydet'])) {



	$uploads_dir = '../../dimg/icerik';
	@$tmp_name = $_FILES['icerik_resimyol']["tmp_name"];
	@$name = $_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$tarih=$_POST['icerik_tarih'];
	$saat=$_POST['icerik_saat'];
	$zaman = $tarih." ".$saat;
	$tarih=$_POST['icerik_bastarih'];
	$saat=$_POST['icerik_saat'];
	$zaman = $tarih." ".$saat;
	$tarih=$_POST['icerik_bittarih'];
	$saat=$_POST['icerik_saat'];
	$zaman = $tarih." ".$saat;

	$kaydet=$db->prepare("INSERT INTO icerik SET
		icerik_ad=:ad,
		icerik_detay=:detay,
		icerik_konusmacilar=:konusmacilar,
		icerik_katilim=:katilim,
		icerik_duzenleyen=:duzenleyen,
		icerik_bastarih=:bastarih,
		icerik_bittarih=:bittarih,
		icerik_otarih=:otarih,
		icerik_yer=:yer,
		icerik_komite=:komite,
		icerik_konular=:konular,
		icerik_ozel=:ozel,
		icerik_surec=:surec,
		icerik_keyword=:keyword,
		icerik_durum=:durum,
		icerik_resimyol=:resimyol,
		icerik_zaman=:zaman");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['icerik_ad'],
		'detay' => $_POST['icerik_detay'],
		'konusmacilar' => $_POST['icerik_konusmacilar'],
		'katilim' => $_POST['icerik_katilim'],
		'duzenleyen' => $_POST['icerik_duzenleyen'],
		'bastarih' => $_POST['icerik_bastarih'],
		'bittarih' => $_POST['icerik_bittarih'],
		'otarih' => $_POST['icerik_otarih'],
		'yer' => $_POST['icerik_yer'],
		'komite' => $_POST['icerik_komite'],
		'konular' => $_POST['icerik_konular'],
		'ozel' => $_POST['icerik_ozel'],
		'surec' => $_POST['icerik_surec'],
		'keyword' => $_POST['icerik_keyword'],
		'durum' => $_POST['icerik_durum'],
		'resimyol' => $refimgyol,
		'zaman' => $zaman
	));

	if ($insert) {

		Header("Location:../production/icerik.php?durum=ok");

	} else {

		Header("Location:../production/icerik.php?durum=no");
	}

}



if (isset($_POST['icerikduzenle'])) {

	if($_FILES['icerik_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../dimg/icerik';
		@$tmp_name = $_FILES['icerik_resimyol']["tmp_name"];
		@$name = $_FILES['icerik_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


		$tarih=$_POST['icerik_tarih'];
		$saat=$_POST['icerik_saat'];
		$zaman = $tarih." ".$saat;


		$kaydet=$db->prepare("UPDATE icerik SET
		icerik_ad=:ad,
		icerik_detay=:detay,
		icerik_konusmacilar=:konusmacilar,
		icerik_katilim=:katilim,
		icerik_duzenleyen=:duzenleyen,
		icerik_bastarih=:bastarih,
		icerik_bittarih=:bittarih,
		icerik_otarih=:otarih,
		icerik_yer=:yer,
		icerik_komite=:komite,
		icerik_konular=:konular,
		icerik_ozel=:ozel,
		icerik_surec=:surec,
		icerik_keyword=:keyword,
		icerik_durum=:durum,
		icerik_resimyol=:resimyol,
		icerik_zaman=:zaman
			WHERE icerik_id={$_POST['icerik_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['icerik_ad'],
		'detay' => $_POST['icerik_detay'],
		'konusmacilar' => $_POST['icerik_konusmacilar'],
		'katilim' => $_POST['icerik_katilim'],
		'duzenleyen' => $_POST['icerik_duzenleyen'],
		'bastarih' => $_POST['icerik_bastarih'],
		'bittarih' => $_POST['icerik_bittarih'],
		'otarih' => $_POST['icerik_otarih'],
		'yer' => $_POST['icerik_yer'],
		'komite' => $_POST['icerik_komite'],
		'konular' => $_POST['icerik_konular'],
		'ozel' => $_POST['icerik_ozel'],
		'surec' => $_POST['icerik_surec'],
		'keyword' => $_POST['icerik_keyword'],
		'durum' => $_POST['icerik_durum'],
		'resimyol' => $refimgyol,
		'zaman' => $zaman
		));


		$icerik_id=$_POST['icerik_id'];

		if ($update) {

			$resimsilunlink=$_POST['icerik_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/icerik-duzenle.php?icerik_id=$icerik_id&durum=ok");

		} else {

			Header("Location:../production/icerik-duzenle.php?durum=no");
		}



	} else {

		$tarih=$_POST['icerik_tarih'];
		$saat=$_POST['icerik_saat'];
		$zaman = $tarih." ".$saat;
		$tarih=$_POST['icerik_bastarih'];
		$saat=$_POST['icerik_saat'];
		$zaman = $tarih." ".$saat;
		$tarih=$_POST['icerik_bittarih'];
		$saat=$_POST['icerik_saat'];
		$zaman = $tarih." ".$saat;


		$kaydet=$db->prepare("UPDATE icerik SET
			icerik_ad=:ad,
		icerik_detay=:detay,
		icerik_konusmacilar=:konusmacilar,
		icerik_katilim=:katilim,
		icerik_duzenleyen=:duzenleyen,
		icerik_bastarih=:bastarih,
		icerik_bittarih=:bittarih,
		icerik_otarih=:otarih,
		icerik_yer=:yer,
		icerik_komite=:komite,
		icerik_konular=:konular,
		icerik_ozel=:ozel,
		icerik_surec=:surec,
		icerik_keyword=:keyword,
		icerik_durum=:durum,
		icerik_resimyol=:resimyol,
		icerik_zaman=:zaman
			WHERE icerik_id={$_POST['icerik_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['icerik_ad'],
			'detay' => $_POST['icerik_detay'],
			'konusmacilar' => $_POST['icerik_konusmacilar'],
			'katilim' => $_POST['icerik_katilim'],
			'duzenleyen' => $_POST['icerik_duzenleyen'],
			'bastarih' => $_POST['icerik_bastarih'],
			'bittarih' => $_POST['icerik_bittarih'],
			'otarih' => $_POST['icerik_otarih'],
			'yer' => $_POST['icerik_yer'],
			'komite' => $_POST['icerik_komite'],
			'konular' => $_POST['icerik_konular'],
			'ozel' => $_POST['icerik_ozel'],
			'surec' => $_POST['icerik_surec'],
			'keyword' => $_POST['icerik_keyword'],
			'durum' => $_POST['icerik_durum'],
			'resimyol' => $refimgyol,
			'zaman' => $zaman
		));


		$icerik_id=$_POST['icerik_id'];

		if ($update) {

			Header("Location:../production/icerik-duzenle.php?icerik_id=$icerik_id&durum=ok");

		} else {

			Header("Location:../production/icerik-duzenle.php?durum=no");
		}

		

	}

}

if ($_GET['iceriksil']=="ok") {
	
	$sil=$db->prepare("DELETE from icerik where icerik_id=:icerik_id");
	$kontrol=$sil->execute(array(
		'icerik_id' => $_GET['icerik_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['icerik_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/icerik.php?durum=ok");

	} else {

		Header("Location:../production/icerik.php?durum=no");
	}

}


#İçerik İşlemleri

#Dergi İşlemleri






if (isset($_POST['yeniciltdergikaydet'])) {




	
	$kaydet=$db->prepare("INSERT INTO dergi_arsive SET
		dergi_id=:dergi_id,
		dergi_yil=:dergi_yil,
		dergi_cilt=:dergi_cilt,
		dergi_sayi=:dergi_sayi");
	$insert=$kaydet->execute(array(
		'dergi_id' => $_POST['dergi_id'],
		'dergi_yil' => $_POST['dergi_yil'],
		'dergi_cilt' => $_POST['dergi_cilt'],
		'dergi_sayi' => $_POST['dergi_sayi']
	));

	$dergiidx=$_POST['dergi_id'];
	if ($insert) {

		Header("Location:../production/dergi-icerik-arsiv.php?dergi_id=$dergiidx?durum=ok");

	} else {

		Header("Location:../production/dergi-icerik-arsiv.php?dergi_id=$dergiidx?durum=no");
	}

}

if ($_GET['dergisil']=="ok") {
	
	$sil=$db->prepare("DELETE from dergi_arsive where id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['id']
	));

	if ($kontrol) {


		Header("Location:../production/dergi-icerik-arsiv.php?durum=ok");

	} else {

		Header("Location:../production/dergi-icerik-arsiv.php?durum=no");
	}

}

if (isset($_POST['dergikaydet'])) {


	$uploads_dir = '../../dimg/dergi';
	@$tmp_name = $_FILES['dergi_resimyol']["tmp_name"];
	@$name = $_FILES['dergi_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$tarih=$_POST['dergi_tarih'];
	$saat=$_POST['dergi_saat'];
	$zaman = $tarih." ".$saat;

	
	$kaydet=$db->prepare("INSERT INTO dergi SET
		dergi_ad=:ad,
		dergi_issn=:issn,
		dergi_periyot=:periyot,
		dergi_baslangic=:baslangic,
		dergi_yayinci=:yayinci,
		dergi_detay=:detay,
		dergi_editorkurul=:editorkurul,
		dergi_yazimkurallari=:yazimkurallari,
		dergi_amackapsam=:amackapsam,
		dergi_yayinilkeleri=:yayinilkeleri,
		dergi_eissn=:eissn,
		dergi_dizinler=:dizinler,
		dergi_iletisim=:iletisim,
		dergi_durum=:durum,
		dergi_resimyol=:resimyol,
		dergi_zaman=:zaman");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['dergi_ad'],
		'issn' => $_POST['dergi_issn'],
		'periyot' => $_POST['dergi_periyot'],
		'baslangic' => $_POST['dergi_baslangic'],
		'yayinci' => $_POST['dergi_yayinci'],
		'detay' => $_POST['dergi_detay'],
		'editorkurul' => $_POST['dergi_editorkurul'],
		'yazimkurallari' => $_POST['dergi_yazimkurallari'],
		'amackapsam' => $_POST['dergi_amackapsam'],
		'yayinilkeleri' => $_POST['dergi_yayinilkeleri'],
		'eissn' => $_POST['dergi_eissn'],
		'dizinler' => $_POST['dergi_dizinler'],
		'iletisim' => $_POST['dergi_iletisim'],
		'durum' => $_POST['dergi_durum'],
		'resimyol' => $refimgyol,
		'zaman' => $zaman
	));

	if ($insert) {

		Header("Location:../production/dergi-icerik.php?durum=ok");

	} else {

		Header("Location:../production/dergi-icerik.php?durum=no");
	}

}






if (isset($_POST['dergiduzenle'])) {

	if($_FILES['dergi_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../dimg/dergi';
		@$tmp_name = $_FILES['dergi_resimyol']["tmp_name"];
		@$name = $_FILES['dergi_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



		$kaydet=$db->prepare("UPDATE dergi SET
		dergi_ad=:ad,
		dergi_issn=:issn,
		dergi_periyot=:periyot,
		dergi_baslangic=:baslangic,
		dergi_yayinci=:yayinci,
		dergi_detay=:detay,
		dergi_editorkurul=:editorkurul,
		dergi_yazimkurallari=:yazimkurallari,
		dergi_amackapsam=:amackapsam,
		dergi_yayinilkeleri=:yayinilkeleri,
		dergi_eissn=:eissn,
		dergi_dizinler=:dizinler,
		dergi_iletisim=:iletisim,
		dergi_durum=:durum,
		dergi_resimyol=:resimyol,
		dergi_zaman=:zaman
			WHERE dergi_id={$_POST['dergi_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['dergi_ad'],
			'issn' => $_POST['dergi_issn'],
			'periyot' => $_POST['dergi_periyot'],
			'baslangic' => $_POST['dergi_baslangic'],
			'yayinci' => $_POST['dergi_yayinci'],
			'detay' => $_POST['dergi_detay'],
			'editorkurul' => $_POST['dergi_editorkurul'],
			'yazimkurallari' => $_POST['dergi_yazimkurallari'],
			'amackapsam' => $_POST['dergi_amackapsam'],
			'yayinilkeleri' => $_POST['dergi_yayinilkeleri'],
			'eissn' => $_POST['dergi_eissn'],
			'dizinler' => $_POST['dergi_dizinler'],
			'iletisim' => $_POST['dergi_iletisim'],
			'durum' => $_POST['dergi_durum'],
			'resimyol' => $refimgyol,
			'zaman' => $zaman
		));


		$dergi_id=$_POST['dergi_id'];

		if ($update) {

			$resimsilunlink=$_POST['dergi_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/dergi-duzenle.php?dergi_id=$dergi_id&durum=ok");

		} else {

			Header("Location:../production/dergi-duzenle.php?durum=no");
		}



	} else {

		$tarih=$_POST['dergi_tarih'];
		$saat=$_POST['dergi_saat'];
		$zaman = $tarih." ".$saat;

		$kaydet=$db->prepare("UPDATE dergi SET
			dergi_ad=:ad,
			dergi_issn=:issn,
			dergi_periyot=:periyot,
			dergi_baslangic=:baslangic,
			dergi_yayinci=:yayinci,
			dergi_detay=:detay,
			dergi_editorkurul=:editorkurul,
			dergi_yazimkurallari=:yazimkurallari,
			dergi_amackapsam=:amackapsam,
			dergi_yayinilkeleri=:yayinilkeleri,
			dergi_eissn=:eissn,
			dergi_dizinler=:dizinler,
			dergi_iletisim=:iletisim,
			dergi_durum=:durum,
			dergi_resimyol=:resimyol,
			dergi_zaman=:zaman
			WHERE dergi_id={$_POST['dergi_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['dergi_ad'],
		'issn' => $_POST['dergi_issn'],
		'periyot' => $_POST['dergi_periyot'],
		'baslangic' => $_POST['dergi_baslangic'],
		'yayinci' => $_POST['dergi_yayinci'],
		'detay' => $_POST['dergi_detay'],
		'editorkurul' => $_POST['dergi_editorkurul'],
		'yazimkurallari' => $_POST['dergi_yazimkurallari'],
		'amackapsam' => $_POST['dergi_amackapsam'],
		'yayinilkeleri' => $_POST['dergi_yayinilkeleri'],
		'eissn' => $_POST['dergi_eissn'],
		'dizinler' => $_POST['dergi_dizinler'],
		'iletisim' => $_POST['dergi_iletisim'],
		'durum' => $_POST['dergi_durum'],
		'resimyol' => $resimgyol,
		'zaman' => $zaman
		));


		$dergi_id=$_POST['dergi_id'];

		if ($update) {

			Header("Location:../production/dergi-duzenle.php?dergi_id=$dergi_id&durum=ok");

		} else {

			Header("Location:../production/dergi-duzenle.php?durum=no");
		}

		

	}

}


if ($_GET['dergisil']=="ok") {
	
	$sil=$db->prepare("DELETE from dergi where dergi_id=:dergi_id");
	$kontrol=$sil->execute(array(
		'dergi_id' => $_GET['dergi_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['dergi_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/dergi-icerik.php?durum=ok");

	} else {

		Header("Location:../production/dergi-icerik.php?durum=no");
	}

}



if (isset($_POST['menukaydet'])) {

	
	$kaydet=$db->prepare("INSERT INTO menu SET
		menu_ust=:ust,
		menu_ad=:ad,
		menu_url=:url,
		menu_detay=:detay,
		menu_sira=:sira,
		menu_durum=:durum");
	$insert=$kaydet->execute(array(
		'ust' => $_POST['menu_ust'],
		'ad' => $_POST['menu_ad'],
		'url' => $_POST['menu_url'],
		'detay' => $_POST['menu_detay'],
		'sira' => $_POST['menu_sira'],
		'durum' => $_POST['menu_durum']
	));

	if ($insert) {

		Header("Location:../production/menu.php?durum=ok");

	} else {

		Header("Location:../production/menu.php?durum=no");
	}

}



if (isset($_POST['makalekaydet'])) {


	
	$uploads_dir = '../../dimg/makale';
	@$tmp_name = $_FILES['makale_resimyol']["tmp_name"];
	@$name = $_FILES['makale_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	
	$kaydet=$db->prepare("INSERT INTO makale_arsive SET
		dergi_id=:dergi_id,
		dergi_cilt=:dergi_cilt,
		dergi_yil=:dergi_yil,
		dergi_sayi=:dergi_sayi,
		
		makale_ad=:ad,
		makale_yazar=:yazar,
		makale_ozet=:ozet,
		makale_sayfasayi=:sayfasayi,
		makale_keywords=:keywords,
		makale_kaynakca=:kaynakca,
		makale_tarih=:tarih,
		makale_kaynak=:kaynak,
	
		makale_resimyol=:resimyol,
		
		makale_durum=:durum");
	$insert=$kaydet->execute(array(
		'dergi_id'=> $_POST['dergi_id'],
		'dergi_cilt'=> $_POST['dergi_cilt'],
		'dergi_yil'=> $_POST['dergi_yil'],
		'dergi_sayi'=> $_POST['dergi_sayi'],
		
		'ad' => $_POST['makale_ad'],
		'yazar' => $_POST['makale_yazar'],
		'ozet' => $_POST['makale_ozet'],
		'sayfasayi' => $_POST['makale_sayfasayi'],
		'keywords' => $_POST['makale_keywords'],
		'kaynakca' => $_POST['makale_kaynakca'],
		'tarih' => $_POST['makale_tarih'],
		'kaynak' => $_POST['makale_kaynak'],
		'resimyol' => $refimgyol,
		
		
		'durum' => $_POST['makale_durum']
	));

	if ($insert) {

		Header("Location:../production/makale.php?durum=ok");

	} else {

		Header("Location:../production/makale.php?durum=no");
	}

}

if (isset($_POST['makaleduzenle'])) {

	if($_FILES['makale_resimyol']["size"] > 0)  { 

	$uploads_dir = '../../dimg/makale';
	@$tmp_name = $_FILES['makale_resimyol']["tmp_name"];
	@$name = $_FILES['makale_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$kaydet=$db->prepare("UPDATE makale_arsive SET
	    	
			dergi_id=:dergi_id,
		dergi_cilt=:dergi_cilt,
		dergi_yil=:dergi_yil,
		dergi_sayi=:dergi_sayi,
			makale_ad=:ad
			WHERE id={$_POST['id']}");
		$update=$kaydet->execute(array(
			'dergi_id'=> $_POST['dergi_id'],
			'dergi_cilt'=> $_POST['dergi_cilt'],
			'dergi_yil'=> $_POST['dergi_yil'],
			'dergi_sayi'=> $_POST['dergi_sayi'],
			
			'ad' => $_POST['makale_ad']
		));


		$id=$_POST['id'];

		if ($update) {

			

			Header("Location:../production/makale-duzenle.php?id=$id&durum=ok");

		} else {

			Header("Location:../production/makale-duzenle.php?durum=no");
		}


}
else {



	$kaydet=$db->prepare("UPDATE makale_arsive SET
		
		dergi_id=:dergi_id,
		dergi_cilt=:dergi_cilt,
		dergi_yil=:dergi_yil,
		dergi_sayi=:dergi_sayi,
		makale_ad=:ad
			WHERE id={$_POST['id']}");
	$update=$kaydet->execute(array(
		'dergi_id'=> $_POST['dergi_id'],
		'dergi_cilt'=> $_POST['dergi_cilt'],
		'dergi_yil'=> $_POST['dergi_yil'],
		'dergi_sayi'=> $_POST['dergi_sayi'],
		
		'ad' => $_POST['makale_ad']

	));


	$dergi_id=$_POST['dergi_id'];

	if ($update) {

		Header("Location:../production/makale-duzenle.php?id=id&durum=ok");

	} else {

		Header("Location:../production/makale-duzenle.php?durum=no");
	}

	

}

}

if ($_GET['makalesil']=="ok") {
	
	$sil=$db->prepare("DELETE from makale_arsive where id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['id']
	));

	if ($kontrol) {

		Header("Location:../production/makale.php?durum=ok");

	} else {

		Header("Location:../production/makale.php?durum=no");
	}

}


if (isset($_POST['menuduzenle'])) {

	$menu_id=$_POST['menu_id'];

	
	$kaydet=$db->prepare("UPDATE menu SET
		menu_ust=:ust,
		menu_ad=:ad,
		menu_url=:url,
		menu_detay=:detay,
		menu_sira=:sira,
		menu_durum=:durum
		WHERE menu_id={$_POST['menu_id']}");
	$update=$kaydet->execute(array(
		'ust' => $_POST['menu_ust'],
		'ad' => $_POST['menu_ad'],
		'url' => $_POST['menu_url'],
		'detay' => $_POST['menu_detay'],
		'sira' => $_POST['menu_sira'],
		'durum' => $_POST['menu_durum']
	));

	if ($update) {

		Header("Location:../production/menu-duzenle.php?durum=ok&menu_id=$menu_id");

	} else {

		Header("Location:../production/menu-duzenle.php?durum=no&menu_id=$menu_id");
	}

}

if ($_GET['menusil']=="ok") {
	
	$sil=$db->prepare("DELETE from menu where menu_id=:menu_id");
	$kontrol=$sil->execute(array(
		'menu_id' => $_GET['menu_id']
	));

	if ($kontrol) {

		Header("Location:../production/menu.php?durum=ok");

	} else {

		Header("Location:../production/menu.php?durum=no");
	}

}




if (isset($_POST['logoduzenle'])) {



	$uploads_dir = '../../dimg';
	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];
	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");
	$update=$duzenle->execute(array(
		'logo' => $refimgyol
	));



	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		Header("Location:../production/genel-ayar.php?durum=no");
	}

}



if (isset($_POST['kresimduzenle'])) {

	$uploads_dir = '../../dimg/kullanici';
	@$tmp_name = $_FILES['kullanici_resim']["tmp_name"];
	@$name = $_FILES['kullanici_resim']["name"];
	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	$duzenle=$db->prepare("UPDATE kullanici SET
		kullanici_resim=:resim
		WHERE kullanici_id={$_POST['kullanici_id']}");
	$update=$duzenle->execute(array(
		'resim' => $refimgyol
	));



	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/kullanici-profil.php?durum=ok");

	} else {

		Header("Location:../production/kullanici-profil.php?durum=no");
	}

}


if (isset($_POST['kullaniciprofilkaydet'])) {


	$kullanici_password=md5($_POST['kullanici_password']);
	
	$ayarkaydet=$db->prepare("UPDATE kullanici SET

		kullanici_adsoyad=:adsoyad,
		kullanici_password=:password
		WHERE kullanici_id={$_POST['kullanici_id']}");
	$update=$ayarkaydet->execute(array(
		
		'adsoyad' => $_POST['kullanici_adsoyad'],
		'password' => $kullanici_password
	));

	if ($update) {

		Header("Location:../production/kullanici-profil.php?durum=ok");

	} else {

		Header("Location:../production/kullanici-profil.php?durum=no");
	}

}


#referans işlemleri

if (isset($_POST['referanskaydet'])) {


	$uploads_dir = '../../dimg/referans';
	@$tmp_name = $_FILES['referans_resimyol']["tmp_name"];
	@$name = $_FILES['referans_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
	$kaydet=$db->prepare("INSERT INTO referans SET
		referans_ad=:ad,
		referans_link=:link,
		referans_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['referans_ad'],
		'link' => $_POST['referans_link'],
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../production/referans.php?durum=ok");

	} else {

		Header("Location:../production/referans.php?durum=no");
	}

}

if (isset($_POST['referansduzenle'])) {

	
	if($_FILES['referans_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../dimg/referans';
		@$tmp_name = $_FILES['referans_resimyol']["tmp_name"];
		@$name = $_FILES['referans_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE referans SET
			referans_ad=:ad,
			referans_link=:link,
			referans_resimyol=:resimyol	
			WHERE referans_id={$_POST['referans_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['referans_ad'],
			'link' => $_POST['referans_link'],
			'resimyol' => $refimgyol
		));
		

		$referans_id=$_POST['referans_id'];

		if ($update) {

			$resimsilunlink=$_POST['referans_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/referans-duzenle.php?referans_id=$referans_id&durum=ok");

		} else {

			Header("Location:../production/referans-duzenle.php?durum=no");
		}



	} else {

		$duzenle=$db->prepare("UPDATE referans SET
			referans_ad=:ad,
			referans_link=:link
			WHERE referans_id={$_POST['referans_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['referans_ad'],
			'link' => $_POST['referans_link'],
		));

		$referans_id=$_POST['referans_id'];

		if ($update) {

			Header("Location:../production/referans-duzenle.php?referans_id=$referans_id&durum=ok");

		} else {

			Header("Location:../production/referans-duzenle.php?durum=no");
		}
	}

}


if ($_GET['referanssil']=="ok") {
	
	$sil=$db->prepare("DELETE from referans where referans_id=:referans_id");
	$kontrol=$sil->execute(array(
		'referans_id' => $_GET['referans_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['referans_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/referans.php?durum=ok");

	} else {

		Header("Location:../production/referans.php?durum=no");
	}

}

#sss işlemleri

if (isset($_POST['ssskaydet'])) {

	$kaydet=$db->prepare("INSERT INTO sss SET
		sss_ad=:ad,
		sss_detay=:detay,
		sss_sira=:sira");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['sss_ad'],
		'detay' => $_POST['sss_detay'],
		'sira' => $_POST['sss_sira']));

	if ($insert) {

		Header("Location:../production/sss.php?durum=ok");

	} else {

		Header("Location:../production/sss.php?durum=no");
	}

}


if ($_GET['ssssil']=="ok") {
	
	$sil=$db->prepare("DELETE from sss where sss_id=:sss_id");
	$kontrol=$sil->execute(array(
		'sss_id' => $_GET['sss_id']
	));

	

}


if(isset($_POST['galerisil'])) {


	$checklist = $_POST['galerisec'];

	foreach($checklist as $list) {

		$sil=$db->prepare("DELETE from galeri where galeri_id=:galeri_id");
		$kontrol=$sil->execute(array(
			'galeri_id' => $list
		));
	}

	if ($kontrol) {

		Header("Location:../production/galeri.php?durum=ok");

	} else {

		Header("Location:../production/galeri.php?durum=no");
	}


} 

if(isset($_POST['videosil'])) {


	$checklist = $_POST['videosec'];

	foreach($checklist as $list) {

		$sil=$db->prepare("DELETE from video where video_id=:video_id");
		$kontrol=$sil->execute(array(
			'video_id' => $list
		));
	}

	if ($kontrol) {

		Header("Location:../production/video.php?durum=ok");

	} else {

		Header("Location:../production/video.php?durum=no");
	}


} 




?>



