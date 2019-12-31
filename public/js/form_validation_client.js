$(document).ready(function () {
    $('.esignation_form_validation_class').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            designation: {
                message: 'The designation is not valid',
                validators: {
                    notEmpty: {
                        message: 'the designation field is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Designation must be between 3 and 30 character'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The designation can only consist of alphabetical, number and underscore'
                    }
                }
            },
        }
    });
});