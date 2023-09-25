<fieldset>
    <h3 class="text-uppercase">Your Stats</h2>
    <div class="form-container">
        <div class="row p-3 text-left">
            <div class="col-md-6 form-group">
                {!! Form::label('height','Height',['class'=>'required-star']) !!}
                {!! Form::text('height','',['class'=>$errors->has('height')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('weight','Weight',['class'=>'required-star']) !!}
                {!! Form::text('weight','',['class'=>$errors->has('weight')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('bust_size','Bust Size',['class'=>'required-star']) !!}
                {!! Form::text('bust_size','',['class'=>$errors->has('bust_size')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('cup_size','Cup Size',['class'=>'required-star']) !!}
                {!! Form::text('cup_size','',['class'=>$errors->has('cup_size')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('waist','Waist',['class'=>'required-star']) !!}
                {!! Form::text('waist','',['class'=>$errors->has('waist')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('hips','Hips',['class'=>'required-star']) !!}
                {!! Form::text('hips','',['class'=>$errors->has('hips')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('hair_color','Hair Color',['class'=>'required-star']) !!}
                {!! Form::select('hair_color',['Black' => 'Black', 'Brown' => 'Brown', 'Blonde' => 'Blonde', 'Red' => 'Red'],'',['class'=>$errors->has('gender')?'form-control is-invalid':'form-control required','placeholder'=>'---']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('eye_color','Eye Color',['class'=>'required-star']) !!}
                {!! Form::text('eye_color','',['class'=>$errors->has('eye_color')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('tatoos','Tatoos',['class'=>'required-star']) !!}
                {!! Form::text('tatoos','',['class'=>$errors->has('tatoos')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
        </div>
    </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />

</fieldset>