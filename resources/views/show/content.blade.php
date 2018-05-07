<div class="panel panel-primary">
  

  <div class="panel-body" style="overflow-y:auto; height: 530px;">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <th style='text-align:center;'>Name</th>
                <th style='text-align:center;'>Company</th>
                <th style='text-align:center;'>Email</th>
                <th style='text-align:center;'>Option</th>
            </thead>
            <tbody id="ranking"> </tbody>    
        </table>
    </div>
</div>


<script >

    
    function ranking(){
        var html = [];
    
        $.get('/backend/city/1' , function(response){
            
            response.forEach( function(asesor){


                
                var tr = "<tr>";
                tr+="<td style='text-align:center;'>"+ asesor.name +"</td>"

                html.push(tr);
            });

            $("#ranking").html(html.join(''));


            $('#example').DataTable();


        }, 'json');
    }


    $(document).ready(function(){
        
        $("#show").addClass("active");
        

        
    });

</script>
