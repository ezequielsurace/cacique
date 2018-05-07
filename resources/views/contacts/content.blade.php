
<form action="/backend/new" method="POST" role="form">

{{ csrf_field() }}


  
<div class="form-group">

<br>

<br>

<br>


<div class="row">

    <div class="col-md-4 offset-md-1">

        <label for="">Name:</label>

        <span class="asteriskField">
            *
        </span>

    </div>

    <div class="col-md-4 ">
        
        <input type="text" class="form-control" name="name"  > 
    
    </div>
</div>

<br>

    <div class="row">

        <div class="col-md-4 offset-md-1">
    
            <label for="">Profile Image:</label>
    
            <span class="asteriskField">
                *
            </span>

        </div>

        <div class="col-md-4 ">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                
                Upload
            
            </button>
                            
            @include('contacts.modal')
        
        </div>
    
    </div>

<br>

<div class="row">

        <div class="col-md-4 offset-md-1">
    
            <label for="">Email:</label>

            <span class="asteriskField">
                *
            </span>
            
    
        </div>
    
        <div class="col-md-4 ">
            
            <input type="text" class="form-control" name="email"  > 
        
        </div>
    </div>

<br>    

<div class="row">

        <div class="col-md-4 offset-md-1">
    
            <label for="">Company:</label>

            <span class="asteriskField">
                *
            </span>
            
        </div>

        <div class="col-md-4 ">

            <select class="select2" name="company_id">

                <option selected="selected"></option>

                @foreach($companies as $company)
                    
                    <option value="{{ $company['id'] }}"> {{ $company['name'] }} </option>

                @endforeach

            </select>

        </div>

</div>

<br>

<div class="row">

    <div class="col-md-4 offset-md-1">

        <label for="">Birthdate:</label>

        <span class="asteriskField">
            *
        </span>
        
    </div>

    <div class="col-md-4 ">
            
         
             <input class="form-control" id="birthdate" name="birthdate" placeholder="MM/DD/YYYY" type="text"/>
        

    </div>

</div>

<br>

<div class="row">

    <div class="col-md-4 offset-md-1">

        <label for="">Phone:</label>

        <span class="asteriskField">
            *
        </span>

    </div>

    <div class="col-md-4">

        <input type="text" class="form-control" name="phone" > 
    
    </div>

</div>

<br>

<div class="row">

        <div class="col-md-4 offset-md-1">
    
            <label for="">Phone Type:</label>

            <span class="asteriskField">
                *
            </span>
            
        </div>

        <div class="col-md-4 ">

            <select class="select2" name="phone_type_id" >

                <option selected="selected"></option>

                @foreach($phone_types as $phone_type)
                    
                    <option value="{{ $phone_type['id'] }}"> {{ $phone_type['name'] }} </option>

                @endforeach

            </select>

        </div>

</div>

<br>

<div class="row">

        <div class="col-md-4 offset-md-1">
    
            <label for="">Street Name:</label>
    
            <span class="asteriskField">
                *
            </span>
    
        </div>
    
        <div class="col-md-4">
    
            <input type="text" class="form-control" name="street_name" id="" placeholder="" > 
        
        </div>
    
    </div>
    
<br>

<div class="row">

        <div class="col-md-4 offset-md-1">
    
            <label for="">Street Number:</label>
    
            <span class="asteriskField">
                *
            </span>
    
        </div>
    
        <div class="col-md-4">
    
            <input type="text" class="form-control" name="street_number" id="" placeholder="" > 
        
        </div>
    
    </div>
    
<br>

<div class="row">

        <div class="col-md-4 offset-md-1">
    
            <label for="">Country:</label>

            <span class="asteriskField">
                *
            </span>
            
        </div>

        <div class="col-md-4 ">

            <select class="select2" name="country_id" id="country">
                
                <option selected="selected"></option>

                @foreach($countries as $country)
                    
                    <option value="{{ $country['id'] }}"> {{ $country['name'] }} </option>

                @endforeach

            </select>

        </div>

</div>

<br>

<div class="row">

        <div class="col-md-4 offset-md-1">
    
            <label for="">State:</label>

            <span class="asteriskField">
                *
            </span>
            
        </div>

        <div class="col-md-4 ">

            <select class="select2" name="state_id" id="state" >


            </select>

        </div>

</div>

<br>

<div class="row">

    <div class="col-md-4 offset-md-1">

        <label for="">City:</label>

        <span class="asteriskField">
            *
        </span>
        
    </div>

    <div class="col-md-4 ">

        <select class="select2" name="city_id" id="city" >


        </select>

    </div>

</div>

<br>
            <div class="form-group">
             <div class="col-sm-10 col-sm-offset-2">
              <button class="btn btn-primary " name="submit" type="submit">
               Submit
              </button>
             </div>
            </div>

</form>



<script>

function select2(){

    
}


    
function getstate(){
    
    $("#country").change(function(event){
    
        $.get('/backend/state'+'/'+event.target.value,function(response, country){

        $("#state").empty();
        $("#city").empty();

        $("#state").append("<option selected='selected'></option>");
        
        response.forEach(function(state){

            $("#state").append("<option value="+state.id+">"+state.name+"</option>");


        });

        });
    });
}


function getcities(){
    
    $("#state").change(function(event){
    
        $.get('/backend/city'+'/'+event.target.value,function(response, city){

        $("#city").empty();

        $("#city").append("<option selected='selected'></option>");
        
        response.forEach(function(city){

            $("#city").append("<option value="+city.id+">"+city.name+"</option>");

        });

        });
    });
}

function date(){

var date_input=$('input[name="birthdate"]'); //our date input has the name "date"
var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
date_input.datepicker({
    format: 'mm/dd/yyyy',
    container: container,
    todayHighlight: true,
    autoclose: true,

            });

}

function uploadimage(){

    $("#profile_image").fileinput({
        showPreview: true,
        showUpload: true,
        elErrorContainer: '#kartik-file-errors',
        allowedFileExtensions: ["jpg", "png", "gif"],
        uploadUrl: '/image/profile_image'
    });
}

$(document).ready(function(){


           $('.select2').select2({ width: '100%',
            placeholder: "Please select an option"
            });
            $("#new").addClass("active");
            getstate();
            getcities();
            date();
            //uploadimage();
        

            });

</script>