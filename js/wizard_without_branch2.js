/*  Wizard */
jQuery(function($) {

    
    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function(event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text("" + state.stepsComplete + " of " + state.stepsPossible + " completed");
        }
    });
});

// Input name and email value
function getVals(formControl, controlType) {
    switch (controlType) {

      
        case 'email_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#email_field").text(value);
            break;

        case 'state_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#state_field").text(value);
            break;

        case 'make_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#master-dropdown_field").text(value);
            break;

        case 'model_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#model_field").text(value);
            break;
            
        case 'year_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#year_field").text(value);
            break;
            
        case 'part_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#part_field").text(value);
            break;

        case 'fname_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#fname_field").text(value);
            break;

        case 'lname_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#lname_field").text(value);
            break;
            
        case 'phone_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#phone_field").text(value);
            break;
        
        case 'address_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#address_field").text(value);
            break;

            case 'house_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#house_field").text(value);
            break;
        
        case 'city_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#city_field").text(value);
            break;

        case 'zip_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#zip_field").text(value);
            break;
            
        case 'date_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#date_field").text(value);
            break;

        case 'time_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#time_field").text(value);
            break;

        case 'insurance_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#insurance_field").text(value);
            break;
            
        case 'insurance_num_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#insurance_num_field").text(value);
            break;

    }
}