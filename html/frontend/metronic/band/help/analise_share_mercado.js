/**
 * Created by frpereira on 13/10/14.
 */
document.helpData= [
    {
        rect: {left: 734, top: 8, width: 175, height: 50},
        textRect: {left: 250, top: 50, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Digite o nome do anunciante nesta caixa de texto e aperte "Enter" ou clique na lupa para realizar a pesquisa</li>' +
            '<li>Esta é uma seleção opcional, o painel funcionará assumindo todos os anunciantes se nenhum for selecionado.</li>' +
            '<li>Você pode escolher mais de um assinante.</li>' +
            '</ul>',
        title: 'Seleção de Anunciante'
    },
    {
        rect: {left: 734, top: 117, width: 175, height: 50},
        textRect: {left: 250, top: 117, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Digite o nome da Agência nesta caixa de texto e aperte "Enter" ou clique na lupa para realizar a pesquisa</li>' +
            '<li>Esta é uma seleção opcional, o painel funcionará assumindo todos as agências se nenhuma for selecionada.</li>' +
            '<li>Você pode escolher mais de uma agência.</li>' +
            '</ul>',
        title: 'Seleção de Agência'
    },
    {
        rect: {left: 734, top: 202, width: 175, height: 93},
        textRect: {left: 250, top: 202, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Clique sobre a caixa de seleção "Setor ou Categoria" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
            '<li>O painel vem com todos Setores e Categorias selecionados por padrão</li>' +
            '<li>Na parte superior do painel você pode digitar uma palavra para filtrar os Setores/Categorias desejados.</li>' +
            '<li>Após fazer sua seleção, clique no botão "Aplicar" que fica no canto inferior direito  direito do painel.</li>' +
            '</ul>',
        title: 'Setor e Categoria'
    },
    {
        rect: {left: 734, top: 295, width: 175, height: 50},
        textRect: {left: 250, top: 295, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Clique sobre a caixa de seleção "Período de Análise" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
            '<li>Selecione o Período desejado.</li>' +
            '</ul>',
        title: 'Período de Análise'
    },
    {
        rect: {left: 734, top: 345, width: 175, height: 50},
        textRect: {left: 250, top: 320, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Clique sobre a caixa de seleção "Target" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
            '<li>Selecione o Target desejado.</li>' +
            '<li>Por padrão o Target selecionado é: Total de Domicílios.</li>' +
            '</ul>',
        title: 'Target'
    },
    {
        rect: {left: 734, top: 404, width: 175, height: 50},
        extraRects: [{left: 734, top: 458, width: 175, height: 50, color:'rgba(255,0,0,.5)'}],
        textRect: {left: 250, top: 320, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Clique sobre a caixa de seleção "Praça - Investimento" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
            '<li>O painel vem com todas as Praças selecionados por padrão</li>' +
            '<li>Na parte inferior do painel você pode digitar uma palavra para filtrar as Praças desejadas.</li>' +
            '<li>Após fazer sua seleção, clique no botão "Aplicar" que fica no canto inferior direito do painel.</li>' +
            '<li style="color:#ff090f" >Lembre-se de selecionar uma  "Praça - Audiência" correspondente com a "Praça - Investimento" selecionada.</li>' +
            '</ul>',
        title: 'Praça - Investimento'
    },
    {
        rect: {left: 734, top:458 , width: 175, height: 50},
        extraRects: [{left: 734, top: 404, width: 175, height: 50, color:'rgba(255,0,0,.5)'}],
        textRect: {left: 250, top: 320, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Clique sobre a caixa de seleção "Praça - Audiência" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
            '<li>O painel vem com todas as Praças selecionados por padrão</li>' +
            '<li>Na parte inferior do painel você pode digitar uma palavra para filtrar as Praças desejadas.</li>' +
            '<li>Após fazer sua seleção, clique no botão "Aplicar" que fica no canto inferior direito do painel.</li>' +
            '<li style="color:#ff090f" >Lembre-se de selecionar uma  "Praça - Investimento" correspondente com a "Praça - Audiência" selecionada.</li>' +
            '</ul>',
        title: 'Praça - Audiência'
    },
    {
        rect: {left: 734, top:505 , width: 175, height: 170},
        textRect: {left: 250, top: 320, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Você pode alterar o desconto de cada emissora caso tenha uma informação mais precisa sobre o desconto praticado ou para fazer simulações .</li>' +
            '<li>Clique no campo respectivo à emissora que deseja alterar o desconto e digite o novo valor.</li>' +
            '<li>Tecle "Enter" para atualizar o novo valor.</li>' +

            '</ul>',
        title: 'Descontos'
    },
    {
        rect: {left: 558, top:558 , width: 100, height: 130},
        textRect: {left: 250, top: 320, width: 470, height: 'auto'},
        text: '<ul>' +
            '<li>Estes valores representam a variação entre os dois períodos</li>' +
            '<li>Verde para um crescimento do share e vermelho para uma diminuição.</li>' +

            '</ul>',
        title: 'Variação de Períodos'
    }

];