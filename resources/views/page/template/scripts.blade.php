<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/materialize/materialize.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/slick/slick.min.js') }}"></script>

<script src="https://use.fontawesome.com/c3d13979f5.js"></script>

<script>

  	$(document).ready(function(){  
      	$('.slider').slider();
      	$('select').material_select();        
        $('.datepicker').pickadate({
          format: 'dd/mm/yy',
          minDate: new Date()
        });
      	$(".button-collapse").sideNav();

      	$('.dropdown-trigger').dropdown({
      		autoTrigger: false,
      		coverTrigger: false,
      		constrainWidth: false
      	});
    }); 

</script>