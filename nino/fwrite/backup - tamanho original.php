<?php
$s_i = 0;
$url = ['http://ninofarois.com.br/novo/assinaturas/a-1.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-2.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-3.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-4.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-5.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-6.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-7.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-8.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-9.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-10.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-11.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-12.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-13.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-14.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-15.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-16.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-17.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-18.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-19.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-b0.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-21.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-22.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-23.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-24.gif',
		'http://ninofarois.com.br/novo/assinaturas/a-25.gif',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_03.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_06.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_08.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_10.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_12.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_14.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_16.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_18.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_20.png',
        'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_22.png',
		'http://ninofarois.com.br/novo/assinaturas/modelo-final-com_skype_cortes_24.gif',];

$url_count = count($url);

while($s_i < $url_count){
	$conteudo='
	<!-- começo da tabela -->
	-
	<br>
	<table id="Table_01" width="519.75" height="191.25" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<a href="https://www.instagram.com/ninofarois/?hl=pt-br">
				<img style="display: block;" src="http://ninofarois.com.br/novo/assinaturas/modelo-final_01.png" width="60.75" height="191.25" alt=""></td>
			</a>
		<td>
			<a href="https://www.facebook.com/ninofarois/">
				<img style="display: block;" src="http://ninofarois.com.br/novo/assinaturas/modelo-final_02.png" width="25.5" height="191.25" alt=""></td>
			</a>
		<td>
			<a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fnino-farois%2Fabout">
				<img style="display: block;" src="http://ninofarois.com.br/novo/assinaturas/modelo-final_03.png" width="24.75" height="191.25" alt=""></td>
			</a>
		<td>
			<a href="https://www.youtube.com/channel/UCh84B6OJVJn4O5FWNeXZR2A">
				<img style="display: block;" src="http://ninofarois.com.br/novo/assinaturas/modelo-final_04.png" width="141" height="191.25" alt=""></td>
			</a>
		<td>
			<a href="http://ninofarois.com.br/novo/">
				<img style="display: block;" src="'.$url[$s_i].'" width="267.75" height="191.25" alt=""></td>
			</a>
	</tr>
</table>
<!-- fim da tabela -->
<br><br>';
?>
<?php
	$file = fopen($s_i.".htm","w");
	fwrite($file, $conteudo);
	$s_i++;
	}
	// echo $line;
	fclose($file);
?>