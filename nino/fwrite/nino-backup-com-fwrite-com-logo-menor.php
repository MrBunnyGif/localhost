<?php
$s_i = 0;
$url = ['https://fingerdigital.com.br/assinaturas/a-1.gif',
		'https://fingerdigital.com.br/assinaturas/a-2.gif',
		'https://fingerdigital.com.br/assinaturas/a-3.gif',
		'https://fingerdigital.com.br/assinaturas/a-4.gif',
		'https://fingerdigital.com.br/assinaturas/a-5.gif',
		'https://fingerdigital.com.br/assinaturas/a-6.gif',
		'https://fingerdigital.com.br/assinaturas/a-7.gif',
		'https://fingerdigital.com.br/assinaturas/a-8.gif',
		'https://fingerdigital.com.br/assinaturas/a-9.gif',
		'https://fingerdigital.com.br/assinaturas/a-10.gif',
		'https://fingerdigital.com.br/assinaturas/a-11.gif',
		'https://fingerdigital.com.br/assinaturas/a-12.gif',
		'https://fingerdigital.com.br/assinaturas/a-13.gif',
		'https://fingerdigital.com.br/assinaturas/a-14.gif',
		'https://fingerdigital.com.br/assinaturas/a-15.gif',
		'https://fingerdigital.com.br/assinaturas/a-16.gif',
		'https://fingerdigital.com.br/assinaturas/a-17.gif',
		'https://fingerdigital.com.br/assinaturas/a-18.gif',
		'https://fingerdigital.com.br/assinaturas/a-19.gif',
		'https://fingerdigital.com.br/assinaturas/a-b0.gif',
		'https://fingerdigital.com.br/assinaturas/a-21.gif',
		'https://fingerdigital.com.br/assinaturas/a-22.gif',
		'https://fingerdigital.com.br/assinaturas/a-23.gif',
		'https://fingerdigital.com.br/assinaturas/a-24.gif',
		'https://fingerdigital.com.br/assinaturas/a-25.gif',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_03.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_06.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_08.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_10.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_12.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_14.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_16.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_18.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_20.png',
        'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_22.png',
		'https://fingerdigital.com.br/assinaturas/modelo-final-com_skype_cortes_24.gif',];

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
				<img style="display: block;" src="https://fingerdigital.com.br/assinaturas/fixo-1.png" width="60.75" height="191.25" alt=""></td>
			</a>
		<td>
			<a href="https://www.facebook.com/ninofarois/">
				<img style="display: block;" src="https://fingerdigital.com.br/assinaturas/fixo-2.png" width="25.5" height="191.25" alt=""></td>
			</a>
		<td>
			<a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fnino-farois%2Fabout">
				<img style="display: block;" src="https://fingerdigital.com.br/assinaturas/fixo-3.png" width="24.75" height="191.25" alt=""></td>
			</a>
		<td>
			<a href="https://www.youtube.com/channel/UCh84B6OJVJn4O5FWNeXZR2A">
				<img style="display: block;" src="https://fingerdigital.com.br/assinaturas/fixo-4.png" width="141" height="191.25" alt=""></td>
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