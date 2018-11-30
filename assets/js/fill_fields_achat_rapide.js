function getYearAndMonth() {
    var fullDate = new Date();
    var month =  fullDate.getMonth()+1;
    var str_date = fullDate.getFullYear()+'-'+ month;
    return str_date;
}

function GetFirstDayOfThisMonth() {
    var yearAndMonth = getYearAndMonth();
    var str_date_debut = yearAndMonth +'-01' ;
    return str_date_debut;
}

function GetLastDayOfThisMonth() {
    var myDate = new Date ();
    var lastDay = myDate.getDate ();
    var yearAndMonth = getYearAndMonth();
    var str_date_fin = yearAndMonth +'-'+lastDay ;
    return str_date_fin;
}

//**ESSENCE**
function essence_on(){
    var str_date_debut =GetFirstDayOfThisMonth();
    $('input[name=date_achat_prevue_debut]').val(str_date_debut);

    var str_date_fin = GetLastDayOfThisMonth();
    $('input[name=date_achat_prevue_fin]').val(str_date_fin);

    $('input[name=valeur_prevue]').val(45);

    $('#div_essence').fadeIn('slow');
    $('input[name=quantite]').val(30);
}
function essence_off() {
    $('input[name=date_achat_prevue_debut]').val('');
    $('input[name=date_achat_prevue_fin]').val('');
    $('input[name=valeur_prevue]').val('');
    $('#div_essence').fadeOut('slow');
    $('input[name=quantite]').val('');
}

//au chargement
$(document).ready(function () {
    if($('[name="achat"]').find("option:selected").val()==1)
        essence_on()
    else
        essence_off()
});

//sur changement
$(document).ready(function () {
    $('[name="achat"]').focusout(function () {
        if ( $(this).find("option:selected").val() == 1)
            essence_on()
        else
            essence_off()
    });
});


//**TELEPHONE


//sur changement
$(document).ready(function () {
    $('[name="achat"]').focusout(function () {
        if ( $(this).find("option:selected").val() == 2) {

            $("#vendeur option[value=2]").attr("selected","selected") ;

            var yearAndMonth = getYearAndMonth();
            var str_date_debut = yearAndMonth +'-22' ;
            $('input[name=date_achat_prevue_debut]').val(str_date_debut);

            var str_date_fin = yearAndMonth +'-24' ;
            $('input[name=date_achat_prevue_fin]').val(str_date_fin);

            $('input[name=valeur_prevue]').val(10);
        }
    });
});


//**BANQUE**
//sur changement
$(document).ready(function () {
    $('[name="achat"]').focusout(function () {
        if ( $(this).find("option:selected").val() == 3){

            $("#vendeur option[value=3]").attr("selected","selected") ;

            var yearAndMonth = getYearAndMonth();
            var str_date_debut = yearAndMonth +'-13' ;
            $('input[name=date_achat_prevue_debut]').val(str_date_debut);

            var str_date_fin = yearAndMonth +'-16' ;
            $('input[name=date_achat_prevue_fin]').val(str_date_fin);

            $('input[name=valeur_prevue]').val(2.17);
        }
    });
});

//**ASSURANCE
//sur changement
$(document).ready(function () {
    $('[name="achat"]').focusout(function () {
        if ( $(this).find("option:selected").val() == 4){

            $("#vendeur option[value=4]").attr("selected","selected") ;

            var yearAndMonth = getYearAndMonth();
            var str_date_debut = yearAndMonth +'-10' ;
            $('input[name=date_achat_prevue_debut]').val(str_date_debut);

            var str_date_fin = yearAndMonth +'-12' ;
            $('input[name=date_achat_prevue_fin]').val(str_date_fin);

            $('input[name=valeur_prevue]').val(61.23);
        }
    });
});