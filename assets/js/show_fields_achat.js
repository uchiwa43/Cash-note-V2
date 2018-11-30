//**ESSENCE**
//au chargement
$(document).ready(function ()
{
    if($('[name="categorie"]').find("option:selected").val()==2)
        $('#div_essence').fadeIn('slow');
    else
        $('#div_essence').fadeOut('slow');
});

//sur changement
$(document).ready(function ()
{
    $('[name="categorie"]').focusout(function ()
    {
        var valeur = $(this).find("option:selected").val();

        console.log(valeur);
        if ( valeur == 2)
            $('#div_essence').fadeIn('slow');
        else
            $('#div_essence').fadeOut('slow');
    });
});


//**INTERNET**
//au chargement ne marche pas

//sur changement
$(document).ready(function () {
    $('#is_internet').change(function () {
        if (this.checked)
            $('#div_internet').fadeIn('slow');
        else
            $('#div_internet').fadeOut('slow');
    });
});


//**PAYEMENT NON LIQUIDE**
//au chargement de la page
$(document).ready(function ()
{
    if($('[name="moyen_payement"]').find("option:selected").val()!= 2)
        $('#div_pnl').fadeIn('slow');
    else
        $('#div_pnl').fadeOut('slow');
});

//si changement
$(document).ready(function ()
{
    $('[name="moyen_payement"]').focusout(function ()
    {

        var valeur = $(this).find("option:selected").val();

        console.log(valeur);
        if ( valeur != 2)
            $('#div_pnl').fadeIn('slow');
        else
            $('#div_pnl').fadeOut('slow');
    });
});


//**PRIX A L'UNITE**
//au chargement
$(document).ready(function ()
{
    if ( $('[name="quantite"]').val().length != 0)
        $('#div_prix_unite').fadeIn('slow');
    else
        $('#div_prix_unite').fadeOut('slow');
});

//si changement
$(document).ready(function ()
{
    $('[name="quantite"]').blur(function () //blur = quand on quitte l'input
    {
        if ( $('[name="quantite"]').val().length != 0)
            $('#div_prix_unite').fadeIn('slow');
        else
            $('#div_prix_unite').fadeOut('slow');
    });
});