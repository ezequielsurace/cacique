<style>
        .selection{
            width:100%;
        }
        .select2-container--default .select2-selection--single{
            height: 2.5rem !important;
            border-radius: unset !important;
            border: 1px solid #dee3e7 !important;
        }
        .select2-selection__rendered{
            height: 100% !important;
            display: flex !important;
            align-items: center !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__placeholder{
            color: #1c2e51 !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow{
           top: 7px !important; 
        }
        </style>
        


<form action="/backend/new" method="POST" role="form" enctype="multipart/form-data" id="myForm">

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
        
        <input type="text" class="form-control" name="name"  id="name" onkeypress="return onlyLetter(event)" onpaste="return false" maxlength="50" required> 
    
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

            <label for="profile_image">
                <input type="file" name="profile_image" required>
            </label>
        
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
            
            <input type="email" class="form-control" name="email" required> 
        
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
            
         
             <input class="form-control" id="birthdate" name="birthdate" placeholder="YYY/MM/DD" type="text" required/>
        

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

        <input type="text" class="form-control" name="phone" onkeypress="return onlyNumber(event)" onpaste="return false" required> 
    
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

            <select class="select2" name="phone_type_id" required >

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
    
            <input type="text" class="form-control" name="street_name" id="street_name"  onkeypress="return onlyLetter(event)" onpaste="return false" maxlength="50" required> 
        
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
    
            <input type="text" class="form-control" name="street_number" id="street_number" onkeypress="return onlyNumber(event)" onpaste="return false" required> 
        
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

            <select class="select2" name="country_id" id="country" required>
                
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

            <select class="select2" name="state_id" id="state" required>


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

        <select class="select2" name="city_id" id="city" required>


        </select>

    </div>

</div>

<br>

<br>

<br>
            <div class="form-group">
             <div class="col-md-10 col-sm-offset-2">
              <button class="btn btn-primary " name="submit" type="submit" id="submit">
               Submit
              </button>
             </div>
            </div>

</form>


<br>

<br>


<script>



function onlyLetter(e)
{
    key = e.key || e.which;

    keyboard = String.fromCharCode(key).toLowerCase;

    letter = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ";

    if(letter.indexOf(key)==-1)
    {
            return false;
    }
}

function onlyNumber(e)
{
    key = e.key || e.which;

    keyboard = String.fromCharCode(key);

    number = "0123456789";

    specials = "8-37-38-46";

    keyboard_special = false;

    for(var i in specials)
    {
        if(key==specials[i])
        {
            keyboard_special = true;
        }
    }

    if(number.indexOf(keyboard)==-1 && !keyboard_special)
    {
            return false;
    }
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

function date()
{

    var date_input=$('input[name="birthdate"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
            endDate: new Date()
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

            
        

            });

</script>