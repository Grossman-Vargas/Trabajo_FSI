
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('form').addEventListener('submit', function(event) {
        
        const noches = document.querySelector('input[name="Noches"]').value;
        const habitacion = document.querySelector('input[name="Habitacion"]').value;
        const huespedes = document.querySelector('input[name="Huespedes"]').value;


        if (parseInt(noches) <= 0 || isNaN(noches)) {
        
            alert('Error');
            event.preventDefault();
            return; 
        
        }

        
        if (habitacion === "") {
            
            alert('Error');
            event.preventDefault();
            return; 

        }

        
        if (parseInt(huespedes) <= 0 || isNaN(huespedes)) {
            
            alert('Error');
            event.preventDefault();
            return;

        } /*else {

            if (parseInt(huespedes) >= 100){
                alert('Son muchos');
                event.preventDefault();
                return;

            } else {

                alert('Sin retorno');
                event.preventDefault();
                return;

            }
        }*/

        /*switch (parseInt(huespedes)){
            case 1:
                alert('1 huesped');
                event.preventDefault();
                break;
            case 2:
                alert('2 huespedes');
                event.preventDefault();
                break;
            case 3:
                alert('3 huespedes');
                event.preventDefault();
                break;
        }*/
    
    });

});
