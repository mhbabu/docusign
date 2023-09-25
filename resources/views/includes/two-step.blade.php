<fieldset>
    <h3 class="text-uppercase">Model Experience</h3>
    <div class="form-container">

        <div class="row text-left p-3">
            <div class="col-md-6 form-group">
                {!! Form::label('foreign_model', 'Are you a foreign model?', ['class' => 'required-star']) !!} <br>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="foreign_model" id="foreignModelYes" value="Yes">
                    <label class="form-check-label" for="foreignModelYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="foreign_model" id="foreignModelNo" value="No">
                    <label class="form-check-label" for="foreignModelNo">No</label>
                </div>
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('medeled_before', 'Have you Modeled before?', ['class' => 'required-star']) !!} <br>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="medeled_before" id="modeledBeforeYes" value="Yes">
                    <label class="form-check-label" for="modeledBeforeYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="medeled_before" id="modeledBeforeNo" value="No">
                    <label class="form-check-label" for="modeledBeforeNo">No</label>
                </div>
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('base_city','What is your Base City?',['class'=>'required-star']) !!}
                {!! Form::text('base_city','',['class'=>$errors->has('base_city')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('model_base_city', 'Do you Model in your Base City?', ['class' => 'required-star']) !!} <br>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="model_base_city" id="modeledBaseCityYes" value="Yes">
                    <label class="form-check-label" for="modeledBaseCityYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="model_base_city" id="modeledBaseCityNo" value="No">
                    <label class="form-check-label" for="modeledBaseCityNo">No</label>
                </div>
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('availability_base_city', 'Available in Based City?', ['class' => 'required-star']) !!} <br>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="availability_base_city" id="availableBaseCityYes" value="Yes">
                    <label class="form-check-label" for="availableBaseCityYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="availability_base_city" id="availableBaseCityNo" value="No">
                    <label class="form-check-label" for="availableBaseCityNo">No</label>
                </div>
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('travel_often', 'Do you travel often?', ['class' => 'required-star']) !!} <br>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="travel_often" id="travelOftenYes" value="Yes">
                    <label class="form-check-label" for="travelOftenYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="travel_often" id="travelOftenNo" value="No">
                    <label class="form-check-label" for="travelOftenNo">No</label>
                </div>
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('model_tour', 'Do you do model tours?', ['class' => 'required-star']) !!} <br>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="model_tour" id="modelTourYes" value="Yes">
                    <label class="form-check-label" for="modelTourYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="model_tour" id="modelTourNo" value="No">
                    <label class="form-check-label" for="modelTourNo">No</label>
                </div>
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('adult_film_star', 'Are you an adult film star?', ['class' => 'required-star']) !!} <br>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="adult_film_star" id="adultFilmStarYes" value="Yes">
                    <label class="form-check-label" for="adultFilmStarYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="adult_film_star" id="adultFilmStarNo" value="No">
                    <label class="form-check-label" for="adultFilmStarNo">No</label>
                </div>
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('companion_experience', 'Do you have experience as a companion?') !!}
                {!! Form::select('companion_experience',['Yes' => 'Yes', 'No'],'',['class'=>$errors->has('companion_experience')?'form-control is-invalid':'form-control required','placeholder'=>'---']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('time_length_experience', 'What is the time length of your experience?') !!}
                {!! Form::text('time_length_experience','',['class'=>$errors->has('time_length_experience')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('resume_highlight', "List of resume highlights we should know about (Ex. Awards, Magazines, Films etc.)") !!}
                {!! Form::text('resume_highlight','',['class' => $errors->has('resume_highlight')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('profile_url', "Please mention your Free one's Profile URL if you have?") !!}
                {!! Form::text('profile_url','',['class'=>$errors->has('profile_url')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
        </div>
    </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
