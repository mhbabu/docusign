<!-- Email content -->

<!DOCTYPE html>
<html>
<head>
    <style>
        

    </style>
</head>
<body>
    <h1>Form Data</h1>

    <p><strong>Profession:</strong>
        {{ isset($formData['pornstar']) ? $formData['pornstar']. ',' : null }}
        {{ isset($formData['cam_model']) ? $formData['cam_model'] .',' : null }}
        {{ isset($formData['social_media_star']) ? $formData['social_media_star'] .',' : null }}
        {{ isset($formData['magazine_model']) ? $formData['magazine_model'] .',' : null }}
        @if(isset($formData['other']) && $formData['other'] == 'Others') 
        {{ $formData['other'] }} - {{ isset($formData['other_profession']) ?  $formData['other_profession'] : null }} 
        @else
        {{ isset($formData['other_profession']) ? $formData['other_profession'] : null }}
        @endif
    </p>
    <p><strong>Legal First Name:</strong> {{ isset($formData['legal_first_name']) ? $formData['legal_first_name'] : null }} </p>
    <p><strong>Legal Last Name:</strong> {{ isset($formData['legal_last_name']) ? $formData['legal_last_name'] : null }} </p>
    <p><strong>Stage First Name:</strong> {{ isset($formData['stage_first_name']) ? $formData['stage_first_name'] : null }} </p>
    <p><strong>Stage Last Name:</strong> {{ isset($formData['stage_last_name']) ? $formData['stage_last_name'] : null }} </p>
    <p><strong>Email:</strong> {{ isset($formData['email']) ? $formData['email'] : null }}</p>
    <p><strong>Phone:</strong>{{ isset($formData['phone']) ? $formData['phone'] : null }}</p>
    <p><strong>Nationality:</strong>{{ isset($formData['nationality']) ? $formData['nationality'] : null}}</p>
    <p><strong>Age:</strong>{{ isset($formData['age']) ? $formData['age'] : null }}</p>
    <p><strong>Date of Birth:</strong>{{ isset($formData['dob']) ? $formData['dob'] : null }}</p>
    <p><strong>Gender:</strong> {{ isset($formData['gender']) ? $formData['gender'] : null }} </p>
    <p><strong>Ethnicities:</strong> {{ isset($formData['ethnicities']) ? $formData['ethnicities'] : null }} </p>
    </br>

    <h2>Model Experience</h2>
    <p><strong>Foreign Model:</strong> {{ isset($formData['foreign_model']) ? $formData['foreign_model']: null }} </p>
    <p><strong>Have You Model Before:</strong> {{ isset($formData['medeled_before']) ? $formData['medeled_before'] : null }} </p>
    <p><strong>Base City:</strong> {{ isset($formData['base_city']) ? $formData['base_city'] : null }} </p>
    <p><strong>Do You Model in Your Base City:</strong> {{ isset($formData['model_base_city']) ? $formData['model_base_city'] : null }} </p>
    <p><strong>Availability in Base City:</strong> {{ isset($formData['availability_base_city']) ? $formData['availability_base_city'] : null }} </p>
    <p><strong>Do You Travel:</strong> {{ isset($formData['travel_often']) ? $formData['travel_often'] : null }} </p>
    <p><strong>Model Tours:</strong> {{ isset($formData['model_tour']) ? $formData['model_tour'] : null }} </p>
    <p><strong>Are you an adult film star:</strong> {{ isset($formData['adult_film_star']) ? $formData['adult_film_star'] : null }} </p>
    <p><strong>Experience as a companion:</strong> {{ isset($formData['companion_experience']) ? $formData['companion_experience'] : null }} </p>
    <p><strong>Experience time length:</strong> {{ isset($formData['time_length_experience']) ? $formData['time_length_experience'] : null }} </p>
    <p><strong>List of resume highlights:</strong> {{ isset($formData['resume_highlight']) ? $formData['resume_highlight'] : null }} </p>
    <p><strong>Free one's Profile URL:</strong> {{ isset($formData['profile_url']) ? $formData['profile_url'] : null }} </p>
    
    <h2>All AIA Models are legal adults.</h2>
    
    <p><strong>Are You Over the age of 18:</strong> {{ isset($formData['over_eighteen']) ? $formData['over_eighteen'] : null }} </p>


    <h2>Your Stats</h2>

    <p><strong>Height:</strong> {{ isset($formData['height']) ? $formData['height'] : null }} </p>
    <p><strong>Weight:</strong> {{ isset($formData['weight']) ? $formData['weight'] : null }} </p>
    <p><strong>Bust Size:</strong> {{ isset($formData['bust_size']) ? $formData['bust_size'] : null }} </p>
    <p><strong>Cup Size:</strong> {{ isset($formData['cup_size']) ? $formData['cup_size'] : null }} </p>
    <p><strong>Waist:</strong> {{ isset($formData['waist']) ? $formData['waist'] : null }} </p>
    <p><strong>Hips:</strong> {{ isset($formData['hips']) ? $formData['hips'] : null }} </p>
    <p><strong>Hair Color:</strong> {{ isset($formData['hair_color']) ? $formData['hair_color'] : null }} </p>
    <p><strong>Eye Color:</strong> {{ isset($formData['eye_color']) ? $formData['eye_color'] : null }} </p>
    <p><strong>Tattoos:</strong> {{ isset($formData['tatoos']) ? $formData['tatoos'] : null }} </p>
    
    <h2>Your Donation For:</h2>
    
    <p><strong>30 Mins:</strong> {{ isset($formData['mins_30']) ? $formData['mins_30'] : null }} </p>
    <p><strong>1 Hour:</strong> {{ isset($formData['hour_1']) ? $formData['hour_1'] : null }} </p>
    <p><strong>90 Mins:</strong> {{ isset($formData['mins_90']) ? $formData['mins_90'] : null }} </p>
    <p><strong>2 Hours:</strong> {{ isset($formData['hours_2']) ? $formData['hours_2'] : null }} </p>
    <p><strong>3 Hours:</strong> {{ isset($formData['hours_3']) ? $formData['hours_3'] : null }} </p>
    <p><strong>4 Hours:</strong> {{ isset($formData['hours_4']) ? $formData['hours_4'] : null }} </p>
    <p><strong>5  Hours:</strong> {{ isset($formData['hours_5']) ? $formData['hours_5'] : null }} </p>
    <p><strong>Over Night (8 Hours):</strong> {{ isset($formData['overnight_8_hours']) ? $formData['overnight_8_hours'] : null }} </p>
    <p><strong>Over Day (12 Hours):</strong> {{ isset($formData['overday_12_hours']) ? $formData['overday_12_hours'] : null }} </p>


    <h2>Social Networks Accts:</h2>
    
    Facebook: www.facebook.com
    Instagram: www.instagram.com

    <h2>Please answer these following questions:</h2>
    
    <p><strong>Quesion 1: What is your primary focus and secondary focus in the industry?</strong>
        {{ isset($formData['primary_focus']) ? $formData['primary_focus'] . ',' : null }}
        {{ isset( $formData['secondary_focus']) ? $formData['secondary_focus'] : null }}
    </p>

    <p><strong>Question 2: Do you entertain fetish?:</strong> 
        @if(isset($formData['entertain']) && $formData['entertain'] == 'Others')
        {{ $formData['entertain'] }} - {{ isset($formData['others_fetiches']) ? $formData['others_fetiches'] : null }}
        @else
            {{ isset($formData['entertain']) ? $formData['entertain'] : null}}
        @endif
    </p>

    <p><strong>Question 3: Do you have any racial objections?:</strong> {{ isset($formData['racial_objections']) ? $formData['racial_objections'] : null }} </p>
    

    <p><strong>Question 4: Do you only see:</strong>
        @if(isset($formData['men'])) {{ $formData['men'] }}, @endif
        @if(isset($formData['women'])) {{ $formData['women'] }}, @endif
        @if(isset($formData['couple'])) {{ $formData['couple'] }}, @endif
        @if(isset($formData['transgender'])) {{ $formData['transgender'] }}, @endif
    </p>

    <div style="margin-top : 1em">
        @if(isset($formData['uploaded_images']) && count($formData['uploaded_images']) > 0)
            @foreach ($formData['uploaded_images'] as $uplodedImg)
                <a href="{{ $uplodedImg }}" target="_blank">{{ $uplodedImg }}</a> <br>
            @endforeach
        @endif
    </div>
</body>
</html>
<!-- Display form data -->