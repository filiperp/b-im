/**
 * Created by frpereira on 18/09/14.
 */


var brazilStates;
brazilStates = (function () {
    'use strict';
    function brazilStates() {


    }

    brazilStates.pracas = [
        'São Paulo',
        'Taubaté',
        'Campinas',
        'Curitiba',
        'Porto Alegre',
        'Rio de Janeiro',
        'Barra MAnsa',
        'Belo Horizonte',
        'Triângulo',
        'Brasília',
        'Palmas',
        'Manaus',
        'Natal',
        'Salvador'

    ]

    brazilStates.states = [
        {originalID: '007', id: '007', shortLabel: 'DF', label: 'Distrito Federal'},
        {originalID: '019', id: '019', shortLabel: 'RJ', label: 'Rio de Janeiro'},
        {originalID: '008', id: '008', shortLabel: 'ES', label: 'Espirito Santo'},
        {originalID: '026', id: '026', shortLabel: 'SE', label: 'Sergipe'},
        {originalID: '002', id: '002', shortLabel: 'AL', label: 'Alagoas'},
        {originalID: '017', id: '017', shortLabel: 'PE', label: 'Pernambuco'},
        {originalID: '015', id: '015', shortLabel: 'PB', label: 'Paraiba'},
        {originalID: '004', id: '004', shortLabel: 'AM', label: 'Amazonas'},
        {originalID: '023', id: '023', shortLabel: 'RR', label: 'Roraima'},
        {originalID: '014', id: '014', shortLabel: 'PA', label: 'Para'},
        {originalID: '003', id: '003', shortLabel: 'AP', label: 'Amapa'},
        {originalID: '010', id: '010', shortLabel: 'MA', label: 'Maranhao'},
        {originalID: '018', id: '018', shortLabel: 'PI', label: 'Piaui'},
        {originalID: '006', id: '006', shortLabel: 'CE', label: 'Ceara'},
        {originalID: '020', id: '020', shortLabel: 'RN', label: 'Rio Grande do Norte'},
        {originalID: '005', id: '005', shortLabel: 'BA', label: 'Bahia'},
        {originalID: '027', id: '027', shortLabel: 'TO', label: 'Tocantins'},
        {originalID: '011', id: '011', shortLabel: 'MT', label: 'Mato Grosso'},
        {originalID: '022', id: '022', shortLabel: 'RO', label: 'Rondonia'},
        {originalID: '001', id: '001', shortLabel: 'AC', label: 'Acre'},
        {originalID: '013', id: '013', shortLabel: 'MG', label: 'Minas Gerais'},
        {originalID: '025', id: '025', shortLabel: 'SP', label: 'Sao Paulo'},
        {originalID: '012', id: '012', shortLabel: 'MS', label: 'Mato Grosso do Sul'},
        {originalID: '016', id: '016', shortLabel: 'PR', label: 'Parana'},
        {originalID: '024', id: '024', shortLabel: 'SC', label: 'Santa Catarina'},
        {originalID: '021', id: '021', shortLabel: 'RS', label: 'Rio Grande do Sul'},
        {originalID: '009', id: '009', shortLabel: 'GO', label: 'Goias'}

    ];


    brazilStates.getRandom = function (min, max) {
        "use strict";
        var res = [];

        for (var i = 0; i < brazilStates.states.length; i++) {
            var state = brazilStates.states[i];
            res.push({id: state.id, value: parseInt(min + ((max - min) * Math.random()))});

        }
        return res;
    }

    brazilStates.getRamdonQty = function(min, max, qty){
        "use strict";
        var res =[];

        for (var i = 0; i < qty; i++) {
            var state = {value:parseInt(min + ((max - min) * Math.random()))};
            res.push(state);

        }
        return res;
    }

    return brazilStates;

})();

