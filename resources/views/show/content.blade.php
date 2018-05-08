<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
<style>
#sarasa {
    font-family: "Poppins",sans-serif;
    font-size: 1.3rem;
    font-weight: 700;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
}    
</style>    
<br>

<br>

<br>

<div class="row">

<div class="col-md-12">

<div class="panel panel-primary">
  

  <div class="panel-body" style="overflow-y:auto; height: 530px;">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <th style='text-align:center;'>Name</th>
                <th style='text-align:center;'>Email</th>
                <th style='text-align:center;'>Phone</th>
                <th style='text-align:center;'>Phone Type</th>
                <th style='text-align:center;'>Company</th>
                <th style='text-align:center;'>Street Name</th>
                <th style='text-align:center;'>Street Number</th>
                <th style='text-align:center;'>City</th>
                <th style='text-align:center;'>State</th>
                <th style='text-align:center;'>Country</th>
                <th style='text-align:center;'>Option</th>
            </thead>
            <tbody id="ranking"> </tbody>    
        </table>
    </div>
</div>


</div>

<script >

    
    function ranking(){
        var html = [];
    
        $.get('/backend/show/contact' , function(response){
            
            response.forEach( function(contact){


                
                var tr = "<tr>";
                tr+="<td style='text-align:center;'> <a href='/backend/show/"+contact.id+"'>"+ contact.name +"</a></td>"
                tr+="<td style='text-align:center;'>"+ contact.email +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.phone +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.phone_type +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.company +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.street_name +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.street_number +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.city +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.state +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.country +"</td>"
                tr+="<td style='text-align:center;'>"+ "update" +"</td>"

                html.push(tr);
            });

            $("#ranking").html(html.join(''));


            $('#example').dataTable();


        }, 'json');
    }


    $(document).ready(function(){
        
        $("#show").addClass("active");
        ranking();
        

        
    });

</script>
