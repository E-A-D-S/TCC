@extends('layout')
@section('titles','pdf' )
@section('content')
<div style="display: flex; margin-top:-50px;">
    <img src="https://static.wixstatic.com/media/0aad82_fc6ea6c310e34f679f36449f7a2cbf50~mv2.jpg/v1/fill/w_1000,h_1000,al_c,q_85/ULBRA.jpg" width="100px" height="100px"/>
    <div style="margin-left:20px ; margin-top: -70px; text-align:center;">
        <strong style="font-size:12px;">UNIVERSIDADE LUTERANA DO BRASIL</strong>
        <p style="height:0px;  margin-top:10px; font-size: 11px;">COMUNIDADE EVANGÉLICA SÃO PAULO</p>
        <p style="height:0px; font-size: 11px;">Autorizada pelo Decreto n°95623-D.O.U de 13-1-88</p>
        <p style="height:2px ;  margin-top:25px; font-size: 12px ;">CONTRATO DE ATENDIMENTO</p>
    </div>
</div>
<div style="margin-top: 15px; font-size:11px;">
    <p style="font-size:11px ;">O presente CONTRATO DE ATENDIMENTO consiste das normas que regem a prestação de serviço do SERVIÇO ESCOLA DE PSICOLOGIA, doravante denominado CONTRATADO, e das obrigações das pessoas, doravante CONTRATANTE, que forem beneficiadas pelo atendimento, que se processará após adesão ao presente e consentimento livre e esclarecido do indivíduo ou por seus representantes legais.</p>
    <p style="height:2px ;">DA IDENTIFICAÇÃO DAS PARTES CONTRATANTES</p>
    <p style="height:5px ;">PESSOA BENEFICIADA – PACIENTE (CONTRATANTE): <spam style="text-decoration: underline;"> {{ $data->name }} </spam>, </p>
    <p style="height:5px ;">estado civil: <spam style="text-decoration: underline;"> Solteiro </spam>, carteira de identidade (RG) nº <spam style="text-decoration: underline;"> 41038040 </spam>
    ,residente à </p> 
    <p style="height:5px ;">Rua <spam style="text-decoration: underline;">S candelaria </spam>,nº<spam style="text-decoration: underline;">52</spam>,complemento:<spam style="text-decoration: underline;">casa </spam>,</p>
    <p style="height:5px ;">bairro:Sul america,na cidade de Charqueadas/RS. Neste ato</p>
    <p style="height:5px ;">o (a) menor do dezoito anos está devidamente assistido/representado por </p>
    <p style="height:5px ;">carlos Alberto, representante legal do Contratante, residente no </p>
    <p style="height:5px ;">endereço supramencionado ou rua manoel joao, na cidade de</p>
    <p style="height:5px ;">charqueadas/RS.</p>
    <p style="height:5px ;">SERVIÇO DE PSICOLOGIA (CONTRATADO): Pertencente à Universidade Luterana do Brasil, que compreende a Clinica Escola de Psicologia. Sito à Rua Ramiro Barcelos, n. 45, bairro centro, na cidade de São Jerônimo /RS.</p>
    <p style="margin-top:40px ; height:5px ;">DO OBJETO DO PRESENTE CONTRATO</p>
    <p style="height:5px ;">>Cláusula 1º- O Serviço Escola de Psicologia compreende a Clinica Escola, onde ocorrem os atendimentos e serviços prestados por estagiários, com a devida supervisão dos professores habilitados para o exercício legal da profissão, podendo esses procedimentos serem observados por alunos da ULBRA nas práticas de ensino e estágios curriculares.</p>
    <p style="margin-top:60px ; height:5px ;">DA DESCRIÇÃO DO ATENDIMENTO A SER REALIZADO</p>
    <p style="height:5px ;">>Cláusula 2º - Em conformidade com a rotina de cada serviço disponibilizado, o paciente (Contratante) passará por uma avaliação que NÃO IMPLICARÁ em atendimento.</p>
    <p style="height:5px ;">>Cláusula 3º - O Contratante tem ciência a partir do presente contrato, que PODERÁ ocorrer a TROCA DE ESTÁGIARIO, devido a rotatividade comum de uma clinica escola.</p>
    <p style="height:5px ;">>Cláusula 4º - Os atendimentos ocorrerão conforme disponibilidade e rotina do serviço, respeitando sempre a necessidade do indivíduo e garantindo o bem-estar do mesmo.</p>
    <p style="height:5px ;">>Cláusula 5º - O número de atendimentos será determinado pelos professores, conforme a necessidade de cada caso e disponibilidade do serviço.</p>
    <p style="height:10px ;">>Cláusula 6º - O tempo de permanência será determinado pelos professores de acordo com o tratamento necessário ao paciente, podendo ser renovado conforme a reavaliação ao final de cada período.</p>
    <p style="height:10px ;">>Cláusula 7º - O paciente (Contratante) se COMPROMETE A COMPARECER nos dias definidos para os atendimentos, sendo que o não comparecimento DEVERÁ ser justificado.</p>
    <p style="height:10px ;">>Cláusula 8º - Os atendimentos não implicam em qualquer forma de pagamento.</p>
    <p style="margin-top:20px ;  height:5px ;">DA RESCISÃO DO PRESENTE CONTRATO</p>
    <p  style="height:40px ;">Cláusula 9º - Caso o paciente (Contratante) não comparecer ao atendimento sem a devida justificativa, mencionada na Cláusula 7º do presente instrumento, por 3 (três) vezes consecutivas ou ainda incorrer na prática das faltas freqüentes (embora não consecutivas ou justificadas), TERÁ seu atendimento automaticamente INTERROMPIDO.
Parágrafo único: O paciente (Contratante) que tiver seu tratamento interrompido pela cláusula acima, poderá retornar ao tratamento conforme disponibilidade do serviço, sendo obrigatório a reavaliação do tratamento.
    </p>
    <p>Cláusula 10º - O paciente (Contratante) pode HÁ QUALQUER momento desistir do atendimento.</p>
    <p style="height:5px ;">TERMO DE CONSENTIMENTO INFORMADO</p>
    <p style="height:5px ;">Eu,Eduardo araujo dos santos, abaixo assinado, portador da cédula de identidade sob o</p>
    <p style="height:5px ;">nº4103804032, aceito que o modelo de atendimento seja realizado conforme estabelece o</p>
    <p >presente contrato. Esta instituição assegura a confidenciabilidade e a privacidade, bem como a proteção da imagem, garantindo a não utilização das informações em prejuízo da pessoa ou grupo.</p>
    <p>As informações obtidas com estes procedimentos, registrados em prontuário e aquelas obtida através de exames ou imagens poderão ser utilizadas como material didático em aulas, seminários e eventos científicos, salvaguardando a identificação do paciente.</p>
    <div style="margin-left: 400px ; text-align:center;">
        <p style="height:0px ;">________________________________________________</p>
        <p style="height:0px ;">Assinatura do Paciente ou Responsável Legal</p>
        <p style="margin-top: 40px;">São Jerônimo,_____ de ____________________de 20____</p>
    </div>
 </div>
@endsection