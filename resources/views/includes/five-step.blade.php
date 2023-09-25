<fieldset>
    <h3 class="text-uppercase">Remarks regarding donation:</h2>
    <div class="form-container">

        <div class="row p-3 text-left">

            <div class="col-md-6 form-group">
                {!! Form::label('mins_30','30 Mins:',['class'=>'required-star']) !!}
                {!! Form::number('mins_30','',['class'=>$errors->has('mins_30')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('hour_1','1 Hour:',['class'=>'required-star']) !!}
                {!! Form::number('hour_1','',['class'=>$errors->has('hour_1')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('mins_90','90 Mins:',['class'=>'required-star']) !!}
                {!! Form::number('mins_90','',['class'=>$errors->has('mins_90')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('hours_2','2 Hours:',['class'=>'required-star']) !!}
                {!! Form::number('hours_2','',['class'=>$errors->has('hours_2')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('hours_3','3 Hours:',['class'=>'required-star']) !!}
                {!! Form::number('hours_3','',['class'=>$errors->has('hours_3')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('hours_4','4 Hours:',['class'=>'required-star']) !!}
                {!! Form::number('hours_4','',['class'=>$errors->has('hours_4')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-6 form-group">
                {!! Form::label('hours_5','5 Hours:',['class'=>'required-star']) !!}
                {!! Form::number('hours_5','',['class'=>$errors->has('hours_5')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('overnight_8_hours','Over Night (8 Hours):',['class'=>'required-star']) !!}
                {!! Form::number('overnight_8_hours','',['class'=>$errors->has('overnight_8_hours')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>

            <div class="col-md-12 form-group">
                {!! Form::label('overday_12_hours','Over Night (8 Hours):',['class'=>'required-star']) !!}
                {!! Form::number('overday_12_hours','',['class'=>$errors->has('overday_12_hours')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']) !!}
            </div>
        </div>
    </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>