<div class="row">

<div class="col-md-10">

<div class="panel panel-primary">
  

  <div class="panel-body" style="overflow-y:auto; height: 530px;">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <th style='text-align:center;'>Name</th>
                <th style='text-align:center;'>Company</th>
                <th style='text-align:center;'>Email</th>
                <th style='text-align:center;'>Option</th>
                <th style='text-align:center;'>Option</th>
                <th style='text-align:center;'>Option</th>
                <th style='text-align:center;'>Option</th>
                <th style='text-align:center;'>Option</th>
                <th style='text-align:center;'>Option</th>
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
                tr+="<td style='text-align:center;'>"+ contact.name +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.email +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.phone +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.phone_type +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.company +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.street_name +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.street_number +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.city +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.state +"</td>"
                tr+="<td style='text-align:center;'>"+ contact.country +"</td>"

                html.push(tr);
            });

            $("#ranking").html(html.join(''));


            $('#example').DataTable();


        }, 'json');
    }


    $(document).ready(function(){
        
        $("#show").addClass("active");
        ranking();
        

        
    });

</script>
