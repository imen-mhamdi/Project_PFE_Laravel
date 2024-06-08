<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />

     <div class="form-group">
    <label for="exampleFormControlInput1">Date fact</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" 
    value={{ \Carbon\Carbon::now()->toDateString() }} 
                            disabled
    >
  </div>
  <div class="form-group">
    <label for="code_facture">code Vidange</label>
    <input  name="code_facture" id="code_facture"class="form-control" placeholder="code Vidange">
  </div>
  <div class="form-group">
    <label for="code_vh">Code Vehicule</label>
    <select class="form-control" 
    name="code_vh"
    id="code_vh"
    >
    @foreach($vehicules as $forn)
      <option value="{{$forn->code_veh}}">{{$forn->code_veh}}</option>
     
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="km_vehicule_vidange">Km Vehicule Vidange</label>
    <input  name="km_vehicule_vidange" 
    type="number"
    id="km_vehicule_vidange"class="form-control" placeholder="Km Vehicule Vidange">
  </div>

     <br />
   <div class="table-responsive">
                <form method="post" id="dynamic_form">
                 <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                <th width="0.5%"></th>
                    <th width="20%">Code Produit Vidange</th>
                 
                    <th width="20%">Qte Piece</th>
                    
                  
                    
                </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                <tr>
                
                  <td>
                  <td width="20%"></td>
               
                  <td width="20%">Totale Qte : <spam id="total_qty"></spam> </td>

                  
                              
                                <td>
                  @csrf
               
                 
                  <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                 </td>
                </tr>
               </tfoot>
           </table>

         



                </form>
   </div>
  </div>
 </body>
</html>


   

<script> 


$(document).change('#refresh_prices', function() {
	refreshPrices();
  refreshQte();
  refreshPrix();
})

// function actuallissant les prix de tous les champs calculer automatiquement

function refreshPrix(){
  var totalPrix = 0;


$('.row').each(function(){
  totalPrix += parseInt(refreshRowPrix($(this)));
  
})

//input data 




  $('#total_prix').text(totalPrix);


}



function refreshQte(){
  var totalQte = 0;


$('.row').each(function(){
  totalQte += parseInt(refreshRowQte($(this)));
  
})

$('#total_qty').text(totalQte);
}
function refreshPrices() {
	var totalPrice = 0;


  $('.row').each(function(){
  	totalPrice += refreshRowPrice($(this));
    
  })

  $('#total_price').text(totalPrice);

}



// function recalculant le prix d'un ligne et retournant le prix
function refreshRowPrice($row) {
	// récupère le prix et la quantité
	var price = $row.find('.row_price').val(),
  		quantity = $row.find('.row_quantity').val(),
      rowPrice = price * quantity;
      
  $row.find('.row_total').text(rowPrice);
  return rowPrice;
}

function refreshRowPrix($row) {
	// récupère le prix et la quantité

  	var	quantity = $row.find('.row_quantity').val()
   if(quantity==""){
     return "0"
   }else{
    return quantity;
   }
  
}
function refreshRowQte($row) {
	// récupère le prix et la quantité
	var price = $row.find('.row_price').val()
  if(price==""){
     return "0"
   }else{
    return price;
   }
   
 
}
$(document).ready(function(){
 

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
   
  html = '<tr  class="row">';
        html += '<td><select id="code_pie[]" name="code_pie[]" class="form-control" >@foreach($produit_vidanges as $forn)<option value="{{$forn->Code_prd_vid}}">{{$forn->Code_prd_vid}}</option>@endforeach</select></td>';
        html += '<td><input type="number"  name="qte_pie[]" class="form-control refresh_prices row_price" /></td>';
        // html+='<td class="row_total"></td>'

        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 
 });

// function recalculant le prix d'un ligne et retournant le prix

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });


 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        var code_facture = $('#code_facture').val();
        
        var code_frs = $('#code_vh').find(":selected").val()
        var km_veh = $('#km_vehicule_vidange').val();
        ///facture_vidange_finale/{code_facture}/{code_vh}/{km_veh}
        $.ajax({
          url:`/facture_vidange_finale/${code_facture}/${code_frs}/${km_veh}`,
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});
</script>