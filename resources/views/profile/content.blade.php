<br>

<br>

<br>

<div class="row">
<div class="col-md-2">

</div>
<div class="col-md-8">
        <div class="client card">
          <div class="card-close">
            <div class="dropdown">
              <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
              <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><button id="edit" href="#" class="dropdown-item edit" value="{{$id}}"> <i class="fa fa-pencil"></i> Edit</button><button id="delete" href="#" class="dropdown-item edit" value="{{$id}}"> <i class="fa fa-user-times"></i> Delete</button></div>
            </div>
          </div>
          <div class="card-body text-center">
            <div class="client-avatar"><img id="profile_image" src="/{{ $profile_image }}" alt="..." class="img-fluid rounded-circle">
              <div class="status bg-green"></div>
            </div>
            <div class="client-title">
              <h3>{{ $name }}</h3><span>{{ $email }}</span>
            </div>
            <div class="client-info">
            <div class="row">
                    <div class="col-4"><strong>Company:</strong><p> {{ $company }}</p></div>
                    <div class="col-4"><strong>Phone:</strong><p> {{ $phone }}</p></div>
                    <div class="col-4"><strong>Phone Type:</strong><p> {{ $phone_type }}</p></div>
            </div>
            <div class="row">
                    <div class="col-6"><strong>Street Name:</strong><p> {{ $street_name }}</p></div>
                    <div class="col-6"><strong>Street Number:</strong><p> {{ $street_number }}</p></div>
             </div>
             <div class="row">
                    <div class="col-4"><strong>City:</strong><p> {{ $city }}</p></div>
                    <div class="col-4"><strong>State:</strong><p> {{ $state }}</p></div>
                    <div class="col-4"><strong>Country:</strong><p> {{ $country }}</p></div>
            </div>
            </div>
        </div>
    </div>
</div>

</div>

<br>

<br>

<br>


<script>

   
  function deleteContact(){
        
        $("#delete").click(function(event){
        
          if(confirm("Are you sure you want to delete this contact?")){
            
            
            $.get('/backend/delete'+'/'+event.currentTarget.attributes.value.nodeValue,function(response){

              if(response == "true" )
              {

                window.location.replace("/backend/show");

              }

              });
      
              

        }
        else{
            return false;
        }

            
        });
    }
    
    $(document).ready(function(){
    
        deleteContact();
            
    
                });
    
    </script>