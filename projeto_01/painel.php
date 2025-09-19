<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body style ="background-color: lightblue; border: 5px solid black;">
    <p>Bem vindo ao meu painel!</p>
    <p>Este é meu primeiro painel em PHP</p>
    <div style="border: 5px solid rgba(0, 0, 192, 1) ; padding: 8px; color:rgba(0, 76, 255, 1); width: 98%; height: 200px; text-align: center; background-color: rgba(97, 215, 255, 1); font-family: Arial, Helvetica, sans-serif; font-size: 20px; border-radius: 15px; width: 700px display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100vh; margin: auto;">
    
        <h2 style="width:100%; margin-bottom: 10px text-align: center; color: rgba(5, 99, 251, 1); width:" > 👩‍💻3 melhores sites de cursos on-line📚</h2>
   <p style=" width: 100%;  margin-bottom: 15px font-family: Arial, Helvetica, sans-serif; font-size: 18px;">
  Aqui você encontra os 3 melhores sites de cursos online! Venha conferir quais são:
</p>

</div>
<li><br> Stoodi <br> <img src="https://yt3.googleusercontent.com/xPKtLBC-dbS7XT6XV2wpIXvRN_9jNPQOQm4IGhpPY6mIL-24I0xMooRHUGJ_rOebWdhWBVs5=s900-c-k-c0x00ffffff-no-rj" width="200" height="200" alt="Stoodi logo featuring a blue graduation cap with a white tassel centered on a circular blue background. The logo is presented on a plain white backdrop, emphasizing academic achievement and a positive, encouraging atmosphere. No visible text is present in the image."> <p>O Stoodi é uma plataforma de ensino online que oferece videoaulas, exercícios e materiais de estudo para estudantes do ensino médio e pré-vestibular. Fundada em 2013, a empresa tem como objetivo ajudar os alunos a se prepararem para exames importantes, como o ENEM e vestibulares de universidades renomadas. O Stoodi é conhecido por sua abordagem didática e acessível, tornando o aprendizado mais fácil e eficiente.</p><a href="https://stoodi.com.br/" target="_blank">Clique aqui para ir para o Stoodi</a>   
<li><br> Descomplica <br> <img src="https://yt3.googleusercontent.com/ZiSCzk3KAyRy158X7YJ_woIdyPP8LVPf2OT-C67dQeP57T1t6usdNuj8lOKCuscjrS_yPVtiKw=s900-c-k-c0x00ffffff-no-rj" width="200" height="200"><p>O Descomplica é uma plataforma de educação online que oferece cursos preparatórios para o ENEM, vestibulares e concursos públicos. Fundada em 2011, a empresa tem como missão tornar o ensino acessível e de qualidade para todos os estudantes. O Descomplica é conhecido por sua metodologia inovadora, que combina videoaulas, exercícios práticos e acompanhamento personalizado, ajudando os alunos a alcançarem seus objetivos acadêmicos.</p><a href="https://descomplica.com.br/" target="_blank"> Clique aqui para ir para o Descomplica</a>
<li><br> Coursera <br> <img src="https://play-lh.googleusercontent.com/GguSSKNcZdGw624xa9VqH71Sy6B12bHdlINY0RN_CltpzE51NgdFWkxesZuI4joVDrM" width="200" height="200"><p>O Coursera é uma plataforma de educação online que oferece cursos, especializações e programas de graduação em parceria com universidades e instituições renomadas em todo o mundo. Fundada em 2012, a empresa tem como objetivo democratizar o acesso à educação de alta qualidade, permitindo que pessoas de diferentes origens e localidades possam aprender e se desenvolver profissionalmente. O Coursera é conhecido por sua ampla variedade de cursos em diversas áreas do conhecimento, desde tecnologia e negócios até artes e humanidades.</p><a href="https://www.coursera.org/" target="_blank">Clique aqui para ir para o Coursera</a>
    <p> Estes sites oferecem uma ampla variedade de cursos online, desde aulas gratuitas até programas pagos com certificação. Eles são conhecidos por sua qualidade de ensino, flexibilidade e acessibilidade, permitindo que os alunos aprendam no seu próprio ritmo e de qualquer lugar do mundo. Se você está procurando por cursos online para aprimorar suas habilidades ou adquirir novos conhecimentos, esses sites são ótimas opções para começar! Espero que tenha gostado! </p>

</body>
</html>

<?php
    file_put_contents("log.txt", "Usuario acessou em" . date("d/m/Y H:i:s") . "\n", FILE_APPEND);
?>