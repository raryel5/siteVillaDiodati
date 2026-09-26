<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Autor Anderson José')
@section('description', 'Confira a entrevista com o autor Anderson José')
@section('image', asset('storage/entrevistas/andersonJose/foto04.jpeg'))

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<section class="entrevista-introducao">

    <div class="entrevista-text-center">
        <br>
        <h1>Villa Entrevista</h1>
        <h1>Anderson José</h1>
        <br>
    </div>

    <div class="text-acima-flex-cards">
        <div class="entrevista-text-justificado">
            <p>Anderson José dos Anjos é escritor brasileiro e terapeuta. Durante muitos tempos atuou como servidor público, experiência que lhe permitiu observar de perto diferentes realidades humanas e sociais.</p>
        </div>
    </div>

    <div class="flex-cards-introducao">

        <div class="card-entrevista">
            <img src="{{ Storage::url('entrevistas/andersonJose/foto00.jpeg') }}">
            <br>
            <legend">acervo pessoal do autor</legend>           
        </div>

        <div class="card-entrevista">
            
            <p>Hoje dedica-se à terapia e à escrita, explorando em suas obras gêneros como terror, horror, romance policial, mistério e fantasia. Suas histórias costumam mergulhar nos conflitos da mente humana, no medo, no suspense e nos limites entre realidade e imaginação.</p>
            <p>Vivendo entre Brasil e Portugal, Anderson encontra inspiração nas experiências da vida real, transformando sentimentos, inquietações e reflexões sobre a natureza humana em narrativas intensas e envolventes.</p>
            <br>
        </div>
    </div>

</section>

<section class="section-entrevista-corpo">

    <div class="entrevista-frase-destaque">
        <p> <em>Ao ler aquele livro entendi que a literatura poderia me permitir fugir da realidade, viajar para outros mundos e, de certa forma, levar outras pessoas comigo.</em></p>
        <br>
    </div>

    <div class="entrevista-text-justificado ">
        <h2>O que te levou a tornar-se um escritor, e o que te faz continuar escrevendo?</h2>

        <p>Tudo começou em uma sala de aula, em uma segunda-feira comum. Confesso que estava entediado naquele dia, quando a professora de Português passou um trabalho de casa: ler um clássico nacional: O Cortiço, de Aluísio Azevedo.</p>
        <p>Foi o meu primeiro contato mais profundo com a literatura, e posso dizer que foi algo quase sobrenatural. Devorei o livro e me encantei com os personagens, com a história e com a forma como tudo era contado. No fim, fiz um resumo que a professora adorou. A partir daí, comecei a procurar outras obras.</p>
        <p>Nessa época, conheci o mangá, e nasceu em mim uma vontade enorme de escrever. Eu queria criar minhas próprias histórias, mas não sabia desenhar. Então meu amigo de trabalho, Tayrone, me disse: “Por que você não escreve um livro?”</p>
        <p>Foi então que fui à biblioteca e peguei Drácula, de Bram Stoker. Ao ler aquele livro entendi que a literatura poderia me permitir fugir da realidade, viajar para outros mundos e, de certa forma, levar outras pessoas comigo.</p>
        <p>É isso que ainda hoje me motiva a escrever: poder sair, por alguns momentos, deste mundo muitas vezes exaustivo e rotineiro em que vivemos e levar comigo aqueles que decidem embarcar nas minhas histórias.</p>

        <h2>Quais autores ou obras influenciaram seu estilo de escrita?</h2>

        <p>Eu comecei escrevendo fantasia. Para falar a verdade, sou apaixonado por esse gênero. A série As Crônicas de Gelo e Fogo, de George R. R. Martin, é uma das minhas maiores referências. Também não posso deixar de mencionar O Senhor dos Anéis e As Crônicas de Nárnia, obras que fizeram parte da minha formação como leitor.</p>
        <p>No entanto, foi na brutalidade de As Crônicas de Gelo e Fogo que comecei a encontrar uma influência mais profunda na minha forma de escrever. Depois vieram Agatha Christie e Nuno Nepomuceno, que considero hoje um dos grandes escritores portugueses. Mais recentemente, tenho lido muitos contos de H. P. Lovecraft, que também têm contribuído para a minha escrita.</p>
        <p>Mas, sem dúvida, Machado de Assis foi um dos autores que mais me ensinou a escrever com sentimento e a olhar para dentro dos personagens. Por isso, tento não escrever apenas cenas brutais. Gosto de deixar sentimentos em cada atmosfera, construir bons diálogos e criar uma tensão que cresça aos poucos.</p>
        <p>Acredito que todos esses autores e essas obras contribuíram muito para formar o Anderson de hoje: um escritor mais maduro e experiente na arte de contar histórias, mas que continua aprendendo a cada livro que lê e a cada história que escreve.</p>
    </div>

    <div class="entrevista-frase-destaque">
        <p> <em>Eu estou sempre pensando na história: como vou escrever determinada cena, como vou desenvolver um personagem ou como vou finalizar determinado arco.</em></p>
        <br>
    </div>

    <div class="entrevista-text-justificado ">

        <h2>Como você lida com o bloqueio criativo?</h2>

        <p>Então, eu consigo dizer que não sofro com essa “maldição”. É engraçado falar isso, porque algumas pessoas que também escrevem não acreditam quando digo que nunca tive um bloqueio criativo.</p>
        <p>Acredito que o segredo para não sofrer com isso é simples: não deixar a história esfriar na cabeça. Para mim, o bloqueio criativo pode surgir quando deixamos de pensar no nosso objetivo, que, no nosso caso, é terminar um livro.</p>
        <p>Eu estou sempre pensando na história: como vou escrever determinada cena, como vou desenvolver um personagem ou como vou finalizar determinado arco. Tento pensar em tudo de forma cronológica, para não bagunçar a minha cabeça.</p>
        <p>Para me ajudar, tenho sempre um caderno onde anoto tudo e ao qual recorro constantemente. Dessa forma, sigo um roteiro previamente definido e não fico preso pensando no que fazer no próximo capítulo. Quando termino o capítulo 7, por exemplo, o capítulo seguinte já está previamente pensado, com os principais acontecimentos e apontamentos essenciais.</p>
        <p>Sei que dá bastante trabalho fazer todo esse planejamento, mas confesso que isso me ajuda muito a realizar um trabalho complexo como escrever um livro. Ter uma direção clara torna o processo muito mais fácil e mantém a história viva na minha cabeça.</p>

        <h2>Quais desafios você enfrentou durante sua jornada como escritor?</h2>

        <p>Confesso que enfrentei várias dificuldades ao longo da minha jornada como escritor, mas existem duas que preciso deixar bem claras aqui.</p>
        <p>A primeira, e talvez a que mais me chateou, quase me fez desistir de contar histórias. Foi quando aceitei uma proposta que, para um escritor iniciante, parecia perfeita, mas que, na realidade, acabou se tornando uma grande armadilha.</p>
        <p>Publiquei meu primeiro livro por meio de uma editora e acabei sozinho, com um livro de cerca de 600 páginas publicado, mas sendo vendido por um preço absurdo. Eu não sabia como solucionar aquela situação e aquilo me abalou profundamente. Como consequência, passei muitos anos escrevendo apenas para mim, desanimado com o cenário literário e sem saber se deveria continuar tentando.</p>
        <p>O segundo desafio é algo muito mais pessoal e que faz parte de mim: sou disléxico. As dificuldades que enfrento por causa da dislexia, muitas vezes, superam todos os outros desafios. Cada página que escrevo exige um esforço enorme de revisão, de análise e de atenção para identificar possíveis problemas e compreender exatamente o que escrevi.</p>
        <p>Lembro-me de uma situação que me marcou muito. Um dia, fui entregar um exemplar a uma leitora aqui em Lisboa. Obviamente, eu precisava autografá-lo, e o simples medo de confundir palavras ou escrever alguma coisa errada me fez suar como jamais havia suado na vida. Hoje, porém, aprendi a conviver com a dislexia e a não permitir que ela determine até onde posso chegar.</p>
        <p>Também descobri que uma das maiores escritoras de romances policiais da história, Agatha Christie, enfrentou dificuldades relacionadas à escrita e à leitura. Saber que uma autora tão grandiosa superou obstáculos e construiu uma carreira extraordinária foi, para mim, uma grande inspiração.</p>
        <p>Se ela enfrentou as suas dificuldades e nunca desistiu, eu também não posso desistir. Por isso continuo aqui, superando os meus próprios limites a cada página escrita.</p>
    </div>

    <div class="entrevista-text-center">
        <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/cover.jpg') }}" style="max-width: 100%">
    </div>

     <div class="entrevista-text-justificado ">
        <h2>Você está lançando um novo livro. Pode nos contar um pouco sobre o projeto?</h2>

        <p>Depois de algum tempo sem publicar nada, cá estamos novamente, com um dos meus projetos mais interessantes e, talvez, um dos mais pessoais. De certa forma, esse livro carrega muito de mim. Todo livro acaba levando algo do seu criador, mas, neste caso, existe uma ligação particularmente forte.</p>
        <p>Quero enfatizar que esse livro foi escrito durante o pior momento da minha vida, e isso é extremamente importante para compreender alguns pontos cruciais da trama. A começar pelo protagonista e pelo caos familiar que envolve toda a história. Confesso que, de alguma forma, peguei aquilo que estava vivendo naquela época e transformei em um desastre muito maior e muito mais tenebroso, dentro da ficção.</p>
        <p>Como disse um dos meus leitores beta: “Anderson, não basta viver o caos; você tem que piorá-lo, entregá-lo e compartilhá-lo.” É engraçado, mas existe muita verdade nisso.</p>
        <p>O Diabo São as Verdades que Não Te Contam é, por vezes, pesado, sombrio e profundamente triste. Não triste no sentido superficial da palavra, mas no sentido de sentir que algo está sendo esmagado e deixado para trás. O protagonista perde pessoas que ama, perde amigos e passa por situações que ele próprio não consegue compreender completamente. Ele tinha confiança, tinha fé, tinha certezas e, aos poucos, tudo isso começa a se desfazer.</p>
        <p>Aquilo que ele mais ama é simplesmente atropelado — e não estou usando essa palavra apenas no sentido figurado. Ao longo da história, tudo se transforma, e as minhas próprias emoções durante aquele período sombrio da minha vida acabaram refletidas no personagem. Não necessariamente naquilo que ele faz com os outros, mas principalmente naquilo que ele é capaz de fazer consigo mesmo.</p>

    <div class="flex-cards-entrevista-meio">
        <div class="card-entrevista">
            <!-- <br> -->
            <img src="{{ Storage::url('entrevistas/andersonJose/foto01.jpeg') }}" style="max-width: 420px;">
            <legend>acervo pessoal do autor</legend>
        </div>

        <div class="card-entrevista">
            
            <p>Por isso, posso dizer que O Diabo São as Verdades que Não Te Contam é, de certa forma, um retrato de uma fase muito difícil da vida de um escritor que atravessava um período obscuro, frágil, cheio de medo e, algumas vezes, de raiva.</p>
            <p>Mas acredito que a história também deixa uma mensagem muito clara: não confie cegamente, não se entregue a ponto de se esquecer de si mesmo e não seja ingênuo diante das pessoas que estão ao seu redor. Aprenda a observar os pequenos detalhes, mesmo aqueles que parecem insignificantes, e, acima de tudo, não se esqueça de amar a si mesmo antes que seja tarde demais.</p>
        </div>

    </div>

        <p>Talvez essa seja uma das maiores verdades que o livro tenta transmitir: algumas coisas não se quebram de uma hora para outra. Às vezes, os sinais estavam ali o tempo todo, nós é que não quisemos ou não conseguimos enxergá-los. E, quando finalmente percebemos, pode ser tarde demais para voltar atrás.</p>

        <p>São cerca de 300 páginas nas quais coloquei tudo o que eu conseguia dar de mim naquele momento. É um livro forte, sombrio e muito pessoal. Talvez seja, acima de tudo, uma parte de mim que transformei em história.</p>

        <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/card02.jpg') }}" style="max-width: 100%; display: block">
        <br>

        <h2>Um romance costuma nascer de uma pergunta central. Qual foi a pergunta que deu origem a este livro?</h2>

        <p>Sem dúvida, todo o romance nasceu desta pergunta: <b>O diabo realmente acende o pavio, ou somos nós que o acendemos e, para nos livrarmos da culpa, colocamos a responsabilidade sobre o diabo?</b></p>       

    </div>

    <div class="entrevista-text-center">
        <img src="{{ Storage::url('entrevistas/andersonJose/foto02.jpeg') }}" style="max-width: 360px">
        <legend style="font-size: clamp(1rem, 0.1vw + 1rem, 4rem)">acervo pessoal do autor</legend>
    </div>
    <br><br>

    <div class="entrevista-frase-destaque">
        <p> <em>Quando colocamos algo de nós mesmos no personagem, ele deixa de ser apenas uma criação e passa a carregar uma parte da nossa humanidade.</em></p>
        <br>
    </div>

     <div class="entrevista-text-justificado ">

        <h2>Você acredita que os personagens são espelhos de seus criadores? Qual personagem do livro você acredita que foi mais influenciado pela sua pessoa?</h2>

        <p>Acredito muito nisso. Para mim, é quase impossível criar um personagem sem deixar nele alguma parte de nós mesmos. Mesmo quando não percebemos, acabamos colocando nos personagens nossas experiências, medos, frustrações, desejos e até pensamentos que preferíamos não admitir.</p>
        <p>Sem dúvida, o personagem Nuno Nepomuceno foi o mais inspirado em mim. Ele carrega algumas das minhas frustrações e até alguns dos meus pensamentos mais estúpidos. Há muito de mim nele, talvez mais do que eu gostaria de admitir.</p>
        <p>Mas acho que é justamente isso que torna um personagem interessante. Quando colocamos algo de nós mesmos nele, ele deixa de ser apenas uma criação e passa a carregar uma parte da nossa humanidade.</p>

        <h2>Quais reações você espera que os leitores tenham ao ler seu livro?</h2>

        <p>Acredito que muitos leitores vão sentir raiva. Eu, por exemplo, todas as vezes que penso no antagonista, sinto uma espécie de repulsa. Então, acredito que boa parte dos leitores possa sentir algo parecido, ao longo da leitura.</p>
    </div>

    <div class="flex-cards-entrevista-meio">
        <div class="card-entrevista">
            <br>
            <img src="{{ Storage::url('entrevistas/andersonJose/foto03.jpeg') }}">
            <legend>acervo pessoal do autor</legend>
        </div>

        <div class="card-entrevista">
            
            <p>Mas, acima de tudo, espero que o leitor termine o livro de forma contemplativa. Quero que a história continue na cabeça dele mesmo depois de fechar o livro e o faça questionar algumas coisas.</p>
            <p>Espero que ele se pergunte: devo simplesmente confiar e seguir em frente, ou devo parar, questionar e tentar compreender melhor aquilo que está acontecendo? Talvez o livro faça o leitor olhar para algumas dúvidas que já existiam dentro dele e enxergá-las de uma maneira diferente.</p>
            <p>Se, depois de terminar a última página, o leitor continuar pensando na história e fazendo perguntas a si mesmo, então acredito que o livro cumpriu o seu papel.</p>
        </div>

    </div>

    <!-- <div class="entrevista-frase-destaque">
        <p> <em>Uma frase em destaque e itálico. Uma frase em destaque e itálico. Uma frase em destaque e itálico.</em></p>
        <br>
    </div> -->

     <div class="entrevista-text-justificado ">

        <h2>Como é seu processo de escrita e como foi para esse lançamento?</h2>

        <p>Meu processo criativo é gostoso demais. Gosto de dizer que a melhor coisa é escrever para ser mais claro — que o processo importa tanto quanto o resultado. Talvez por isso eu demore tanto para terminar um livro: fico ali, “namorando” as páginas, as cenas e os diálogos.</p>
        <p>Falando mais especificamente da minha técnica, costumo idealizar toda a história em um roteiro, antes de escrever a primeira página. Preciso saber para onde a história vai e, principalmente, qual será o final do livro. Só depois começo a primeira escrita.</p>
        <p>Essa primeira etapa é, para mim, a mais fácil, porque basta deixar a imaginação fluir em cima do projeto que já foi estruturado. Confesso que, nessa fase maravilhosa, consumo garrafas e mais garrafas de café. Aqui não me preocupo tanto com a forma; simplesmente escrevo e deixo a história acontecer.</p>
        <p>Quando termino a primeira versão, paro por um período curto, normalmente uma semana no máximo. Depois começo a segunda escrita. Nesse momento, a história já existe, então começo a lapidá-la: melhoro as cenas, acrescento detalhes, trabalho melhor os diálogos e procuro tornar tudo mais rico.</p>
        <p>Depois vem a terceira e última escrita, que é uma das etapas mais demoradas e cansativas. É quando reviso tudo com muito cuidado, procurando erros, ajustando frases e, principalmente, verificando se não troquei ou confundi palavras parecidas por causa da dislexia, como já falei anteriormente. Essa etapa exige muita concentração e atenção.</p>
        <p>No fim, é assim que termino um livro: passando por essas três etapas, cada uma com uma função diferente.</p>
        <p>Eu sei que roteirizar e revisar tudo dessa maneira dá bastante trabalho, mas, para mim, funciona muito melhor — principalmente por causa da dislexia. Ter toda a história estruturada antes de começar me dá segurança.</p>

        <h2>Qual conselho você daria a um autor que mostra vontade, mas ainda está inseguro para escrever ficção?</h2>

        <p>Primeiro, procure se encontrar na escrita. Não tente se encontrar na escrita de um escritor famoso. Não imite ninguém; procure desenvolver o seu próprio estilo. É claro que todos nós temos influências, e isso é saudável. O que não é bom é transformar o seu escritor favorito em um modelo para copiar.</p>

    </div>

    <div class="flex-cards-entrevista-meio">
        <div class="card-entrevista">
            <!-- <br> -->
            <img src="{{ Storage::url('entrevistas/andersonJose/foto04.jpeg') }}" style="max-width: 65%">
            <legend>acervo pessoal do autor</legend>
        </div>

        <div class="card-entrevista">            

            <p>Leia muito, mas procure também variar as suas leituras. Se você estiver escrevendo um livro de fantasia, por exemplo, talvez seja interessante não passar todo o processo lendo apenas fantasia. Leia outros gêneros, descubra outros autores e permita que diferentes formas de escrever influenciem a sua formação.</p>
            <p>E, acima de tudo, escreva. Não deixe de treinar. Escreva todos os dias, nem que sejam algumas linhas. Leia Machado de Assis e outros grandes nomes da literatura brasileira. Conheça a nossa literatura e procure construir uma voz que seja verdadeiramente sua.</p>
        </div>
    </div>
    <br>
    <br>

    <div class="entrevista-text-center">
        <h2>Contato:</h2>
        <p><b>IG: <a href="https://www.instagram.com/anderson.fjose/">anderson.fjose</a></b>
        </p>
        <p><b>e-mail: andersonanjos80@outlook.com.br</b>            
        </p>
        <img src="{{ Storage::url('images/logo.png') }}" style="max-width: 100%">        
    </div>

</section>

@endsection