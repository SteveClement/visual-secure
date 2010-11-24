$(function() 
{
	$('#slider-out').append('<div id="slider"></div>');
	$("#slider").slider({
		range: "min",
        animate: true,
		value: motDePasseDefaut,
		min: motDePasseMin,
		max: motDePasseMax,
		slide: function(event, ui) {
			$('#current-length').html(ui.value);
			$('#length').val(ui.value);
		}
    });

    $('.legend-callout').live('click', function() {
        $($(this).attr('hash')).fadeIn('fast', function() { 
            var legend = this; 
            $('body').click(function() { 
                $(legend).fadeOut('fast'); 
                legend = null;
                $(this).unbind('click'); 
            }); 
        });
        return false;
    });

    $('#next').click(function() {
        if( $('.this').attr('id') == 'step2' ) {
            if( $('input:checked').length == 0 ) {
                warning(errorMsg);
                return false;
            }

            $('.this').addClass('loading');
            $.ajax( {
            type: 'POST' ,
            data: {
                lang: $('#lang').val(),
                longueur_MdP: $('#length').val(),
                set_chars_minuscules: $('#chrmin:checked').val(),
                set_chars_majuscules: $('#chrmaj:checked').val(),
                set_chars_chiffres: $('#chrchf:checked').val(),
                set_chars_speciaux: $('#chrspc:checked').val()
            },
            url: 'eval.php',
            success: function(data) {
                    $('#step3').html(data);
                    $('.this').fadeOut(200, function() { 
                        $(this).removeClass('this').removeClass('loading');
                        $('.current').removeClass('current').next().addClass('current');

                        $(this).next().fadeIn(200, function() { 
                            $(this).addClass('this'); 
                            $('#next').hide();
                            $('#back').show();
                        });
                    });
                },
            error: function() {
                }
            });            
        } else {
        	$('.this').fadeOut(200, function() { 
    	    	$(this).removeClass('this');
    	    	$('.current').removeClass('current').next().addClass('current');

        		$(this).next().fadeIn(200, function() { 
        			$(this).addClass('this'); 
    	   		});
    		});
        }

        return false;
    });

    $('#back').click(function() {
    	$('.this').fadeOut(200, function() {
    		$(this).removeClass('this');
    		$('.current').removeClass('current');
    		$('#steps span:first-child').addClass('current');
    		
    		$('#slider').slider('value', motDePasseDefaut);
    		$('#length').val(motDePasseDefaut);
    		$('#current-length').html(motDePasseDefaut);
    		$('input:checked').removeAttr('checked');

    		$('#step1').fadeIn(200, function() {
    			$(this).addClass('this');
    			$('#back').hide();
    			$('#next').show();
    		});
    	});

        return false;
    });
});

function warning(msg)
{
    $('#f').append('<p id="warning">'+ msg +'</p>');
    setTimeout(clear_warning, 2000);
}

function clear_warning()
{
    $('#warning').fadeOut('fast', function() { $(this).remove(); });
}